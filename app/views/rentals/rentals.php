<div class="container bg-white shadow mt-3 pt-3 pb-3 ps-4 rentHeader">
    <h1>Hello, <?= $data['user']['first_name']; ?></h1>
</div>
<div class="container justify-content-center pt-3 cardBesar2">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card pt-3 cardKecil2">
                <div class="card-body rentCard">
                    <ul class="list-group list-group-flush">
                        <h2 class="">Rent <?= $data['car']['name']; ?></h2>

                        <li class="list-group-item"></li>
                        <div class="mx-auto container justify-content-center gambarProfile">
                            <img src="https://source.unsplash.com/random/200x200/?<?= $data['car']['pic']; ?>" class=" text-center shadow-lg" alt="..." style="width:100%;">
                        </div>
                        <div class="container rentForm">
                            <ul class="list-unstyled">
                                <div class="container d-flex justify-content-center">
                                    <h2 class="pt-3 ">Stock : <?= $data['car']["stock"]; ?></h2>
                                </div>
                            </ul>
                            <div class="container mt-4">
                                <form action="" method="post">
                                    <label for="" class="">
                                        <h5 class="fw-normal">Mode </h5>
                                    </label>
                                    <div class="container ms-4" style="margin-top: -30px;">
                                        <div class="form-check form-check-inline" id="perHour">
                                            <input class="form-check-input mt-1 ms-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                                            <label class="form-check-label ms-2 mb-2" for="inlineRadio1">
                                                <h5 class="fw-normal">Per Hour</h5>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline" id="perDay">
                                            <input class="form-check-input mt-1 ms-2" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                                            <label class="form-check-label ms-2 mb-2" for="inlineRadio2">
                                                <h5 class="fw-normal">Per Day</h5>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline" id="perKm">
                                            <input class="form-check-input mt-1 ms-2" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" required>
                                            <label class="form-check-label ms-2 mb-2" for="inlineRadio3">
                                                <h5 class="fw-normal">Per KM</h5>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <h5 class="fw-normal">Rent</h5>
                                        <!-- bekas dari kotak rent -->
                                        <div class="container w-75 bekasSewa">
                                            <div class=" kadar kadarSewaan1 ms-4 justify-content-center" checked="checked">
                                                <h5 class="fw-normal fs-6 ms-4">
                                                    <div class="harga">
                                                        <!-- kotak1 -->
                                                        <h5 id="hargaAsal1">
                                                            <?php $carRates = $data['harga'];
                                                            $carId = $data['car']['_id'];
                                                            for ($i = $carId - 1; $i < $carId; $i++) {
                                                                $_SESSION['hour'] = $carRates[$i]['rate_by_hour'];
                                                                echo  $carRates[$i]['rate_by_hour'];
                                                            } ?>
                                                        </h5>
                                                        <h5 id="hargaAsal2">
                                                            <?php $carRates = $data['harga'];
                                                            for ($i = $carId - 1; $i < $carId; $i++) {
                                                                $_SESSION['day'] = $carRates[$i]['rate_by_day'];

                                                                echo  $carRates[$i]['rate_by_day'];
                                                            } ?>
                                                        </h5>
                                                        <h5 id="hargaAsal3">
                                                            <?php $carRates = $data['harga'];
                                                            for ($i = $carId - 1; $i < $carId; $i++) {
                                                                $_SESSION['km'] = $carRates[$i]['rate_by_km'];
                                                                echo  $carRates[$i]['rate_by_km'];
                                                            } ?>
                                                        </h5>
                                                    </div>
                                                </h5>
                                                <hr class="baris1">
                                            </div>
                                            <!-- kotak ini 2 -->
                                            <div class="kadar kadarSewaan2 ms-4" checked="checked">

                                                <input id="nomborKali" type="number" aria-label="First name" class="form-control border-0 border-bottom" name="number1" value="1" max="999" min="1">
                                            </div>
                                            <!-- kotak ini 3 -->
                                            <div class="kadar kadarSewaan3 ms-4">
                                                <div class="hargaPerkalian">
                                                    <h5 class="ms-2 isi3">

                                                        <input type="text" name="kali1" id="kali1" class="perkalian mt-1 ms-2 border-0" value="<?= $_SESSION['hour']; ?>">
                                                        <input type="text" name="kali2" id="kali2" class="perkalian mt-1 ms-2 border-0" value="<?= $_SESSION['day']; ?>">
                                                        <input type="text" name="kali3" id="kali3" class="perkalian mt-1 ms-2 border-0" value="<?= $_SESSION['km']; ?>">
                                                    </h5>
                                                    <!-- </form> -->
                                                    <hr class="baris3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="penutupRegister penutupRentals">
                                        <!-- <form class="d-flex buttonRent" method="post"> -->
                                        <a href="<?= BASEURL; ?>/home/index2" class="btn bayang btn-light me-2 rentBtn2" type="submit" name="cancel" value="profile">CANCEL</a>
                                        <button class="btn bayang btn-success rentBtn" type="submit" name="rented">RENT</buttona>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="container ms-5 mt-4">
                            <div class="input-group">
                                <h5 class="fw-normal">Rent</h5>
                                <input type="number" aria-label="Last name" class="form-control border-bottom border-0 me-3">
                                <input type="text" aria-label="Last name" class="form-control border-bottom border-0">
                            </div> -->
                        </div>
                </div>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>