@extends ('layout/mainlayout')

@section('page_title','Admin LTE 3 | Customer')

@section('title', 'Customer')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Customer</li>
@endsection

@section('css_custom')
<link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/toastr/toastr.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('asset/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection

@section('konten')
<div class="card ">
    {{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
        <!-- @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
        @elseif (session('error'))  
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
        @endif -->
        <div class="card-header">
            <h5>tabel customer</h5>
        </div>

        <div class="col-2">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#import">
                         Import Data
                        </button>
        </div>
        <div class="col-2">
                        <a type="button" class="btn btn-outline-primary" href="/customer_excel/export">
                         Export Data
                        </a>
        </div>

        <div class="card-body">
                            <table class='table table-striped ' id="table1">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Cust ID</th>
                                        <th>Nama</th>
                                        <th>alamat</th>
                                        <th>Kode Pos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->id_customer}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->id_kel}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
 
    </div>
    <div class="modal fade" id="import">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
        role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="row">
            <form method="post" action="/customer_excel/import" enctype="multipart/form-data">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 

							<button type="submit" class="btn btn-primary">Import</button>

				</form>
            </div>
            <div class="modal-footer justify-content-between">

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>

<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/customer_excel/import" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
@endsection

@section('custom_script')
<script src= "{{ asset('asset/jquery/jquery.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<!-- <script src= "{{ asset('assets/jquery/wilayah.js') }}"> -->
<!-- <script src= "{{ asset('assets/jquery/wilayah.js') }}"> -->
<script>

</script>
@endsection