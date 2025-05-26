<?php
require_once('include.php');
$active1 = '';
$title = 'Contact | ' . $siteName . ' – Answers to Your ICT Questions';
$description = 'Find answers to frequently asked questions about ' . $siteName . ' ICT services, including software development, web design, mobile apps, consultation, and more.';
$keyword = 'CloudSyncc FAQs, ICT FAQs, software development questions, IT services answers, web development support, mobile app development FAQs, tech company Nigeria, IT consultation FAQs, digital solutions questions, cloud hosting help';

function contactUsMail($name, $phone, $email, $subject, $message)
{
    $to  = 'info@cloudsyncc.com';
    $subject = $subject;
    $info = $message . '<br /></br>
  <h3>Client Details:</h3>
  <strong>
    Subject: ' . $subject . ',<br />
    Name: ' . $name . ',<br />
    Email: ' . $email . ',<br />
    Phone: ' . $phone . ',<br />
  </strong>';
    $content = $info;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: CloudSync <support@cloudsyncc.com>' . "\r\n";
    $retval = @mail($to, $subject, $content, $headers);
    if ($retval) {
        return  'Mail sent successfully';
    } else {
        return 'Internal error. Mail fail to send';
    }
}

if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = 'Client trying to contact you';
    $message = $_POST['message'];
    if (!empty($_POST['email']) && !empty($_POST['message'])) {
        $msg = contactUsMail($name, $phone, $email, $subject, $message);
    } else {
        $msg =  'Please fill all fields';
    }
}

?>
<!DOCTYPE html>
<html lang="en" class="heading-black">

<?php require_once('head.php'); ?>

<body>

    <?php require_once('toper.php'); ?>

    <div id="smooth-wrapper">

        <?php require_once('header.php'); ?>

        <div id="smooth-content">

            <section style="padding-top: 70px; padding-bottom: 70px;" class="breadcrumb section-bg-two mb-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center">
                                <span class="tw-mb-4">
                                    <img src="assets/images/logo/favicon-two.png" alt="Favicon Two">
                                </span>
                                <h1 class="mb-0 splitTextStyleOne text-capitalize"> Get In Touch</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-neutral-light-half style-two">
                <div class="container">
                    <div class="bg-white tw-py-9 tw-px-8">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100">
                                    <span class="tw-mb-705">
                                        <img src="assets/images/icons/contact-icon1.svg" alt="Icon" class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                    </span>
                                    <h5 class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne">address line</h5>
                                    <div class="max-w-250-px mx-auto">
                                        <p class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne"><?php print $siteAddress; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100">
                                    <span class="tw-mb-705">
                                        <img src="assets/images/icons/contact-icon2.svg" alt="Icon" class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                    </span>
                                    <h5 class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne">Phone Number</h5>
                                    <div class="max-w-250-px mx-auto">
                                        <a href="tel:<?php print $sitePhone; ?>" class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne"><?php print $sitePhone; ?></a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100">
                                    <span class="tw-mb-705">
                                        <img src="assets/images/icons/contact-icon3.svg" alt="Icon" class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                                    </span>
                                    <h5 class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne">Mail Address</h5>
                                    <div class="max-w-250-px mx-auto">
                                        <a href="mailto:<?php print $siteEmail; ?>" class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne"><?php print $siteEmail; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-120">
                <div class="container">
                    <div class="row gy-5">
                        <div class="col-lg-6">
                            <div class="pe-xl-5 pe-lg-4">
                                <div class="">
                                    <span class="splitTextStyleTwo tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Get In Touch</span>
                                    <h3 class="splitTextStyleOne tw-mb-4">Contact Us</h3>
                                    <p class="text-neutral-900">We’re here to help! Reach out to <?php print $siteName; ?> for inquiries, support, or to start your next project. Let’s build something great together.</p>
                                </div>
                                <div class="xs-grid-cols-2 d-grid tw-mt-16 tw-gap-74-px">
                                    <div class="d-flex align-items-start tw-gap-6">
                                        <span class="tw-text-3xl text-main-600 d-flex">
                                            <i class="ph-bold ph-map-pin"></i>
                                        </span>
                                        <div class="">
                                            <h6 class="tw-mb-4">Location</h6>
                                            <p class="text-neutral-600"><?php print $siteAddress; ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start tw-gap-6">
                                        <span class="tw-text-3xl text-main-600 d-flex">
                                            <i class="ph-bold ph-phone"></i>
                                        </span>
                                        <div class="">
                                            <h6 class="tw-mb-4">Phone</h6>
                                            <a href="tel:<?php print $sitePhone; ?>" class="text-neutral-600 hover-text-main-600"><?php print $sitePhone; ?></a>

                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start tw-gap-6">
                                        <span class="tw-text-3xl text-main-600 d-flex">
                                            <i class="ph-bold ph-envelope-simple"></i>
                                        </span>
                                        <div class="">
                                            <h6 class="tw-mb-4">Location</h6>
                                            <a href="mailto:<?php print $siteEmail; ?>" class="text-neutral-600 hover-text-main-600"><?php print $siteEmail; ?></a>
                                            <a href="mailto:<?php print $site; ?>" class="text-neutral-600 hover-text-main-600"><?php print $site; ?></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start tw-gap-6">
                                        <span class="tw-text-3xl text-main-600 d-flex">
                                            <i class="ph-bold ph-share-network"></i>
                                        </span>
                                        <div class="">
                                            <h6 class="tw-mb-4">Social</h6>
                                            <ul class="d-flex align-items-center tw-gap-3 justify-content-center tw-mt-6">
                                                <li>
                                                    <a href="<?php print $siteFacebook; ?>" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                                        <i class="ph ph-facebook-logo"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php print $siteTwitter; ?>" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                                        <i class="ph ph-x-logo"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php print $siteInstagram; ?>" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center bg-white hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                                                        <i class="ph ph-instagram-logo"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- map Start -->
                                <div class="map tw-mt-15">
                                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5591642.125572935!2d-118.45027922609367!3d46.81821123121407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5343f19fafa367dd%3A0xe0a08a08122c4da1!2sHelena-Lewis%20and%20Clark%20National%20Forest!5e0!3m2!1sen!2sbd!4v1731480188813!5m2!1sen!2sbd" class="w-100" height="240" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                                </div>
                                <!-- map End -->
                            </div>
                        </div>

                        <div class="col-lg-6 ps-lg-5">
                            <div class="bg-neutral-50 tw-py-17 tw-px-705">
                                <h4 class="tw-mb-4">Fill Up The Form</h4>
                                <p class="text-neutral-600 max-w-444-px">Your email address will not be published. Required fields are marked *</p>
                                <?php if (!empty($msg)) { ?>
                                    <div style="color: goldenrod;" class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?php if (!empty($msg)) {
                                            print @$msg;
                                        }; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>
                                <form action="#" method="post" enctype="multipart/form-data" class="tw-mt-70-px d-flex flex-column tw-gap-12">
                                    <div class="position-relative">
                                        <input name="name" type="text" class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Your Name*" required>
                                        <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                            <i class="ph-bold ph-user"></i>
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <input name="email" type="email" class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Email Address*" required>
                                        <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                            <i class="ph-bold ph-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <input name="phone" type="tel" class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Phone Number*" required>
                                        <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                            <i class="ph-bold ph-phone"></i>
                                        </span>
                                    </div>
                                    <div class="position-relative">
                                        <textarea name="message" class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600 tw-h-108-px" placeholder="Enter Your Message here"></textarea>
                                        <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                            <i class="ph-bold ph-note-pencil"></i>
                                        </span>
                                    </div>
                                    <div class="">
                                        <button name="sub" type="submit" class="btn btn-main hover--translate-y-1 active--translate-y-scale-9 hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0" data-block="button">
                                            <span class="button__flair"></span>
                                            <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                                                <i class="ph-bold ph-paper-plane-tilt"></i>
                                            </span>
                                            <span class="button__label">Get In Touch</span>
                                        </button>
                                    </div>
                                </form>
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