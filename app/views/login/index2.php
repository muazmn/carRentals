<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../scss1/main.scss"> -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/pokok.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/mainn.scss">
    <!-- <link rel="stylesheet" type="text/css" href="../scss1/mainn.css.map">  -->

    <!-- <link href="../scss1/customss.css" rel="stylesheet" type="text/css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css"> -->
    <title><?= $data['judul']; ?></title>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="d-flex">
                <a class="navbar-brand" href="#">
                    <img src="<?= BASEURL; ?>/images/car-logo.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
                    <h3 class="d-inline-block align-text-top fw-light">
                        carjack
                    </h3>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse collapseNav" id="navbarNav">
                <ul class="navbar-nav navUl">
                    <li class="nav-item">
                        <a class="nav-link" type="submit" name="profile" value="profile" href="<?= BASEURL; ?>/Log/halamanRegister">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/Home/" type="submit">Sign in</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse collapseNav2" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                </ul>
                <form action="" method="">
                    <a class="btn btn-primary me-2 registerBtn" type="submit" href="<?= BASEURL; ?>/Log/halamanRegister">REGISTER</a>
                    <a class="btn btn-success loginBtn" href="<?= BASEURL; ?>/Home/" type="submit">SIGN IN</a>
                </form>
            </div>
        </div>
    </nav>
</body>
<div class="d-flex justify-content-center ketua">
    <div class="borang" style="padding-top: 20px;">
        <div class="register">
            <h4>LOGIN PAGE</h4>
            <span class="bapakHr">
                <hr class="hr">
            </span>
        </div>
        <div class="col formm">
            <!-- style="width: 68vw; height:340px; -->
            <form action="<?= BASEURL; ?>/Log/login" method="post" class="pb-6">
                <div class="kotakLogin">
                    <div class="form-group pb-3">
                        <div class="input-group usernameLog smallInput1">
                            <span class="input-group-text border-0 bg-body text-muted fw-bold">Username</span>
                            <label for="password"></label>
                            <input name="username" type="text" id="username" class="form-control border-0 border-bottom inputluar2 inputdalam2 password1" placeholder="username">
                        </div>
                    </div>
                    <div class="form-group pb-4 ">
                        <div class="input-group passwordLog smallInput1">
                            <span class="input-group-text border-0 bg-body text-muted fw-bold">Password</span>
                            <label for="password"></label>
                            <input name="password" type="password" id="password" class="form-control border-0 border-bottom inputluar2 inputdalam2 password1" placeholder="Password">
                            <!-- <div class="ps-4"> -->
                            <!-- </div> -->
                            <!-- <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div> -->
                        </div>
                    </div>

                    <div class="form-check checkboxPass rounded-0">
                        <!-- <span class="input-group-text" onclick="password_show_hide();"> -->
                        <label>
                            <input class="form-check-input" type="checkbox" value="" id="checkboxPass" onclick="password_show_hide2();" />
                            <p>show Password</p>
                        </label>
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                        </span>
                    </div>
                    <div class="container penutupLogin">
                        <a class="btn bayang btn-light me-2" type="submit" name="profile" value="profile">CANCEL</a>
                        <button class="btn bayang btn-primary" name="login" type="submit" name="login">SIGN IN</button>
                        <!-- <button type="submit" class="btn btn-primary btn-block rounded-pill mt-3" name="login" style="width: 300px;">login</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>/js/terbaru.js"></script>
<!-- <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script> -->

</body>

</html>