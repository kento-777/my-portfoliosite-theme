<?php get_header(); ?>
  <div class="header-sns">
    <a class="twitter" href="https://twitter.com/tsuchiken_777" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-twitter-square fa-3x color"></i>
    </a>
    <a class="instagram" href="https://www.instagram.com/thuchiken/" target="_blank" rel="noopener noreferrer">
     <i class="fab fa-instagram fa-3x color"></i>
    </a>
    <a class="mail" href="mailto:kentuuuwork@gmail.com">
     <i class="far fa-envelope fa-3x color"></i>
    </a>
  </div>
</div>
  </header>
    <main id="top-main">
      <section class="top-about">
        <div class="about-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/my-img.jpg" alt="my-img" />
        </div>
        <a href="/index.php?page_id=16">
          <div class="page-jump-button">WHO IS HE?</div>
        </a>
      </section>
      <section class="top-works">
        <div class="works-title"><h1>WORKS</h1></div>
        <div class="works-items">
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/clenzy-logo.png" alt="" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/tomoaki-logo.png" alt="" /></li>
        </div>
        <a href="/index.php?page_id=18">
          <div class="page-jump-button">VIEW ALL</div>
        </a>
      </section>
      <section class="top-skills">
        <div class="skills-title"><h1>SKILLS</h1></div>
        <div class="skills-items">
          <li>
            <img class="skills-img" src="<?php echo get_template_directory_uri(); ?>/images/figma.png" alt="" />
            <div class="skills-contents">
              <h2>Figma</h2>
              <p>
                こちらのサイトはFigmaを用いてフレームワークを完成させました。<br />
                そのため、実務での使用は問題ありません。
              </p>
            </div>
          </li>
          <li>
            <img class="skills-img" src="<?php echo get_template_directory_uri(); ?>/images/XD.png" alt="" />
            <div class="skills-contents">
              <h2>Adobe XD</h2>
              <p>
                以前、Adobe XDを用いてフレームワークの制作を行いました。<br />
                そのため、実務での使用は問題ありません。
              </p>
            </div>
          </li>
          <li>
            <img class="skills-img" src="<?php echo get_template_directory_uri(); ?>/images/html-css.png" alt="" />
            <div class="skills-contents">
              <h2>HTML & CSS</h2>
              <p>
                レスポンシブも含めたHTMLとCSSの基本的なコーディングは問題ありません。<br />
                BEMも使用経験あり。
              </p>
            </div>
          </li>
          <li>
            <img class="skills-img" src="<?php echo get_template_directory_uri(); ?>/images/sass.svg" alt="" />
            <div class="skills-contents">
              <h2>Sass</h2>
              <p>
                CSSはSassを用いてコーディングを行えます。<br />
                SassのMixinや、コンポ―ネントも理解し、 問題なく使用しています。
              </p>
            </div>
          </li>
        </div>
        <a href="/index.php?page_id=20">
          <div class="page-jump-button">VIEW ALL</div>
        </a>
      </section>
      <div class="scroll-icon">
        <p class="icon-title">SCROLL</p>
      </div>
    </main>
<?php get_footer(); ?>
  
