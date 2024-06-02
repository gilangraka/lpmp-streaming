<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Video</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Video</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $this->db->count_all('video'); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-video fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Video</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <?= $this->session->flashdata('message') ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>Thumbnail</th>
                                    <th>Video</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i=1; 
                                foreach ($dataVideo as $item) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $item['judul']; ?></td>
                                        <td><?php echo $item['kategori']; ?></td>
                                        <td><?php echo $item['deskripsi']; ?></td>
                                        <td>
                                            <?php $date = date_create($item['tanggal']);
                                            $tanggal = date_format($date, 'd-M-Y');
                                            echo $tanggal;
                                            ?>
                                        </td>
                                        <td><img src="<?php echo base_url('assets/File/'.$item['thumbnail']) ?>" class="card-img-top"></td>
                                        <td><?php echo $item['video']; ?></td>
                                        <td class="text-center">
                                            <a title="Hapus Data" onclick="return confirm('Yakin ingin menghapus data ?');" href="<?php echo base_url('Dashboard/DeleteData/').$item['id']?>" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Video</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <?php echo form_open_multipart('Dashboard/TambahVideo'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Judul Video" name="judul" maxlength="40">
                    </div>
                    <div class="form-group">
                        <select class="form-control select2" style="width: 100%;" name="kategori" id="kategori" required>
                            <option value="" disabled selected>--Pilih Genre---</option>
                            <option value="Drama">Drama</option>
                            <option value="Sejarah">Sejarah</option>
                            <option value="Romance">Romance</option>
                            <option value="Dokumenter">Dokumenter</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea cols="30" rows="5" class="form-control" name="deskripsi" placeholder="Deskripsi Video"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Thumbnail</label>
                        <div class="input-group">
                            <input id="thumbnail" style="color: black; width: 100%;" onchange="return validasiFileThumbnail()" type="file" accept=".jpg, .png, .jpeg" name="thumbnail" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Video</label>
                        <div class="input-group">
                            <input id="video" style="color: black; width: 100%;" onchange="return validasiFileVideo()" type="file" accept=".mp4, .mkv" name="video" required>
                        </div>
                    </div>


                    <button type="submit" class="loading btn btn-primary btn-user btn-block">
                        <i class="fas fa-plus"> </i> Tambahkan Video
                    </button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->