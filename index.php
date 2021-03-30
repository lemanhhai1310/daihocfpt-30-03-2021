<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Hoạt động của trường-->
<div class="uk-section-small home__blockHoatdong uk-background-05">
    <div class="uk-container">
        <div class="mb-20 mb-32-m">
            <h2 class="uk-h2 uk-text-center home__title2 uk-margin-remove">Hoạt động của trường</h2>
        </div>
        <div class="home__blockHoatdong__boxMobile uk-overflow-auto">
            <div class="uk-child-width-1-4@m uk-flex-nowrap uk-grid-match uk-grid-10 uk-grid-16-m" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/hoatdong/img1.png',
                        'title' => 'Nhiều doanh nghiệp đến tuyển dụng sinh viên ĐH FPT thực hiện dự án',
                    ),
                    array(
                        'src' => 'images/hoatdong/img2.png',
                        'title' => '5.000 học sinh, sinh viên “cháy” hết mình với Big Open Day – FUDA Music Show tại Đại học FPT',
                    ),
                    array(
                        'src' => 'images/hoatdong/img3.png',
                        'title' => 'Nhiều cơ hội thực tập, làm việc hấp dẫn cho sinh viên Đại học FPT',
                    ),
                    array(
                        'src' => 'images/hoatdong/img4.png',
                        'title' => 'Campus sang – xịn – mịn của Đại học FPT là bối cảnh của cuộc thi làm phim 49h in motion',
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <div class="uk-card uk-card-default home__blockHoatdong__card">
                            <div class="uk-cover-container">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                <canvas width="283" height="163"></canvas>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <h5 class="uk-h5 uk-margin-remove home__blockHoatdong__title"><a href=""><?= $v['title'] ?></a></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Hoạt động của trường-->

<!--Đăng ký tư vấn tuyển sinh-->
<div class="uk-section-small home__blockDangky uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg01.jpg" uk-img>
    <div class="uk-container">
        <div class="mb-15 mb-20-m uk-light">
            <h2 class="home__title1 uk-h2 uk-text-center uk-margin-remove">Đăng ký tư vấn tuyển sinh</h2>
        </div>
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-3-5@m">
                <form class="uk-grid-small uk-flex-center" uk-grid>
                    <div class="uk-width-1-2">
                        <input class="uk-input uk-border-pill home__blockDangky__input" type="text" placeholder="Họ và tên*">
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-input uk-border-pill home__blockDangky__input" type="text" placeholder="Số điện thoại*">
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-input uk-border-pill home__blockDangky__input" type="text" placeholder="Email">
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-input uk-border-pill home__blockDangky__input" type="text" placeholder="Tỉnh / Thành phố">
                    </div>
                    <div class="uk-width-auto">
                        <button type="button" class="uk-button home__blockDangky__btn uk-button-secondary uk-border-rounded">ĐĂNG KÝ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/Đăng ký tư vấn tuyển sinh-->
<?php require "template-parts/layouts/footer.php"; ?>