<?php
require_once('../../init.php');
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
                <li class="breadcrumb-item"><a href="<?= link_url(''); ?>">صفحه اول وبسایت</a></li>
                <li class="breadcrumb-item">&nbsp;<a href="<?= link_url('panel'); ?>">پنل مدیریتی</a></li>
            </ul>
        </div>
        <div class="row ">
            <div class="col-12">
                <form action="<?= link_url('panel/process/add_post_action.php') ?>" method="POST">
                    <div class="form-group">
                        <label for="title">عنوان:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="author">نویسنده:</label>
                        <select name="author" id="author" class="form-control">
                            <option value="علی">علی</option>
                            <option value="محمد">محمد</option>
                            <option value="رضا">رضا</option>
                            <option value="صادق">صادق</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <textarea name="content" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-left">ارسال</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>