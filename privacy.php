<?php 
define('SECCION', 'privacy');
include('inc/header.php'); 
?>
<body>
  <main>
    <section class="header-legal container">
      <h6 class="txt--lightblue"><?= __('privacy 0') ?></h6>
      <h3 class="txt--blue"><?= __('privacy 1') ?></h3>
    </section>
    <section class="preguntas">
      <div class="container">
        <div class="accordion">
          <ul>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 2') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('privacy 3') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 4') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('privacy 5') ?>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 6') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <p><?= __('privacy 7') ?></p>
                <?= __('privacy 8') ?>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 9') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <ul class="accordion__inter__list"><?= __('privacy 10') ?>
                  
                </ul>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 11') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <p><?= __('privacy 12') ?></p>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 13') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <p><?= __('privacy 14') ?></p>
                <ol type="a" class="accordion__inter__list">
                  <?= __('privacy 15') ?>
                
                </ol>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 16') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <p><?= __('privacy 17') ?></p>
                  <ul class="accordion__inter__list" style="font-size: 0.7rem;"><?= __('privacy 18') ?>

                  </ul>
                  <p><?= __('privacy 19') ?></p>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 20') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('privacy 21') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 22') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <p><?= __('privacy 23') ?></p>
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 24') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer"><?= __('privacy 25') ?>
                
              </div>
            </li>
            <li class="accordion__list">
              <div class="accordion__question">
                <p><?= __('privacy 26') ?></p>
                <?php include('inc/modulo/cross.php') ?>
              </div>
              <div class="accordion__answer">
                <p><?= __('privacy 27') ?></p>
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