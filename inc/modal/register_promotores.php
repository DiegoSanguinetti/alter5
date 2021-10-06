<?php       






?>
<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <img src="imgs/close.svg" class="close bt-close-modal">
            <p class="h9 txt--lightblue"><?= __('promotores 0') ?></p>
        </div>
        <?php include(API_PATH.'forms/register_promotores_form.php'); ?>
        <?php if ($form_contacto->estado != 'ok') { ?>                  
        <form method="post" action="<?= Url::actual() ?>#enviado">
            <div class="modal-body">
                <div class="form-group two-column">
                    <input placeholder="<?= __('promotores 23') ?>" name="nombre_register_promotores" type="text" class="form-input">
                    <input placeholder="<?= __('promotores 24') ?>" name="apellido_register_promotores" type="text" class="form-input">
                </div>

                <div class="form-group two-column">
                    <input placeholder="<?= __('promotores 25') ?>" name="compania_register_promotores" type="text" class="form-input">
                    <input placeholder="<?= __('promotores 26') ?>" name="correo_register_promotores" type="text" class="form-input">
                </div>
                
                <div class="form-group">
                    <input placeholder="<?= __('promotores 27') ?>" name="telefono_register_promotores" type="text" class="form-input">
                </div>
                <textarea class="form-textarea" placeholder="<?= __('promotores 28') ?>" rows="4" name="comentarios_register_promotores"></textarea>
                <div class="col-xs-12 text-center box-mensaje   ">
                    <?= $form_contacto->mensaje_estado ?>
                </div>

            </div>
            <div class="modal-footer">
                <input type="submit" name="registra_promotor" value="<?= __('promotores 29') ?>" class="btn bt-submit btn--small btn--lightblue">
            </div>
        </form>
        <?php } ?>
    </div>
</div>

<style>
.modal {
    background-color: rgba(81, 182, 190, 0.4);
}
.alert-success {
    min-height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}
</style>
<script>
<?= $form_contacto->mensaje_estado != '' ? "var modal = document.getElementById('myModal'); modal.style.display = 'flex';window.history.pushState(null, null, window.location.pathname);" : '' ?>
</script>
