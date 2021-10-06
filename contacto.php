<?php 
define('SECCION', 'contacto');
include('inc/header.php'); 
?>
  <body>
    <main>
    <section class="header-contacto container">
      <h3 class="txt--blue"><?= __('contacto 0') ?></h3>
    </section>
    <section class="contacto container">
      <div class="contacto__grid">
        <div class="contacto__column"><?= __('contacto 1') ?></div>
          <div class="contacto__column">
            <?php include(API_PATH.'forms/contacto.php'); ?>
            <div class="col-xs-12 text-center box-mensaje   ">
              <?= $form_contacto_cc->mensaje_estado ?>
            </div>
            <?php if ($form_contacto_cc->estado != 'ok') { ?>                  
            <form method="post" action="<?=url('contacto')?>#contacto" id="contacto">
              <div class="form-group">
                <input placeholder="<?= __('contacto 2') ?>" name="nombre" type="text" class="form-input">
              </div>
              <div class="form-group">
                    <input placeholder="<?= __('contacto 3') ?>" name="correo" type="text" class="form-input">
              </div>
              <div class="form-group">
                    <input placeholder="<?= __('contacto 4') ?>" name="numero" type="text" class="form-input">
              </div>
              <div class="form-group">
                    <input placeholder="<?= __('contacto 5') ?>" name="empresa" type="text" class="form-input">
              </div>
              <textarea class="form-textarea" placeholder="<?= __('contacto 6') ?>" rows="4"></textarea>
              <div class="form-radio">
                  <input type="checkbox" name="comentario" id="terms">
                  <label class="label-check" for="terms"><?= __('contacto 7') ?><a href="<?=url('legal')?>"><?= __('contacto 9') ?></a><?= __('contacto 10') ?><a href="<?=url('privacy')?>"><?= __('contacto 11') ?></a></label>
              </div>
              <input type="submit" name="enviar_contacto_cc" value="<?= __('contacto 8') ?>" class="btn bt-submit">
            </form>
            <?php } ?>                  
          </div>
        </div>
      </section>
    </main>
    <?php include('inc/footer.php') ?>
    <script>
      <?= $form_contacto_cc->mensaje_estado != '' ? "window.history.pushState(null, null, window.location.pathname);" : '' ?>
    </script>
</body>
</html>