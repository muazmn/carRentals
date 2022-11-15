<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../scss1/main.scss"> -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/scss/beruss.css">
    <!-- <link rel="stylesheet" type="text/css" href="../scss1/mainn.css.map">  -->

    <!-- <link href="../scss1/customss.css" rel="stylesheet" type="text/css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css"> -->
    <title><?= $data['judul']; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbarCustomize">
        <div class="container-fluid">
            <div class="d-flex">
                <a class="navbar-brand" href="#">
                    <img src="<?= BASEURL; ?>/images/car-logo.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
                    <h3 class="d-inline-block align-text-top fw-light">
                        carjack
                    </h3>
                </a>
                <div class="d-flex justify-content-start pt-1 homeNav">
                    <a href="" class="navbar-brand ">
                        <a class="nav-link active text-muted" aria-current="page" href="<?= BASEURL; ?>/home/index2">Home</a>
                        <a class="nav-link active text-muted" aria-current="page" href="<?= BASEURL; ?>/home/rentalPage" name="rentals">Rentals</a>
                    </a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse collapseNav" id="navbarNav">
                <ul class="navbar-nav navUl">
                    <li class="nav-item">
                        <a class="nav-link" type="submit" name="profile" value="profile" href="<?= BASEURL; ?>/Home/detail/<?= $_SESSION['id']; ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/Log/logout" type="submit">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/home/index2">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/home/rentalPage" name="rentals">Rentals</a>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse collapseNav2" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                </ul>
                <form class="d-flex" method="get">
                    <a class="btn btn-success me-2 profileBtn" type="submit" href="<?= BASEURL; ?>/Home/detail/<?= $_SESSION['id']; ?>">PROFILE</a>
                    <!-- <a class="btn btn-success me-2" type="submit" href="<?= BASEURL; ?>/log/halamanRegister">PROFILE</a> -->
                    <a class="btn btn-danger logoutBtn" href="<?= BASEURL; ?>/Log/logout">LOGOUT</a>
                </form>
            </div>
        </div>
        </div>
    </nav>
</body>