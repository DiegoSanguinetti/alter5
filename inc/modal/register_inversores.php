    <div id="myModalinversores" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <img src="imgs/close.svg" class="close bt-close-modal">
                <p class="h9 txt--blue"><?= __('inversores 0') ?></p>
            </div>
            <?php include(API_PATH.'forms/register_inversor_form.php'); ?>
            <?php if ($form_contacto_inversor->estado != 'ok') { ?>                  
            <form method="post" action="<?= Url::actual() ?>#enviado">
            <div class="modal-body">
                <div class="form-group two-column">
                    <input placeholder="<?= __('inversores 17') ?>" name="nombre" type="text" class="form-input">
                    <input placeholder="<?= __('inversores 18') ?>" name="apellido" type="text" class="form-input">
                </div>

                <div class="form-group two-column">
                    <input placeholder="<?= __('inversores 19') ?>" name="compania" type="text" class="form-input">
                    <input placeholder="<?= __('inversores 20') ?>" name="correo" type="text" class="form-input">
                </div>
                
                <div class="form-group">
                    <input placeholder="<?= __('inversores 21') ?>" name="telefono" type="text" class="form-input">
                </div>
                <textarea class="form-textarea" name="comentarios" placeholder="<?= __('inversores 22') ?>" rows="4"></textarea>

                <div class="col-xs-12 text-center box-mensaje   ">
                    <?= $form_contacto_inversor->mensaje_estado ?>
                </div>

            </div>
            <div class="modal-footer">
                <input name="registra_inversor" type="submit" value="<?= __('inversores 23') ?>" class="btn bt-submit btn--small btn--blue">
            </div>
            </form>
            <?php } ?>                 
        </div>
    </div>



<style>
.modal {
    background-color: rgba(19, 40, 91, 0.4);
}
.alert-success {
    min-height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}
.myBtn2, .myBtn3, .myBtn {
    cursor: pointer ;
}
</style>
