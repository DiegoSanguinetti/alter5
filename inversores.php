<?php 
define('SECCION', 'inversores');
include('inc/header.php'); 
?>

<body class="inversor">

    <?php include('inc/modal/register_inversores.php'); ?>
    <main>

        <section class="inversores-header">
            <div class="container">
                <div class="promotores-header__content">
                    <p class="h8 mb-2"><?= __('inversores 1') ?></p>
                    <h5 class="mb-2"><?= __('inversores 2') ?></h5>
                    <p class="mb-3 small"><?= __('inversores 3') ?></p>
                    <a class="btn btn--border-white myBtn" ><?= __('inversores 4') ?></a>
                </div>
                <div class="inversores-header__cards">
                    <div class="inversores-header__card" data-aos="fade-up">
                        <h4 class="txt--lightblue">+ 200</h4>
                        <p><?= __('inversores 24') ?></p>
                    </div>
                    <div class="inversores-header__card" data-aos="fade-up">
                        <h4 class="txt--lightblue">1B €</h4>
                        <p><?= __('inversores 25') ?></p>
                    </div>
                    <div class="inversores-header__card" data-aos="fade-up">
                        <h4 class="txt--lightblue">+ 150 M €</h4>
                        <p><?= __('inversores 26') ?></p>
                    </div>
                </div>
        </section>

        <section class="promotores-programas prog_inver">
            <div class="container">

            
                <div class="promotores-programas__grid">
                  
                
               <div class="promotores-programas__otros__text" data-aos="fade-up">
                <div>
                  <p class="h8 txt--lightblue mb-2"><?= __('inversores 5') ?></p>
               <h3 class="txt--blue"><?= __('inversores 6') ?></h3>
               <p class="txt--blue small mb-3"><span class="bold"><?= __('inversores 7') ?></p>
               <a class="btn btn--blue" href="<?=url('inversores-european-clean-energy')?>"><?= __('inversores 8') ?></a>
                </div>
               </div>

               <div class="promotores-programas__otros__img r-column" data-aos="fade-up" data-aos-delay="100">
                <img src="imgs/european-clean-energy-box.png" alt="european-clean-energy">
               </div>

               <div class="promotores-programas__otros__img" data-aos="fade-up">
               <img src="imgs/equity-debt-box.png" alt="equity-debt">
               </div>

               <div class="promotores-programas__otros__text" data-aos="fade-up" data-aos-delay="100">
                <div>
                  <p class="h8 txt--lightblue mb-2"><?= __('inversores 9') ?></p>
               <h3 class="txt--blue"><?= __('inversores 10') ?></h3>
               <ul class="promotores-programas__otros__list"><?= __('inversores 11') ?>
               </ul>
               <a class="btn btn--blue" href="<?=url('inversores-equity-debt')?>"><?= __('inversores 12') ?></a>
                </div>
               </div>

                </div>
                </div>


                <div class="inversores__otros__principal">
                    <div class="container">
                    <div class="inversores__otros__text">
               <h2 class="txt--white"><?= __('inversores 13') ?></h2>
               <p class="txt--white small mb-4"><?= __('inversores 14') ?></p>
               </div>
                    <div class="inversores__otros__img" style="height: auto;"> <img width="100%" height="100%" src="imgs/slider/dashboard.jpg">
                    </div>
                    <div class="inversores__otros__text">
               <p class="txt--white small text-inversor"><?= __('inversores 15') ?></p>
               <a class="btn btn--border-white myBtn2" ><?= __('inversores 16') ?></a>
              </div>
                    </div>
                </div>
        </section>
    </main>


<?php include('inc/footer.php') ?>

<style>
.alert-success {
    min-height: 350px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}
.myBtn2 {
    cursor: pointer ;
}
</style>
<script>
/* Modal JavaScript */
var modal = document.getElementById('myModalinversores');
document.querySelector('.myBtn').addEventListener('click', function () {
    modal.style.display = "flex";
});
document.querySelector('.myBtn2').addEventListener('click', function () {
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
/* End Modal JavaScript */
<?= $form_contacto_inversor->mensaje_estado != '' ? "var modal = document.getElementById('myModalinversores'); modal.style.display = 'flex';window.history.pushState(null, null, window.location.pathname);" : '' ?>
</script>
</body>
</html>