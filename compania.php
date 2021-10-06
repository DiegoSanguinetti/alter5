<?php 
define('SECCION', 'compania');
include('inc/header.php'); 
S?>
<body>
    <main>
        <section class="compania-header">
            <div class="compania-header__content">
                <p class="h7 txt--lightblue mb-3"><?= __('compania 0') ?></p>
                <p class="title"><?= __('compania 1') ?></p>
            </div>
        </section>

        <section class="compania-content">
            <div class="container">
                <div class="compania-content__grid">
                    <div class="compania-content__column two--column">
                        <p class="highlight"><?= __('compania 2') ?></p>
                    </div>
                    <div class="compania-content__column two--column">
                        <p class="text"><?= __('compania 3') ?></p>
                    </div>
                    <div class="compania-content__column one--column" data-aos="zoom-in">
                        <div class="compania-content__picture">
                            <div class="compania-content__picture__text">
                            <p class="h8"><?= __('compania 4') ?></p>
                        <h2><?= __('compania 5') ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="compania-content__column two--column">
                        <p class="text"><?= __('compania 6') ?></p>
                    </div>
                    <div class="compania-content__column two--column">
                        <p class="text"><?= __('compania 7') ?></p>
                    </div>
                    <div class="compania-content__column one--column border-top pt-8">
                        <p class="h8 txt--lightblue mb-3 text-center"><?= __('compania 8') ?></p>
                        <img src="imgs/alter-5-nombre.svg" alt="alter 5" data-aos="fade-up">
                    </div>
                    <div class="compania-content__column name-grid one--column">
                    <div class="compania-content_column">
                            <p class="text--small"><span class="bold">“Alter”</span> <?= __('compania 9') ?></p>
                    </div>
                    <div class="compania-content_column">
                            <p class="text--small"><?= __('compania 10') ?></p>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="compania-team">
            <div class="container">

                <h5 class="txt--lightblue"><?= __('compania 11') ?></h5>
                <div class="compania-team__grid">
            <div class="compania-team__column">
            <div class="compania-team__name__content">
            <p class="compania-team__name">Miguel Solana</p>
            <p class="compania-team__position">Partner</p>
            </div>
            <a class="btn btn--border" target="_blank" href="https://www.linkedin.com/in/miguel-solana/">LinkedIn</a>
        </div>

        <div class="compania-team__column">
            <div class="compania-team__name__content">
            <p class="compania-team__name">Salvador Carrillo</p>
            <p class="compania-team__position">Partner</p>
            </div>
            <a class="btn btn--border" target="_blank" href="https://www.linkedin.com/in/salvadorcarrillo/">LinkedIn</a>
        </div>

        <div class="compania-team__column">
            <div class="compania-team__name__content">
            <p class="compania-team__name">Gustavo Jurado</p>
            <p class="compania-team__position">Head of Energy Assets</p>
            </div>
            <a class="btn btn--border" target="_blank" href="https://www.linkedin.com/in/gustavo-jurado-pueyo-60060a7/">LinkedIn</a>
        </div>

        <div class="compania-team__column">
            <div class="compania-team__name__content">
            <p class="compania-team__name">Guillermo Souto</p>
            <p class="compania-team__position">Head of Asset Origination</p>
            </div>
            <a class="btn btn--border" target="_blank" href="https://www.linkedin.com/in/gsoutoz/">LinkedIn</a>
        </div>

        <div class="compania-team__column">
            <div class="compania-team__name__content">
            <p class="compania-team__name">Manuel Rojo</p>
            <p class="compania-team__position">Head of Investments</p>
            </div>
            <a class="btn btn--border" target="_blank" href="https://www.linkedin.com/in/manuel-rojo-seco/">LinkedIn</a>
        </div>

        <div class="compania-team__column">
            <div class="compania-team__name__content">
            <p class="compania-team__name">Santiago Molina</p>
            <p class="compania-team__position">Product Manager</p>
            </div>
            <a class="btn btn--border" target="_blank" href="https://www.linkedin.com/in/santiagomolina/">LinkedIn</a>
        </div>

        <div class="compania-team__column">
            <div class="compania-team__name__content">
            <p class="compania-team__name">Javier Ostos</p>
            <p class="compania-team__position">Investment Analyst</p>
            </div>
            <a class="btn btn--border" target="_blank" href="https://www.linkedin.com/in/fco-javier-ostos-enrile-/">LinkedIn</a>
        </div>

        <div class="compania-team__column">
            <div class="compania-team__name__content">
            <p class="compania-team__name">Arianna D'Ambrosio</p>
            <p class="compania-team__position">ESG Specialist</p>
            </div>
            <a class="btn btn--border" target="_blank" href="https://www.linkedin.com/in/arianna-d-ambrosio/">LinkedIn</a>
        </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('inc/footer.php') ?>

</body>
</html>