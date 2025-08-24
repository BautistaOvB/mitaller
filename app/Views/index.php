<?php echo $this->extend('plantilla'); ?> 

<?php echo $this->section('contenido'); ?>
<div class="container">
    <h1>CloverCD</h1>
    <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
    <div class="carousel-item active" style ="max-height: 500px;" height="500px" width="500px">
        <img src="assets/imgs/CDs.jpg" class="img-fluid" alt="...">
    </div>
    <div class="carousel-item" style ="max-height: 500px;">
        <img src="assets/imgs/Auri-Vinyl.jpg" class="img-fluid" alt="...">
    </div>
    <div class="carousel-item" style ="max-height: 500px;">
        <img src="assets/imgs/cd-estanteria.jpg" class="img-fluid" alt="...">
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
    </div>
    </div>
    <div class="row">
        <div class="col-md-10" id="welcome-text">
            <h2>Bienvenido a CloverCD</h2>
            <p>Tu biblioteca musical de confianza</p>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 16em;">
                <img src="<?php echo base_url('assets/imgs/CDs-banner-tarjeta.jpg')?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">CDs</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-success ">Ver en catálogo</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 16em;">
                <img src="<?php echo base_url('assets/imgs/Vinilos-banner-tarjeta.jpg')?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Vinilos</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-success ">Ver en catálogo</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 16em;">
                <img src="<?php echo base_url('assets/imgs/reproductores-banner-tarjeta.jpg')?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Reproductores</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-success ">Ver en catálogo</a>
                </div>
            </div>
        </div>
    </div>
<?php echo $this->endSection(); ?>