<?php 
define('SECCION', 'promotores-financiacion');
include('inc/header.php'); 
?>
<body>
                <?php include('inc/modal/register_promotores.php');  ?>

    <main>
        <section class="programas-header" style="position: relative">
            <div class="programas__base__left" style="padding: 30px 0px !important">
                <small><span class="bold"><?= __('promotores-financiacion 0') ?></small>
                <h4 class="txt--lightblue"><?= __('promotores-financiacion 1') ?></h4>
            </div>
            <div class="financiacion-construccion" style="height: 400px"></div>
        </section>

        <section class="programas__content">
            <div class="container cont_prog" >

                <div class="programas__base">
                    <p><?= __('promotores-financiacion 2') ?><?= __('promotores-financiacion 3') ?></p>
                    <div class="programas__base__left__footer" >
                        <img src="imgs/EIF.svg" class="flag">
                        <img src="imgs/EU.svg" class="flag">
                    </div>
                    <div class="programas__list">
                        <div class="programas__base__list__benefit" data-aos="fade-up">
                            <p class="h9 txt--lightblue mb-1"><?= __('promotores-financiacion 22') ?></p>
                            <p class="small"><?= __('promotores-financiacion 23') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                            <p class="h9 txt--lightblue mb-1"><?= __('promotores-financiacion 24') ?></p>
                            <p class="small"><?= __('promotores-financiacion 25') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                            <p class="h9 txt--lightblue mb-1"><?= __('promotores-financiacion 26') ?></p>
                            <p class="small"><?= __('promotores-financiacion 27') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                            <p class="h9 txt--lightblue mb-1"><?= __('promotores-financiacion 28') ?></p>
                            <p class="small"><?= __('promotores-financiacion 29') ?></p>
                        </div>
                    </div>
                </div>

                <div class="programas__base__right" /*data-aos="fade-up"*/ >
                    <div class="programas__base__form">
                        <?php include(API_PATH.'forms/promotores_financiacion_form.php'); ?>
                        <div class="col-xs-12 text-center box-mensaje   ">
                            <?= $form_promotor_financiacion->mensaje_estado ?>
                        </div>
                        <?php if ($form_promotor_financiacion->estado != 'ok') { ?>                  
                        <form method="post" action="<?=url('promotores-financiacion')?>#form-pi" id="form-pi">
                        <p class="h9 txt--lightblue mb-2"><?= __('promotores-financiacion 4') ?></p>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('promotores-financiacion 5') ?>" name="nombre" type="text" class="form-input">
                                <input placeholder="<?= __('promotores-financiacion 6') ?>" name="apellido" type="text" class="form-input">
                            </div>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('promotores-financiacion 7') ?>" name="compania" type="text" class="form-input">
                                <input placeholder="<?= __('promotores-financiacion 8') ?>" name="correo" type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-financiacion 9') ?>" name="telefono" type="text" class="form-input">
                            </div>
                            <p class="h9 txt--lightblue mb-2"><?= __('promotores-financiacion 10') ?></p>

                            <div class="form-group">
                                <label><?= __('promotores-financiacion 11') ?></label>
                                <select class="form-select" name="Fotovoltaico">
                                    <option value="Fotovoltaico"><?= __('promotores-financiacion 12') ?></option>
                                    <option value="Eólico"><?= __('promotores-financiacion 13') ?></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-financiacion 14') ?>" name="potencia" type="text" class="form-input">
                            </div>

                            <div class="form-radio two-column">
                                <div class="form-group" style="width: 100%;margin-bottom: 10px;">
                                    <input placeholder="<?= __('promotores-financiacion 15') ?>" name="disponibilidad" type="text" class="form-input">
<!--                                 <p><?= __('promotores-financiacion 15') ?></p>
 -->                            </div>
                                <div class="radio-group" style="width: 100%;">
                                    <input type="radio" name="recurso"><small>P-50</small>
                                    <input type="radio" name="recurso"><small>P-90</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-financiacion 16') ?>" name="coste-anual" type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-financiacion 17') ?>" name="numero-hectareas" type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-financiacion 18') ?>" name="comunidad-autonoma" type="text" class="form-input">
                            </div>

                            <div class="form-group two-column">
                            <div class="select-group">
                                <label><?= __('promotores-financiacion 19') ?></label>
                                <select class="form-select" name="selectAnio">
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                            <div class="select-group">
                                <label><?= __('promotores-financiacion 20') ?></label>
                                <select class="form-select" name="selectMes" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            </div>
                            <input type="submit" name="envia-promotor-financiacion"  value="<?= __('promotores-financiacion 21') ?>" class="btn bt-submit btn--lightblue">

                        </form>
                        <?php } ?>
                    </div>

                </div>

            </div>

            <div class="container cont_prog">
                <div class="programas__reunion border-top">
                    <div class="programas__reunion__info">
                        <h6><?= __('promotores-financiacion 30') ?></h6>
                        <p><?= __('promotores-financiacion 31') ?></p>
                    </div>
                    <div class="programas__reunion__contact">
                        <a class="btn btn--lightblue" id="myBtn"><?= __('promotores-financiacion 32') ?></a>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="programas__productos promotores">
            <div class="container">
                <p class="programas__productos__title"><?= __('promotores-financiacion 33') ?></p>

                <div class="swiper" id="swiper-otros">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-financiacion 34') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-compraventas')?>"><?= __('promotores-financiacion 35') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/compraventas-small.jpg">
                        </div>
                    </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-financiacion 36') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-avales')?>"><?= __('promotores-financiacion 35') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/avales-small.jpg">
                        </div>
                    </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-financiacion 37') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-clean-energy')?>"><?= __('promotores-financiacion 35') ?></a>
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
<?= $form_promotor_financiacion->mensaje_estado == 'ok' ? "window.history.pushState(null, null, window.location.pathname);" : '' ?>
</script>
</body>

</html>