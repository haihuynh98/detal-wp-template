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
                        <h4 class="card-title">Thẻ Bảo Hành</h4>
                        <h5 class="card-text">Thông Tin Bảo Hành</h5>
                        <p><b>Tên:</b> <?= $warranty_post['name'] ?></p>
                        <p><b>Điện Thoại:</b> <?= $warranty_post['phone'] ?></p>
                        <p><b>Địa Chỉ:</b> <?= $warranty_post['address'] ?></p>
                        <p><b>Dịch Vụ:</b> <?= $warranty_post['service'] ?></p>
                        <p><b>Số lượng:</b> <?= $warranty_post['quantity'] ?></p>
                        <p><b>Thương hiệu:</b> <?= $warranty_post['brand'] ?></p>
                        <p><b>Giá trị đến:</b> <?= $warranty_post['warranty_period'] ?></p>
                        <hr>
                        <h5 class="card-text">Liên Hệ Hỗ Trợ và Bảo Hành</h5>
                        <p><b>Điện Thoại:</b> <a href="tel:02899959597">028 999 59597</a></p>
                        <hr>
                        <h5 class="card-text">Thông Tin Phòng Khám Nha Khoa</h5>
                        <p><b>Tên Phòng Khám:</b> Trung tâm Nha khoa Quốc tế SGC Dental Center</p>
                        <p><b>Địa Chỉ:</b> Số 34, đường Hồ Biểu Chánh, phường 11, quận Phú Nhuận, Tp.HCM</p>
                    </div>
                </div>
                <div class="other-code text-center mt-5">
                    <a href="<?= get_base_url_without_parameters()?>" class="pbmit-btn pbmit-btn-outline">Tìm với mã khác</a>
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
