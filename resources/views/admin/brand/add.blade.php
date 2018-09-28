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
        <form role="form" action="{!! route('admin.brand.store') !!}"  method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <div class="col-md-8">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo">
                            <i class="icon-settings font-red-sunglo"></i>
                            <span class="caption-subject bold uppercase">Add brand</span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label required">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>

                            <div class="form-group">
                              <label class="">Image</label>
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                      <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                  </span>
                                  <input id="thumbnail" class="form-control" type="text" name="image">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;">
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
      var route_prefix = "{{ url(config('lfm.prefix')) }}";
    </script>
    <script>
      {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
    </script>
    <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>
    <link href="{{ URL::asset('/admin/assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/admin/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/admin/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/admin/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}" rel="stylesheet" type="text/css" />
@endsection()
