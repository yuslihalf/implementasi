@extends ('layout/mainlayout')

@section('page_title', 'Admin LTE 3 | Customer')

@section('title', 'Data Customer' )

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Data Customer</li>
@endsection

@section('konten')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Customer</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Cust ID</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Foto</th>
                                        <th>File Path</th>
                                        <th>Kelurahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->id_customer}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td><img width="150px" src="{{$data->foto}}"></td>
                                        <!-- <td><img width="150px" src="{{ url('/storage/'.$data->file_path) }}"></td> -->
                                        <td><img width="150px" src="{{ asset('/storage/'.$data->file_path) }}"></td>
                                        <td>{{$data->kelurahan->subdis_name}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

    @include('layout/footer')
@endsection