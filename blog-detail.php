<?php
require_once('include.php');
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $user_id = $_GET['id'];
} else {
    header("location:blog-detail");
}

$sql = query_sql("SELECT * FROM $news WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);

$active1 = '';
$title = $row['title'];
$description = 'Explore ' . $siteName . ' full range of ICT services, including software development, website design, mobile app development, IT consultation, cloud hosting, cybersecurity, and digital marketing.';
$keyword = 'CloudSyncc services, ICT solutions, software development, web design, mobile app development, IT consultation, cloud hosting, cybersecurity, digital marketing, tech services Nigeria, custom ICT services';
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
                                    <img src="img/logo/favicon-two.png" alt="Favicon Two">
                                </span>
                                <h1 class="mb-0 splitTextStyleOne text-capitalize"> blog Details</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-120">
                <div class="container">
                    <div class="row gy-4">

                        <div class="col-lg-8">
                            <div data-aos="fade-up" data-aos-duration="800">
                                <div class="position-relative">
                                    <a href="blog-details.html" class="w-100 h-100 overflow-hidden">
                                        <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="" class="w-100 h-100 object-fit-cover hover-scale-108 tw-duration-500">
                                    </a>
                                </div>
                                <div class="tw-mt-10">
                                    <div class="tw-mb-4 d-flex align-items-center tw-gap-205 flex-wrap">
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <span class="text-main-600 tw-text-lg">
                                                <i class="ph ph-user"></i>
                                            </span>
                                            <span class="text-neutral-600 tw-text-sm">Admin</span>
                                        </div>
                                        <span class="tw-w-205 border border-neutral-200"></span>
                                        <div class="d-flex align-items-center tw-gap-2">
                                            <span class="text-main-600 tw-text-lg">
                                                <i class="ph ph-clock"></i>
                                            </span>
                                            <span class="text-neutral-600 tw-text-sm"><?php print $row['date_post']; ?></span>
                                        </div>
                                    </div>
                                    <h3 class="tw-mb-4 splitTextStyleOne"><?php print $row['title']; ?></h3>
                                    <p class="tw-text-base text-neutral-600 tw-my-9" style="text-align: justify;"><?php print $row['news']; ?> </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 ps-xl-5 ps-lg-4">
                            <!-- Sidebar Start -->
                            <div class="d-flex flex-column tw-gap-8">

                                <div class="bg-neutral-50 tw-px-8 tw-py-8" data-aos="fade-up" data-aos-duration="800">
                                    <h5 class="border-start border-4 border-main-600 text-main-two-600 tw-ps-2 splitTextStyleOne tw-mb-6">Recent News</h5>
                                    <div class="d-flex flex-column tw-gap-8">

                                        <?php $sql = query_sql("SELECT * FROM $news ORDER BY RAND() LIMIT 10");
                                        if (mysqli_num_rows($sql) > 0) {
                                            $c = 0;
                                            while ($row = mysqli_fetch_assoc($sql)) { ?>

                                                <div class="d-flex align-items-center tw-gap-6">
                                                    <a href="blog-detail?id=<?php print $row['id']; ?>" class="tw-rounded-md overflow-hidden flex-shrink-0">
                                                        <img style="width: 100px;" src="<?php print 'photo/' . $row['post_image']; ?>" alt="" class=" object-fit-cover hover-scale-2 tw-duration-500">
                                                    </a>
                                                    <div class="">
                                                        <div class="d-flex align-items-center tw-gap-2">
                                                            <span class="text-main-600 tw-text-lg">
                                                                <i class="ph-bold ph-calendar-dots"></i>
                                                            </span>
                                                            <span class="text-main-two-600 fw-medium tw-text-sm tw-text-sm"><?php print $row['date_post']; ?></span>
                                                        </div>
                                                        <h6 class="tw-mt-2">
                                                            <a href="blog-detail?id=<?php print $row['id']; ?>" class="tw-text-base line-clamp-2 text-main-two-600 hover-text-main-600 splitTextStyleOne"><?php print $row['title']; ?></a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            <?php $c++;
                                            }
                                        } else { ?>
                                            <h4 style="padding: 20px;">No updates found!</h4>
                                        <?php } ?>

                                    </div>
                                </div>


                            </div>
                            <!-- Sidebar End -->

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