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
  		TEST AJAX
  		<small class="label label-success">Version 1.0</small>
  	</h1>
  	<ol class="breadcrumb">
  		<li><a href="{{ asset('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
  		<li class="active">DEPARTMENT</li>
  	</ol>
  </section>
  @endsection


  @section('content')
  <section class="content">
  	<div class="row">
  		<div class="col-md-6">
  			<!-- Horizontal Form -->
  			<div class="box box-info">
  				<div class="box-header with-border">
  					<h3 class="box-title">Ajax Section - Subsection</h3>
  				</div>
  				<!-- /.box-header -->
  				<!-- form start -->
  				<form class="form-horizontal">
  					<div class="box-body">
  						<div class="form-group">
  							<label class="col-sm-2 control-label">Section</label>
  							<div class="col-sm-10">
  								<select class="form-control" name="selSection" id="selSection">
  									@foreach ($section as $sect)
  									<option value="{{ $sect-> id }}">{{ $sect-> Sect_Name }}</option>
  									@endforeach
  								</select>
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="col-sm-2 control-label">Subsection</label>
  							<div class="col-sm-10">
  								<select class="form-control" name="selSubsection" id="selSubsection">
  									{{-- chỗ này --}}
  								</select>
  							</div>
  						</div>
  					</div>
  					<!-- /.box-body -->
  					<div class="box-footer">
  						<button type="submit" class="btn btn-default">Cancel</button>
  						<button type="submit" class="btn btn-info pull-right">Sign in</button>
  					</div>
  					<!-- /.box-footer -->
  				</form>
  			</div>
      </div>
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Ajax Multi Select</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-8">
                <h3>Details</h3>
                <table class="table table-hover">
                  <tbody><tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Detail Content</th>
                  </tr>
                  @foreach ($details as $dt)
                  <tr>
                    <td>
                      <input type="checkbox" id="{{ $dt-> id }}" class="chkDetail" value="{{ $dt-> id }}">
                    </td>
                    <td>{{ $dt-> id }}</td>
                    <td>{{ $dt-> Detail_Content }}</td>
                  @endforeach
                </tbody></table>
              </div>
              <div class="col-md-4">
                <h3>In ID ra màn hình</h3>
                <div id="inID"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection('content')


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
  {{-- ----------------- AJAX  AJAX  AJAX  AJAX  ----------------------- --}}
  <script type="text/javascript">
   $(document).ready(function(){
    // Lấy đường dẫn gốc của hệ thống
    var root = '{{url("/")}}';
    $("#selSection").change(function(){
     var idSection = $(this).val();
     // var root = '{{url("/")}}';
  					// alert(idSection);
  					$.get(root+'/admin/test/ajax/'+idSection, function(data){
  						// alert(data);
  						$("#selSubsection").html(data);
  					});
  				});

    $('.chkDetail').click(function() {
      var idDetail=$(this).val();
        if ($(this).is(':checked')) {
            // alert(idDetail);
            $.get(root+'/admin/test/ajax/'+idDetail, function(data){
              $("#inID").append(idDetail+'<br>');
            });
        }
        else if (!$(this).is(':checked')) {
            // alert(idDetail);
            $.get(root+'/admin/test/ajax/'+idDetail, function(data){
              // $("#inID").append(idDetail+'<br>');
            });
        };
    });
  });
</script>
{{-- ----------------- END AJAX  AJAX  AJAX  AJAX  ----------------------- --}}
</script>
@endsection