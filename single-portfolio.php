<?php get_header(); ?>

<main class="l-main">
  <article class="p-portfolio">
    <div class="p-portfolio__inner l-container">

        <header class="p-portfolio__header">
          <h1 class="p-portfolio__title">ここにタイトル</h1>
        </header>
        <div class="p-portfolio__thumbnail">
          <img src="https://placehold.jp/500x500.png" alt="">
        </div>
        <div class="p-portfolio__content">
          ここに本文。ここに本文。ここに本文。ここに本文。ここに本文。ここに本文。ここに本文。
        </div>

      <div class="p-portfolio__links">
        <div class="p-portfolio__archive">
          <a href="#">制作実績の一覧へ</a>
        </div>
        <div class="p-portfolio__archive">
          <a href="<?php echo home_url(); ?>">トップへ</a>
        </div>
      </div>
        
    </div>
  </article>
</main>

<?php get_footer(); ?>