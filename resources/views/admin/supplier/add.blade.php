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
        <form role="form" action="{!! route('admin.supplier.store') !!}"  method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="col-md-8">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="icon-settings font-red-sunglo"></i>
                            <span class="caption-subject bold uppercase">Add supplier</span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label required">Company</label>
                                <input type="text" class="form-control" placeholder="Company" name="companyname">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Contact</label>
                                <input type="text" class="form-control" placeholder="Contact" name="contactname">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Contact title</label>
                                <input type="text" class="form-control" placeholder="Contact title" name="contactitle">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">City</label>
                                <input type="text" class="form-control" placeholder="City" name="city">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Region</label>
                                <input type="text" class="form-control" placeholder="Region" name="region">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Postalcode</label>
                                <input type="text" class="form-control" placeholder="Postalcode" name="postalcode">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Country</label>
                                <input type="text" class="form-control" placeholder="Country" name="country">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Fax</label>
                                <input type="text" class="form-control" placeholder="Fax" name="fax">
                            </div>
                            <div class="form-group">
                                <label class="control-label required">Website</label>
                                <input type="text" class="form-control" placeholder="Website" name="website">
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
        </form>
    </div>


@endsection()
