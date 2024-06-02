<div class="jumbotron jumbotron-fluid" style="min-height: 100%;">
    <div class="container my-5 p-5 bg-white shadow">
        <div class="row" id="genre1">
            <div class="col text-center">
                <h1>ROMANCE LIST</h1>
            </div>
        </div>

        <div class="row">
            <?php foreach ($data as $item) : ?>
                <div class="col-md-4 my-2">
                    <div class="card h-100">
                        <img src="<?php echo base_url('assets/File/' . $item['thumbnail']) ?>" class="card-img-top" height="250px" alt="...">
                        <div class="card-body">
                            <a href="<?= base_url('Romance/LihatVideo/').$item['id']?>" class="card-title">
                                <?php echo $item['judul']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row">
            <div class="col">
                <!--Tampilkan pagination-->
                <?php echo $pagination; ?>
            </div>
        </div>  
    </div>