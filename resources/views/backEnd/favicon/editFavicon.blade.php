@extends('backEnd.master')

@section('title')
	Admin Panel | Update Favicon
@endsection

@section('mainContent')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Post</h3> -->
      </div>
    </div>

    <div class="clearfix"></div>
    
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Update Favicon <small>Please fill up this form carefully</small> </h2>
            <ul class="nav navbar-right panel_toolbox">
              <a href="{{ url('/favicon/manage')}}" class="btn btn-success btn-sm" style="color: white;"> <i class="fa fa-list"></i> List </a>
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <h4 class="text-center text-success"> {{ Session::get('message') }} </h4>

            {!! Form::open(['url' => '/favicon/update', 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}  

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Favicon <span class="required text-danger">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="file" id="favicon" name="favicon" >
                  <input type="hidden" name="id" value="{{ $favicon->id}}" class="form-control">
                  <img id="showImage" src="{{ url('public/Upload/logo/no-image.png')}}" alt="" height="80" width="80">
                  <span class="text-danger">{{ $errors->has('favicon') ? $errors->first('favicon'):''}}</span>
                </div>
              </div>

              
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
				          <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Update Favicon</button>
                </div>
              </div>
            {!! Form::close() !!}  

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection