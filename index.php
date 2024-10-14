<!DOCTYPE html>
<html>
<title> PearlShire </title>

<head>
   <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   <link rel="stylesheet" type="text/css" href="assets/css/custom_style.css">
   <link rel="stylesheet" type="text/css" href="assets/fonts/stylesheet.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.7.5/css/foundation.min.css">
   <!-- Slick CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
   <!-- Fullpage.js CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.19/fullpage.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

   <!-- Fullpage.js JavaScript -->
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.19/fullpage.min.js"></script> -->


</head>

<body>
   <style>
      .sectioon_two_para_1 {
         width: 310px;
         float: left;
         margin-right: 60px;
      }

      .section_two_partitions {
         width: 600px;
      }

      .CardsCard__description {
         width: 300px;
         margin-top: -60px;
      }

      .CardsCard__title {
         font-family: 'Header font';
         margin-top: 70px;
      }

      .StandardButton {
         margin-top: -70px;
      }

      .CardsCard__description_projects {
         margin: 10px 0px;
      }

      .CardsNewsItem__title {
         font-family: 'Header font';
      }

      .flex-direction-row {
         flex-direction: row;
      }

      .flex-direction-row .fp-overflow {
         justify-content: flex-start;
         max-height: max-content;
      }

      .fp-table {
         display: block !important;
      }

      .projectSection {
         background-color: #1b2222;
         height: 100vh;
      }

      .footer_section {
         background-color: #0d1313;
      }

      .h-100vh {
         height: 100vh;
      }

      .CardsNewsItem {
         height: auto !important;
      }


      @media(max-width: 1400px) {
         .CardsNewsItem__image {
            height: 205px;
         }

         .CardsCard__description_projects {
            margin: 10px 0px 0px !important;
         }

         .projectSection .fp-overflow {
            overflow-y: hidden;
         }

         .SocialLinks {
            margin-top: 2.5rem;
         }

         .addressBox {
            margin-bottom: 2rem;
         }

         /* .CardsNews__header {
            padding: 1rem 3.8rem 3rem;
         } */
      }

      /* #guiding .fp-overflow, #culture .fp-overflow {
         height: 100vh;
      } */
   </style>

   <?php include 'navigation.php'; ?>


   <div class="cards" id="fullpage">
      <section class="section flex-direction-row">
         <section class="grid-container full one">
            <div class="fullSlides">
               <div class="Slider_container">
                  <div class="slider_banner">
                     <div><img src="assets/images/01.webp"></div>
                     <div><img src="assets/images/02.webp"></div>
                     <div><img src="assets/images/03.webp"></div>
                     <div><img src="assets/images/04.webp"></div>
                     <div><img src="assets/images/05.webp"></div>
                  </div>
                  <div class="banner_content">
                     <h1> For People </h1>
                     <h1> For Life </h1>
                  </div>
                  <div class="logo_banner_footer">
                     <img src="assets/images/logo.png">
                  </div>
               </div>
            </div>
         </section>
      </section>
      <section class="home_section_two section">
         <div class="sectioon_two_heading">
            <h2> <span> Building Sustainable Futures. </span> <br> Enriching Communities. </h2>
            <div class="section_two_partitions">
               <p class="sectioon_two_para_1">
                  Pearlshire embodies a dynamic and visionary brand personality, exuding confidence. Rooted
                  in triumph, innovation, and advancement, Pearlshire adeptly navigates complex landscapes.
               </p>
               <p class="sectioon_two_para_2">
                  With a global outlook and a commitment to excellence, Pearlshire demonstrates exceptional expertise, embracing calculated risks for promising opportunities.
               </p>
            </div>
         </div>
      </section>
      <section class="home_section_three section" id="about">
         <div class="CardsCard card_0" style="z-index: 5;">
            <div class="wrapper">
               <div class="CardsCard__container">
                  <img src="https://mered.ae/_ipx/f_webp,q_85,w_1920/assets/images/pages/cards/00.jpg" width="1920" class="CardsCard__image">
                  <div class="text-container">
                     <h2 class="CardsCard__name">About us</h2>
                     <h3 class="CardsCard__title">Crafting real estate excellence</h3>
                     <p class="CardsCard__description">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the Lorem Ipsum has been the </p>
                     <button class="StandardButton CardsCard__action-button hover border" fdprocessedid="k4ed4">
                        <!----> <a href="about-us"><span class="StandardButton__text">Read More</span></a>
                        <!---->
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="home_section_four section" id="vision">
         <div class="CardsCard card_1" style="z-index: 4;">
            <div class="wrapper">
               <div class="CardsCard__container">
                  <img src="https://mered.ae/_ipx/f_webp,q_85,w_1920/assets/images/pages/cards/01.jpg" width="1920" class="CardsCard__image">
                  <div class="text-container">
                     <h2 class="CardsCard__name">Vision, Misson & Values</h2>
                     <h3 class="CardsCard__title">Time-Honoured Values</h3>
                     <p class="CardsCard__description">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the Lorem Ipsum has been the </p>
                     <button class="StandardButton CardsCard__action-button hover border" fdprocessedid="7sfztr">
                        <!----> <span class="StandardButton__text">Read More</span>
                        <!---->
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!---->
      <section class="CardsCard card_3 section" id="guiding">
         <div class="CardsCard card_1">
            <div class="wrapper">
               <div class="CardsCard__container">
                  <img src="https://mered.ae/_ipx/f_webp,q_85,w_1920/assets/images/pages/cards/03.jpg" width="1920" class="CardsCard__image">
                  <div class="text-container">
                     <h2 class="CardsCard__name">Guiding Principles</h2>
                     <h3 class="CardsCard__title">Upholding Success. Our<br> Core Principles.</h3>
                     <p class="CardsCard__description">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the Lorem Ipsum has been the </p>
                     <button class="StandardButton CardsCard__action-button hover border" fdprocessedid="9gtvok">
                        <!----> <span class="StandardButton__text">Read More</span>
                        <!---->
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="CardsCard card_4 section" id="culture">
         <div class="CardsCard card_1">
            <div class="wrapper">
               <div class="CardsCard__container">
                  <img src="https://mered.ae/_ipx/f_webp,q_85,w_1920/assets/images/pages/cards/04.jpg" width="1920" class="CardsCard__image">
                  <div class="text-container">
                     <h2 class="CardsCard__name">Corporate Culture</h2>
                     <h3 class="CardsCard__title">A Culture of Excellence. <br>Our Work Environment.</h3>
                     <p class="CardsCard__description">is simply dummy text of the printing and typesetting industry. Lor</p>
                     <button class="StandardButton CardsCard__action-button hover border" fdprocessedid="49uuml">
                        <!----> <span class="StandardButton__text">Read More</span>
                        <!---->
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="projectSection section">
         <div class="CardsNews">
            <div class="wrapper">
               <header class="CardsNews__header">
                  <a href="/news" class="" aria-label="Link to the news page">
                     <h3 class="CardsNews__title">Projects</h3>
                  </a>
                  <div class="controls">
                     <span class="controls__item prev">prev</span>
                     <span class="controls__separator"></span>
                     <span class="controls__item next">next</span>
                  </div>
                  <!-- <div class="scroll-container slider_news">
                 
               </div> -->

               </header>
               <div class="scroll-container">
                  <article class="CardsNewsItem">
                     <!--<span class="CardsNewsItem__date">2024-08-19</span>-->
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/68.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <h4 class="CardsNewsItem__title">
                        <p> Unveils New Headquarters in Dubai Internet City</p>
                     </h4>
                     <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                     <button class="StandardButton hover border" fdprocessedid="wfbpli">
                        <!----> <span class="StandardButton__text">read more</span>
                        <!---->
                     </button>
                  </article>
                  <article class="CardsNewsItem">
                     <!--<span class="CardsNewsItem__date">2024-08-19</span>-->
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/67.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <h4 class="CardsNewsItem__title">
                        <p> Expands to Abu Dhabi with Prime Waterfront Property on Al Reem Island</p>
                     </h4>
                     <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                     <button class="StandardButton hover border" fdprocessedid="4spwao">
                        <!----> <span class="StandardButton__text">read more</span>
                        <!---->
                     </button>
                  </article>
                  <article class="CardsNewsItem">
                     <!--<span class="CardsNewsItem__date">2024-08-19</span>-->
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/65.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <h4 class="CardsNewsItem__title">
                        <p>Six Elements That Attract European Buyers to UAE Luxury Real Estate</p>
                     </h4>
                     <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                     <button class="StandardButton hover border" fdprocessedid="8jiew4">
                        <!----> <span class="StandardButton__text">read more</span>
                        <!---->
                     </button>
                  </article>
                  <article class="CardsNewsItem">
                     <!--<span class="CardsNewsItem__date">2024-08-19</span>-->
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/66.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <h4 class="CardsNewsItem__title">
                        <p> CEO Explores Branded Residences in Design Middle East Magazine</p>
                     </h4>
                     <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                     <button class="StandardButton hover border" fdprocessedid="j12qf">
                        <!----> <span class="StandardButton__text">read more</span>
                        <!---->
                     </button>
                  </article>
                  <article class="CardsNewsItem">
                     <!--<span class="CardsNewsItem__date">2024-08-19</span>-->
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/52.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <h4 class="CardsNewsItem__title">
                        <p>Diana Nilipovscaia Joins Exclusive Dubai Business Women Council (DBWC)</p>
                     </h4>
                     <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                     <button class="StandardButton hover border">
                        <!----> <span class="StandardButton__text">read more</span>
                        <!---->
                     </button>
                  </article>
               </div>

            </div>
         </div>
      </section>
      <section class="section footer_section">
         <?php include 'footer.php' ?>
      </section>
   </div>