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

<body>
    <div class="bg">
        <!-- Header -->
        <nav class="navbar navbar-light" style="background-image: linear-gradient(#bec01c, #a4bd78);; box-shadow: 0 0 15px 1px">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/image/111-removebg-preview.png" width="50" height="50">
                </a>
                <form class="d-flex header_button">
                    <a href="/" style="color: #0d6efd;">
                        <h3>Login </h3>
                    </a>
                    <p style="margin-right: 50px;"></p>
                    <a href="#" style="color: #000;">
                        <h3>Hasil </h3>
                    </a>
                </form>
            </div>
        </nav>
        <!-- Header -->

        <<div class="container" style="margin-top: 3vh;">
            <div class="row">
                <div class="col-sm-5 col-md-6">
                    <img src="/image/home1.png" class="">
                </div>

                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">

                    <form action="/admin/login" method="POST">
                        <img src="/image/home2.png" width="35%" height="35%" class="rounded mx-auto d-block">
                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger" style="margin-top: -5px;">
                                <?php echo session()->getFlashdata('error') ?>
                            </div>
                        <?php } ?>

                        <div class="form-outline form-white mb-1">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" value="<?php echo session()->getFlashdata('username') ?>" placeholder="Username" style="border-radius: 15px; box-shadow: 0 3px 3px;" />
                            <label class="form-label text-light" for="username"></label>
                        </div>

                        <div class="form-outline form-white mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" style="border-radius: 15px; box-shadow: 0 3px 3px;" />
                            <label class="form-label text-light" for="password"></label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input class="btn btn-lg px-5 btn-login" type="submit" name="login" value="Login" style="background: #be5d01; font-weight: bold; border-radius: 20px;">
                        </div>
                    </form>

                </div>

            </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>