<div class="jumbotron jumbotron-fluid" style="min-height: 100%;">
    <div class="container my-3 p-5 bg-white shadow">
        <div class="row">
            <div class="col">
                <a href="<?= base_url('Drama')?>" class="btn btn-outline-primary rounded-pill">Kembali ke list romance</a>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <video width="100%" controls>
                    <source src="<?= base_url('assets/File/').$data_video['video'] ?>" type="video/mp4">
                </video>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <h5><?= $data_video['judul'] ?></h5>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="text-secondary">
                    <?php $data=date_create($data_video['tanggal']); 
                        $tanggal = date_format($data,'d M Y');
                        echo $tanggal;
                    ?>
                </p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col">
                <h5>Deskripsi Video</h5>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="text-secondary">
                    <?= $data_video['deskripsi']?>
                </p>
            </div>
        </div>
    </div>

    <div class="container my-4 p-5 bg-white shadow h-50">
        <div class="row">
            <div class="col">
                <h1>Comment</h1>
            </div>
        </div>
    </div>