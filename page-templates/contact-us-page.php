<?php

/**
 * Template Name: Contact us page
 */

get_header();

?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/title-bg.jpg);">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> Liên hệ</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="#" class="home"><span>Detal</span></a></span>
                        <span class="sep">-</span>
                        <span><span class="post-root post post-post current-item">Liên hệ</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Contact Us Content -->
<div class="page-content">

    <!-- Contact -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-section">
                        <h3 class="contact-heading-title">Thông tin phòng khám</h3>
                        <div class="pbmit-ihbox-style-8 contact-ihbox-style">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-placeholder-1"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-heading">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="pbmit_custom_heading">Vị trí</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-ihbox-content">
                                        <?= get_field('location', 'contact_infomation') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-ihbox-style-8 contact-ihbox-style">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-call"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-heading">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="pbmit_custom_heading">Số đặt hẹn</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-ihbox-content">
                                        24/7 Support<br> <?= get_field('contact_phone', 'contact_infomation') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-ihbox-style-8">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-dentiq-icon pbmit-dentiq-icon-medical-record"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-heading">
                                        <div class="pbmit-ihbox-heading">
                                            <h2 class="pbmit_custom_heading">Email</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-ihbox-content">
                                        <?= get_field('contact_email', 'contact_infomation') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit_wrapper">
                            <ul class="pbmit-social-links">
                                <li class="pbmit-social-li pbmit-social-facebook ">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-twitter ">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-twitter"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-linkedin ">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-linkedin-squared"></i></span>
                                    </a>
                                </li>
                                <li class="pbmit-social-li pbmit-social-instagram ">
                                    <a href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 p-0">
                    <div class="contact-form">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">NHẬN CUỘC HẸN</h4>
                            <h2 class="pbmit-title">Hãy đặt lịch hẹn với bác sĩ của bạn.</h2>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="your-name" class="form-control" placeholder="Tên của bạn *">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="your-phone" class="form-control" placeholder="Điện thoại của bạn *">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="your-email" class="form-control" placeholder="Email của bạn *">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" cols="40" rows="5" class="form-control" placeholder="Lời nhắn"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="pbmit-btn pbmit-btn-lg">Gửi tin nhắn</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="contact-section-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.953221507627!2d106.6762811!3d10.7930516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529cdcb605a51%3A0x2d763eb6e9634c35!2sNha%20khoa%20SGC%20Dental%20Center!5e0!3m2!1svi!2s!4v1692173323721!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- Contact End -->

</div>
<!-- Contact Us Content End -->

<?php

get_footer();
