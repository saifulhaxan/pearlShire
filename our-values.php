<!DOCTYPE html>
<html>
<?php include 'headLinks.php' ?>

<body>
  <?php include 'navigation.php'; ?>
  <section class="about_section">
    <div class="DefaultPageHeaderDesktop mounted">

      <div class="DefaultPageHeaderDesktop__image">
        <img src="https://mered.ae/_ipx/f_webp,q_85,w_1920/assets/images/pages/values/background.jpg" width="1920">
        <div class="Gradient bottom"></div>
        <h1 class="DefaultPageHeaderDesktop__title">Our values</h1>
        <div class="container">
          <button class="StandardButton DefaultPageHeaderDesktop__back-button borderss" fdprocessedid="bllobn">
            <div class="Icon StandardButton__icon Icon-arrow-back" style="width: 1.1rem; height: 1.1rem;">
              <svg class="Icon_inner">
                <use xlink:href="#arrow-back"></use>
              </svg>
            </div>
            <span class="StandardButton__text">back</span>
            <!---->
          </button>
          <h2 class="DefaultPageHeaderDesktop__sub-title">Driven by <br>ambition <br>and growth</h2>
        </div>
        <p class="text__description scrollStarted">Our passion drives us to continually push<br>
          he boundaries of what’s possible in the<br>
          real estate industry.</p>
        <div class="text__container scrollStarted">
          <p class="text__sub-description">We are more than just a premium real estate developer. We are a carefully curated collective of industry experts, including designers, architects, engineers, contractors, artisans, and others. Our dedication lies in co-creating unique places that increase in value over time, become integral and enjoyable parts of people's lives, and stand the test of time in terms of their exceptional building quality.</p> <!---->
        </div>
      </div>
    </div>
  </section>
  <section class="about_section_two" id="about_section_two">

    <div class="DefaultPageSliderDesktop">
      <section class="slide active">
        <div class="slide__image"><img src="https://mered.ae/_ipx/f_webp,q_85,h_1080/assets/images/pages/values/00.jpg" height="1080"></div>
        <div class="slide__container" style="transform: translate(0%, -49.9999%) translate3d(0px, -0.161px, 0px); translate: none; rotate: none; scale: none; opacity: 1;">
          <h3 class="slide__title">Enriching<br>lives</h3>
          <p class="slide__sub-title">We do not just build buildings;<br>we build better lives.</p>
          <p class="slide__description">That is why we begin every project by asking two fundamental questions: Why? and Who? Why are we creating this place? And who will live or work here? We consider the needs and aspirations of the owners and the environment in which the development is located. Instead of imposing ourselves, we carefully integrate to enrich people’s lives within and around our projects. We genuinely care about the long-lasting impact our work will have on communities and cities once our construction is complete.</p>
        </div>
      </section>


      <section class="slide ">
        <div class="slide__image"><img src="https://mered.ae/_ipx/f_webp,q_85,h_1080/assets/images/pages/values/01.jpg" height="1080"></div>
        <div class="slide__container">
          <h3 class="slide__title">Fostering<br>lasting<br>relationships</h3>
          <p class="slide__sub-title">We believe in the power<br>of collaboration and cooperation.</p>
          <p class="slide__description">By working together with all our partners and leveraging each other’s strengths, we can achieve greater outcomes than we could ever achieve alone. We appreciate and celebrate individual creativity. Through dialogue, we encourage people to share their unique ideas and perspectives. We develop relationships by creating value and opportunities for all stakeholders involved. Thus, every project becomes an enjoyable journey for everyone who is part of it.</p>
        </div>
      </section>

      <section class="slide">
        <div class="slide__image"><img src="https://mered.ae/_ipx/f_webp,q_85,h_1080/assets/images/pages/values/02.jpg" height="1080"></div>
        <div class="slide__container">
          <h3 class="slide__title">Building<br>excellence and<br>delivering quality</h3>
          <p class="slide__sub-title">We are committed to building<br>excellence where quality is never<br>compromised. </p>
          <p class="slide__description">We hold ourselves accountable for every step of the project and every promise we make. We implement rigorous quality control measures to ensure that each phase of the construction process is completed accurately and efficiently.</p>
        </div>
      </section>
    </div>
  </section>
  <?php include 'footer.php' ?>
</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
<script src="assets/js/custom.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    var currentSlide = 0;
    var totalSlides = $('.slide').length;
    var isAnimating = false;

    function updateSlides() {
      // Remove all classes before reassigning
      $('.slide').removeClass('active ahead next behind');
      // Add 'behind' class to all previous slides
      $('.slide').slice(0, currentSlide).addClass('behind');
      // Add 'active' class to the current slide
      $('.slide').eq(currentSlide).addClass('active');
      // Add 'next' class to the next slide
      if (currentSlide + 1 < totalSlides) {
        $('.slide').eq(currentSlide + 1).addClass('next').addClass('ahead');
      }
      // Add 'ahead' class to slides after the next one
      $('.slide').slice(currentSlide + 2).addClass('ahead');
      // Update the SlideBar text
      $('.SlideBar__prev').text('0' + (currentSlide + 1));
      $('.SlideBar__next').text('0' + (currentSlide + 2));
    }

    function animateSlide(direction) {
      if (isAnimating) return; // Prevent multiple animations at the same time
      if (direction === 'next' && currentSlide < totalSlides - 1) {
        currentSlide++;
      } else if (direction === 'prev' && currentSlide > 0) {
        currentSlide--;
      }
      isAnimating = true;
      updateSlides();
      gsap.fromTo('.slide.active .slide__container', {
        opacity: 0
      }, {
        opacity: 1,
        duration: 1
      });
      gsap.fromTo('.slide.active .slide__image img', {
        scale: 1.1
      }, {
        scale: 1,
        duration: 1,
        onComplete: function() {
          isAnimating = false; // Allow new animations after the current one completes
        }
      });
    }
    $('.buttons__next').click(function() {
      animateSlide('next');
    });
    $('.buttons__prev').click(function() {
      animateSlide('prev');
    });
    // GSAP ScrollTrigger to pin the about section and start animations when fully in view
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.create({
      trigger: "#about_section_two",
      start: "top top", // Start when the top of #about_section_two hits the top of the viewport
      end: "+=1500", // Extend the pin duration by 1000px
      pin: true, // Pin the section
      onEnter: () => {
        // Re-attach the wheel event listener when the section is fully in view
        $(window).on('wheel', function(event) {
          if (event.originalEvent.deltaY > 1) {
            animateSlide('next'); // Scroll down to go to the next slide
          } else {
            animateSlide('prev'); // Scroll up to go to the previous slide
          }
        });
      },
      onLeaveBack: () => {
        // Optionally detach the event listener when the section leaves the viewport
        $(window).off('wheel');
      }
    });
    updateSlides(); // Initialize the first slide
  });
</script>

</html>