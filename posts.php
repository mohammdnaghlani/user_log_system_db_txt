<?php
require_once('init.php');
user_log();
$posts = fetch_posts('db/post.json');
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
                <li class="breadcrumb-item"><a href="<?= link_url('index.php'); ?>">صفحه اصلی </a></li>
            </ul>
        </div>
        <div class="row justify-content-center">
            <?php if ($posts <> null) : ?>
                <?php foreach ($posts as $pid => $post) : ?>
                    <div class="col-10 mt-2 mb-2 bg-light shadow-sm rounded border post-container">
                        <span class="post-author badge bg-dark p-1"><?= $post->author; ?></span>
                        <h2 class="post-title m-2 "><?= $post->title; ?></h2>
                        <div class="post-content text-justify pb-3 pr-3 pl-3 pt-0"><?= $post->content; ?></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>