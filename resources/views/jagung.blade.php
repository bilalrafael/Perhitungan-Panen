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

@foreach($jagung as $d)
<div class="card" style="width: 90%; margin: auto; background-image: linear-gradient(to bottom right, rgba(0, 255, 0, 0.8), transparent), url('https://assets.corteva.com/is/image/Corteva/9-Feb-2023?$image_desktop$'); background-size: cover; margin-top: 20px;">
  <h1 class=" ml-1">Jagung </h1>
  <h5 class="fw-bold ml-1">Lokasi : {{ $d->alamat }}</h5><br>
  <div class="d-flex">
  <div>
    <button type="button" class="btn btn-warning mt-4 mr-2 ml-2 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$d->id}}" class="fw-bold text-white"> Lihat Detail Tanaman</button>
  </div>
  <form action="/delete/{{$d->id}}" method="post">
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
