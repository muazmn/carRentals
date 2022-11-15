<!-- session_destroy();
?> -->
<!-- <div class="d-flex align-items-end justify-content-center paginationParent1"> -->
<div class="row mb-3 ">

</div>
<div class="homeContainer">
    <div class="row coba1">
        <?php foreach ($data['cars'] as $car) : ?>
            <div class="justify-content-center text-center pt-5 cars">
                <h4 class="card-title" name="car_name"><?= $car['name']; ?></h4>
                <form action="" method="POST">
                    <div class="ratio ratio-4x3">
                        <img src="https://source.unsplash.com/random/200x200/?<?= $car['pic']; ?>
" class="card gambarKeretaIndex " alt="...">
                    </div>
                    <div class="cardd border">
                        <?php $stocks = $car['stock'] ?>
                        <h4 class="card-text text-primary <?= $stocks = (
                                                                ($stocks > 50) ? "text-success" : (($stocks > 20) ? "text-warning" : "text-danger"
                                                                )); ?>" name="stock">Stock : <?= $car['stock']; ?></h4>
                        <div class="card-body carHomeBtn">
                            <button type="button" class="btn btn-primary details imgBtn" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $car["_id"]; ?>">
                                DETAILS
                            </button>
                            <!-- Modal -->
                            <div class="container-fluid modal fade modal1" id="exampleModal<?= $car["_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modalParent">
                                    <div class="modal-content modalChild1">
                                        <div class="modal-header">
                                            <div class=" container tajukModal">
                                                <h5 class="modal-title" id="exampleModalLabel"><?= $car['name']; ?></h5>
                                            </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="right: 0; margin : 6px 10px 0 0; position: absolute"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid gambarProfile mb-1">
                                                <img class="elemenGambar img-fluid" src="https://source.unsplash.com/random/200x200/?<?= $car['pic']; ?>" class="card-img-top" alt="...">
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum animi pariatur maiores explicabo odit sint.</p>
                                            <div class="container-fluid blue modalPrice">
                                                <div class="d-flex justify-content-center isiModal">
                                                    <div class="container kadar kadarBayaran1" checked="checked">
                                                        <h5 class="fw-normal fs-6"> per Hour
                                                        </h5>
                                                        <hr class="baris1">
                                                    </div>
                                                    <div class="container kadar kadarBayaran2" checked="checked">
                                                        <h5 class="fw-normal fs-6">Per Day
                                                        </h5>
                                                        <hr class="baris2">
                                                    </div>
                                                    <div class="container kadar kadarBayaran3" checked="checked">
                                                        <h5 class="fw-normal fs-6">Per KM
                                                        </h5>
                                                        <hr class="baris3">
                                                    </div>
                                                </div>
                                                <!-- rate by hour -->
                                                <h3 class="fst-normal text-muted" id="bayaran1">
                                                    <?php
                                                    for ($i = $car['_id'] - 1; $i < $car['_id']; $i++) {
                                                        echo  $data['harga'][$i]['rate_by_hour'] . "<br>";
                                                    }
                                                    ?>
                                                </h3>
                                                <!-- rate by day -->
                                                <h3 class="fst-normal text-muted" id="bayaran2">
                                                    <?php
                                                    for ($i = $car['_id'] - 1; $i < $car['_id']; $i++) {
                                                        echo  $data['harga'][$i]['rate_by_day'] . "<br>";
                                                    }
                                                    ?>
                                                </h3>
                                                <!-- rate by km -->
                                                <h3 class="fst-normal text-muted" id="bayaran3">
                                                    <?php
                                                    for ($i = $car['_id'] - 1; $i < $car['_id']; $i++) {
                                                        echo  $data['harga'][$i]['rate_by_km'] . "<br>";
                                                    }
                                                    ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                            <?php $stocks = $car['stock']; ?>
                            <a id="rent" href="<?= BASEURL; ?>home/rent/<?= $car["_id"]; ?>" class="btn <?= $stocks > 0 ? 'btn-success' : 'btn-danger'; ?> imgBtn" name="rent">RENT
                            </a>
                </form>
            </div>
            <!-- <a class="btn-success" id="ff">ff</a> -->
    </div>
</div>
<?php endforeach ?>
</div>
<div class="container"></div>
<div class="paginationParent" style="margin-top: 30px; margin-bottom: 30px">
    <nav aria-label="Page navigation example" id="pagin">
        <ul class="pagination justify-content-center pagination-md">
            <li class="page-item">
                <?php if ($data['halamanAktif'] > 1) : ?>
                    <a class="page-link" href="<?= BASEURL; ?>/home/pagination/<?= $data['halamanAktif'] - 1; ?>">Previous</a>
                <?php endif ?>
            </li>
            <?php for ($i = $data['start_number']; $i <= $data['end_number']; $i++) : ?>
                <?php if ($data['halamanAktif'] == $i) : ?>
                    <li class="page-item pagin active"><a class="page-link" href="<?= BASEURL; ?>/home/pagination/<?= $i; ?>"><?= $i; ?></a></li>
                <?php else : ?>
                    <li class="page-item pagin"><a class="page-link" href="<?= BASEURL; ?>/home/pagination/<?= $i; ?>"><?= $i; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
            <li class="page-item">
                <?php if ($data['halamanAktif'] < $data['jmlahHalaman'] && $data['jmlahHalaman'] > 1) : ?>
                    <a class="page-link" href="<?= BASEURL; ?>/home/pagination/<?= $data['halamanAktif'] + 1; ?>">Next</a>
                <?php elseif ($data['halamanAktif'] == 1) : ?>
                    <a href="">f</a>
                <?php endif ?>

            </li>
        </ul>
    </nav>
</div>
</div>
<!-- //$data['jmlahHalaman'] 
<br>
 //$_GET['id']  -->