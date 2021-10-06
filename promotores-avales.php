<?php 
define('SECCION', 'promotores-avales');
include('inc/header.php'); 
?>
<body>
    <?php include('inc/modal/register_promotores.php');  ?>

    <main>
        <section class="programas-header financiacion-capital">
            <div class="programas__base__left">
                <small><span class="bold"><?= __('promotores-avales 0') ?></small>
                <h4 class="txt--lightblue"><?= __('promotores-avales 1') ?></h4>
            </div>
            <div class="financiacion-capital" style="height: 400px"></div>
        </section>

        <section class="programas__content">
            <div class="container cont_prog">

                <div class="programas__base">
                    <p><?= __('promotores-avales 35') ?></p>
                    <div class="programas__list">
                        <div class="programas__base__list__benefit" data-aos="fade-up">
                            <p class="h9 txt--lightblue mb-1"><?= __('promotores-avales 21') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-avales 22') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-avales 23') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-avales 24') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-avales 25') ?></p>
                        </div>
                    </div>
                </div>

                <div class="programas__base__right" data-aos="fade-up">
                    <div class="programas__base__form">
                        <?php include(API_PATH.'forms/promotores_avales_form.php'); ?>
                            <div class="col-xs-12 text-center box-mensaje   ">
                                <?= $form_promotor_avales->mensaje_estado ?>
                            </div>
                        <?php if ($form_promotor_avales->estado != 'ok') { ?>                  
                        <form method="post" action="<?=url('promotores-avales')?>#form-pa" id="form-pa">
                        <p class="h9 txt--lightblue mb-2"><?= __('promotores-avales 2') ?></p>
                            <p class="form-desc"><?= __('promotores-avales 3') ?></p>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('promotores-avales 4') ?>" name="nombre" type="text" class="form-input">
                                <input placeholder="<?= __('promotores-avales 5') ?>" name="apellido" type="text" class="form-input">
                            </div>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('promotores-avales 6') ?>" name="compania" type="text" class="form-input">
                                <input placeholder="<?= __('promotores-avales 7') ?>" name="correo" type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-avales 8') ?>" name="telefono" type="text" class="form-input">
                            </div>

                            <p class="title-form txt--lightblue"><?= __('promotores-avales 9') ?></p>
                            
                            <div class="form-group">
                                <input placeholder="<?= __('promotores-avales 10') ?>" name="totalidad" type="text" class="form-input">
                            </div>

                            <div class="form-radio">
                                <p><?= __('promotores-avales 11') ?></p>
                                <div class="radio-group">
                                    <input type="radio" name="estudio" value="si"><label class="label-radio"><?= __('promotores-avales 12') ?></label>
                                    <input type="radio" name="estudio" value="no"><label class="label-radio"><?= __('promotores-avales 13') ?></label>
                                </div>
                            </div>

                            <div class="form-radio">
                                <p><?= __('promotores-avales 14') ?></p>
                                <div class="radio-group">
                                    <input type="radio" name="valoracion" value="si"><label class="label-radio"><?= __('promotores-avales 12') ?></label>
                                    <input type="radio" name="valoracion" value="no"><label class="label-radio"><?= __('promotores-avales 13') ?></label>
                                </div>
                            </div>

                            <div class="form-radio">
                                <p><?= __('promotores-avales 15') ?></p>
                                <div class="radio-group">
                                    <input type="radio" name="terrenos-asegurados" value="si"><label class="label-radio"><?= __('promotores-avales 12') ?></label>
                                    <input type="radio" name="terrenos-asegurados" value="no"><label class="label-radio"><?= __('promotores-avales 13') ?></label>
                                </div>
                            </div>

                            <textarea class="form-textarea" name="comentario" placeholder="<?= __('promotores-avales 16') ?>" rows="4"></textarea>

                                <div class="form-radio">
                                    <input type="checkbox" name="comunicaciones" id="check-comunicaciones">
                                    <label class="label-check" for="check-comunicaciones"><?= __('promotores-avales 17') ?></span>
                                    </label>
                                </div>

                                <div class="form-radio">
                                    <input type="checkbox" name="datos-personales" id="check-datos-personales">
                                    <label class="label-check" for="check-datos-personales"><?= __('promotores-avales 18') ?></span>
                                    </label>
                                </div>

                            <input type="submit" name="envia-promotor-avales" value="<?= __('promotores-avales 19') ?>" class="btn bt-submit btn--lightblue">
                            <input type="hidden" value="<?= __('promotores-avales 20') ?>">
                        </form>
                        <?php } ?>
                    </div>

                </div>

            </div>

            <div class="container cont_prog">
                <div class="programas__reunion border-top">
                    <div class="programas__reunion__info">
                        <h6><?= __('promotores-avales 25') ?></h6>
                        <p><?= __('promotores-avales 26') ?></p>
                    </div>
                    <div class="programas__reunion__contact">
                        <a class="btn btn--lightblue" id="myBtn"><?= __('promotores-avales 27') ?></a>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="programas__productos promotores">
            <div class="container">
                <p class="programas__productos__title"><?= __('promotores-avales 29') ?></p>

                <div class="swiper" id="swiper-otros">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-avales 30') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-financiacion')?>"><?= __('promotores-avales 31') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/promotores-financiacion-small.jpg">
                        </div>
                    </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-avales 32') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-compraventas')?>"><?= __('promotores-avales 33') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/compraventas-small.jpg">
                        </div>
                    </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-avales 34') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-clean-energy')?>"><?= __('promotores-avales 35') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/clean-energy-small.jpg">
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

<style>

</style>
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
<?= $form_promotor_avales->mensaje_estado == 'ok' ? "window.history.pushState(null, null, window.location.pathname);" : '' ?>

</script>
</body>

</html>