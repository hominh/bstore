<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Slide;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use File;


class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = DB::table('slides')
                  ->select(DB::raw("slides.id,slides.title,(CASE WHEN (status = 1) THEN 'Actived' ELSE 'Disable' END) as status,slides.created_at,users.name as uname"))
                  ->leftJoin('users','slides.user_id','=','users.id')
                  ->get();
      return view('admin/slide/list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/slide/add');
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
           'image' => 'required|unique:slides|min:5',
      ]);
      $slide = new Slide;
      $slide->textlink = $request->textlink;
      $slide->link = $request->link;
      $slide->status = $request->status;
      $slide->title = $request->title;
      $slide->description = $request->description;
      $slide->user_id = Auth::user()->id;
      if($request->image != "") {
        $slide->image = $request->image;
      }
      $slide->save();
      return redirect()->route('admin.slide.list');
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
        $data = Slide::findOrFail($id)->toArray();

        $currentNameStatus = "";
        $otherNameStatus = "";
        $currentStatus = DB::table('slides')
                        ->select('status')
                        ->where('id','=',$id)
                        ->get();
        $curentNumberOfStatus = $currentStatus[0]->status;
        if($curentNumberOfStatus == 1) {
            $currentNameStatus = "Actived";
            $otherNameStatus  = "Disable";
        }
        else {
            $currentNameStatus = "Disable";
            $otherNameStatus  = "Actived";
        }
        $otherStatus = 0;
        if($currentStatus == '0') {
          $otherStatus = 1;
        }
        else if($currentStatus == '1') {
          $otherStatus = 0;
        }

        return view('admin.slide.edit',compact('data','currentStatus','otherStatus','currentNameStatus','otherNameStatus'));
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
          'image' => 'required|min:5',
      ]);
      $slide = Slide::find($id);
      $slide->textlink = $request->textlink;
      $slide->link = $request->link;
      $slide->status = $request->status;
      $slide->title = $request->title;
      $slide->description = $request->description;
      $slide->user_id = Auth::user()->id;
      if($request->image != "") {
          $slide->image = $request->image;
      }
      $slide->save();
      return redirect()->route('admin.slide.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $slide = Slide::find($id);
      $slide->delete();
      return redirect()->route('admin.slide.list')->with(['flash_level'=>'success','flash_message'=>'Delete success']);
    }

    public function getDelImg($id,Request $request) {
        if($request->ajax()) {
            $idslide = (int)$request->get('idslide');
            $slidedetail = Slide::find($idslide);
            if(!empty($slidedetail)) {
                $img = public_path("");
                $img.= $slidedetail->image;
                if(File::exists($img)) {
                    File::delete($img);
                }
                //Update image = Null
                $slidedetail->image = "";
                $slidedetail->save();

            }
            return "ok";
        }
    }
}
