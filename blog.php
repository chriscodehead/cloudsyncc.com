<?php
require_once('include.php');
$active1 = '';
$title = 'Blog | ' . $siteName . ' – Complete ICT Solutions for Your Business';
$description = 'Explore ' . $siteName . ' full range of ICT services, including software development, website design, mobile app development, IT consultation, cloud hosting, cybersecurity, and digital marketing.';
$keyword = 'CloudSyncc services, ICT solutions, software development, web design, mobile app development, IT consultation, cloud hosting, cybersecurity, digital marketing, tech services Nigeria, custom ICT services';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$no_of_records_per_page = 21;
$offset = ($page - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $news";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

?>
<!DOCTYPE html>
<html lang="en" class="heading-black">

<?php require_once('head.php'); ?>
<style>
    .wg-pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 1rem;
        margin: 2rem 0;
        gap: 8px;
    }

    .wg-pagination li {
        display: inline-block;
    }

    .wg-pagination li a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 8px 14px;
        font-size: 16px;
        color: #333;
        background-color: #f3f3f3;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .wg-pagination li a:hover {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .wg-pagination li.disabled a {
        pointer-events: none;
        color: #aaa;
        background-color: #eee;
        border-color: #ddd;
        cursor: not-allowed;
    }

    .wg-pagination li a i {
        font-style: normal;
    }
</style>

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
                                    <img style="width: 60px;" src="img/logo-icon.png" alt="Favicon Two">
                                </span>
                                <h1 class="mb-0 splitTextStyleOne text-capitalize"> Blog Page</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-120">
                <div class="container">
                    <div class="row gy-4">

                        <div class="col-lg-8">
                            <div class="d-flex flex-column tw-gap-15">

                                <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT $offset, $no_of_records_per_page");
                                if (mysqli_num_rows($sql) > 0) {
                                    $c = 0;
                                    while ($row = mysqli_fetch_assoc($sql)) { ?>
                                        <div data-aos="fade-up" data-aos-duration="800">
                                            <div class="position-relative">
                                                <a href="blog-detail?id=<?php print $row['id']; ?>" class="w-100 h-100 overflow-hidden tw-rounded-3xl">
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
                                                <h4 class="tw-mb-4">
                                                    <a href="blog-detail?id=<?php print $row['id']; ?>" class="splitTextStyleOne"><?php print $row['title']; ?> </a>
                                                </h4>
                                                <p class="tw-text-lg text-neutral-600 max-w-730-px splitTextStyleOne"><?php print $bassic->reduceTextLength($row['news'], 100); ?></p>
                                                <a href="blog-detail?id=<?php print $row['id']; ?>" class="text-uppercase tw-text-sm text-main-two-600 fw-bold hover-text-main-600 d-flex align-items-center tw-gap-4 tw-mt-11 tw-tracking-wider">
                                                    Read More
                                                    <span class=""><img src="assets/images/icons/arrow-long.svg" alt="" class=""></span>
                                                </a>

                                            </div>
                                        </div>
                                    <?php $c++;
                                    }
                                } else { ?>
                                    <h4 style="padding: 20px;">No updates found!</h4>
                                <?php } ?>


                            </div>

                            <ul class="wg-pagination">
                                <li><a href="?page=1">First</a></li>
                                <li class="<?php if ($page <= 1) {
                                                echo 'disabled';
                                            } ?>">
                                    <a href="<?php if ($page <= 1) {
                                                    echo '#';
                                                } else {
                                                    echo "?page=" . ($page - 1);
                                                } ?>"><i class="ph-bold d-inline-flex tw-leading-none ph-arrow-left"></i> </a>
                                </li>
                                <li class="<?php if ($page >= $total_pages) {
                                                echo 'disabled';
                                            } ?>">
                                    <a href="<?php if ($page >= $total_pages) {
                                                    echo '#';
                                                } else {
                                                    echo "?page=" . ($page + 1);
                                                } ?>"><i class="ph-bold d-inline-flex tw-leading-none ph-arrow-right"></i></a></a>
                                </li>
                                <li><a href="?page=<?php echo $total_pages; ?>">Last</a></li>
                            </ul>
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