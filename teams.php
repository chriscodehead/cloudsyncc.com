<?php
require_once('include.php');
$active1 = '';
$title = 'Meet Our Team | ' . $siteName . ' ICT Experts & Innovators';
$description = 'Get to know the expert team behind ' . $siteName . '. Our developers, designers, and consultants bring years of ICT experience and innovation to every project.';
$keyword = 'CloudSync team, ICT experts, software developers, tech team Nigeria, IT consultants, meet our team, web developers, digital solutions team, technology professionals, tech experts'; ?>
<!DOCTYPE html>
<html lang="en" class="heading-black">

<?php require_once('head.php'); ?>

<body>

  <?php require_once('toper.php'); ?>


  <div id="smooth-wrapper">

    <?php require_once('header.php'); ?>

    <div id="smooth-content">


      <section class="about-team py-120">
        <div class="container">
          <div class="max-w-602-px text-center mx-auto tw-mb-13">
            <h3 class="splitTextStyleOne text-heading text-capitalize text-capitalize">
              Meet our experts
            </h3>
            <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-500-px fw-medium">With diverse expertise and a shared commitment to excellence, we work together to turn your ideas into impactful digital solutions. </p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
              <div class="about-team group-item">
                <div class="position-relative tw-rounded-xl overflow-hidden">
                  <img src="assets/images/thumbs/about-team-img1.jpg" alt="Thumb" class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300">

                </div>
                <div class="tw-mt-705 text-center">
                  <h6 class="tw-mb-2">John Doe</h6>
                  <span class="text-capitalize text-neutral-500 tw-text-sm">creative director</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
              <div class="about-team group-item">
                <div class="position-relative tw-rounded-xl overflow-hidden">
                  <img src="assets/images/thumbs/about-team-img2.jpg" alt="Thumb" class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300">

                </div>
                <div class="tw-mt-705 text-center">
                  <h6 class="tw-mb-2">John Milton</h6>
                  <span class="text-capitalize text-neutral-500 tw-text-sm">creative director</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
              <div class="about-team group-item">
                <div class="position-relative tw-rounded-xl overflow-hidden">
                  <img src="assets/images/thumbs/about-team-img3.jpg" alt="Thumb" class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300">

                </div>
                <div class="tw-mt-705 text-center">
                  <h6 class="tw-mb-2">Robiul Hasan</h6>
                  <span class="text-capitalize text-neutral-500 tw-text-sm">creative director</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
              <div class="about-team group-item">
                <div class="position-relative tw-rounded-xl overflow-hidden">
                  <img src="assets/images/thumbs/about-team-img4.jpg" alt="Thumb" class="w-100 h-100 object-fit-cover hover-scale-108 tw-transition tw-duration-300">

                </div>
                <div class="tw-mt-705 text-center">
                  <h6 class="tw-mb-2">John Smith</h6>
                  <span class="text-capitalize text-neutral-500 tw-text-sm">creative director</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>


      <?php require_once('footer.php'); ?>

    </div>
  </div>

  <?php require_once('script.php'); ?>

</body>


</html>