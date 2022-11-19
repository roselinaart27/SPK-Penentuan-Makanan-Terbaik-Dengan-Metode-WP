<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">


    <title><?= $title; ?></title>
</head>

<body style="background-image: url(/image/bg-home1.jpg);">
    <div class="bg">
        <!-- Header -->
        <nav class="navbar navbar-light" style="background-image: linear-gradient(#bec01c, #a4bd78);; box-shadow: 0 0 15px 1px">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/image/111-removebg-preview.png" width="50" height="50">
                </a>
                <form class="d-flex header_button">
                    <a href="/admin/logout" style="color: #000;">
                        <h3 onclick="return confirm('lanjutkan untuk keluar!!!')">Logout <i class="bi bi-box-arrow-right"></i></h3>
                    </a>
                </form>
            </div>
        </nav>
        <!-- Header -->

        <div class="container" style="margin-top: 10vh;">

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>