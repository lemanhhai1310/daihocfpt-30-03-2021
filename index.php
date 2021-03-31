<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-section-small">
    <div class="uk-container">
        <!--Quy trình tuyển sinh-->
        <div class="mb-15 mb-22-m">
            <h2 class="uk-h2 uk-text-center home__title2 home__title2--c4 uk-margin-remove">Quy trình tuyển sinh</h2>
        </div>
        <div class="uk-text-center mb-15 mb-22-m">
            <div class="home__blockQuytrinh__txt1"><span>Đối tượng tuyển sinh</span> Các thí sinh tốt nghiệp THPT hoặc tương đương tính đến thời điểm nhập học</div>
            <div class="home__blockQuytrinh__txt1"><span>Điều kiện xét tuyển</span> Đáp ứng một trong các điều kiện sau</div>
        </div>
        <div class="mb-30 mb-52-m" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .animation; delay: 300; repeat: false">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-5-6@m">
                    <div class="uk-child-width-1-2 uk-grid-small uk-grid-20-m uk-visible@m uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m uk-grid-match uk-flex-center" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'txt' => array(
                                            'Thuộc diện được tuyển thẳng theo Quy chế tuyển sinh Đại học, Cao đẳng hệ đại học chính quy của Bộ GD&ĐT.',
                                        ),
                                    ),
                                    array(
                                        'txt' => array(
                                            'Điểm học bạ thuộc Top50 THPT toàn quốc(chứng nhận thực hiện trên trang http://SchoolRank.fpt.edu.vn)',
                                        ),
                                    ),
                                    array(
                                        'txt' => array(
                                            'Điểm các môn thi trong kỳ thi THPT 2020 thuộc Top50 THPT toàn quốc (theo số liệu Đại học FPT tổng hợp và công bố sau kỳ thi THPT 2020) và điểm theo khối xét tuyển đạt từ trung bình trở lên (15/30 điểm).',
                                        ),
                                    ),
                                );
                                foreach ($data as $k => $v): ?>
                                    <div>
                                        <div class="animation uk-padding-small uk-border-rounded uk-background-04 uk-light">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="home__blockQuytrinh__txt2"><?= $k+1 ?></span>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <?php foreach ($v['txt'] as $k1 => $v1): ?>
                                                        <div class="home__blockQuytrinh__item"><?= $v1 ?></div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div>
                            <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m uk-grid-match uk-flex-center" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'txt' => array(
                                            'Ngành Ngôn Ngữ Anh: Có chứng chỉ tiếng Anh TOEFL iBT từ 80 hoặc IELTS (Học thuật) từ 6.0 hoặc quy đổi tương đương.',
                                            'Ngành Ngôn Ngữ Nhật: Có chứng chỉ tiếng Nhật JLPT từ N3 trở lên.',
                                            'Ngành Ngôn Ngữ Hàn: Chứng chỉ Topik cấp độ 4 trong kỳ thi TOPIK II',
                                        ),
                                    ),
                                    array(
                                        'txt' => array(
                                            'Tốt nghiệp Chương trình APTECH HDSE.(áp dụng đối với ngành CNTT)',
                                            'Tốt nghiệp Chương trình ARENA ADIM. (áp dụng đối với chuyên ngành Thiết kế Mỹ thuật số)',
                                            'Đã tốt nghiệp Đại học.',
                                            'Thí sinh tốt nghiệp THPT ở nước ngoài',
                                        ),
                                    ),
                                );
                                foreach ($data as $k => $v): ?>
                                    <div>
                                        <div class="animation uk-padding-small uk-border-rounded uk-background-04 uk-light">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="home__blockQuytrinh__txt2"><?= $k+4 ?></span>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <?php foreach ($v['txt'] as $k1 => $v1): ?>
                                                        <div class="home__blockQuytrinh__item"><?= $v1 ?></div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-2@m uk-hidden@m uk-grid-small uk-grid-20-m uk-grid-match uk-flex-center" uk-grid>
                <?php
                $data = array(
                    array(
                        'txt' => array(
                            'Thuộc diện được tuyển thẳng theo Quy chế tuyển sinh Đại học, Cao đẳng hệ đại học chính quy của Bộ GD&ĐT.',
                        ),
                    ),
                    array(
                        'txt' => array(
                            'Điểm học bạ thuộc Top50 THPT toàn quốc(chứng nhận thực hiện trên trang http://SchoolRank.fpt.edu.vn)',
                        ),
                    ),
                    array(
                        'txt' => array(
                            'Điểm các môn thi trong kỳ thi THPT 2020 thuộc Top50 THPT toàn quốc (theo số liệu Đại học FPT tổng hợp và công bố sau kỳ thi THPT 2020) và điểm theo khối xét tuyển đạt từ trung bình trở lên (15/30 điểm).',
                        ),
                    ),
                    array(
                        'txt' => array(
                            'Ngành Ngôn Ngữ Anh: Có chứng chỉ tiếng Anh TOEFL iBT từ 80 hoặc IELTS (Học thuật) từ 6.0 hoặc quy đổi tương đương.',
                            'Ngành Ngôn Ngữ Nhật: Có chứng chỉ tiếng Nhật JLPT từ N3 trở lên.',
                            'Ngành Ngôn Ngữ Hàn: Chứng chỉ Topik cấp độ 4 trong kỳ thi TOPIK II',
                        ),
                    ),
                    array(
                        'txt' => array(
                            'Tốt nghiệp Chương trình APTECH HDSE.(áp dụng đối với ngành CNTT)',
                            'Tốt nghiệp Chương trình ARENA ADIM. (áp dụng đối với chuyên ngành Thiết kế Mỹ thuật số)',
                            'Đã tốt nghiệp Đại học.',
                            'Thí sinh tốt nghiệp THPT ở nước ngoài',
                        ),
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <div class="animation uk-padding-small uk-border-rounded uk-background-04 uk-light">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <span class="home__blockQuytrinh__txt2"><?= $k+1 ?></span>
                                </div>
                                <div class="uk-width-expand">
                                    <?php foreach ($v['txt'] as $k1 => $v1): ?>
                                        <div class="home__blockQuytrinh__item"><?= $v1 ?></div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/Quy trình tuyển sinh-->

        <!--Thủ tục xét tuyển -->
        <div class="mb-15 mb-27-m">
            <h2 class="home__title1 uk-h2 uk-text-center uk-margin-remove">Thủ tục xét tuyển</h2>
        </div>
        <div class="home__blockHoatdong__boxMobile uk-overflow-auto" style="overflow-y: hidden">
            <div class="uk-child-width-1-4@m uk-flex-nowrap uk-grid-14" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/rank.png',
                        'txt' => 'Kiểm tra điểm',
                        'desc' => 'Xem xếp hạng điểm THPT tại <span>http://schoolrank.fpt.edu.vn</span>',
                    ),
                    array(
                        'src' => 'images/buoc2.png',
                        'txt' => 'Chuẩn bị hồ sơ',
                        'desc' => 'Chụp ảnh hoặc scan học bạ, ảnh 3x4, ảnh CMND',
                    ),
                    array(
                        'src' => 'images/buoc3.png',
                        'txt' => 'Nộp hồ sơ',
                        'desc' => 'Gửi hồ sơ online, nộp lệ phí',
                    ),
                    array(
                        'src' => 'images/buoc4.png',
                        'txt' => 'Nhận kết quả',
                        'desc' => 'Biết kết quả sớm sau khi nộp',
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <div uk-toggle="cls: uk-width-medium; mode: media; media: (max-width: 959px)">
                            <div class="uk-cover-container uk-border-rounded uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg02.png" uk-img>
                                <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle">
                                    <img class="uk-responsive-width uk-responsive-height" src="<?= $v['src'] ?>" alt="">
                                </div>
                                <canvas width="542" height="346"></canvas>
                            </div>
                            <div class="uk-text-center home__blockThutuc__box1">
                                <div class="mb-10 mb-15-m">
                                    <button class="home__blockThutuc__btn uk-box-shadow-small uk-button uk-button-secondary uk-button-small uk-border-pill"><span class="home__blockThutuc__step">Bước <?= $k+1 ?></span></button>
                                </div>
                                <h5 class="uk-h5 uk-margin-remove home__blockThutuc__title"><?= $v['txt'] ?></h5>
                                <div class="home__blockThutuc__desc"><?= $v['desc'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/Thủ tục xét tuyển -->
    </div>
</div>

<!--Đăng ký tuyển sinh-->
<div class="home__blockDangky1 uk-section-small uk-background-01">
    <div class="uk-container">
        <div class="uk-flex-middle uk-grid-small uk-grid-41-m" uk-grid>
            <div class="uk-width-2-5@m">
                <div class="uk-card uk-card-body uk-text-center home__blockDangky1__card uk-border-rounded">
                    <div>
                        <div class="uk-display-inline-block uk-padding-small uk-height-small uk-padding-remove-top uk-padding-remove-bottom uk-background-01" style="margin-top: -198px;">
                            <div class="uk-display-inline-block uk-cover-container uk-border-circle">
                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                <canvas width="138" height="138"></canvas>
                            </div>
                        </div>
                    </div>
                    <p class="home__blockDangky1__txt2">“Con gái cô đã được 1 công ty hàng không của Nhật Bản mời về làm việc 2 tháng nay khi em còn chưa tốt nghiệp. Cô chắn chắn rằng 4 năm qua nhà trường đã trang bị cho các con mọi thứ rất chu đáo thì các con hiện nay mới vững vàng được như thế. Ngày hôm nay tham dự buổi lễ tốt nghiệp của con, cô thực sự rất cảm động và thấy rất ấm áp. So với 4 năm trước khi cô dự lễ khai giảng thì thấy các con trưởng thành, chững chạc hơn nhiều. Cô cảm nhận được sự trách nhiệm của thầy cô từ ngày đầu tiên cho tới những ngày cuối cùng này.”</p>
                    <div>
                        <div class="home__blockDangky1__txt1">Cô Lê Nga - Phụ huynh sinh viên Trần Lê Lâm Anh</div>
                        <div class="home__blockDangky1__txt1">K11 ngành Quản trị kinh doanh</div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="mb-20 mb-38-m">
                    <h2 class="uk-h2 uk-text-center home__title2 uk-margin-remove">Đăng ký tuyển sinh</h2>
                </div>
                <form class="uk-grid-small uk-flex-center" uk-grid>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input home__blockDangky__input" type="text" placeholder="Họ và tên*">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input home__blockDangky__input" type="text" placeholder="Số điện thoại*">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input home__blockDangky__input" type="text" placeholder="Email">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input home__blockDangky__input" type="text" placeholder="Tỉnh / Thành phố">
                    </div>

                    <div class="uk-width-1-2@s">
                        <input class="uk-input home__blockDangky__input" type="text" placeholder="Ngày sinh">
                    </div>
                    <div class="uk-width-1-2@s">
                        <input class="uk-input home__blockDangky__input" type="text" placeholder="Trường THPT / Đại Học">
                    </div>
                    <div class="uk-width-1-1">
                        <input class="uk-input home__blockDangky__input" type="text" placeholder="Link Facebook của bạn">
                    </div>

                    <div class="uk-width-1-1" uk-toggle="cls: uk-margin-top; mode: media; media: @m">
                        <div class="uk-form-stacked">
                            <div class="uk-form-label uk-text-center@s home__blockDangky1__txt1">Đăng ký*</div>
                            <div class="uk-form-controls">
                                <div class="uk-grid-small uk-child-width-auto uk-child-width-expand@s uk-grid">
                                    <label><input class="uk-radio" type="radio" name="radio1" checked> <span class="home__blockDangky1__txt1">Tư vấn</span></label>
                                    <label><input class="uk-radio" type="radio" name="radio1"> <span class="home__blockDangky1__txt1">Xét tuyển</span></label>
                                    <label><input class="uk-radio" type="radio" name="radio1"> <span class="home__blockDangky1__txt1">Thi học bổng</span></label>
                                    <label><input class="uk-radio" type="radio" name="radio1"> <span class="home__blockDangky1__txt1">Xét học bổng</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1" uk-toggle="cls: uk-margin-medium-top; mode: media; media: @m">
                        <div class="uk-form-stacked">
                            <div class="uk-form-label uk-text-center@s home__blockDangky1__txt1">Nơi đăng ký sơ tuyển:</div>
                            <div class="uk-form-controls">
                                <div class="uk-grid-small uk-child-width-auto uk-child-width-expand@s uk-grid">
                                    <label><input class="uk-radio" type="radio" name="radio2" checked> <span class="home__blockDangky1__txt1">Hà Nội</span></label>
                                    <label><input class="uk-radio" type="radio" name="radio2"> <span class="home__blockDangky1__txt1">Tp.HCM</span></label>
                                    <label><input class="uk-radio" type="radio" name="radio2"> <span class="home__blockDangky1__txt1">Cần Thơ</span></label>
                                    <label><input class="uk-radio" type="radio" name="radio2"> <span class="home__blockDangky1__txt1">Đà Nẵng</span></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-width-auto" uk-toggle="cls: uk-margin-medium-top; mode: media; media: @m">
                        <button type="button" class="uk-button home__blockDangky__btn home__blockDangky__btn--c1 uk-button-secondary uk-border-rounded">ĐĂNG KÝ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/Đăng ký tuyển sinh-->

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
                                <canvas width="566" height="326"></canvas>
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
                    <div class="uk-width-auto" uk-toggle="cls: uk-margin-medium-top; mode: media; media: @m">
                        <button type="button" class="uk-button home__blockDangky__btn uk-button-secondary uk-border-rounded">ĐĂNG KÝ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/Đăng ký tư vấn tuyển sinh-->

<?php require "template-parts/layouts/footer.php"; ?>