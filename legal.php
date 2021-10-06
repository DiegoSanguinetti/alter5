<?php 
define('SECCION', 'legal');
include('inc/header.php'); 
?>
<body>
    <main>

    <section class="header-legal container">
      <h6 class="txt--lightblue"><?= __('legal 0') ?></h6>
      <h3 class="txt--blue"><?= __('legal 1') ?></h3>
    </section>
        <section class="preguntas">
      <div class="container">
        <div class="accordion">


          <ul>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 2') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <?= __('legal 3') ?>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 4') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <?= __('legal 5') ?>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <?= __('legal 6') ?>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 7') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 8') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 9') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 10') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 11') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 12') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 13') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 14') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 15') ?>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 16') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 17') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 18') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 19') ?>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 20') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 21') ?>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 22') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 23') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 24') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 25') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 26') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 27') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 28') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('legal 29') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('legal 30') ?></p>
                <?php include ('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <p><?= __('legal 31') ?></p>
              </div>
            </li>
          </ul>
        </div>

      </div>

    </section>
    </main>

    <?php include('inc/footer.php') ?>

    <script>
           const accordion = document.querySelector('.accordion');
    const items = accordion.querySelectorAll('.accordion__list');
    const questions = accordion.querySelectorAll('.accordion__question');

    function toggleAccordion() {
      const thisItem = this.parentNode;

      items.forEach(item => {
        if (thisItem == item) {
          thisItem.classList.toggle('open');
          return;
        }

        item.classList.remove('open');
      });
    }

    questions.forEach(question => question.addEventListener('click', toggleAccordion));
    </script>

</body>
</html>