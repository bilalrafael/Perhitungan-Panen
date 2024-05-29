@include('layout.header')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<div class="" style="width : 100%; height: 50px;padding-top:10px;padding-left:10px; background-image: linear-gradient(to bottom right, rgba(0, 255, 0, 0.8), transparent)">
    <a href="/">
        <i class="fa fa-arrow-left"></i> <i style="font-weight: bold;">Petani Sumber Bahagia</i>
    </a>
</div>
<a href="/form" class="btn btn-warning mt-4 ml-3">
    <span class="fw-bold text-white"> + Tambah Data</span>
</a>

@foreach($cabai as $data)
<div class="card" style="width: 90%; margin: auto; background-image: linear-gradient(to bottom right, rgba(0, 255, 0, 0.8), transparent), url('data:image/jpeg;base64,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'); background-size: cover; margin-top: 20px;">
  <h1 class=" ml-1">Cabai </h1>
  <h5 class="fw-bold ml-1">Alamat: {{ $data->alamat }}</h5><br>
  <div class="d-flex">
  <div>
    <button type="button" class="btn btn-warning mt-4 mr-2 ml-2 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$data->id}}" class="fw-bold text-white"> Lihat Detail Tanaman</button>
  </div>
  <form action="/delete/{{$data->id}}" method="post">
  @csrf
  @method('DELETE')
    <button type="submit" class="btn btn-danger mt-4">
      <span class="fw-bold text-white"> Delete</span>
    </button>
  </form>
  </div>
</div>
@endforeach
@foreach($tanaman as $d)
<div class="modal fade" id="exampleModal-{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Tanaman</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container mb-5 mt-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 shadow-lg rounded">
                        <div class="card-body">
                            <hr>
                            <div class="">
                                <div class="">
                                    <div class="floating">
                                    <label for="inputusername">Jenis Tanaman</label>
                                    @if($d->tanaman == 'jagung')
                                        <input class="form-control" id="inputusername" type="text" name="judul" placeholder="No telp tidak ada" value="Jagung" readonly/>
                                    @elseif($d->tanaman == 'terong')
                                    <input class="form-control" id="inputusername" type="text" name="judul" placeholder="No telp tidak ada" value="Terong" readonly/>
                                    @else
                                    <input class="form-control" id="inputusername" type="text" name="judul" placeholder="No telp tidak ada" value="Cabai" readonly/>
                                    @endif
                                    </div>
                                    <div class="floating">
                                    <label for="exampleInputEmail1">Lokasi Tanaman</label>
                                    <textarea type="text" class="form-control" name="tgl_peminjaman" value="" readonly>{{ $d -> alamat }}</textarea>
                                    </div> 
                                    <div class="floating">  
                                        <label for="exampleInputEmail1">Tanggal Tanam</label>
                                        <input type="text" class="form-control" name="tgl_peminjaman" value="{{ $d -> tglTanam }}" readonly>
                                    </div>
                                    <div class="floating">  
                                        <label for="exampleInputEmail1">Tanggal Panen</label>
                                        <input type="text" class="form-control" value="{{ $d -> tglPanen }}" name="tgl_pengembalian" readonly>
                                    </div>
                                </div>
                            </div>
                            <hr>                      
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach