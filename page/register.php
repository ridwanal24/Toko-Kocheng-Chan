<div class="container py-5">
    <div class="row">
        <div class="col"></div>
        <div class="col-5">
            <div class="border rounded px-5 py-4 shadow-sm">
                <h1>Buat Akun</h1>
                <p class="text-muted">Silahkan isi form dibawah untuk membuat akun baru</p>
                <hr>
                <form>
                    <div class="form-group">
                        <small for="nama-lengkap">Nama lengkap<i class="fa fa-star text-danger fa-xs"></i></small>
                        <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <small for="username">Username<i class="fa fa-star text-danger fa-xs"></i></small>
                        <input type="text" class="form-control" name="username" placeholder="Username Anda">
                    </div>
                    <div class="form-group">
                        <small for="email">E-mail<i class="fa fa-star text-danger fa-xs"></i></small>
                        <input type="email" class="form-control" placeholder="Email Anda" name="email">
                    </div>
                    <div class="form-group">
                        <small for="date">Tanggal Lahir<i class="fa fa-star text-danger fa-xs"></i></small>
                        <input class="form-control" type="date" name="birthday">
                    </div>
                    <div class="form-group">
                        <small for="gender">Jenis Kelamin<i class="fa fa-star text-danger fa-xs"></i></small><br>
                        <select name="gender" class="costum-select mr-2">
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <small>Password <div class="fa fa-star text-danger fa-xs"></div></small>
                        <input type="password" name="password" class="form-control password" placeholder="Masukan Password">
                    </div>
                    <div class="form-group form-inline">
                        <input type="checkbox" name="show-password" class="form-control show-password">
                        <small for="check-box"> Tampilkan Password</small>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Buat Akun" class="btn btn-primary">
                    </div>
                </form>
                <hr>
                <small>Sudah memiliki akun? Silahkan ke <a href="<?= $base . "?page=login" ?>"> Halaman Login</a></small>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>