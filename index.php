<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

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