<?php if (isset($show_top) && $show_top == 'yes') { ?>
 <div class="bg-main-600 tw-py-205 d-sm-block d-none">
  <div class="container">
   <div class="d-flex justify-content-center">
    <p class="text-white bg-white-13 d-inline-block tw-py-1 tw-px-5 rounded-pill fw-normal"><?php print $siteName; ?> | Expert ICT Solutions – Software, Web & IT Services</p>
   </div>
  </div>
 </div>
<?php } ?>

<header class="header bg-white transition-all">
 <div class="container container-two">
  <nav class="d-flex align-items-center justify-content-between">
   <!-- Logo Start -->
   <div class="logo">
    <a href="./" class="link hover--translate-y-1 active--translate-y-scale-9">
     <img style="width: 70px;" src="img/logo.png" alt="Logo" class="max-w-200-px">
    </a>
   </div>
   <!-- Logo End  -->

   <!-- Menu Start  -->
   <div class="header-menu d-lg-block d-none">
    <!-- Nav menu Start -->
    <ul class="nav-menu d-lg-flex align-items-center tw-gap-14">
     <li class="nav-menu__item position-relative activePage">
      <a href="./" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Home</a>
     </li>

     <li class="nav-menu__item has-submenu position-relative">
      <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">About</a>
      <ul class="nav-submenu scroll-sm position-absolute tw-start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-y-auto tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">

       <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
        <a href="about" class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
         About Us
        </a>
       </li>

       <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
        <a href="teams" class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
         Teams
        </a>
       </li>

       <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
        <a href="faq" class="nav-submenu__link hover-bg-neutral-200 text-heading fw-semibold w-100 d-block tw-py-2 tw-px-305 tw-rounded">
         FAQ
        </a>
       </li>

      </ul>
     </li>

     <li class="nav-menu__item position-relative">
      <a href="services" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Services</a>
     </li>

     <li class="nav-menu__item position-relative">
      <a href="blog" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Blog</a>
     </li>

     <li class="nav-menu__item">
      <a href="contact" class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Contact</a>
     </li>
    </ul>
    <!-- Nav menu End  -->

   </div>
   <!-- Menu End  -->

   <!-- Header Right start -->
   <div class="d-flex align-items-center tw-gap-6">
    <a href="contact" class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main-two hover-style-two button--stroke d-sm-inline-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-9 rounded-pill tw-py-4 fw-semibold" data-block="button">
     <span class="button__flair"></span>
     <span class="button__label">Consult</span>
    </a>
    <button type="button" class="toggle-mobileMenu leading-none d-lg-none text-neutral-800 tw-text-9">
     <i class="ph ph-list"></i>
    </button>
   </div>
   <!-- Header Right End  -->
  </nav>
 </div>
</header>
<!-- ==================== Header End Here ==================== -->