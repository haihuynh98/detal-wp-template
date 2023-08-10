<?php

/**
 * Template Name: Home Page
 */

get_header();

?>


<!-- Video Start -->
<section class="video-section-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="video-one-bg">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="video-one-main-box">
                                <h4><?= get_field('title_above_video') ?></h4>
                                <div class="video-one-img">
                                    <img src="<?= get_field('thumbnail_of_video') ?>" class="img-fluid" alt="">
                                    <div class="video-one-button-bg">
                                        <div class="video-one-play-button">
                                            <span><i class="fa fa-play"></i></span>
                                            <a href="<?= get_field('video_link_yt') ?>" class="pbmin-lightbox-video"></a>
                                        </div>
                                    </div>
                                    <div class="video-one-content"><?= get_field('description_video') ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="video-one-right-box">
                                <div class="pbmit-ihbox-style-8">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                            <div class="pbmit-heading">
                                                <div class="pbmit-ihbox-heading">
                                                    <h2 class="vc_custom_heading">Giờ hoạt động</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents"></div>
                                    </div>
                                </div>
                                <div class="pbmit-timelist-ele-wrapper">
                                    <div class="pbmit-timelist-wrapper">
                                        <ul class="pbmit-timelist-list">
                                            <?php foreach(get_opening_hours() as $hour):?>
                                            <li>
                                                <span class="pbmit-timelist-li-title"><?= $hour['label']?></span>
                                                <span class="pbmit-timelist-li-value"><?= $hour['hour']?></span>
                                            </li>
                                            <?php endforeach;?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video End -->

<!-- About Start -->
<section class="about-section-one">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6 ">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle">Về chúng tôi</h4>
                    <h2 class="pbmit-title">Trung tâm Nha khoa Quốc tế SGC Dental Center</h2>
                    <div class="pbmit-heading-content">
                        <p>Là một trong những nha khoa uy tín nhất tại Hồ Chí Minh. Với sự mệnh là mang đến sự chắc khỏe, thẩm mỹ về răng miệng cho hàng triệu người dân Việt Nam trong và ngoài nước.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item">
                                <i class="fa fa-check"></i> Đội ngũ bác sĩ hơn 15 năm kinh nghiệm
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check"></i> Chuyên viên tư vấn nhiệt tình, chu đáo
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check"></i> Công nghệ hiện đại - Tiên tiến
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item">
                                <i class="fa fa-check"></i> Chăm sóc răng miệng định kỳ
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check"></i> Thẩm mỹ răng sứ - Trắng sáng tự nhiên
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-check"></i> Trồng răng implant - Phục hồi ăn nhai.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pbmit-ihbox-style-2">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-shapes-and-symbols"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="vc_custom_heading">15 Năm</h2>
                                        </div>
                                        <div class="pbmit-ihbox-content">kinh nghiệm chăm sóc răng miệng </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pbmit-ihbox-style-9">
                            <div class="pbmit-ihbox-contents">
                                <div class="pbmit-ihbox-headingicon d-flex">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/icon/signature.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="vc_custom_heading">Michael Phillips,</h2>
                                        </div>
                                        <div class="pbmit-ihbox-subheading">
                                            <h4 class="vc_custom_heading">Vivamus diam neque</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="about-one-img">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/home-dental/tam-2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- Service Start -->
<section class="section-lgt service-section-one">
    <div class="container">
        <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle">Dịch vụ của chúng tôi</h4>
            <h2 class="pbmit-title">Những dịch vụ phổ biến tại Nha khoa SGC Dental Center</h2>
            <div class="pbmit-heading-content">
                <p>Tại Nha khoa SGC Dental Center, chúng tôi có đầy đủ các dịch vụ từ Điều trị bệnh lý đến Phục hình thẩm mỹ</p>
            </div>
        </div>
        <div class="swiper-slider" data-arrows-class="team3-arrow" data-autoplay="false" data-dots="true" data-arrows="true" data-columns="3" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- Slide1 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-chair"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Bọc sứ thẩm mỹ</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Giúp răng bạn trắng, sáng, đều hơn mà vẫn đẹp tự nhiên</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide2 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-insurance"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Trồng răng Implant</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Phục hồi chức năng ăn nhai, thẩm mỹ khuôn mặt</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide3 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-prosthesis"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Dán sứ Veneer</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Sử dụng công nghệ mới nhất của Đức, bảo tồn răng gốc đến 95%</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide4 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-braces-1"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Tẩy trắng răng</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Giúp răng trắng sáng hơn với chi phí phải chăng</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide5 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-insurance"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Trám răng</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Điều trị - Phục hồi răng nhanh chống</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide6 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-drill"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Nhổ răng khôn</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Sử dụng công nghệ Laser giúp không sưng, không đau,nhức</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide7 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-pills"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Paradontosis</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Paradontosis liên quan đến vệ sinh răng miệng và làm sạch răng chuyên nghiệp.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide8 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-dental-insurance-1"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Bảo vệ khoang</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Chiến đấu với khoang với kem đánh răng bảo vệ khoang của chúng tôi.</p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide9 -->
                    <article class="pbmit-service-style-1">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-content-inner">
                                    <div class="pbmit-service-icon">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-girl"></i>
                                        </div>
                                    </div>
                                    <h3 class="pbmit-service-title">
                                        <a href="services-details.html">Radiographs</a>
                                    </h3>
                                    <div class="pbmit-service-content">
                                        <p>Images of your teeth that your dentist uses to your oral health.
                                        </p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                        <div class="vc_btn3-container vc_btn3-inline">
                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-right vc_btn3-color-globalcolor" href="services-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service End -->

<!-- Counter  Start -->
<section class="counter-section-one">
    <div class="container">
        <div class="counter-one-bg">
            <div class="row">
                <div class="col-md-3">
                    <div class="pbminfotech-ele-fid-style-1">
                        <div class="pbmit-fld-contents d-flex align-items-center">
                            <div class="pbmit-sbox-icon-wrapper">
                                <i class="pbmit-dentiq-icon pbmit-dentiq-icon-doctor-1"></i>
                            </div>
                            <div class="pbmit-fld-wrap">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="100" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">100</span>
                                    <span class="pbmit-fid-sub"></span>
                                </h4>
                                <h3 class="pbmit-fid-title"><span>Bác sĩ chuyên dụng<br></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pbminfotech-ele-fid-style-1">
                        <div class="pbmit-fld-contents d-flex align-items-center">
                            <div class="pbmit-sbox-icon-wrapper">
                                <i class="pbmit-dentiq-icon pbmit-dentiq-icon-chair"></i>
                            </div>
                            <div class="pbmit-fld-wrap">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="150" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">150</span>
                                    <span class="pbmit-fid-sub"></span>
                                </h4>
                                <h3 class="pbmit-fid-title"><span>Phòng khám<br></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pbminfotech-ele-fid-style-1">
                        <div class="pbmit-fld-contents d-flex align-items-center">
                            <div class="pbmit-sbox-icon-wrapper">
                                <i class="pbmit-dentiq-icon pbmit-dentiq-icon-tooth-1"></i>
                            </div>
                            <div class="pbmit-fld-wrap">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="250" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">250</span>
                                    <span class="pbmit-fid-sub"></span>
                                </h4>
                                <h3 class="pbmit-fid-title"><span>Giải thưởng<br></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pbminfotech-ele-fid-style-1">
                        <div class="pbmit-fld-contents d-flex align-items-center">
                            <div class="pbmit-sbox-icon-wrapper">
                                <i class="pbmit-dentiq-icon pbmit-dentiq-icon-family"></i>
                            </div>
                            <div class="pbmit-fld-wrap">
                                <h4 class="pbmit-fid-inner">
                                    <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="1500" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">1500</span>
                                    <span class="pbmit-fid-sub"></span>
                                </h4>
                                <h3 class="pbmit-fid-title"><span>Khách hàng tin dùng<br></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter End -->

<!-- About us Start -->
<section class="about-us-section-one section-lgb" style="background-image:url(<?= get_template_directory_uri(). '/assets/images/home-dental/tam-3.jpg' ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6"></div>
            <div class="col-md-12 col-lg-6">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle">Câu chuyện của chúng tôi</h4>
                    <h2 class="pbmit-title">Các cột mốc trong ngành chăm sóc sức khỏe răng miệng.</h2>
                    <div class="pbmit-heading-content">
                        <p>Chương trình Chữa bệnh Y học tham gia hội chợ sinh viên tại các địa điểm được chọn. Bạn luôn có thể Đặt lịch hẹn cho các sự kiện sắp tới. Bạn có thể đăng ký nhận thông báo miễn phí.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pbmit-ihbox-style-4">
                            <div class="pbmit-ihbox-contents">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-molar"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="vc_custom_heading">Thăm khám răng trẻ em</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pbmit-ihbox-style-4">
                            <div class="pbmit-ihbox-contents">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-dentist"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="vc_custom_heading">Phẫu thuật răng miệng</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pbmit-ihbox-style-4">
                            <div class="pbmit-ihbox-contents">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-dental-insurance-1"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="vc_custom_heading">Răng giả</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pbmit-ihbox-style-4">
                            <div class="pbmit-ihbox-contents">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-braces-1"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="vc_custom_heading">Chỉnh nha</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="pbmit-btn">Đọc Thêm</a>
            </div>
        </div>
    </div>
</section>
<!-- About us End -->

<!-- Testimonial Start -->
<section class="section-lg testimonial-one-bg">
    <div class="container">
        <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle">KHÁCH HÀNG CỦA CHÚNG TÔI</h4>
            <h2 class="pbmit-title">Khách hàng của chúng tôi nói gì</h2>
            <div class="pbmit-heading-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut<br> labore t dolore magna aliqua. </p>
            </div>
        </div>
        <div class="swiper-slider" data-arrows-class="team3-arrow" data-autoplay="false" data-dots="true" data-arrows="true" data-columns="3" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- Slide1 -->
                    <article class="pbmit-testimonial-style-3">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>Các bác sĩ, y tá và nhân viên hỗ trợ đã xuất sắc. Đồ ăn cũng rất tuyệt vời. Tôi cảm thấy khỏe mạnh, trở lại như trước và thật tuyệt vời. Cảm ơn Chúa vì những phòng khám như của bạn.</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="pbminfotech-box-img">
                                <div class="pbmit-featured-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/testimonail/testimonial-01.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-author">
                                <h3 class="pbminfotech-box-title">Richard Scott</h3>
                                <span class="pbmit-designation">cấy ghép răng</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide2 -->
                    <article class="pbmit-testimonial-style-3">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>Nụ cười làm cho người ta thêm phần duyên dáng. Tôi rất vui mừng vì có thể làm cho mọi người trở nên đẹp đẽ bằng cách này. Nha khoa không đắt đỏ, bỏ qua là điều đắt đỏ. Trở thành nhà thiết kế nổi tiếng cũng giống như trở thành một nha sĩ nổi tiếng.</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="pbminfotech-box-img">
                                <div class="pbmit-featured-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/testimonail/testimonial-02.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-author">
                                <h3 class="pbminfotech-box-title">Jennifer Smith</h3>
                                <span class="pbmit-designation">Làm trắng răng</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide3 -->
                    <article class="pbmit-testimonial-style-3">
                        <div class="pbminfotech-post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>Tôi rất trân trọng sự tử tế và sự chăm sóc tốt mà bạn đã dành cho tôi. Các liệu trình chăm sóc bảo dưỡng đã mang lại sự kỳ diệu cho tôi. Cảm ơn bạn rất nhiều. Hãy thưởng thức những viên sô cô la này nhé.</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="pbminfotech-box-img">
                                <div class="pbmit-featured-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/testimonail/testimonial-03.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-author">
                                <h3 class="pbminfotech-box-title">Paul Hill</h3>
                                <span class="pbmit-designation">Chỉnh nha</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial End -->

<!-- Appoinment Start -->
<section class="pbmit-bg-color-light appoinment-section-one">
    <div class="container  pbmit-col-stretched-yes pbmit-col-right">
        <div class="row g-0">
            <div class="col-md-12 col-lg-6">
                <div class="appoinment-one-bg">
                    <div class="pbmit-heading-subheading">
                        <h4 class="pbmit-subtitle">Nhận cuộc hẹn</h4>
                        <h2 class="pbmit-title">Để tìm được nha sĩ phù hợp<br> Hãy đặt lịch hẹn với bác sĩ của bạn.</h2>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="your-name" class="form-control" placeholder="Tên của bạn *">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="phone Number" class="form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="your-email" class="form-control" placeholder="Email của bạn *">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="subject" class="form-control" placeholder="Chủ đề">
                            </div>
                            <div>
                                <textarea name="message" cols="40" rows="5" class="form-control" placeholder="Lời nhắn"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="pbmit-btn pbmit-btn-outline-global">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <style>.appoinment-one-img:before {background-image: url(<?= get_template_directory_uri() .'/assets/images/home-dental/tam-4.jpg' ?>);}</style>
                <div class="appoinment-one-img"></div>
                <div class="pbmit-ihbox-style-3  pbmit-col-stretched-right">
                    <div class="pbmit-ihbox-box">
                        <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <i class="pbmit-dentiq-icon pbmit-dentiq-icon-chair"></i>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <div class="pbmit-ihbox-subheading">
                                    <h4 class="vc_custom_heading">ƯU ĐÃI ĐẶC BIỆT</h4>
                                </div>
                                <div class="pbmit-ihbox-heading">
                                    <h2 class="vc_custom_heading">Nhận kiểm tra y tế miễn phí</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Appoinment End -->

<!-- Client Start -->
<section class="client-section-one section-md">
    <div class="container">
        <div class="swiper-slider" data-arrows-class="team3-arrow" data-autoplay="false" data-dots="false" data-arrows="true" data-columns="5" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- Slide1 -->
                    <article class="pbmit-client-style-1">
                        <div class="pbmit-client-wrapper">
                            <h4 class="pbmit-hide">Client 6</h4>
                            <div class="pbmit-featured-wrapper">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/client/client-01.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide2 -->
                    <article class="pbmit-client-style-1">
                        <div class="pbmit-client-wrapper">
                            <h4 class="pbmit-hide">Client 1</h4>
                            <div class="pbmit-featured-wrapper">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/client/client-02.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide3 -->
                    <article class="pbmit-client-style-1">
                        <div class="pbmit-client-wrapper">
                            <h4 class="pbmit-hide">Client 2</h4>
                            <div class="pbmit-featured-wrapper">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/client/client-03.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide4 -->
                    <article class="pbmit-client-style-1">
                        <div class="pbmit-client-wrapper">
                            <h4 class="pbmit-hide">Client 3</h4>
                            <div class="pbmit-featured-wrapper">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/client/client-04.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <!-- Slide5 -->
                    <article class="pbmit-client-style-1">
                        <div class="pbmit-client-wrapper">
                            <h4 class="pbmit-hide">Client 4</h4>
                            <div class="pbmit-featured-wrapper">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/client/client-05.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client End -->

<!-- Blog Start -->
<section class="section-lg">
    <div class="container">
        <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle">Tin tức</h4>
            <h2 class="pbmit-title">Đọc các tin mới nhất của chúng tôi</h2>
            <div class="pbmit-heading-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut<br> labore t dolore magna aliqua. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="pbmit-blogbox-style-1">
                    <div class="post-item">
                        <div class="pbmit-featured-container">
                            <div class="pbmit-featured-wrapper">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/blog/blog-01.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="pbmit-meta-category">
                                <a href="blog-classic.html" rel="category tag">Teeth</a>
                            </div>
                        </div>
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-meta-container">
                                <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                    <div class="pbmit-meta-date">
                                        <i class="pbmit-base-icon-calendar-1"></i> 23 Jan, 2019
                                    </div>
                                </div>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="blog-classic.html">Dental Hygiene for Children</a>
                            </h3>
                            <div class="pbminfotech-box-desc">
                                <div class="pbminfotech-box-desc-text">
                                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                        eget lacinia odio sem nec elit. Morbi leo risus, porta ac
                                        consectetur ac, vestibu lum at eros. Nulla vitae elit libero, a
                                        pharetra augue. </p>
                                    <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-flat vc_btn3-color-secondarycolor" href="blog-classic.html">Đọc Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="pbmit-blogbox-style-1">
                    <div class="post-item">
                        <div class="pbmit-featured-container">
                            <div class="pbmit-featured-wrapper">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/blog/blog-02.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="pbmit-meta-category">
                                <a href="blog-classic.html" rel="category tag">Oral</a>
                            </div>
                        </div>
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-meta-container">
                                <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                    <div class="pbmit-meta-date">
                                        <i class="pbmit-base-icon-calendar-1"></i> 22 Jan, 2019
                                    </div>
                                </div>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="blog-classic.html">Improvements In Technology</a>
                            </h3>
                            <div class="pbminfotech-box-desc">
                                <div class="pbminfotech-box-desc-text">
                                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                        eget lacinia odio sem nec elit. Morbi leo risus, porta ac
                                        consectetur ac, vestibu lum at eros. Nulla vitae elit libero, a
                                        pharetra augue. </p>
                                    <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-flat vc_btn3-color-secondarycolor" href="blog-classic.html">Đọc Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="pbmit-blogbox-style-1">
                    <div class="post-item">
                        <div class="pbmit-featured-container">
                            <div class="pbmit-featured-wrapper">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/homepage-1/blog/blog-03.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="pbmit-meta-category">
                                <a href="blog-classic.html" rel="category tag">Implants</a>
                            </div>
                        </div>
                        <div class="pbminfotech-box-content">
                            <div class="pbmit-meta-container">
                                <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                    <div class="pbmit-meta-date">
                                        <i class="pbmit-base-icon-calendar-1"></i> 20 Jan, 2019
                                    </div>
                                </div>
                            </div>
                            <h3 class="pbmit-post-title">
                                <a href="blog-classic.html">You Want Know About Dentist</a>
                            </h3>
                            <div class="pbminfotech-box-desc">
                                <div class="pbminfotech-box-desc-text">
                                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                        eget lacinia odio sem nec elit. Morbi leo risus, porta ac
                                        consectetur ac, vestibu lum at eros. Nulla vitae elit libero, a
                                        pharetra augue. </p>
                                    <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-flat vc_btn3-color-secondarycolor" href="blog-classic.html">Đọc Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- Blog End -->

<?php

get_footer();
