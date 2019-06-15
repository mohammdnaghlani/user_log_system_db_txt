<?php
    require_once ('../../init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= link_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/bootstrap-rtl.min.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/fontiran.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/styles.css')?>" rel="stylesheet">
    <title>Mini CMS</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $add_post = add_posts('db/post.json' , $_POST);
    echo '<div class="alert alert-success text-center m-4">پست جدید با موفقیت ایجاد شد شما به صفحه اصلی برگشت داده می شوید !</div>';
    echo '
    <script>
    setTimeout(function(){
       window.location.href = \''. BASE_URL .'\';
    }, 3000);
 </script>
    ';
}else{
    echo '<div class="alert alert-danger text-center m-4">در خواست معتبر نمی باشد !</div>';
    echo '
    <script>
    setTimeout(function(){
        window.location.href = \''. BASE_URL .'\';
    }, 3000);
 </script>
    ';
}
?>

</body>
</html>