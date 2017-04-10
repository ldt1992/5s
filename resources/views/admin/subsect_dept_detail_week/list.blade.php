
@extends('admin.master')



@section('css')
<!-- Bootstrap 3.3.6 -->
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
      SUBSECTION
      <small class="label label-success">Version 1.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ asset('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">SUBSECTION</li>
    </ol>
  </section>
  @endsection


  @section('content')
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">SUBSECTION &nbsp;<a href="{{ asset('admin/subsection/add') }}" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Data</a></h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->


          {{-- ------ Message successfully ------ --}}            
          @if (session('message'))
          <div class="box-body">
            <div class="alert alert-success">
              <i class="fa fa-check"></i>&nbsp; {{session('message')}}
            </div>
          </div>
          @endif
          {{-- ------ End Message successfully ------ --}}


          {{-- ------ Delete Modal Confirm ------ --}}
          @include('admin.pages.modal')


          <div class="box-body table-responsive no-padding">
            <table class="table table-hover form-delete" data-toggle="dataTable" data-form="deleteForm">
              <tr>
                <th>ID</th>
                <th>Subsection</th>
                <th>Section</th>
              </tr>
              {{-- --------- SECTION LIST ---------- --}}
              @foreach($subsections as $subsection)
              <tr>
                <td>{{ $subsection -> id }}</td>
                <td>{{ $subsection -> Subsect_Name }}</td>
                <td>{{ $subsection -> Sect_Name }}</td>
                <td class="pull-right">
                  <a href="{{ asset('admin/subsection/edit').'/'.$subsection-> id}}" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                  <button data-toggle="modal" data-target="#confirm-delete" data-href="{{ asset('admin/subsection/delete').'/'.$subsection-> id }}" class="btn btn-danger" id="delete-btn"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                @endforeach
                {{-- --------- END SECTION LIST ---------- --}}
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
    @endsection



    @section('script')
    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('public/admin_asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('public/admin_asset/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('public/admin_asset/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('public/admin_asset/plugins/fastclick/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/admin_asset/dist/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('public/admin_asset/dist/js/demo.js') }}"></script>
  </script>
  @endsection