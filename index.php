<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome/all/fa.css">
    <title>Toko Kocheng Chan | Home</title>
</head>

<body>
    <!-- SESSION START -->
    <?php
    session_start();
    // login check
    ?>
    <!-- SESSION END -->

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="index.php" class="navbar-brand font-weight-bold"><i class="fas fa-cat fa-lg"></i> TK-CHAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="index.php" class="nav-item nav-link">Category</a>
            </div>
            <form class="form-inline">
                <div class="input-group mx-lg-4">
                    <input type="search" class="form-control" placeholder="Cari">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light" type="submit">Cari</button>
                    </div>
                </div>
                <button class="btn btn-outline-light mr-1">Daftar</button>
                <button class="btn btn-light text-primary">Login</button>
            </form>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- content start -->
    <?php
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
        if ($page == "home") {
            header("location:index.php");
        }

        if (file_exists("page/" . $page . ".php")) {
            include "page/" . $page . ".php";
        }
    } else {
        include "page/home.php";
    }
    ?>
    <!-- content end -->

    <!-- footer start -->
    <footer class="bg-dark text-light text-center py-1">
        <p class="my-4">© 2020 Copyright <a class="text-light bg-light text-dark rounded px-2" href="ridwanal24.github.io">haiXi</a></p>
    </footer>
    <!-- footer end -->
    <!-- script -->
</body>

</html>