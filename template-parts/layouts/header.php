<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>ĐH FPT hệ chính quy tuyển sinh 2021 - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : '' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative" data-src="" uk-img>
    <div uk-height-viewport="expand: true" class="home__blockBanner uk-background-norepeat uk-background-top-center uk-section-xsmall uk-text-center uk-text-left@m" uk-toggle="cls: uk-section-small; mode: media; media: @m" data-src="images/banner.jpg" uk-img>
        <div class="uk-container">
            <div class="mb-25 mb-51-m home__blockBanner__logo"><a href=""><img src="images/logo.png" alt=""></a></div>
            <div class="home__blockBanner__txt1 mb-9 home__blockBanner__txt1--c1">ĐH FPT hệ chính quy</div>
            <div class="home__blockBanner__txt2 uk-text-uppercase mb-10 mb-14-m">tuyển sinh 2021 </div>
            <div class="home__blockBanner__txt1 home__blockBanner__txt1--c2 mb-10 mb-26-m">
                bằng xếp hạng <br> học bạ THPT
            </div>
            <div class="home__blockBanner__txt3 mb-1">Xét điểm sớm, nhân đôi</div>
            <div class="home__blockBanner__txt3">cơ hội trúng tuyển</div>
        </div>
    </div>
