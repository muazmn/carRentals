<!-- di dalam ini memiliki data profile -->
<div class="container-fluid bekas" style="height: 100%;">
    <div class="container-lg bg-white shadow position-absolute top-0 start-50 translate-middle" style="margin-top: 50px;
               color: black;">
    </div>
    <div class="container justify-content-center pt-3 cardBesar">
        <div class="card pt-3 cardKecil">
            <h1 class="card-title text-center"><?= $data['user']['first_name']; ?>
                <?= $_SESSION['username']; ?></h1>
            <div class="card-body profileBody overflow-hidden">
                <div class="gambarProfile ">
                    <img src="https://source.unsplash.com/random/700×700/?user" class="shadow-lg" alt="...">
                </div>
                <ul class="list-group list-group-flush profileList">
                    <div class="container">
                        <h2 class="pt-5">Profile Info</h2>
                        <li class="list-group-item" style="width: 170%; border:none">
                            <hr>
                        </li>
                        <li class=" list-group" style="margin-top: -50px;">
                            <h5 class="fw-normal pt-5">EMAIL : <span class="fw-light"><?= $data['user']['email']; ?></span></h5>
                        </li>
                        <li class="list-group">
                            <h5 class="fw-normal pt-2">PHONE NO : <span class="fw-light"><?= $data['user']['ph_no']; ?></span></h5>
                        </li>
                        <li class="list-group">
                            <h5 class="fw-normal pt-2">JOIN TIME : <span class="fw-light"><?= $data['user']['join_time']; ?></span></h5>
                        </li>
                        <li class="list-group">
                            <h5 class="fw-normal pt-2">ADDRESS : <span class="fw-light"><?= $data['user']['address_id']; ?></span></h5>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="card-body">
                <a href="#" class="card-link">
                    <h5></h5>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row coba1 pb-5">
    <?php foreach ($data['transactions'] as $t) : ?>
        <div class="text-center pt-5 justify-content-center cars">
            <h4 class="card-title" name="car_name"><?= $_SESSION['username']; ?></h4>
            <h5 class="text-muted fw-normal" style="margin-top: -5px;">
                rented
            </h5>
            <div class="ratio ratio-4x3">
                <?php for ($i = $t['car_id'] - 1; $i < $t['car_id']; $i++) { ?>
                    <img src="https://source.unsplash.com/random/10000×700/?<?= $data["cars_id"][$i]['pic']; ?>" class="card-img-top" alt="...">

                <?php } ?>
            </div>
            <div class="cardd container border">
                <form action="" method="POST">
                    <div class="pembalut">
                        <div class="card-body">
                            <h2 class="fw-normal detailNormal">
                                <?php
                                for ($i = $t['car_id'] - 1; $i < $t['car_id']; $i++) { ?>
                                    <?= $data["cars_id"][$i]['name']; ?>

                                <?php } ?>
                            </h2>
                            <h5 class="text-muted fw-normal text1">for <span class="fw-bold text-body detailBold">
                                    <?= $t['usePeriod']; ?>
                                    <span class="text-uppercase detailBold"><?= $t['mode']; ?></span>
                                </span>
                            </h5>
                            <h5 class="text-muted fw-normal text2">on <span class="fw-bold text-body detailBold">
                                    <?= $t['time'];
                                    ?>
                                </span>
                            </h5>
                            <h5 class="text-muted fw-normal text3">for <span class="fw-bold text-body detailBold" id="spanId">
                                    <?= $t['value']; ?>


                                </span>
                            </h5>
                            <a type="submit" class="btn btn-danger mt-3 cancelBtn" name="cancel" href="<?= BASEURL; ?>/home/hapus/<?= $t["_id"]; ?>">CANCEL</a>
                        </div>
                </form>
            </div>
            <!-- <a class="btn-success" id="ff">ff</a> -->
        </div>
</div>
<?php endforeach ?>
</div>