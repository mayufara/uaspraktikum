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
            EDIT DOSEN
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
    $pakar = explode(',',$dosen->pakar);
    @endphp
<form action="/dosen/save" method="POST" class="pt-2 pb-2">
            @csrf 
            <div class="form-group w-25">
                <label> NIDN </label>
                <input type="number" name="nidn" class="form-control" placeholder="Masukan Nidn" required>
            </div>
            <div class="form-group w-25">
                <label> Nama Dosen </label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
            </div>
            <label><b> Status  </b></label>
            <div class="form-group w-25">
                <input type="radio" name="status" value="Dosen  Tidak Tetap" class="form-check-input">
                <label> Dosen Tidak Tetap </label>
            </div>
            <div class="form-check w-25">
                <input type="radio" name="status" value="Dosen Tetap" class="form-check-input">
                <label> Dosen Tetap </label>
            </div>
            
            <div class="form-group w-25">
                <label> Jafung </label>
                <select name="jafung" class="form-control">
                    <option value="0">-JAFUNG-</option> 
                    <option value="Penyulu hukum">Penyulu hukum</option> 
                    <option value="Pekerja Sosial">Pekerja Sosial</option> 
                    <option value="Lektor">Lektor</option> 
                    <option value="Asisten Ahli">Asisten Ahli</option>
                    <option value="Kepala Biro">Kepala Biro</option> 
                </select>  
            </div>
            <label><b> Pakar : </b></label>
            <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="Inklusif Desain" class="form-check-input">
                    <label> Inklusif Desain </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="UI/UX" class="form-check-input">
                    <label>UI/UX </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="Data Mining" class="form-check-input">
                    <label> Data Mining </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="e marketing" class="form-check-input">
                    <label> e marketing </label>
                </div>
                <div class="form-check w-25">
                    <input type="checkbox" name="pakar[]" value="Aplikasi Mobile" class="form-check-input">
                    <label> Aplikasi Mobile </label>
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