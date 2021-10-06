<footer class="footer">
        <div class="footer__grid container">
            <div class="footer__logo">
                <img src="imgs/alter-5-footer.svg" alt="alter">
                <p>© 2021 <?= __('footer 3')?></p>
            </div>
            <div class="footer__nav">
                <ul>
                    <li><a href="<?=url('contacto')?>" class="bold txt--lightblue"><?= __('footer 0')?></a></li>
                    <li><a href="<?=url('legal')?>"><?= __('footer 1')?></a></li>
                    <li><a href="<?=url('privacy')?>"><?= __('footer 2')?></a></li>
                    <li>© 2021 <?= __('footer 3')?></li>
                </ul>
            </div>
        </div>
</footer>

<script src="dist/aos/aos.js"></script>
<script src="inc/js/main.js?v=<?php echo(rand()); ?>"></script>