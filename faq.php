<?php
require_once('include.php');
$active1 = '';
$title = 'FAQs | ' . $siteName . ' – Answers to Your ICT Questions';
$description = 'Find answers to frequently asked questions about ' . $siteName . ' ICT services, including software development, web design, mobile apps, consultation, and more.';
$keyword = 'CloudSyncc FAQs, ICT FAQs, software development questions, IT services answers, web development support, mobile app development FAQs, tech company Nigeria, IT consultation FAQs, digital solutions questions, cloud hosting help'; ?>
<!DOCTYPE html>
<html lang="en" class="heading-black">

<?php require_once('head.php'); ?>

<body>

    <?php require_once('toper.php'); ?>


    <div id="smooth-wrapper">

        <?php require_once('header.php'); ?>

        <div id="smooth-content">

            <section style="padding-top: 100px;" class="tw-pt-224-px section-bg-two pb-120 overflow-hidden">
                <div class="container max-w-1290-px">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="text-center">
                                <h3 class="tw-mb-6">Hello, what can we help you find?</h3>
                                <p class="fw-medium text-neutral-500">At <?php print $siteName; ?>, we understand that clarity is key. Our FAQ section answers common questions about our services, processes, timelines, support, and more—helping you make informed decisions with confidence.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq-two py-120">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="">
                                <h3 class="splitTextStyleOne text-heading text-capitalize">
                                    Frequently ask
                                    <span class="font-dm-serif fst-italic fw-normal">Questions</span>
                                </h3>
                                <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-500-px tw-leading-212 fw-medium">Have questions? We've got answers. Our FAQ section provides quick insights into our services, processes, and how we work so you can get started with confidence.</p>

                                <div class="tw-mt-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="900">
                                    <a href="contact" class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke tw-gap-5 group active--translate-y-2 tw-rounded-xl text-capitalize tw-px-8 tw-py-505 fw-medium btn-main-two hover-style-two" data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Contact Us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="ps-xl-5">
                                <div class="accordion common-accordion style-two arrow-bg-orange" id="accordionExample">
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                What services does <?php print $siteName; ?> offer?
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500 tw-leading-212">
                                                    We offer a wide range of ICT services including software development, website and mobile app development, IT consultation, cloud hosting, cybersecurity, and digital marketing.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How long does it take to complete a project?
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500 tw-leading-212">
                                                    Project timelines vary depending on the scope and complexity. After an initial consultation, we’ll provide you with a clear timeline and milestones.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Can I get a custom solution for my business?
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500 tw-leading-212">
                                                    Absolutely! We specialize in tailored solutions designed to meet your unique business needs and goals.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Do you offer ongoing support after project delivery?
                                            </button>
                                        </h5>
                                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500 tw-leading-212">
                                                    Yes, we provide full post-deployment support, including maintenance, updates, troubleshooting, and performance optimization.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                What industries do you work with?
                                            </button>
                                        </h5>
                                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500 tw-leading-212">
                                                    We serve businesses across multiple industries, including finance, healthcare, education, logistics, retail, and more.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                                        <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                            <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                How do I get started with <?php print $siteName; ?>?
                                            </button>
                                        </h5>
                                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                                <p class="text-neutral-500 tw-leading-212">
                                                    Simply reach out through our contact page or request a free consultation. We'll guide you through the next steps to kick off your project.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section style="padding-bottom: 50px;" class="task-management bg-pink-more-light-half drag-rotate-element-section bg-neutral-light-half">
                <div class="container">
                    <div class="text-end tw--mb-40-px position-relative z-2">
                        <img src="assets/images/thumbs/laptop-man.png" alt="Image" class="tw-me-84-px">
                    </div>

                    <div class="bg-green-deep tw-rounded-3xl bg-green-deep tw-pt-100-px position-relative z-1">
                        <img src="assets/images/shapes/hill-shape.png" alt="Hill Shape" class="position-absolute w-100 h-100 top-0 tw-start-0 z-n1">
                        <img src="assets/images/thumbs/task-management-img.png" alt="Image" class="position-absolute tw-end-0 top-0 tw-me-5 tw-mt-5 d-lg-block d-none">

                        <div class="tw-mb-8 text-center max-w-570-px mx-auto">
                            <div class="tw-py-3 tw-px-305 rounded-pill fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max text-white bg-white-13" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                                <div class="">
                                    Up to <span class="text-yellow text-stroke-yellow">10%</span> off
                                </div>
                            </div>
                            <h3 class="splitTextStyleOne text-white">
                                Trusted ICT Experts for Digital Solutions
                            </h3>

                            <div class="d-block">
                                <div class="d-flex align-items-center tw-gap-4 justify-content-center flex-wrap">

                                    <a href="contact" class="hover--translate-y-1 active--translate-y-scale-9 btn hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-705 tw-rounded-2xl tw-py-6 fw-bold tw-mt-7" data-block="button">
                                        <span class="button__flair"></span>
                                        <div class="d-flex align-items-center tw-gap-2 z-1">
                                            <span class="button__label">Get Started</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="tw-pt-8 text-center">
                            <div class="myContainer position-relative d-flex flex-wrap align-items-center justify-content-center tw-gap-6 tw-pt-16 overflow-hidden w-100 tw-px-6">
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-white gradient-bg-six rounded-pill">Project management</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Technology</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-yellow rounded-pill">Project management</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Technology</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-orange rounded-pill">Project management</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading gradient-bg-six rounded-pill">Technology</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-paste rounded-pill">Project management</span>
                                <span class="drag-rotate-element cursor-grab min-w-max z-1 tw-px-9 tw-py-2 fw-semibold text-heading bg-pink rounded-pill">Technology</span>
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