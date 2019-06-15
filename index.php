<?php
require_once('init.php');
user_log();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= link_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/bootstrap-rtl.min.css') ?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/fontiran.css') ?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/styles.css') ?>" rel="stylesheet">
    <title>Mini CMS</title>
</head>

<body>
    <div class="container mt-2 ">
        <div class="col-12">
            <ul class="breadcrumb ">
                <li class="breadcrumb-item"><a href="<?= link_url('panel'); ?>">پنل مدیریتی</a></li>
                <li class="breadcrumb-item"><a href="<?= link_url('posts.php'); ?>"> مطالب</a></li>
                <li class="breadcrumb-item"><a href="<?= link_url('temp.php'); ?>"> تست </a></li>
            </ul>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 mt-2 mb-2 bg-light shadow-sm rounded border post-container p-3">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
            </div>
        </div>
    </div>
</body>

</html>