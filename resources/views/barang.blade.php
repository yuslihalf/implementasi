@extends ('layout/mainlayout')

@section('page_title', 'Admin LTE 3 | Barang')

@section('title', 'Data Barang' )

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Data Barang</li>
@endsection

@section('konten')
<div class="card ">
        @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
        @elseif (session('error'))  
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
        @endif
        <div class="card-header">
            <h5>Tabel Barang</h5>
        </div>
        <div class="row">
        <div class="col-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#input">
                         Input Barang
                        </button>
        </div>
        <div class="col-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cetak">
                         Cetak PDF
                        </button>
        </div>
        </div>
        <div class="card-body">
                            <table class='table table-striped ' id="table1">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="checkAll" name="checkAll" /></th>
                                        <th>NO</th>
                                        <th>ID Barang</th>
                                        <th>Nama</th>
                                        <th>Barcode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($barang as $data)
                                    <tr>
                                        <td><input type="checkbox" name="check" value="{{$data->id_barang}}" /></td>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->id_barang}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td style="text-align:center">
                                            <?php
                                                $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                                                echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($data->id_barang, $generator::TYPE_CODE_128)) . '">';                                    
                                                /*
                                                $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                                                echo $generator->getBarcode($barangs->id_barang, $generator::TYPE_CODE_128);
                                                */
                                            ?>
                                            <br>
                                            <?= $data->id_barang?>
                                            <br>
                                            <?= $data->nama?>
                                        </td>
                                    </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Barang belum Tersedia.
                                        </div>


                                    @endforelse
                                </tbody>
                            </table>
                        </div>
 
        </div>

        <div class="modal fade" id="input">
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
                        <form class="form form-vertical" action="/barang/store" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                      <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Nama</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Input Nama Barang" id="Nama" name="nama_barang" autocomplete="off">
                                                    <div class="form-control-icon">
                                                        <i data-feather="package"></i>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    </div>
                              </div>
                            </div>
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

    <div class="modal fade" id="cetak">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
        role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cetak PDF Mulai Dari</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="row">
                        <!-- <form class="form form-vertical" action="/barang/cetakPdf" method="post">
                            @csrf -->
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                      <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Baris</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Input Baris Barang" id="baris_barang" name="baris_barang" autocomplete="off">
                                                    <div class="form-control-icon">
                                                        <i data-feather="columns"></i>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                      <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Kolom</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Input Kolom Barang" id="kolom_barang" name="kolom_barang" autocomplete="off">
                                                    <div class="form-control-icon">
                                                        <i data-feather="columns"></i>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                    <button type="submit" class="btn btn-primary me-1 mb-1" id="btnGet">Cetak</button>
                                    </div>
                              </div>
                            </div>
                        <!-- </form> -->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    @include('layout/footer')
@endsection

@section('custom_script')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
  $('.checkAll').on('click', function () {
    $(this).closest('table').find('tbody :checkbox')
      .prop('checked', this.checked)
      .closest('tr').toggleClass('selected', this.checked);
  });

  $('tbody :checkbox').on('click', function () {
    $(this).closest('tr').toggleClass('selected', this.checked); //Classe de seleção na row
  
    $(this).closest('table').find('.checkAll').prop('checked', ($(this).closest('table').find('tbody :checkbox:checked').length == $(this).closest('table').find('tbody :checkbox').length)); //Tira / coloca a seleção no .checkAll
  });
});
</script>
<script type="text/javascript">
    $(function () {
        //Assign Click event to Button.
        $("#btnGet").click(function () {
            var baris_barang =  Number(document.getElementById("baris_barang").value);
            var kolom_barang =  Number(document.getElementById("kolom_barang").value);
            var allVals = [];
  
  
        //I get my values from checkboxes checked in a div with id interests  
  
        $('tbody :checkbox:checked').each(function(){

            
           allVals.push($(this).val());

        });

  
        //Now I am making an post ajax call
        parameter= "/"+ allVals.join()+"/"+baris_barang+"/"+kolom_barang;
        url= "{{url('/barang/cetakPdfChk')}}";
        document.location.href=url+parameter;
        });
    });
</script>

@endsection