<?php echo $this->extend('plantilla');?>

<?php echo $this->section('contenido');?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="overlay">
            <img src="<?php echo base_url('assets/imgs/comercializacion.jpg');?>" alt="CloverCD Comercialización" class="img-fluid">
        </div>
        <div class="col-12" id="comercializacion-texto">
            <h1>Productos</h1>
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
    <div class="row" id="metodos-pago">
            <h2>Métodos de Pago</h2>
            <p>En CloverCD, ofrecemos la siguiente variedad de metodos de pago:</p>
        <div class="col-3 md">
            <img src="<?php echo base_url('assets/imgs/VISA-Logo.jpg');?>" alt="Visa" class="img-fluid" id="metodos">
        </div>
        <div class="col-3 md">
            <img src="<?php echo base_url('assets/imgs/mastercard.jpg');?>" alt="Mastercard" class="img-fluid" id="metodos">
        </div>
        <div class="col-3 md">
            <img src="<?php echo base_url('assets/imgs/mercado-pago.jpg');?>" alt="Mastercard" class="img-fluid" id="metodos">
        </div>
        <div class="col-3 md">
            <img src="<?php echo base_url('assets/imgs/paypal.jpg');?>" alt="Mastercard" class="img-fluid" id="metodos">
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>