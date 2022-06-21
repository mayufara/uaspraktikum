<!doctype html>
<html lang="en">
    <head>
    <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    </head>
 <body>
    <div class="row">
        <div class="col-md-12 text-center bg-primary">
            EDIT MAHASISWA
        </div>
    </div>
    <div class="container-fluid-py-4">
    <div class="row p-3">
        <div class= "col-lg-2 text-center">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                 <a class="nav-link" href="/home">Home</a>
                 <a class="nav-link active" href="/Mahasiswa">Mahasiswa</a>
                 <a class="nav-link" href="#">Dosen</a>
                 <a class="nav-link" href="#">Akreditasi</a>
            </div>
        </div>
<!-- Form -->
<div class="col-lg-10">
    @php 
    $bid_minat = explode (',', $mahasiswa->bid_minat); 
    @endphp
        <form action="/mahasiswa/simpanmhs/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label> Nim </label>
                <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="form-group w-25">
                <label> Nama Mahasiswa </label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
            </div>
            <label><b> Gender : </b></label>
            <div class="form-group w-25">
                <input type="radio" name="gender" value="Perempuan" {{ $mahasiswa->gender = 'Perempuan'? 'checked': '' }} class="form-check-input">
                <label> Perempuan </label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="gender" value="Laki-Laki" {{ $mahasiswa->gender = 'Laki-Laki'? 'checked': '' }} class="form-check-input">
                <label> Laki-laki </label>
            </div>
            
            <div class="form-group w-25">
                <label> Juruasan/Prodi </label>
                <select name="jurusan" class="form-control">
                    <option value="0">-JURUSAN-</option> 
                    <option value="Manajemen" {{$mahasiswa->jurusan = 'Manajemen' ? 'selected':''}} >Manajeman</option> 
                    <option value="Akuntansi" {{$mahasiswa->jurusan = 'Akuntansi' ? 'selected':''}}>Akuntansi</option> 
                    <option value="PBI" {{$mahasiswa->jurusan = 'PBI' ? 'selected':''}}>PBI</option> 
                    <option value="Filsafat" {{$mahasiswa->jurusan = 'Filsafat' ? 'selected':''}}>Filsafat</option>
                    <option value="Informatika" {{$mahasiswa->jurusan = 'Manajemen' ? 'selected':''}}>Informatika</option> 
                    <option value="Sistem Informasi" {{$mahasiswa->jurusan = 'Sistem Informasi' ? 'selected':''}}>Sistem Informasi</option> 
                </select>  
            </div>
            <label><b> Bidang Minat : </b></label>
            <div class="form-check w-25">
                    <input type="checkbox" name="bid_minat[]" value="Seni" class="form-check-input">
                    <label> Seni </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="bid_minat[]" value="Medikal" class="form-check-input">
                    <label> Medikal </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="bid_minat[]" value="Perawat" class="form-check-input">
                    <label> Perawat </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="bid_minat[]" value="Penyanyi" class="form-check-input">
                    <label> Penyanyi </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="bid_minat[]" value="Penulis" class="form-check-input">
                    <label> Penulis </label>
                </div>
                <div class="form-group pt-4">
                    <input type="submit" value="SIMPAN" class="btn btn-primary">
                </div>
        </form>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>

</body>
</html>