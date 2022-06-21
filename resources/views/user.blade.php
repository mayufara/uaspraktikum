<!doctype html>
<html lang="en">
    <head>
    <title>Srimayu Fara</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
 <body>
    <div class="container-fluid">
        <div class="row p-1 bg-success">
            <div class="col-md-11 text-center py-2">

            </div> 
            <div class="col-md-1 p-3">
               <div class="dropdown float-right">
                   <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="material-icons">account_box</i> User </button>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">{{ Auth::user()->nama ?? '' }}</a>
                       <a class="dropdown-item" href="/user">Data pengguna</a>
                       <a class="dropdown-item" href="/logout">Logout</a>
                    </div> 
                </div> 
            </div> 
        </div>
        <div class="row p-2">
            <div class="col-2 text-left">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical" >
                    <a class="nav-link rounded-2 p-2 border  " href="/home">Home</a>
                    <a class="nav-link rounded-2 p-2 border " href="/dosen">Dosen</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/mahasiswa">Mahasiswa</a>
                    <a class="nav-link rounded-2 p-2 border  " href="/skripsi">Skripsi</a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-3 text-left">
                        <a name="" class="btn btn-success" href="/user/formuser" role="button">
                        <i class="material-icons" style="font-size:20px;">get_app</i> Tambah</a>
                        </div> 
                        <form class="form-inline my-3 my-lg-0 float-right" method="GET" action="/user/cari">
                            <input class="form_control mr-sm-3" name="cari" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-3 my-sm-0" type="submit">
                            <i class="material-icons" style="font-size:20px;">pageview</i> Cari</button>
                        </form>
                    </div>
                    <div class="card-body">
                    <table class="table table-hover ">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No.Handphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no => $u)
                            <tr>
                                <th scope="row">{{ $user->firstItem() + $no }}</th>
                                <td>{{$u->nik_user}}</td>
                                <td>{{$u->nama_user}}</td>
                                <td>{{$u->no_hp}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->password}}</td>
                                <td>
                                    <a href="/user/edituser/{{ $u->id }}" class="btn btn-outline-danger">EDIT
                                        <i class="material-icons" style="font-size:15px;">restore_page</i>
                                    <a href="/user/deleteuser/{{ $u->id }}" class="btn btn-outline-warning" 
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus?') ">HAPUS
                                        <i class="bi bi-trash"><i class="material-icons" style="font-size:15px;">clear</i>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span class="float-right">{{ $user->links() }}</span>
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