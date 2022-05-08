<?php
include("./dashboard/functions.php");
$desc_shuffle = $SABranch->getData();
$TheDesc = array_map(function ($sa_branch) {
  return $sa_branch['title'];
}, $desc_shuffle);
$unique = array_unique($TheDesc);
sort($unique);
shuffle($desc_shuffle);
[$result, $total_pages] = $UA->getData();
?>
<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maysaa Ali Abdul Khaleq</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>


    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>
      <?php
      foreach ($Profile->getData() as $profile) :
        if ($profile['id'] == 1) :
      ?>

          <div class="sidebar-info">

            <figure class="avatar-box">

              <img src="./uploads/profile/<?php echo $profile['avatar'] ?>" alt="أ.م,د ميساء علي عبد الخالق " width="80">

            </figure>
            <div class="info-content">
              <h1 class="name" title="Richard hanrick">ا.م.د ميساء علي عبد الخالق</h1>

              <p class="title">دكتوراه فلسفة في علم الادوية</p>
              <br>
              <a href="./uploads/profile/<?php echo $profile['cv'] ?>" class="buttonDownload">DOWNLOAD CV</a>
            </div>

            <button class="info_more-btn" data-sidebar-btn>
              <span>Show Contacts</span>

              <ion-icon name="chevron-down"></ion-icon>
            </button>

          </div>
      <?php
        endif;
      endforeach;
      ?>
      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:maysaaali82a@gmail.com
              " class="contact-link">maysaaali82a@gmail.com
              </a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:#" class="contact-link">000000000</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">April 18, 1982</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address> بغداد</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>
        <a href="signin.php">
          <div class="icon-box">
            <ion-icon name="settings-outline"></ion-icon>
          </div>
        </a>
      </div>

    </aside>
    <!--
      - #main-content
    -->
    <div class="main-content">
      <!--
        - #NAVBAR
      -->
      <nav class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>الرئيسية</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الشهادات الدراسية</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الانشطة العلمية</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الانشطة الجامعية</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الابحاث العلميه</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>للتواصل</button>
          </li>
        </ul>
      </nav>

      <!--
        - #الرئيسية
      -->
      <br><br>
      <article class="الرئيسية  active" data-page="الرئيسية">

        <header>
          <h2 class="h2 article-title">ملخص تعريفي</h2>
        </header>

        <section class="about-text">
          <h3>
            صيدلانية اختصاص في علم الأدوية وفن التداوي والذي يتناول المعالجة الدوائية وما يترتب عليها من مراحل متعددة
            ابتداء من طرائق عمل الدواء المختلفة وتأثيرات الجسم الحي عليها بعمليات الامتصاص والتوزيع والايض والطرح وكذلك
            الاستطبابات والأعراض الجانبية والمحاذير وموانع الاستعمال بالإضافة الى الجرع العلاجية والجرع المفرطة
            وتأثيراتها السمية </h3>

        </section>



        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">المنشورات العلمية</h3>

          <ul class="testimonials-list has-scrollbar">
            <?php
            foreach ($SP->getData() as $sp) :
            ?>
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>

                  <figure class="testimonials-avatar-box">
                    <img src="./assets/images/avatar-2.png" alt="Daniel lewis" width="60" data-testimonials-avatar>

                  </figure>


                  <h2 class="h4 testimonials-item-title" data-testimonials-title>
                    <?php echo $sp['title']; ?>
                  </h2>
                  <hr>

                  <div class="testimonials-text" data-testimonials-text>
                    <p style="font-weight: bold;text-decoration: underline solid 2px;">Description</p>
                    <p>
                      <?php echo $sp['description']; ?>
                    </p>
                    <br>
                    <p style="font-weight: bold;">Publication date
                    </p>

                    <time datetime=""><?php echo date('M d,Y', strtotime($sp['publication_date'])) ?></time>
                    <button>


                      <a class="Viewarticle" href="<?php echo $sp['link']; ?>" target="_blank">View article </a>
                    </button>





                  </div>
                </div>
              </li>
            <?php
            endforeach;
            ?>
          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-2.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>
                Effect of new synthesized compounds of 2-Thiouracil
                Sulfonamide Derivatives against colon and liver carcinoma cells “In Vitro Study"

              </h4>

              <!-- <time datetime="2021-06-14">15 June, 2022</time> -->

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>


            <!-- المنشور الثاني -->


          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">الموقع البحثية </h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="https://www.scopus.com/authid/detail.uri?authorId=56811621000" target="_blank">
                <img src="./assets/images/Scopus_Logo.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://scholar.google.com/citations?user=d_yYA9UAAAAJ" target="_blank">
                <img src="./assets/images/Google Scholar.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://www.researchgate.net/profile/Maysaa-Ali" target="_blank">
                <img src="./assets/images/researchgate logo.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://orcid.org/0000-0003-3548-7835" target="_blank">
                <img src="./assets/images/orcid.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://publons.com/researcher/3179390/maysaa-ali-abdul-khaleq" target="_blank">
                <img src="./assets/images/Publons_logo.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="https://www.linkedin.com/in/maysaa-ali/?originalSubdomain=iq" target="_blanlk">
                <img src="./assets/images/LinkedIn_Logo.png" alt="client logo">
              </a>
            </li>

          </ul>

        </section>

      </article>

      <!--
        - #RESUME
      -->

      <article class="resume" data-page="الشهادات الدراسية">

        <header>
          <h2 class="h2 article-title">الشهادات الدراسية</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">الشهادات الدراسية</h3>

          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">بكلوريوس صيدلة / جامعة المستنصرية </h4>

              <span>2005 — 2004</span>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">ماجستير ادوية / كلية الطب/ جامعة النهرين </h4>

              <span>2011 — 2010</span>


            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">دكتوراة ادوية/ كلية الطب / جامعة النهرين</h4>

              <span>2016 — 2015</span>



            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">القاب العلمية</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">مدرس مساعد </h4>

              <span>2011/04/18</span>



            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">مدرس </h4>

              <span>2015/11/17</span>


            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">استاذ مساعد </h4>

              <span>2019/03/17</span>



            </li>

          </ol>

        </section>


      </article>


      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="الانشطة العلمية">

        <header>
          <h2 class="h2 article-title">الانشطة العلمية</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">
            <?php
            array_map(function ($brand) {
            ?>
              <li class="filter-item">
                <button data-filter-btn><?php echo $brand ?> </button>
              </li>
            <?php
            }, $unique); ?>
          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value> اختيار النشاط </div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <?php
              array_map(function ($brand) {
              ?>

                <li class="select-item">
                  <button data-select-item><?php echo $brand ?></button>
                </li>

              <?php
              }, $unique); ?>

            </ul>

          </div>

          <ul class="project-list">
            <?php
            foreach ($SA->getData() as $sa) :
              foreach ($SABranch->getData() as $sa_branch) :
                if ($sa_branch['id'] == $sa['branch']) :
            ?>
                  <li class="project-item active" data-activity-itemmm data-filter-item data-category="<?php echo $sa_branch['title'] ?>">
                    <div class="theoverlayy">

                      <figure class="project-img">
                        <div class="project-item-icon-box">
                          <ion-icon name="eye-outline"></ion-icon>
                        </div>
                        <img src="./uploads/SA/<?php echo $sa['image'] ?>" alt="<?php echo $sa['title'] ?>" data-activity-avatarrr>
                      </figure>
                      <h3 class="project-title" data-activity-titleee><?php echo $sa['title'] ?></h3>
                      <p class="project-category" data-activity-texttt><?php echo $sa_branch['title'] ?></p>
                    </div>
                  </li>
            <?php
                endif;
              endforeach;
            endforeach;

            ?>
          </ul>

        </section>
        <div class="modal-container fff" data-modal-containerrr>

          <div class="overlay" data-overlayyy></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btnnn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-2.png" alt="Daniel lewis" data-modal-imggg>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-titleee>
                Effect of new synthesized compounds of 2-Thiouracil
                Sulfonamide Derivatives against colon and liver carcinoma cells “In Vitro Study"

              </h4>

              <!-- <time datetime="2021-06-14">15 June, 2022</time> -->

              <div data-modal-texttt class="modal-desc">
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>


            <!-- المنشور الثاني -->


          </section>

        </div>
      </article>

      <!--
        - #BLOG
      -->

      <article class="blog" data-page="الانشطة الجامعية">
        <header>
          <h2 class="h2 article-title">الانشطة الجامعية</h2>
        </header>
        <section class="blog-posts">
          <ul class="blog-posts-list" id="content">
            <?php
            foreach ($UA->getAllData() as $ua) {
            ?>
              <li class="blog-post-item thing" data-university-itemmmm>
                <a>
                  <figure class="blog-banner-box">
                    <img src="./uploads/UA/<?php echo $ua['image'] ?>" alt="Design conferences in 2022" data-university-avatarrrr>
                  </figure>

                  <div class="blog-content">

                    <div class="blog-meta">



                      <time datetime="2022-02-23"><?php echo date('M d,Y', strtotime($ua['publication_date'])) ?></time>
                    </div>

                    <h3 class="h3 blog-item-title" data-university-titleeee><?php echo $ua['title']; ?></h3>

                    <p class="testimonials-text" data-university-textttt>
                      <?php echo $ua['description']; ?>
                    </p>
                    <div data-university-imgs style="display: none;">
                      <?php if (!empty($ua['image2'])) : ?>
                        <img src="./uploads/UA/<?php echo $ua['image2'] ?>" alt="Design conferences in 2022" width="100px">
                      <?php endif; ?>
                      <?php if (!empty($ua['image3'])) : ?>
                        <img src="./uploads/UA/<?php echo $ua['image3'] ?>" alt="Design conferences in 2022" width="100px">
                      <?php endif; ?>
                      <?php if (!empty($ua['image4'])) : ?>
                        <img src="./uploads/UA/<?php echo $ua['image4'] ?>" alt="Design conferences in 2022" width="100px">
                      <?php endif; ?>
                      <?php if (!empty($ua['image5'])) : ?>
                        <img src="./uploads/UA/<?php echo $ua['image5'] ?>" alt="Design conferences in 2022" width="100px">
                      <?php endif; ?>
                    </div>
                  </div>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>

          <div>

          </div>
          <div class="controlbtns">
            <div class="control forward"><ion-icon name="play-forward-outline"></ion-icon></div>
            <div class="control back"><ion-icon name="play-back-outline"></ion-icon></div>
          </div>

        </section>
        <div class="modal-container" data-modal-containerrrr>

          <div class="overlay" data-overlayyyy></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btnnnn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-2.png" alt="Daniel lewis" data-modal-imgggg>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-titleeee>
                Effect of new synthesized compounds of 2-Thiouracil
                Sulfonamide Derivatives against colon and liver carcinoma cells “In Vitro Study"

              </h4>

              <!-- <time datetime="2021-06-14">15 June, 2022</time> -->

              <div data-modal-textttt class="modal-desc">
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>
              <div data-modal-imgs class="imgsflex">

              </div>
            </div>


            <!-- المنشور الثاني -->


          </section>

        </div>
      </article>
      <!--
        - #reserachs
      -->

      <article class="blog" data-page="الابحاث العلميه">

        <header>
          <h2 class="h2 article-title">الابحاث العلميه</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">
            <?php
            foreach ($SP->getData() as $sp) :
            ?>
              <li class="content-card" data-research-itemm>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Daniel lewis" width="60" data-research-avatarr>
                </figure>
                <h2 class="h4 testimonials-item-title" data-research-titlee>
                  <?php echo $sp['title']; ?>
                </h2>
                <hr>

                <div class="testimonials-text" data-research-textt>
                  <p style="font-weight: bold;text-decoration: underline solid 2px;">Description</p>
                  <p>
                    <?php echo $sp['description']; ?>
                  </p>
                  <br>
                  <p style="font-weight: bold;">Publication date
                  </p>
                  <time datetime=""><?php echo date('M d,Y', strtotime($sp['publication_date'])) ?></time>
                  <button>
                    <a class="Viewarticle" href="<?php echo $sp['link']; ?>" target="_blank">View article </a>
                  </button>
                </div>
              </li>
              <!-- <li class="blog-post-item">
                  <div class="blog-content">
                    <h3 class="h3 blog-item-title"><?php echo $sp['title']; ?></h3>

                    <p class="blog-text">
                      <?php echo $sp['description']; ?>
                    </p>
                    <a class="Viewarticle" href="<?php echo $sp['link']; ?>" target="_blank">View article </a>
                    <div class="blog-meta">
                      <time datetime="2022-02-23"><?php echo date('M d,Y', strtotime($sp['publication_date'])) ?></time>
                    </div>
                  </div>

              </li> -->

            <?php
            endforeach;
            ?>
          </ul>

        </section>
        <div class="modal-container" data-modal-containerr>

          <div class="overlay" data-overlayy></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btnn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-2.png" alt="Daniel lewis" width="80" data-modal-imgg>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-titlee>
                Effect of new synthesized compounds of 2-Thiouracil
                Sulfonamide Derivatives against colon and liver carcinoma cells “In Vitro Study"

              </h4>

              <!-- <time datetime="2021-06-14">15 June, 2022</time> -->

              <div data-modal-textt class="modal-desc">
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>


            <!-- المنشور الثاني -->


          </section>

        </div>
      </article>
      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="للتواصل">
        <header>
          <h2 class="h2 article-title">للتواصل</h2>
        </header>
        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58837.44314001035!2d44.495990644047616!3d32.93602189713865!2m3!1f0!2f35.25856775528972!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x15577f67a0a74193%3A0x9deda9d2a3b16f2c!2z2KjYutiv2KfYrw!5e1!3m2!1sar!2siq!4v1648067160473!5m2!1sar!2siq" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">للتواصل</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>




            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script type="text/javascript">
    $(document).ready(function() {

      var items_per_page = 6;
      var current_page = 1;
      var total_items = $('.thing').length;
      var total_pages = Math.ceil(total_items / items_per_page);

      function page(current_page, items_per_page) {
        $('.thing').hide();
        var last_item = current_page * items_per_page;
        var first_item = last_item - items_per_page + 1;
        for (i = first_item; i <= last_item; i++) {
          $('.thing').eq(i - 1).show();
        }
      }

      // display 1st page
      page(current_page, items_per_page);

      // display next page
      $('.forward').click(function() {
        if (current_page != total_pages) current_page++;
        page(current_page, items_per_page);
      });

      // display previous page
      $('.back').click(function() {
        if (current_page != 1) current_page -= 1;
        page(current_page, items_per_page);
      });

    });
  </script>
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>