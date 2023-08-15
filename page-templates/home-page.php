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
                                            <?php foreach (get_opening_hours() as $hour) : ?>
                                                <li>
                                                    <span class="pbmit-timelist-li-title"><?= $hour['label'] ?></span>
                                                    <span class="pbmit-timelist-li-value"><?= $hour['hour'] ?></span>
                                                </li>
                                            <?php endforeach; ?>
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
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-insurance"></i>
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
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-prosthesis"></i>
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
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-insurance"></i>
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
            </div>
        </div>
    </div>
</section>
<!-- Service End -->

<!-- Testimonial Start -->
<section class="section-lg testimonial-one-bg">
    <div class="container">
        <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle">KHÁCH HÀNG CỦA CHÚNG TÔI</h4>
            <h2 class="pbmit-title">Phản hồi của khách hàng về Nha khoa SGC Dental Center</h2>
            <div class="pbmit-heading-content">
                <p>Những câu chuyện trải nghiệm của khách hàng trong và ngoài nước khi đến với Nha khoa SGC Dental Center </p>
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
                                        <p>Cảm ơn đội ngũ bác sĩ, phụ tá và nhân viên đã hỗ trợ trồng răng lại giúp cho 2 vợ chồng tôi. Cảm thấy rất xứng đáng khi lặng lội từ Mỹ về Việt Nam. SGC Dental đúng là nơi trồng răng Implant uy tín</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="pbminfotech-box-img">
                                <div class="pbmit-featured-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/phanhoi/phan-hoi-1.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-author">
                                <h3 class="pbminfotech-box-title">Vợ chồng chú Hải</h3>
                                <span class="pbmit-designation">Cấy ghép răng</span>
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
                                        <p>Bác sĩ tay nghề rất tốt. Ca răng chỉ hoàn thành trong 48h. Thực sự rất bất ngờ với kết quả. Cho SGC Dental 10đ.</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="pbminfotech-box-img">
                                <div class="pbmit-featured-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/phanhoi/phan-hoi-2.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-author">
                                <h3 class="pbminfotech-box-title">Chị Cathy Nguyễn</h3>
                                <span class="pbmit-designation">Bọc răng sứ</span>
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
                                        <p>Ban đầu mình muốn bọc sứ, nhưng răng mình đều nên bác sĩ khuyến dán Veneer để bảo tồn răng gốc. Sau 3 ngày thì giờ đây mình đã có 1 bộ răng trắng, sáng, rất nhiên</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="pbminfotech-box-img">
                                <div class="pbmit-featured-wrapper">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/phanhoi/phan-hoi-3.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="pbminfotech-box-author">
                                <h3 class="pbminfotech-box-title">Anh Phong Lê</h3>
                                <span class="pbmit-designation">Dán sứ Veneer</span>
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
                        <h2 class="pbmit-title">Hãy đặt lịch hẹn với bác sĩ của SGC Dental Center</h2>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="your-name" class="form-control" placeholder="Tên (Bắc buộc)">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="phone Number" class="form-control" placeholder="Số điện thoại (bắt buộc)">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="your-email" class="form-control" placeholder="Số Zalo, Viber (Không bắt buộc)">
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" name="service" id="service" style="color: #666; border: 1px solid #ccc; border-radius: 3px; padding: 3px;">
                                    <option disabled selected>Dịch vụ</option>
                                    <option value="boc-rang-su">Bọc răng sứ</option>
                                    <option value="trong-rang-implant">Trồng răng Implant</option>
                                    <option value="dan-su-veneer">Dán sứ Veneer</option>
                                    <option value="nieng-rang">Niềng răng</option>
                                    <option value="nho-rang">Nhổ răng</option>
                                    <option value="chua-tuy">Chữa Tủy</option>
                                    <option value="tram-rang">Trám răng</option>
                                    <option value="cao-voi-rang">Cạo vôi răng</option>
                                </select>
                            </div>
                            <div>
                                <textarea name="message" cols="40" rows="5" class="form-control" placeholder="Nội dung tư vấn (không bắt buộc)"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="pbmit-btn pbmit-btn-outline-global">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <style>
                    .appoinment-one-img:before {
                        background-image: url(<?= get_template_directory_uri() . '/assets/images/home-dental/tam-4.jpg' ?>);
                    }
                </style>
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
        <div class="swiper-slider" data-arrows-class="team3-arrow" data-autoplay="false" data-dots="false" data-arrows="true" data-columns="3" data-margin="30" data-effect="slide">
            <div class="swiper-wrapper">
                <?php foreach (get_field('partners') as $partner) : ?>
                    <div class="swiper-slide">
                        <!-- Slide1 -->
                        <article class="pbmit-client-style-1">
                            <div class="pbmit-client-wrapper">
                                <h4 class="pbmit-hide"><?= $partner['company_name'] ?></h4>
                                <div class="pbmit-featured-wrapper">
                                    <img src="<?= $partner['logo'] ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
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
            <h2 class="pbmit-title">Đọc các tin tức mới nhất về Nha khoa SGC</h2>
            <div class="pbmit-heading-content">
                <p>Tin tức nơi Nha khoa cung cấp các kiến thức, các phản hồi, các ca răng đã làm tại nha khoa, giúp khách hàng có cái nhìn tổng quan hơn về SGC Dental</p>
            </div>
        </div>
        <div class="row">
            <?php foreach (get_recent_posts() as $post) : ?>
                <div class="col-md-4">
                    <article class="pbmit-blogbox-style-1">
                        <div class="post-item">
                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-wrapper">
                                    <img src="<?= $post['image'] ?>" class="img-fluid" alt="<?= $post['title'] ?>">
                                </div>
                            </div>
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-meta-container">
                                    <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-date">
                                            <i class="pbmit-base-icon-calendar-1"></i> <?= $post['date'] ?>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="pbmit-post-title">
                                    <a href="<?= $post['link'] ?>"><?= $post['title'] ?></a>
                                </h3>
                                <div class="pbminfotech-box-desc">
                                    <div class="pbminfotech-box-desc-text">
                                        <p> <?= $post['excerpt'] ?></p>
                                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-flat vc_btn3-color-secondarycolor" href="<?= $post['link'] ?>">Đọc Thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Blog End -->

<?php

get_footer();
