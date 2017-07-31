<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Auth;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
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
        $data = DB::table('categories')
                    ->select(DB::raw("categories.id,categories.name,(CASE WHEN (status = 1) THEN 'Actived' ELSE 'Disable' END) as status,categories.created_at,users.name as uname"))
                    ->leftJoin('users','categories.user_id','=','users.id')
                    ->get();

        return view('admin/category/list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentCategory = Category::select('id','name','parent_id')->get()->toArray();
        return view('admin.category.add',compact('parentCategory'));
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
            'name' => 'required|unique:categories|min:3',
        ]);


        $hassub = 1;
        $category = new Category;
        $category->name = $request->name;
        $category->alias = changeTitle($request->name);
        $category->parent_id = $request->parent;
        $category->title = $request->title;
        $category->keyword = $request->keyword;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->user_id = Auth::user()->id;
        if($request->parent != 0) {
            $parentcategory = Category::find($request->parent);
            $parentcategory->hassub = $hassub;
            $parentcategory->save();
        }

        $category->hassub = 0;
        $category->save();
        return redirect()->route('admin.category.list');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
