@extends('admin.master')


@section('css')
<link rel="stylesheet" href="{{ asset('public/admin_asset/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('public/admin_asset/dist/css/skins/_all-skins.min.css') }}">
@endsection


@section('breadcrumbs')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Section
        <small class="label label-success">Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ asset('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Section</li>
      </ol>
    </section>
@endsection


@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- right column -->
    <div class="col-md-12">



      {{-- -------- Edit Section ----------- --}}
      <form action="{{ asset('admin/section/edit').'/'.$section->id }}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit <strong><span class="text-aqua">{{$section-> Sect_Name}}</span></strong></h3>
          </div>
          <!-- /.box-header -->

            {{-- ------ Validation ------ --}}
            @if (count($errors) > 0)
            <div class="box-body">
              <div class="alert alert-danger">
                <h4><i class="icon fa fa-ban"></i>
                    Errors !
                </h4>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              </div>
            @endif
            {{-- ------ End Validation ------ --}}

            

            {{-- ------ Message successfully ------ --}}            
            @if (session('message'))
            <div class="box-body">
              <div class="alert alert-success">
                <i class="fa fa-check"></i>&nbsp; {{session('message')}}
              </div>
            </div>
            @endif
            {{-- ------ End Message successfully ------ --}}

          <!-- form start -->
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="Fact_Name" class="col-sm-2 control-label">Section Name</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Section Name" name="txtName" value="{{ $section->Sect_Name }}">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{ asset('admin/section/list') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back</a>
              <button type="submit" class="btn btn-success pull-right">Update</button>
            </div>

            <!-- /.box-footer -->
          </form>
        </div>
      {{-- -------- End Edit Section ----------- --}}



      </form>
      <!-- /.box -->
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection


@section('script')
<!-- jQuery 2.2.3 -->
<script src="{{ asset('public/admin_asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('public/admin_asset/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('public/admin_asset/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/admin_asset/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/admin_asset/dist/js/demo.js') }}"></script>
@endsection