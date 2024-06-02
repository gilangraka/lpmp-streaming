<div class="jumbotron jumbotron-fluid">

    <div class="container-xxl" style="margin-top: -4rem;">
        <img src="<?php echo base_url('assets/images/lpmp.png') ?>" style="background-size: cover;" width="100%" alt="">
    </div>

    <!--Container1 (Drama)-->
    <div class="container my-5 p-5 bg-white shadow">
        <div class="row" id="genre1">
            <div class="col text-center">
                <h1>DRAMA</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="button-group text-center">
                    <a class="btn btn-outline-primary rounded-pill" href="<?= base_url('Drama')?>">Lihat Lainnya</a>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($drama as $item) : ?>
                <div class="col-md-4 my-2">
                    <div class="card h-100">
                        <img src="<?php echo base_url('assets/File/' . $item['thumbnail']) ?>" class="card-img-top" height="250px" alt="...">
                        <div class="card-body">
                            <a href="<?= base_url('Drama/LihatVideo/').$item['id']?>" class="card-title"><?php echo $item['judul']; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!--Drama End-->

    <!--Sejarah-->
    <div class="container my-5 p-5 bg-white shadow" id="genre2">
        <div class="row">
            <div class="col text-center">
                <h1>SEJARAH</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="button-group text-center">
                    <a class="btn btn-outline-primary rounded-pill" href="<?= base_url('Sejarah')?>">Lihat Lainnya</a>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($sejarah as $item) : ?>
                <div class="col-md-4 my-2">
                    <div class="card h-100">
                        <img src="<?php echo base_url('assets/File/' . $item['thumbnail']) ?>" class="card-img-top" height="250px" alt="...">
                        <div class="card-body">
                            <a href="<?= base_url('Sejarah/LihatVideo/').$item['id']?>" class="card-title"><?php echo $item['judul']; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!--Sejarah end-->

    <!--Romance-->
    <div class="container my-5 p-5 bg-white shadow" id="genre3">
        <div class="row">
            <div class="col text-center">
                <h1>ROMANCE</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="button-group text-center">
                    <a class="btn btn-outline-primary rounded-pill" href="<?= base_url('Romance')?>">Lihat Lainnya</a>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($romance as $item) : ?>
                <div class="col-md-4 my-2">
                    <div class="card h-100">
                        <img src="<?php echo base_url('assets/File/' . $item['thumbnail']) ?>" class="card-img-top" height="250px" alt="...">
                        <div class="card-body">
                            <a href="<?= base_url('Romance/LihatVideo/').$item['id']?>" class="card-title"><?php echo $item['judul']; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!--Romance end-->

    <!--Dokumenter-->
    <div class="container my-5 p-5 bg-white shadow" id="genre4">
        <div class="row">
            <div class="col text-center">
                <h1>DOKUMENTER</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="button-group text-center">
                    <a class="btn btn-outline-primary rounded-pill" href="<?= base_url('Dokumenter')?>">Lihat Lainnya</a>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($dokumenter as $item) : ?>
                <div class="col-md-4 my-2">
                    <div class="card h-100">
                        <img src="<?php echo base_url('assets/File/' . $item['thumbnail']) ?>" class="card-img-top" height="250px" alt="...">
                        <div class="card-body">
                            <a href="<?= base_url('Dokumenter/LihatVideo/').$item['id']?>" class="card-title"><?php echo $item['judul']; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!--Dokumenter end-->