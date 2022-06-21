<!doctype html>
<html lang="en">
    <head>
    <title>Srimayu Fara</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
<body>
<!-- HEADER -->
<div class="row p-1 bg-primary">
    <div class="col-md-12 text-center py-2">
    </div>
</div>

<!-- Navigation -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-2 text-left">
            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                <a class="nav-link rounded-2 p-2 border  " href="/home">Home</a>
                <a class="nav-link rounded-2 p-2 border  " href="/dosen">Dosen</a>
                <a class="nav-link rounded-2 p-2 border " href="/mahasiswa"> Mahasiswa</a>
                <a class="nav-link rounded-2 p-2 border " href="/skripsi"> Skripsi</a>
            </div>
        </div>
<!-- Form -->
    <div class="col-lg-10 ">
        <form action="/user/saveuser" method="POST">
            @csrf
            <div class="form-group w-25">
                <label><b> NIK </b></label>
                <input type="number" name="nik_user" class="form-control" placeholder="Masukan nik" required>
            </div>
            <div class="form-group w-25">
                <label><b> Nama  </b></label>
                <input type="text" name="nama_user" class="form-control" placeholder="Masukan Nama" required>
            </div>
            <div class="form-group w-25">
                <label><b> No.Hp </b></label>
                <input type="number" name="no_hp" class="form-control" placeholder="Masukan No.Hp" required>
            </div>
            <div class="form-group w-25">
                <label><b> Email : </b></label>
                <input type="email" name="email" class="form-control" placeholder="Masukan Email" required>
            </div>
            <div class="form-group w-25">
                <label><b> Password: </b></label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
            </div>
            <div class="form-group pt-4">
                <input type="submit" value="SIMPAN" class="btn btn-success">
            </div>
        </form>
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