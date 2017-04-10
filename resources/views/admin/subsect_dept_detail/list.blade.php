
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
      SUBSECTION - DEPARTMENT - DETAILS
      <small class="label label-success">Version 1.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ asset('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">SUBSECTION - DEPARTMENT - DETAILS</li>
    </ol>
  </section>
  @endsection


  @section('content')
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">ACTIONS</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <p>&nbsp;<a href="{{ asset('admin/subsect_dept_detail/add') }}" class="btn btn-app btn-warning bg-orange"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Data</a></p>
                <h3 class="box-title">IMPORT - EXPORT DATA</h3>
                <p><a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-app bg-olive"><i class="fa fa-download"></i>&nbsp;&nbsp;Download Excel xls</button></a>
                  <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-app bg-olive"><i class="fa fa-download"></i>&nbsp;&nbsp;Download Excel xlsx</button></a>
                  <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-app bg-olive"><i class="fa fa-download"></i>&nbsp;&nbsp;Download CSV</button></a></p>

                  <form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="file" name="import_file" />
                    <br>
                    <button class="btn btn-primary">Import File</button>
                  </form>
                  <div class="form-group">
                    <label>Minimal</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Disabled</label>
                    <select class="form-control select2" disabled="disabled" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
              the plugin.
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">CONTENT</h3>
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

            <div class="box-body">

            </div>

            <div class="box-body table-responsive no-padding">
              <table class="table table-hover form-delete" data-toggle="dataTable" data-form="deleteForm">
                <tr>
                  <th>No</th>
                  <th>SUBSECTION</th>
                  <th>DEPARTMENT</th>
                  <th>DETAILS</th>
                </tr>
                <?php
                $No = 0;
                ?>
                {{-- --------- SECTION LIST ---------- --}}
                @foreach($subsect_dept_detail as $data)
                <?php
                $No++;
                ?>
                <tr>
                  <td><?php echo $No; ?></td>
                  <td>{{ $data -> Subsect_Name }}</td>
                  <td>{{ $data -> Dept_Name }}</td>
                  <td>{{ $data -> Detail_Content }}</th>
                    <td class="pull-right">
                      <a href="{{ asset('admin/subsect_dept_detail/edit').'/'.$data-> id}}" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                      <button data-toggle="modal" data-target="#confirm-delete" data-href="{{ asset('admin/subsect_dept_detail/delete').'/'.$data-> id }}" class="btn btn-danger" id="delete-btn"><i class="fa fa-trash"></i> Delete</a>
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