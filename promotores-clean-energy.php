<?php 
define('SECCION', 'promotores-clean-energy');
include('inc/header.php'); 
?>
<body>
        <?php include('inc/modal/register_promotores.php');  ?>

    <main>
        <section class="programas-header">
            <div class="programas__base__left">
                <small><span class="bold"><?= __('promotores-clean-energy 0') ?></p>
            </div>
            <div class="clean-energy" style="height: 400px"></div>
        </section>

        <section class="programas__content">
            <div class="container cont_prog">

                <div class="programas__base">
                    <p><?= __('promotores-clean-energy 26') ?></p>
                    <div class="programas__list">
                        <div class="programas__base__list__benefit" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-clean-energy 13') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-clean-energy 14') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-clean-energy 15') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-clean-energy 16') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-clean-energy 17') ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="programas__base__right" data-aos="fade-up">
                    <div class="programas__base__form">
                        <?php include(API_PATH.'forms/promotores_clean_form.php'); ?>
                        <div class="col-xs-12 text-center box-mensaje   ">
                            <?= $form_promotor_clean->mensaje_estado ?>
                        </div>
                        <?php if ($form_promotor_clean->estado != 'ok') { ?>                  
                        <form method="post" action="<?=url('promotores-clean-energy')?>#form-ce" id="form-ce">                        <p class="h9 txt--lightblue mb-2"><?= __('promotores-clean-energy 1') ?></p>
                            <p><?= __('promotores-clean-energy 27') ?></p><br><br>
                            <div class="form-group two-column">
                                <input placeholder="<?= __('promotores-clean-energy 2') ?>" name="nombre" type="text" class="form-input">
                                <input placeholder="<?= __('promotores-clean-energy 3') ?>" name="apellido" type="text" class="form-input">
                            </div>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('promotores-clean-energy 4') ?>" name="compania" type="text" class="form-input">
                                <input placeholder="<?= __('promotores-clean-energy 5') ?>" name="correo" type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-clean-energy 6') ?>" name="telefono" type="text" class="form-input">
                            </div>

                            <p class="h9 txt--lightblue mb-2"><?= __('promotores-clean-energy 7') ?></p>

                            <div class="form-radio form-clean" >
                                <div class="radio-group">
                                    <input type="radio" name="area-servicio" value="Legal"><label class="label-radio"><?= __('promotores-clean-energy 8') ?></label>
                                </div>
                                <div class="radio-group">
                                    <input type="radio" name="area-servicio" value="Técnico"><label class="label-radio"><?= __('promotores-clean-energy 9') ?></label>
                                </div>

                                <div class="radio-group panel">
                                    <input type="radio" name="area-servicio" value="Paneles"><label class="label-radio"><?= __('promotores-clean-energy 10') ?></label>
                                </div>
                                <div class="radio-group">
                                    <input type="radio" name="area-servicio" value="PPAs"><label class="label-radio"><?= __('promotores-clean-energy 11') ?></label>
                                </div>
                            </div>
                            <textarea class="form-textarea" name="comentarios" placeholder="<?= __('promotores-clean-energy 12') ?>" rows="4"></textarea>
                            <input type="submit" value="Enviar" name="envia-promotor-cleanEnergy" class="btn bt-submit btn--lightblue">

                        </form>
                        <?php } ?>
                    </div>

                </div>

            </div>
            <div class="container cont_prog">
                
                <div class="programas__reunion border-top">
                    <div class="programas__reunion__info">
                        <h6><?= __('promotores-clean-energy 18') ?></h6>
                        <p><?= __('promotores-clean-energy 19') ?></p>
                    </div>
                    <div class="programas__reunion__contact">
                        <a class="btn btn--lightblue" id="myBtn"><?= __('promotores-clean-energy 20') ?></a>
                    </div>
                </div>

            </div>
        </section>

        <section class="programas__productos promotores">
            <div class="container">
                <p class="programas__productos__title"><?= __('promotores-clean-energy 21') ?></p>
                <div class="swiper" id="swiper-otros">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-clean-energy 22') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-compraventas')?>"><?= __('promotores-clean-energy 23') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/compraventas-small.jpg">
                        </div>
                    </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-clean-energy 24') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-avales')?>"><?= __('promotores-clean-energy 23') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/avales-small.jpg">
                        </div>
                    </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-clean-energy 25') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-financiacion')?>"><?= __('promotores-clean-energy 23') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/promotores-financiacion-small.jpg">
                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </main>

    <?php include('inc/footer.php') ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
       const swiperotros = new Swiper('#swiper-otros', {
        direction: 'horizontal',
        slidesPerView: 1,
        loop: true,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
    992: {
        slidesPerView: 2
    }
  }
    });
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
</script>
<style>
    .form-clean {
        flex-direction: column;
        align-items: initial;
    }
    .form-clean .radio-group {
        margin-bottom: 10px;
    }
</style>
</body>

</html>