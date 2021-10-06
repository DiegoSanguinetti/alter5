<?php 
define('SECCION', 'inversores-equity-debt');
include('inc/header.php'); 
?>

<body>
        <?php include('inc/modal/register_inversores.php'); ?>

    <main>
        <section class="programas-header ">
            <div class="programas__base__left">
                <small><span class="bold"><?= __('inversores-equity-debt 0') ?></small>
                <h4 class="txt--blue"><?= __('inversores-equity-debt 1') ?></h4>
            </div>
            <div class="equity-debt" style="height: 400px"></div>
        </section>

        <section class="programas__content">
            <div class="container cont_prog">

                <div class="programas__base">
                    <ul><?= __('inversores-equity-debt 2') ?>
                    </ul>
                    <div class="programas__list">
                        <div class="programas__base__list__benefit" data-aos="fade-up">
                            <p class="h9 txt--blue mb-1"><?= __('inversores-equity-debt 11') ?></p>
                            <p class="small"><?= __('inversores-equity-debt 12') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--blue mb-1"><?= __('inversores-equity-debt 13') ?></p>
                            <p class="small"><?= __('inversores-equity-debt 14') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--blue mb-1"><?= __('inversores-equity-debt 15') ?></p>
                            <p class="small"><?= __('inversores-equity-debt 16') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--blue mb-1"><?= __('inversores-equity-debt 17') ?></p>
                            <p class="small"><?= __('inversores-equity-debt 18') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--blue mb-1"><?= __('inversores-equity-debt 19') ?></p>
                            <p class="small"><?= __('inversores-equity-debt 20') ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="programas__base__right" /*data-aos="fade-up"*/ >
                    <div class="programas__base__form">
                        <?php include(API_PATH.'forms/inversores_equity_debit_form.php'); ?>
                            <div class="col-xs-12 text-center box-mensaje   ">
                                <?= $inversores_equity_debt->mensaje_estado ?>
                            </div>
                        <?php if ($inversores_equity_debt->estado != 'ok') { ?>                  
                        <form method="post" action="<?=url('inversores-equity-debt')?>#form-ied" id="form-ied">
                            <p class="h9 txt--blue mb-2"><?= __('inversores-equity-debt 3') ?></p>
                            <div class="form-group two-column">
                                <input placeholder="<?= __('inversores-equity-debt 4') ?>" name="nombre" type="text" class="form-input">
                                <input placeholder="<?= __('inversores-equity-debt 5') ?>" name="apellido" type="text" class="form-input">
                            </div>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('inversores-equity-debt 6') ?>" name="compania" type="text" class="form-input">
                                <input placeholder="<?= __('inversores-equity-debt 7') ?>" name="correo" type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('inversores-equity-debt 8') ?>" name="telefono" type="text" class="form-input">
                            </div>

                            <textarea class="form-textarea" name="comentarios" placeholder="<?= __('inversores-equity-debt 9') ?>" rows="9"></textarea>

                            <input type="submit" name="envia-inversores-equity-debt" value="<?= __('inversores-equity-debt 10') ?>" class="btn bt-submit btn--blue">

                        </form>
                        <?php } ?>                 
                    </div>
                </div>

            </div>
            <div class="container cont_prog">
               <!-- <div class="programas__reunion border-top">
                    <div class="programas__reunion__info">
                        <h6>¿Deseas conocer Alter5 o resolver tus dudas? </h6>
                        <p>Solicita una reunión con nuestro equipo de originación.</p>
                    </div>
                    <div class="programas__reunion__contact">
                        <a class="btn btn--blue">Solicita una reunión</a>
                    </div>
                </div>-->
            </div>
        </section>

        <section class="programas__productos inversores">
            <div class="container">
                <p class="programas__productos__title"><?= __('inversores-equity-debt 21') ?></p>
                <div class="programas__productos__cards">
                    <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--blue"><?= __('inversores-equity-debt 22') ?></p>
                            <a class="btn btn--small btn--blue" href="<?=url('inversores-european-clean-energy')?>"><?= __('inversores-equity-debt 23') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/european-clean-energy-small.jpg">
                        </div>
                    </div>

                    <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--blue"><?= __('inversores-equity-debt 24') ?></p>
                            <a class="btn btn--small btn--blue myBtn3"><?= __('inversores-equity-debt 23') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/slider/dashboard-160x160.png">
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php include('inc/footer.php') ?>
<script type="text/javascript">
var modal = document.getElementById('myModalinversores');
document.querySelector('.myBtn3').addEventListener('click', function () {
    modal.style.display = "flex";
});
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
<?= $form_contacto_inversor->mensaje_estado != '' ? "modal.style.display = 'flex';window.history.pushState(null, null, window.location.pathname);" : '' ?>

</script>
</body>
</html>