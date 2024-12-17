<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= site_url('assets/front') ?>/assets/img/logo (2).png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&amp;family=Nunito&amp;display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="<?= base_url('assets/front/'); ?>lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/front/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/'); ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/front/'); ?>css/style.css" rel="stylesheet">
</head>
<style>
    .img-container {
        width: 100%;
        height: 300px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img-container img {
        width: 100%;
        height: auto;
        object-fit: contain;
    }
</style>
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2"> 
            <h1 class="mb-4">Halaman Dashboard</h1>
            <p class="section-title px-5">
                <span class="px-2"><?= $this->session->userdata('nama'); ?></span>
            </p>
        </div>
        <div class="row pb-3">
            <?php $no = 1;
            foreach ($konten as $uu) { ?>
                <div class="col-lg-4 mb-4">

                    <div class="card border-0 shadow-sm mb-2">
                        <div class="img-container">
                            <img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>">
                        </div>
                        <div class="card-body bg-light text-center p-4">
                            <h4 class=""><?= $uu['judul'] ?></h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-danger"></i> <?= $uu['nama'] ?></small>
                                <small class="mr-3"><i class="fa fa-folder text-danger"></i> <?= $uu['nama_kategori'] ?></small>
                            </div>
                            <a href="<?= base_url('admin/home/artikel/' . $uu['slug']) ?>" class="btn btn-danger px-4 mx-auto my-2">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php  } ?>
            <div class="col-md-12 mb-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <!-- <span class="sr-only">Previous</span> -->
                            </a>
                        </li>
                        <!-- <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span> -->
                                <!-- <span class="sr-only">Next</span> -->
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>