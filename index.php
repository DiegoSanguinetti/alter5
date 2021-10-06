<?php 
define('SECCION', 'home');
include('inc/header.php'); 


?>
<body>
    <main>
        <section class="home-header">
            <div class="home-header__bg">
                <img src="imgs/hader-home-top-image.png" class="home-header--top" data-aos="zoom-in">
                <div class="container">
                    <h2><?= __('home 0') ?></h2>
                    <p class="home-header__text"><span class="bold">Alter5</span><?= __('home 1') ?></p>
                    <a class="btn btn--lightblue mr-1" style="font-size:  1.5rem;padding: 1rem 2.5rem;" href="<?=url('promotores')?>"><?= __('home 2') ?></a>
                    <a class="btn btn--blue" style="font-size:  1.5rem;padding: 1rem 2.5rem;" href="<?=url('inversores')?>"><?= __('home 3') ?></a>
                </div>
            </div>
            
            <div class="container home-header__content">
                <div class="home-header__cards">

                    <div class="home-header__card" style="padding: 30px" data-aos="fade-up">
                        <h4 style="margin-bottom: 13px;"><?= __('home 17') ?></h4>
                        <p style="font-size: 18px;"><?= __('home 4') ?></p>
                    </div>
                    <div class="home-header__card" style="padding: 30px" data-aos="fade-up">
                        <h4 style="margin-bottom: 13px;"><?= __('home 18') ?></h4>
                        <p style="font-size: 18px;"><?= __('home 5') ?></p>
                    </div>
                    <div class="home-header__card" style="padding: 30px" data-aos="fade-up">
                        <h4 style="margin-bottom: 13px;"><?= __('home 19') ?></h4>
                        <p style="font-size: 18px;"><?= __('home 6') ?></p>
                    </div>
                    
                </div>

<!--                 <div class="inversores-header__cards">
                    <div class="inversores-header__card" data-aos="fade-up">
                        <h4>2GW+</h4>
                        <p><?= __('home 4') ?></p>
                    </div>
                    <div class="inversores-header__card" data-aos="fade-up">
                        <h4>EUR 1bn+</h4>
                        <p><?= __('home 5') ?></p>
                    </div>
                    <div class="inversores-header__card" data-aos="fade-up">
                        <h4>6bn+ tonne</h4>
                        <p><?= __('home 6') ?></p>
                    </div>
                </div> -->

            </div>
        </section>

        <section class="home-content">
            <div class="container">
                <h3 class="txt--lightblue"><?= __('home 7') ?></h3>
                <p class="text-hidden"><?= __('home 8') ?></p>
            </div>

            <div class="home-content__carrousel">
                <div class="swiper" id="swiper-home">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="imgs/slider/alter-home-carrousel-1_ds.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="imgs/slider/alter-home-carrousel-2_ds.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="imgs/slider/alter-home-carrousel-3_ds.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="imgs/slider/alter-home-carrousel-4_ds.png">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="container">
                <div class="home-content__grid">
                    <div class="home-content__promotor">
                        <p class="text-hidden"><?= __('home 9') ?></p>
                        <ul><?= __('home 15') ?>
                        </ul>
                        <a class="btn btn--lightblue" href="<?=url('promotores')?>"><?= __('home 10') ?></a>
                    </div>

                    <div class="home-content__inversor">
                        <p class="text-hidden"><?= __('home 11') ?></p>
                        <ul><?= __('home 16') ?>
                        </ul>
                        <a class="btn btn--blue" href="<?=url('inversores')?>"><?= __('home 12') ?></a>
                    </div>

                    <div class="home-content__desc">
                        <p><span class="bold">Alter5</span> <?= __('home 13') ?></p>
                    </div>
                </div>

            </div>
        </section>

        <section class="home-news">
            <div class="container">
                <h6 class="txt--lightblue">News & Insights</h6>
                <div class="home-news__grid grid">
                    <div class="grid-sizer"><!--Se llena con JS--></div>
                </div>
                <a href="<?=url('news-insight')?>" class="btn btn--lightblue load"><?= __('home 14') ?></a>
            </div>
        </section>
    </main>

<?php include('inc/footer.php') ?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="inc/js/masonry.pkgd.min.js"></script>
<script>
//carrousel
const swiperhome = new Swiper('#swiper-home', {
    direction: 'horizontal',
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    autoplay:true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
    // when window width is >= 320px
    // when window width is >= 640px
    767: {
        slidesPerView: 2.5
        }
    }
});


const MdFetch = async (name) => {
  const res = await fetch(
    `https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/${name}`
  );
  return await res.json();
};
const padre = document.querySelector('.grid-sizer');
//val.items
var cont = 0;
setTimeout(acomodar(),1000);
function acomodar(){
    MdFetch('@alter5').then(val => val.items.forEach((e) => {
    console.log(e);
    if(cont < 3){
    var hijo = document.createElement('article');
    var content = e.content.split('<p>');
    var puntitos = content[1].length > 272 ? '...' : '';
    hijo.classList = 'home-news__card grid-item';
    hijo.innerHTML = `
        <div class="home-news__card__picture">
            <img src="${e.thumbnail}" alt="news">
        </div>
        <div class="home-news__card__info">
            <p class="home-news__date">${e.pubDate}</p>
            <p class="home-news__title">${e.title}</p>
            <p class="home-news__text">${content[1].slice(0, 272).replace(/<[^>]*>?/g, '')+puntitos}</p>
            <a target="_blank" href="${e.link}" class="btn btn--border">Read More</a>
        </div>
    `;
    padre.appendChild(hijo);} cont ++ ;
    })).then(function () {
        var elem = document.querySelector('.grid');
            var msnry = new Masonry( elem, {
              // options
              itemSelector: '.grid-item',
              columnWidth: '.grid-sizer',
              percentPosition: true,
              gutter:20
            });
        

    });
}









</script>
</body>
</html>