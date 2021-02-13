<div class="container py-5">
    <div class="row">
        <div class="col"></div>
        <div class="col-5" style="min-width: 500px;">
            <div class="border rounded px-5 py-4 shadow-sm">
                <h1>Masuk</h1>
                <p class="text-muted">Silahkan menggunakan akun yang sudah ada</p>
                <hr>
                <form>
                    <div class="form-group">
                        <small for="username">Username</small>
                        <input type="text" class="form-control" name="username" placeholder="Username Anda">
                    </div>
                    <div class="form-group">
                        <small>Password</small>
                        <input type="password" name="password" class="form-control password" placeholder="Masukan Password">
                    </div>
                    <div class="form-group form-inline">
                        <input type="checkbox" name="show-password" class="form-control show-password">
                        <small for="check-box"> Tampilkan Password</small>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="login" class="btn btn-primary">
                    </div>
                </form>
                <hr>
                <small class="text-muted">Belum memiliki akun? Silahkan daftar di <a href="<?= $base . "?page=register" ?>"> Halaman Buat Akun</a></small>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>