@extends('layout.auth')

@section('tittle')
Login
@endsection
<div class="container" style="margin-top:9vh;">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h2 class="card-title text-center mb-3 fw-light fs-3">Sistem Informasi Penjualan Barang</h2>
                    <h3 class="card-title text-center mb-4 fw-light fs-4">Politeknik Negeri Subang</h3>
                    <img src="img/logo_aplikasi.png" class="rounded mx-auto d-block" alt="gambarku" width="200" height="200">
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" autocomplete="off">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password1" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-grid m-4">
                            <a href="/">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="button">Sign in</button></a>
                        </div>

                        <div class="d-grid m-4">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="">Reset</button>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
