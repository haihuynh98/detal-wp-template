<?php

/**
 * Template Name: Warranty check page
 */

get_header();
$warranty_post = null;
$error_msg = '';
$post_id = null;
if (isset($_GET['code']) && $post_id = esc_html($_GET['code'])) {
    $warranty_post = get_warranty_management_post_by_id($post_id);
}
if (isset($_GET['code']) && $warranty_post == null) {
    $error_msg = 'Thẻ bảo hành không tồn tại!';
}
?>


<div class="container-fluid full-screen pb-5 warranty-screen">
    <div class="row justify-content-center" style="width: 100%;">
        <?php if ($warranty_post) : ?>
            <div class="col-md-7 col-12">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Thẻ Bảo Hành</h5>
                        <p class="card-text">Thông Tin Khách Hàng:</p>
                        <p>Tên: <?= $warranty_post['name'] ?></p>
                        <p>Địa Chỉ: <?= $warranty_post['address'] ?></p>
                        <p>Điện Thoại: <?= $warranty_post['phone'] ?></p>
                        <p>Email: <?= $warranty_post['email'] ?></p>
                        <hr>
                        <p class="card-text">Thông Tin Dịch Vụ:</p>
                        <p>Ngày: <?= $warranty_post['date'] ?></p>
                        <p>Loại Dịch Vụ: <?= $warranty_post['service'] ?></p>
                        <p>Chi Tiết: <?= $warranty_post['service_detail'] ?></p>
                        <hr>
                        <p class="card-text">Thông Tin Bảo Hành:</p>
                        <p>Thời Hạn Bảo Hành: <?= $warranty_post['warranty_period'] ?></p>
                        <p>Phạm Vi Bảo Hành: <?= $warranty_post['warranty_coverage'] ?></p>
                        <p>Điều Kiện: <?= $warranty_post['conditions'] ?></p>
                        <hr>
                        <p class="card-text">Hướng Dẫn Chăm Sóc:</p>
                        <p><?= $warranty_post['care_instructions'] ?></p>
                        <hr>
                        <p class="card-text">Liên Hệ Hỗ Trợ và Bảo Hành:</p>
                        <p>Điện Thoại: <a href="tel:02899959597">028 999 59597</a></p>
                        <hr>
                        <p class="card-text">Thông Tin Phòng Khám Nha Khoa:</p>
                        <p>Tên Phòng Khám: Trung tâm Nha khoa Quốc tế SGC Dental Center</p>
                        <p>Địa Chỉ: Số 34, đường Hồ Biểu Chánh, phường 11, quận Phú Nhuận, Tp.HCM</p>
                        <p>Điện Thoại: <a href="tel:02899959597">028 999 59597</a></p>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="col-md-7 col-12">
                <div class="rounded-container">
                    <h2 class="text-center">Kiểm tra bảo hành</h2>
                    <form action="<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>" method="GET">
                        <div class="form-group">
                            <label for="warrantyCode">Mã bảo hành:</label>
                            <input type="text" class="form-control" id="warrantyCode" name="code" placeholder="Nhập mã bảo hành của bạn *" value="<?= $post_id ? $post_id : '' ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block text-center button-check-warranty">Kiểm tra</button>
                        <?php if ($error_msg != '') : ?>
                            <p class="error-message"><?= $error_msg ?></p>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
