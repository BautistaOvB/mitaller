<?php echo $this->extend('plantilla');?>

<?php echo $this->section('contenido');?>

<div class= "container">
    
    <div class="row">
        
        <div class="col-6">
        <h1>Quienes Somos</h1> 
        <p>CloverCD es una tienda destinada a la distribución de articulos musicales como CDs, discos de vinilo, cassetes y reproductores de todos los formatos</p>    
        </div>
        <div class="col-6">
            <img src="<?php echo base_url('assets/imgs/CloverCD-1080-logo-negativo.png');?>" alt="CloverCD Logo" class="img-fluid" style="max-width: 80%; height: cover;">
        </div>
        <div class="col-6">
            <img src="<?php echo base_url('assets/imgs/estanteria.jpg');?>" alt="Imagen estantería" class="img-fluid">
        </div>
        <div class="col-6">
            <h2>Nuestra Misión</h2>
            <p> En CloverCD, nuestra misión es ofrecer las alternativas más comodas y sofisticadas tanto para que el publico en general, como los más puristas de la música puedan disfrutar de la música a su manera.</p>
            <p> </p>
        </div>
        <div class="col-12">
            <p>Para poder ver todos los articulos visite nuestro catalogo</p>
        </div>
        <div class="col-12">
            <a href="<?php echo ('comercializacion');?>"><button class="btn btn-success" type="button" >Catalgo</button></a>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>