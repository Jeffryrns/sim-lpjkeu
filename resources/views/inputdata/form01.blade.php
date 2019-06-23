@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
   
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form 01 - Surat Pengajuan Ke Bendahara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('inputdata') }}">Input Data</a></li>
              <li class="breadcrumb-item active">Form 01</li>
            </ol>
          </div>
        </div>
     
   
        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Form 01</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                      Dropdown <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                      <div class="divider"></div>
                      <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                    </div>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <!-- Main content -->
   <!-- general form elements disabled -->
   <div class="card card-warning">
      <div class="card-header">
                <h3 class="card-title">Surat Pengajuan Ke Bendahara</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Kegiatan">
                  </div>
         
                  <!-- textarea 
                  <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>

                  <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Mengetahui 1</label>
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                  </div>
                  <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                      warning</label>
                    <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                  </div>
                  <div class="form-group has-error">
                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                      error</label>
                    <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                  </div>

                  <!-- checkbox 
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="option1">
                      <label class="form-check-label">Checkbox</label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="option1" disabled>
                      <label class="form-check-label">Checkbox disabled</label>
                    </div>
                  </div>-->

                  <!-- radio 
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="option1">
                      <label class="form-check-label">Radio</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="option1" disabled>
                      <label class="form-check-label">Radio disabled</label>
                    </div>
                  </div>-->

                  <!-- select -->
                  <div class="form-group">
                    <label>Instansi</label>
                    <select class="form-control">
                      <option>Dinas Kesehatan Kota Pasuruan</option>
                      <option>Upt Puskesmas Kebonsari</option>
                      <option>Upt Puskesmas Kandangsapi</option>
                      <option>Upt Puskesmas Sekargadung</option>
                      <option>Upt Puskesmas Gadingrejo</option>
                      <option>Upt Puskesmas Trajeng</option>
                      <option>Upt Puskesmas Kebonagung</option>
                      <option>Upt Puskesmas Karangketug</option>
                      <option>Upt Kefarmasian</option>
          
                    </select>
                  </div>
                  <!--<div class="form-group">
                    <label>Select Disabled</label>
                    <select class="form-control" disabled>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>-->
                  <div class="form-group">
                  <label>Jenis Kegiatan</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Honorarium Tenaga Ahli/ Struktur/ Narasumber</option>
                    <option>Honorarium Pegawai</option>
                    <option>Pengadaan Barang dan Jasa</option>
                    <option>Jasa Pelayanan / Retribusi</option>
                    <option>Pembayaran Tagihan Telepon & Listrik</option>
                    <option>Pembayaran lain-lain</option> 
                  </select>
                </div>

                  <!-- Select multiple
                  <div class="form-group">
                    <label>Select Multiple</label>
                    <select multiple class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>-->

                  
                  <!--<div class="form-group">
                  <label>Disabled Result</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                    
                  </select>
                </div>-->
                  <!--<div class="form-group">
                    <label>Select Multiple Disabled</label>
                    <select multiple class="form-control" disabled>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>-->
                  <div class="row no-print">
                <div class="col-12">
                  <a href="{{ route('lapform01') }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right" ><i class="fa fa-credit-card" tabindex="-1" href="tab_2" ></i> Lanjutkan
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Download PDF
                  </button>
                </div>
              </div>

                </form>
              </div>
      </div>
  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    The European languages are members of the same family. Their separate existence is a myth.
                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                    in their grammar, their pronunciation and their most common words. Everyone realizes why a
                    new common language would be desirable: one could refuse to pay expensive translators. To
                    achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                    words. If several languages coalesce, the grammar of the resulting language is more simple
                    and regular than that of the individual languages.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->
      

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</div>
</div>

@endsection
 
@section('javascript')
<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/dist/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/dist/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/dist/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
@stop