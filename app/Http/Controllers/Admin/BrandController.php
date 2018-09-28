<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use Auth;
use DB;
use File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('brands')
          ->join('users','brands.user_id','=','users.id')
          ->select('brands.id as id', 'brands.name as name','users.name as uname','brands.created_at')
          ->get();
          return view('admin/brand/list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.add');
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
            'name' => 'required|unique:brands|min:3',
        ]);
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->alias = changeTitle($request->name);
        $brand->user_id = Auth::user()->id;
        if($request->image != "") {
          $brand->image = $request->image;
        }
        $brand->save();
        return redirect()->route('admin.brand.list');
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
        $data = Brand::findOrFail($id)->toArray();
        return view('admin.brand.edit',compact('data'));
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
        ]);
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->alias = changeTitle($request->name);
        $brand->user_id = Auth::user()->id;
        if($request->image != "") {
            $brand->image = $request->image;
        }
        $brand->save();
        return redirect()->route('admin.brand.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('admin.brand.list')->with(['flash_level'=>'success','flash_message'=>'Delete success']);
    }

    public function getDelImg($id, Request $request)
    {
        if($request->ajax()) {
            $idbrand = (int)$request->get('idbrand');
            $branddetail = Brand::find($idbrand);
            if(!empty($branddetail)) {
                $img = public_path("");
                $img.= $branddetail->image;
                if(File::exists($img)) {
                    File::delete($img);
                }
                //Update image = Null
                $branddetail->image = "";
                $branddetail->save();

            }
            return "ok";
        }
    }

}
