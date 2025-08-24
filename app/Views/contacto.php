<?php echo $this->extend('plantilla');?>

<?php echo $this->section('contenido');?>

<div class="container">
    <div class="row">
        <div class="col-12" id="overlay">
        <img src="<?php echo base_url('assets/imgs/contactanos.jpg');?>" alt="CloverCD Contacto" class="img-fluid">
        </div>
        <div class="col-12">
            <h1 id="contacto">Contacto</h1>
            <p>Si tienes alguna pregunta, sugerencia o simplemente quieres ponerte en contacto con nosotros, no dudes en enviarnos un mensaje a través del siguiente formulario. ¡Estamos aquí para ayudarte!</p>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <section class="redes-sociales">
            <p>También puedes contactarnos a través de nuestras redes sociales:</p>
            <div class="iconos-redes">
                <a href="https://www.facebook.com/CloverCD" class="md-3"><img src="<?php echo base_url('assets/imgs/fb-verde.png')?>" id="iconos"></a>
                <a href="https://www.twitter.com/CloverCD" class="md-3"><img src="<?php echo base_url('assets/imgs/x-blanco.png')?>"id="iconos"></a>
                <a href="https://www.instagram.com/CloverCD" class="md-3"><img src="<?php echo base_url('assets/imgs/ig-verde.png')?>"id="iconos"></a>
                <a href="https://www.mail.com/CloverCD" class="md=3"><img src="<?php echo base_url('assets/imgs/mail-verde.png')?>"id="iconos"></a>
            </div>
        </section>
    </div>
</div>

<?php echo $this->endSection(); ?>