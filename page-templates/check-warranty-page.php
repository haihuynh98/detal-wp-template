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
                <div class="image-warranty">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/file-the-bao-hanh-2.jpg" alt="">
                </div>
                <div class="warranty-table">
                    <table class="rounded-corners">
                        <tbody>
                            <tr class="row-title">
                                <th colspan="2">Thẻ Bảo Hành</th>
                            </tr>
                            <tr>
                                <th>Mã thẻ</th>
                                <td><?= $warranty_post['code'] ?></td>
                            </tr>
                            <tr>
                                <th>Tên:</th>
                                <td><?= $warranty_post['name'] ?></td>
                            </tr>
                            <tr>
                                <th>Giá trị đến:</th>
                                <td><?= $warranty_post['warranty_period'] ?></td>
                            </tr>
                            <tr>
                                <th>Dịch Vụ:</th>
                                <td><?= $warranty_post['service'] ?></td>
                            </tr>
                            <tr>
                                <th>Số lượng:</th>
                                <td><?= $warranty_post['quantity'] ?></td>
                            </tr>
                            <tr>
                                <th>Chủng Loại:</th>
                                <td><?= $warranty_post['brand'] ?></td>
                            </tr>
                            <tr>
                                <th>Số điện thoại:</th>
                                <td><?= $warranty_post['phone'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="subtext">
                        <h5 class="card-text">Liên Hệ Hỗ Trợ và Bảo Hành</h5>
                        <p><b>Điện Thoại:</b> <a href="tel:02899959597">028 999 59597</a></p>
                    </div>
                    <div class="subtext">
                        <h5 class="card-text">Thông Tin Phòng Khám Nha Khoa</h5>
                        <p><b>Tên Phòng Khám:</b> Trung tâm Nha khoa Quốc tế SGC Dental Center</p>
                        <p><b>Địa Chỉ:</b> Số 34, đường Hồ Biểu Chánh, phường 11, quận Phú Nhuận, Tp.HCM</p>
                    </div>

                </div>
                <div class="other-code text-center mt-5">
                    <a href="<?= get_base_url_without_parameters() ?>" class="pbmit-btn pbmit-btn-outline">Tìm với mã khác</a>
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
