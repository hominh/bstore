<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Service_image;
use App\Image;
use DB;
use Auth;
use File;
class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('services')
             ->join('users','services.user_id','=','users.id')
             ->select('services.id as id', 'services.name as sname','users.name as uname','services.created_at')
             ->get();
             return view('admin/service/list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'name' => 'required|unique:services|min:3',
          'title' => 'required|min:3',
      ]);

      $service = new Service;
      $service->name = $request->name;
      $service->title = $request->title;
      $service->alias = changeTitle($request->name);
      $service->keyword = $request->keyword;
      $service->description = $request->description;
      $service->content = $request->content;
      $service->icon = $request->icon;
      $service->user_id = Auth::user()->id;

      $service->save();
      $service_id = $service->id;
      $image = $request->image;
      if($image != "" || $image != NULL) {
        $imageobj = new Image;
        $imageobj->image = $image;
        $imageobj->user_id = Auth::user()->id;
        $imageobj->save();
        $imageid = $imageobj->id;

        $service_image = new Service_image;
        $service_image->service_id = $service_id;
        $service_image->image_id = $imageid;
        $service_image->save();
      }
      return redirect()->route('admin.service.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Service::findOrFail($id)->toArray();
        $serviceid = $data['id'];

        $image = DB::table('images')
                    ->leftJoin('service_image','images.id','=','service_image.image_id')
                    ->select('images.image','images.id as imageid')
                    ->where('service_image.service_id', '=',$id)
                    ->get();

        $srcimage = "";
        $idimage = 0;
        if(count($image) > 0) {
          $srcimage = $image[0]->image;
          $idimage = $image[0]->imageid;
        }
        else if(count($image) == 0) {
          $srcimage = "";
          $idimage = 0;
        }

        return view('admin.service.edit',compact('data','srcimage','idimage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'title' => 'required|min:3',
        ]);
        $service = Service::find($id);
        $service->name = $request->name;
        $service->title = $request->title;
        $service->alias = changeTitle($request->name);
        $service->keyword = $request->keyword;
        $service->description = $request->description;
        $service->content = $request->content;
        $service->icon = $request->icon;
        $service->user_id = Auth::user()->id;
        $service->save();
        $service_id = $id;
        $image = $request->image;
        if($image != "" || $image != NULL) {
          $imageobj = new Image;
          $imageobj->image = $image;
          $imageobj->user_id = Auth::user()->id;
          $imageobj->save();
          $imageid = $imageobj->id;

          $service_image = new Service_image;
          $service_image->service_id = $service_id;
          $service_image->image_id = $imageid;
          $service_image->save();
        }
        return redirect()->route('admin.service.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service_image = Service_image::where('image_id',$id); //trick
        $service->delete();
        $service_image->delete();
        return redirect()->route('admin.service.list');
    }

    public function getDelImg($id,Request $request) {
        if($request->ajax()) {
            $idimage = (int)$request->get('idimage');
            $imagedetail = Image::find($idimage);
            $service_image = Service_image::where('image_id',$idimage); //trick

            if(!empty($imagedetail)) {
                $img = public_path("");
                $img.= $imagedetail->image;
                if(File::exists($img)) {
                    File::delete($img);
                }
                //Update image = Null
                $imagedetail->delete();
                $service_image->delete();
            }
            return "ok";
        }
    }
}
