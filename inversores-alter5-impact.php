<?php 
define('SECCION', 'inversores-alter5-impact');
include('inc/header.php'); 
?>

<body>
    <?php include('inc/modal/register_inversores.php'); ?>

    <main>
        <section class="programas-header ">
            <div class="programas__base__left">
                <small><span class="bold"><?= __('inversores-alter5-impact 0') ?></small>
                <h4 class="txt--blue"><?= __('inversores-alter5-impact 1') ?></h4>
            </div>
            <div class="alter5-impact" style="height: 400px"></div>
        </section>

        <section class="programas__content">
            <div class="container cont_prog">
                <div class="programas__base">

                    <p><span class="bold"><?= __('inversores-alter5-impact 2') ?></p>
                    <div class="programas__list">
                        <div class="programas__base__list__benefit" data-aos="fade-up">
                            <p class="h9 txt--blue mb-1"><?= __('inversores-alter5-impact 10') ?></p>
                            <p class="small"><?= __('inversores-alter5-impact 11') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--blue mb-1"><?= __('inversores-alter5-impact 12') ?></p>
                            <p class="small"><?= __('inversores-alter5-impact 13') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--blue mb-1"><?= __('inversores-alter5-impact 14') ?></p>
                            <p class="small"><?= __('inversores-alter5-impact 15') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--blue mb-1"><?= __('inversores-alter5-impact 16') ?></p>
                            <p class="small"><?= __('inversores-alter5-impact 17') ?></p>
                        </div>

                        <div class="programas__base__list__benefit border-top" data-aos="fade-up">
                        <p class="h9 txt--blue mb-1"><?= __('inversores-alter5-impact 18') ?></p>
                            <p class="small"><?= __('inversores-alter5-impact 19') ?></p>
                        </div>
                    </div>

                </div>

                <div class="programas__base__right" data-aos="fade-up">
                    <div class="programas__base__form">
                        <?php include(API_PATH.'forms/inversores_alter5_impact_form.php'); ?>
                            <div class="col-xs-12 text-center box-mensaje   ">
                                <?= $inversores_alter5_impact->mensaje_estado ?>
                            </div>
                        <?php if ($inversores_alter5_impact->estado != 'ok') { ?>                  
                        <form method="post" action="<?=url('inversores-alter5-impact')?>#form-iai" id="form-iai">                        <p class="h9 txt--blue mb-2"><?= __('inversores-alter5-impact 3') ?></p>
                            <div class="form-group two-column">
                                <input placeholder="<?= __('inversores-alter5-impact 4') ?>" name="nombre" type="text" class="form-input">
                                <input placeholder="<?= __('inversores-alter5-impact 5') ?>" name="apellido" type="text" class="form-input">
                            </div>

                            <div class="form-group two-column">
                                <input placeholder="<?= __('inversores-alter5-impact 6') ?>" name="compania" type="text" class="form-input">
                                <input placeholder="<?= __('inversores-alter5-impact 7') ?>" name="correo" type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <input placeholder="<?= __('inversores-alter5-impact 8') ?>" name="telefono" type="text" class="form-input">
                            </div>

                            <textarea class="form-textarea" name="comentarios" placeholder="<?= __('inversores-alter5-impact 24') ?>" rows="9"></textarea>

                            <input type="submit" name="envia_inversores_alter5_impact" value="<?= __('inversores-alter5-impact 9') ?>" class="btn bt-submit btn--blue">

                        </form>
                        <?php } ?>                  

                    </div>
                </div>
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
                <p class="programas__productos__title"><?= __('inversores-alter5-impact 20') ?></p>
                <div class="programas__productos__cards">
                <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--blue"><?= __('inversores-alter5-impact 21') ?></p>
                            <a class="btn btn--small btn--blue" href="<?=url('inversores-european-clean-energy')?>"><?= __('inversores-alter5-impact 22') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/european-clean-energy-small.jpg">
                        </div>
                    </div>
                    <div class="programas__productos__card">
                        <div class="programas__productos__card__text">
                            <p class="txt--blue"><?= __('inversores-alter5-impact 23') ?></p>
                            <a class="btn btn--small btn--blue" href="<?=url('inversores-equity-debt')?>"><?= __('inversores-alter5-impact 22') ?></a>
                        </div>
                        <div class="programas__productos__card__picture">
                            <img src="imgs/slider/dashboard.jpg">
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include('inc/footer.php') ?>

</body>

</html>