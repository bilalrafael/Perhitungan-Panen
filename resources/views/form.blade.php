@include('layout.header')
<div id="layoutSidenav_content">  
        <form action="/tambahData" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
            <div class="mt-4 mb-4 fs-2 fw-bolder">Form Tambah Data Tanaman</div>
            <!-- <div class="form-group cols-sm-6 my-2">
                <a href="/admin/index" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
                </a>
            </div> -->
            <div class="form-group mb-3">
                <label for="animalSelect" class="form-label">Tanaman</label>
                <select name="tanaman" class="form-select" id="animalSelect" onchange="showDetails(this.value)">
                    <option value="">--Pilih Jenis Tanaman--</option>
                    <option value="jagung">Jagung</option>
                    <option value="terong">Terong</option>
                    <option value="cabai">Cabai</option>
                </select>
            </div>
            <div class="form-group">
                <label>Lokasi Tanaman</label>
                <textarea class="form-control" name="alamat" type="text" placeholder="Alamat"></textarea>
                @error('alamat')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Tanggal Tanam</label>
                <input class="form-control" name="tglTanam" type="date" placeholder="tanggal tanam"/>
                @error('tglTanam')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid"><input type="submit" class="bg-blue-500 btn btn-primary btn-block"></input></div>
            </div>
            </div>
        </form>  
    </div>