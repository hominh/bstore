@extends('admin.master')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row">
        {{ Form::open(array('route' => ['admin.supplier.update', $data['id']], 'class' => 'form-horizontal','files'=>true,'name'=>'frmEditSupplier')) }}
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="col-md-8">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="icon-settings font-red-sunglo"></i>
                            <span class="caption-subject bold uppercase">Edit supplier</span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label required">Company</label>
                                <input type="text" class="form-control" placeholder="Company" name="companyname" value="{!! old('companyname',isset($data) ? $data['companyname']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Contact</label>
                                <input type="text" class="form-control" placeholder="Contact" name="contactname" value="{!! old('contactname',isset($data) ? $data['contactname']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Contact title</label>
                                <input type="text" class="form-control" placeholder="Contact title" name="contactitle" value="{!! old('contactitle',isset($data) ? $data['contactitle']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address" value="{!! old('address',isset($data) ? $data['address']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">City</label>
                                <input type="text" class="form-control" placeholder="City" name="city" value="{!! old('city',isset($data) ? $data['city']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Region</label>
                                <input type="text" class="form-control" placeholder="Region" name="region" value="{!! old('region',isset($data) ? $data['region']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Postalcode</label>
                                <input type="text" class="form-control" placeholder="Postalcode" name="postalcode" value="{!! old('postalcode',isset($data) ? $data['postalcode']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Country</label>
                                <input type="text" class="form-control" placeholder="Country" name="country" value="{!! old('country',isset($data) ? $data['country']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone" value="{!! old('phone',isset($data) ? $data['phone']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Fax</label>
                                <input type="text" class="form-control" placeholder="Fax" name="fax" value="{!! old('fax',isset($data) ? $data['fax']:null ) !!}">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Website</label>
                                <input type="text" class="form-control" placeholder="Website" name="website" value="{!! old('website',isset($data) ? $data['website']:null ) !!}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-black-sunglo">
                            <span class="caption-subject bold uppercase">Publish</span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Publish</button>
                            <button type="submit" class="btn blue">Publish & edit</button>
                        </div>
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>


@endsection()
