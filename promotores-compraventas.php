<?php 
define('SECCION', 'promotores-compraventas');
include('inc/header.php'); 
?>
<body>
            <?php include('inc/modal/register_promotores.php');  ?>

    <main>
        <section class="programas-header">
            <div class="programas__base__left">
                <small><span class="bold"><?= __('promotores-compraventas 0') ?></small>
                <h4 class="txt--lightblue"><?= __('promotores-compraventas 1') ?></h4>
            </div>
            <div class="compraventas" style="height: 400px"></div>
        </section>

        <section class="programas__content">

            <div class="container cont_prog">

                <div class="programas__base">

                    <p><?= __('promotores-compraventas 42') ?></p>

                    <div class="programas__list">
                        <div class="programas__base__list__benefit" data-aos="fade-up">
                            <p class="h9 txt--lightblue mb-1"><?= __('promotores-compraventas 26') ?></p>
                            <p class="small"><?= __('promotores-compraventas 27') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-compraventas 28') ?></p>
                            <p class="small"><?= __('promotores-compraventas 29') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-compraventas 30') ?></p>
                            <p class="small"><?= __('promotores-compraventas 31') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--lightblue mb-1"><?= __('promotores-compraventas 32') ?></p>
                            <p class="small"><?= __('promotores-compraventas 33') ?></p>
                        </div>
                    </div>


                </div>

                <div class="programas__base__right" /*data-aos="fade-up"*/>

                    <div class="programas__base__form">
                        <?php include(API_PATH.'forms/promotores_compraventa_form.php'); ?>
                        <div class="col-xs-12 text-center box-mensaje   ">
                            <?= $form_promotor_compraventa->mensaje_estado ?>
                        </div>
                        <?php if ($form_promotor_compraventa->estado != 'ok') { ?>                  
                        <form method="post" action="<?=url('promotores-compraventas')?>#form-pc" id="form-pc">
                        <p class="h9 txt--lightblue mb-2"><?= __('promotores-compraventas 2') ?></p>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('promotores-compraventas 3') ?>" name="nombre" type="text" class="form-input">
                                <input placeholder="<?= __('promotores-compraventas 4') ?>" name="apellido" type="text" class="form-input">
                            </div>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('promotores-compraventas 5') ?>" name="compania" type="text" class="form-input">
                                <input placeholder="<?= __('promotores-compraventas 6') ?>" name="correo" type="text" class="form-input">
                            </div>
                            
                            <div class="form-group">
                                <input placeholder="<?= __('promotores-compraventas 7') ?>" name="telefono" type="text" class="form-input">
                            </div>

                            <p class="title-form txt--lightblue"><?= __('promotores-compraventas 8') ?></p>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-compraventas 9') ?>" name="totalidad" type="text" class="form-input">
                                <p class="small"><?= __('promotores-compraventas 10') ?></p>
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('promotores-compraventas 11') ?>" name="numero-proyectos" type="text" class="form-input">
                                <p class="small"><?= __('promotores-compraventas 12') ?></p>
                            </div>

                            <div class="form-group">
                                <p><?= __('promotores-compraventas 13') ?></p>
                                <p class="small"><?= __('promotores-compraventas 14') ?></p>
                            </div>

                            <div class="form-radio">
                                <input type="checkbox" name="greenfield" id="check-greenfield">
                                <label class="label-check" for="check-greenfield"><?= __('promotores-compraventas 15') ?></label>
                            </div>

                            <div class="form-radio">
                                <input type="checkbox" name="cercano-rtb" id="check-cercano-rtb">
                                <label class="label-check" for="check-cercano-rtb"><?= __('promotores-compraventas 16') ?></label>
                            </div>

                            <div class="form-radio">
                                <input type="checkbox" name="construccion" id="check-construccion">
                                <label class="label-check" for="check-construccion"><?= __('promotores-compraventas 17') ?></label>
                            </div>

                            <div class="form-radio">
                                <input type="checkbox" name="operacion" id="check-operacion">
                                <label class="label-check" for="check-operacion"><?= __('promotores-compraventas 18') ?></label>
                            </div>

                            <div class="form-group">
                            <p><?= __('promotores-compraventas 19') ?></p>
                            </div>
                            <div class="form-radio">
                                <input type="radio" name="recurso"><label class="label-radio sm"><?= __('promotores-compraventas 20') ?></label>
                            </div>
                            <div class="form-radio">
                                <input type="radio" name="recurso"><label class="label-radio sm"><?= __('promotores-compraventas 21') ?></label>
                            </div>
                            <div class="form-radio">
                                <input type="radio" name="recurso"><label class="label-radio sm"><?= __('promotores-compraventas 22') ?></label>
                            </div>
                            <div class="form-radio">
                                <input type="radio" name="recurso"><label class="label-radio sm"><?= __('promotores-compraventas 23') ?></label>
                            </div>

                            <div class="form-group">
                                <p><?= __('promotores-compraventas 43') ?></p>
                            </div>

                            <div class="form-radio">
                                <input type="checkbox" name="greenfield" id="check-greenfield-2">
                                <label class="label-check" for="check-greenfield-2"><?= __('promotores-compraventas 44') ?></label>
                            </div>

                            <div class="form-radio">
                                <input type="checkbox" name="cercano-rtb" id="check-cercano-rtb-2">
                                <label class="label-check" for="check-cercano-rtb-2"><?= __('promotores-compraventas 45') ?></label>
                            </div>

                            <div class="form-radio">
                                <input type="checkbox" name="construccion" id="check-construccion-2">
                                <label class="label-check" for="check-construccion-2"><?= __('promotores-compraventas 46') ?></label>
                            </div>

                            <textarea class="form-textarea" placeholder="<?= __('promotores-compraventas 24') ?>" name="comentarios" rows="4"></textarea>
                            <input type="submit" name="envia-promotor-compraventa" value="<?= __('promotores-compraventas 25') ?>" class="btn bt-submit btn--lightblue">
                        </form>
                        <?php } ?>
                    </div>

                </div>

            </div>
            <div class="container cont_prog">

                <div class="programas__reunion border-top">
                    <div class="programas__reunion__info">
                        <h6><?= __('promotores-compraventas 34') ?></h6>
                        <p><?= __('promotores-compraventas 35') ?></p>
                    </div>
                    <div class="programas__reunion__contact">
                        <a class="btn btn--lightblue" id="myBtn"><?= __('promotores-compraventas 36') ?></a>
                    </div>
                </div>

            </div>

        </section>

        <section class="programas__productos promotores">
            <div class="container">
                <p class="programas__productos__title"><?= __('promotores-compraventas 37') ?></p>
                <div class="swiper" id="swiper-otros">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-compraventas 38') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-financiacion')?>"><?= __('promotores-compraventas 39') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/promotores-financiacion-small.jpg">
                        </div>
                    </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-compraventas 40') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-avales')?>"><?= __('promotores-compraventas 39') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/avales-small.jpg">
                        </div>
                    </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--lightblue"><?= __('promotores-compraventas 41') ?></p>
                            <a class="btn btn--small btn--lightblue" href="<?=url('promotores-clean-energy')?>"><?= __('promotores-compraventas 39') ?></a>
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
<?= $form_promotor_compraventa->mensaje_estado == 'ok' ? "window.history.pushState(null, null, window.location.pathname);" : '' ?>
</script>

</body>

</html>