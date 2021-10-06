<?php
require_once('api/inicio.php');
//$metas = Metas::obtener(SECCION);
//$empresa = Config::obtener('empresa');
define('IDIOMA', Idioma::actual());



?>
<!DOCTYPE html>
<html lang="<?= IDIOMA ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?=BASE_URL?>dist/aos/aos.css" />
    <link rel="stylesheet" href="<?=BASE_URL?>css/main.css?v=<?php echo(rand()); ?>">
    
    <!-- Favicons: http://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=BASE_URL?>imgs/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?=BASE_URL?>imgs/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=BASE_URL?>imgs/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?=BASE_URL?>imgs/favicons/manifest.json">
    <link rel="mask-icon" href="<?=BASE_URL?>imgs/favicons/safari-pinned-tab.svg" color="#da802d">
    <link rel="shortcut icon" href="<?=BASE_URL?>imgs/favicons/favicon.ico">
    <meta name="msapplication-config" content="<?=BASE_URL?>imgs/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>


    <title>Alter 5</title>
    <base href="<?= BASE_URL ?>">
    <link rel="canonical" href="<?= Url::actual() ?>" />
    <?php if( Idioma::deteccionHabilitada() ){
      foreach(Idioma::idiomasDisponibles() AS $idioma){
          echo '<link rel="alternate" hreflang="'.$idioma.'" href="'.Url::actual($idioma).'" />'."\r\n";
      }
    } ?>
</head>

<header class="navigation" id="nav">
  <nav class="nav-primary">
    <h1 class="logo" id="logo"><a href="<?=url('home')?>"><img src="imgs/alter-5.svg" alt="alter-5"></a></h1>
    <div class="menu">
      <input type="checkbox" id="nav-toggle" />
      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <div class="menu__nav">
        <ul class="menu__list">
          <li><a href="<?=url('compania')?>" class="nav-link"><?= __('header 0') ?></a></li>
          <li><a href="<?=url('news-insight')?>" class="nav-link"><?= __('header 1') ?></a></li>
          <li><a href="<?=url('contacto')?>" class="nav-link"><?= __('header 2') ?></a></li>
          <li><a class="btn btn--white" href="https://app-s.alter-5.com/"><?= __('header 3') ?></a></li>
          <li><a onclick="myFunctionToggle()" class="dropbtn btn btn--lightblue btn-open-sign"><?= __('header 4') ?></a>
            <div id="unete-container" class="unete-content">
            <a onclick="myFunctionToggle()" class="dropbtn"><img src="imgs/close.svg" class="bt-close"></a>
              <div class="unete-promotor">
                <p class="h9 txt--lightblue"><?= __('header 5') ?></p>
                <p class="bajada"><?= __('header 6') ?></p>
                <a target="_blank" class="btn btn--lightblue btn--small" href="https://app.alter-5.com/user/register"><?= __('header 7') ?></a>
              </div>
              <div class="unete-inversor">
                <p class="h9 txt--blue"><?= __('header 8') ?></p>
                <p class="bajada"><?= __('header 9') ?></p>
                <a target="_blank" class="btn btn--blue btn--small" href="https://investors.alter-5.com/user/register"><?= __('header 10') ?></a>
              </div>
            </div>
          </li>
        </ul>




          <?php  
            $idiomas = Config::obtener('idioma');
            $dato_url = isset(${SECCION}) ? ${SECCION} : null;
            // foreach (array_slice(json_decode(IDIOMA_ENABLED), 1) as $idioma) { ?>
              <!-- <a href="<?= url(SECCION, $dato_url, $idioma) ?>" class="dropbtnlanguage nav-link"><?=$idioma?></a> -->


            <div class="dropdown">
              <?php if (IDIOMA == "es") { ?>
                <a onclick="abreDrop()" class="dropbtn chile">ES <i class="fa fa-angle-down" style="font-size:17px"></i></a>
                <div id="myDropdown" class="dropdown-content">
                  <a href="<?= url(SECCION, $dato_url, 'en') ?>"><span>EN</span></a>
                </div>
            <?php } else  {  ?>
                <a onclick="abreDrop()" class="dropbtn argentina">EN <i class="fa fa-angle-down" style="font-size:17px"></i></a>
                <div id="myDropdown" class="dropdown-content">
                  <a href="<?= url(SECCION, $dato_url, 'es') ?>"><span>ES</span></a>
                </div>
              <?php } ?>
            </div>



        </div>
      </div>
    </div>
  </nav>
</header>

<style>
  .dropdown, .btn-open-sign {
    cursor: pointer;
  }
  .alert-danger {
    color: red;
  }
  
</style>
<script>
  function abreDrop() {
    const lang = document.getElementById('myDropdown').classList.toggle('show-lang');
  }
</script>