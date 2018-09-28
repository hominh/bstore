<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Supplier;
use DB;
use Auth;
use App\Http\Controllers\Controller;


class SupplierController extends Controller
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
        $data = DB::table('suppliers')
          ->join('users','suppliers.user_id','=','users.id')
          ->select('suppliers.id as id', 'suppliers.companyname as name','users.name as uname','suppliers.created_at')
          ->get();
          return view('admin/supplier/list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.add');
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
            'companyname' => 'required|unique:suppliers|min:3',
            'contactname' => 'required|unique:suppliers|min:3',
        ]);
        $supplier = new Supplier;
        $supplier->companyname = $request->companyname;
        $supplier->contactname = $request->contactname;
        $supplier->contactitle = $request->contactitle;
        $supplier->address = $request->address;
        $supplier->city = $request->city;
        $supplier->region = $request->region;
        $supplier->postalcode = $request->postalcode;
        $supplier->country = $request->country;
        $supplier->phone = $request->phone;
        $supplier->fax = $request->fax;
        $supplier->website = $request->website;
        $supplier->user_id = Auth::user()->id;
        $supplier->save();
        return redirect()->route('admin.supplier.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $data = Supplier::findOrFail($id)->toArray();
        return view('admin.supplier.edit',compact('data'));
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
          'companyname' => 'required|min:3',
          'contactname' => 'required|min:3',
      ]);
      $supplier = Supplier::find($id);
      $supplier->companyname = $request->companyname;
      $supplier->contactname = $request->contactname;
      $supplier->contactitle = $request->contactitle;
      $supplier->address = $request->address;
      $supplier->city = $request->city;
      $supplier->region = $request->region;
      $supplier->postalcode = $request->postalcode;
      $supplier->country = $request->country;
      $supplier->phone = $request->phone;
      $supplier->fax = $request->fax;
      $supplier->website = $request->website;
      $supplier->user_id = Auth::user()->id;
      $supplier->save();
      return redirect()->route('admin.supplier.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect()->route('admin.supplier.list')->with(['flash_level'=>'success','flash_message'=>'Delete success']);
    }
}
