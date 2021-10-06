<?php 
define('SECCION', 'news-insight');
include('inc/header.php'); 
?>

<body>

    <main>

    <section class="header-contacto container pb-0">
      <h3 class="txt--blue"><?= __('news 0') ?></h3>
    </section>
    <section class="home-news">
            <div class="container">
                <div class="home-news__grid grid">
                    <div class="grid-sizer"></div>
                </div>
                <a href="https://medium.com/@alter5" target="_blank" class="btn btn--lightblue load"><?= __('news 1') ?></a>
            </div>
        </section>
    </main>

<?php include('inc/footer.php') ?>
<script src="inc/js/masonry.pkgd.min.js"></script>
<script>



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
    if(cont < 6){
        var hijo = document.createElement('article');
        var content = e.description.split('<p>');
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
        padre.appendChild(hijo);
    } cont ++ ;
    })).then( function () {
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