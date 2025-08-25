<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link href="<?php echo base_url('/assets/css/style.css');?>" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body style="background-color: #1f1f1f">
    <header>
        <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid" id="navbarNav">
        <a class="navbar-brand" href="<?php echo('inicio');?>"><img src="<?php echo base_url('assets/imgs/CloverCd-logo-negro-negativo.png'); ?>" alt="CloverCD Logo" class="logo" height="50 px" width="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo ('inicio');?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo('about');?>">Quienes Somos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo('comercializacion');?>">Comercializacion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo('terminos');?>">Términos y Usos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo('contacto');?>">Contacto</a>
        </li>
    </ul>
    </div>
    </div>
    </nav>
    </header>
    
    <?php echo $this->renderSection("contenido");?>

    
    <footer>
    <div class="container" id="footer">
        <ul>
            <li><a class="texto-footer" href="<?php echo('inicio');?>">Home</a></li>
            <li><a class="texto-footer" href="<?php echo('about');?>">Quienes Somos</a></li>
            <li><a class="texto-footer" href="<?php echo('comercializacion');?>">Comercializacion</a></li>
            <li><a class="texto-footer" href="<?php echo('terminos');?>">Términos y Usos</a></li>
            <li><a class="texto-footer" href="<?php echo('contacto');?>">Contacto</a></li>
        </ul>
        <p class="text-center">© 2025 CloverCD. All rights reserved.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    </footer>
</body>
</html>