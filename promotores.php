<?php 
define('SECCION', 'promotores');
include('inc/header.php'); 
?>

<body class="promotores">

<?php include('inc/modal/register_promotores.php');  ?>

    <main>
        <section class="promotores-header">
            <div class="container">
                <div class="promotores-header__content">
                    <p class="h8 mb-2"><?= __('promotores 1') ?></p>
                    <h5 class="mb-2"><?= __('promotores 2') ?></h5>
                    <a class="btn btn--border-white" id="myBtn"><?= __('promotores 3') ?></a>
                </div>
                <div class="promotores-header__cards">
                    <div class="promotores-header__card card_show" data-aos="fade-up">
                        <h4 class="txt--lightblue">1GW+</h4>
                        <p><?= __('promotores 4') ?></p>
                    </div>
                    <div class="promotores-header__card card_show" data-aos="fade-up">
                        <h4 class="txt--lightblue">+50</h4>
                        <p><?= __('promotores 5') ?></p>
                    </div>
                    <div class="promotores-header__card card_show" data-aos="fade-up">
                        <h4 class="txt--lightblue">+500M</h4>
                        <p><?= __('promotores 6') ?></p>
                    </div>
                    <div class="promotores-header__card card_hidden" data-aos="fade-up">
                        <h4 class="txt--lightblue">2GW+</h4>
                        <p><?= __('promotores 4') ?></p>
                        <h4 class="txt--lightblue">+50</h4>
                        <p><?= __('promotores 5') ?></p>
                        <h4 class="txt--lightblue">+500M</h4>
                        <p><?= __('promotores 6') ?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="promotores-programas">
            <div class="container">
                <div class="promotores-programas__grid">
                    <div class="promotores-programas__principal text-center">
                        <h3 class="txt--lightblue"><?= __('promotores 7') ?></h3>
                        <div class="promotores-programas__principal__img" data-aos="fade-up">
                            <div class="flag-content">
                                <img src="imgs/EIF.svg" class="flag">
                                <img src="imgs/EU.svg" class="flag">
                            </div>
                        </div>
                        <p class="h8"><?= __('promotores 8') ?></p>
                        <p class="bajada"><?= __('promotores 9') ?></p>
                        <a class="btn btn--lightblue" href="<?=url('promotores-financiacion')?>"><?= __('promotores 10') ?></a>
                    </div>

                    <div class="promotores-programas__otros__title">
                        <h5 class="txt--lightblue"><?= __('promotores 11') ?></h5>
                    </div>

                    <div class="promotores-programas__otros__img" data-aos="fade-up">
                        <img src="imgs/promotpres-compraventa.jpg" alt="compraventa" class="border-shadow">
                    </div>

                    <div class="promotores-programas__otros__text" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <h3 class="txt--lightblue"><?= __('promotores 12') ?></h3>
                            <p class="bold"><?= __('promotores 13') ?></p>
                            <ul class="promotores-programas__otros__list"><?= __('promotores 14') ?>
                            </ul>
                            <a class="btn btn--lightblue" href="<?=url('promotores-compraventas')?>"><?= __('promotores 15') ?></a>
                        </div>
                    </div>

                   <div class="promotores-programas__otros__img reverse-column" data-aos="fade-up">
                        <img src="imgs/avales.jpg" alt="avales" class="border-shadow">
                   </div>

                    <div class="promotores-programas__otros__text" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <h3 class="txt--lightblue"><?= __('promotores 16') ?></h3>
                            <p class="bold"><?= __('promotores 17') ?></p>
                            <ul class="promotores-programas__otros__list"><?= __('promotores 18') ?>
                           </ul>
                            <a class="btn btn--lightblue" href="<?=url('promotores-avales')?>"><?= __('promotores 19') ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promotores-programas__otros__destacado">
                <div class="container">
                    <div class="promotores-programas__otros__img">
                        <img src="imgs/clean-energy-2.jpg" alt="clean-energy" class="border-shadow">
                    </div>
                    <div class="promotores-programas__otros__text">
                        <h2 class="txt--white"><?= __('promotores 20') ?></h2>
                        <p class="txt--white small mb-3"><?= __('promotores 21') ?></p>
                        <a class="btn btn--border-white" href="<?=url('promotores-clean-energy')?>"><?= __('promotores 22') ?></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include('inc/footer.php') ?>
<script>
/* Modal JavaScript */
var modal = document.getElementById('myModal');
var btn = document.getElementById('myBtn');
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "flex";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
/* End Modal JavaScript */
</script>
</body>
</html>