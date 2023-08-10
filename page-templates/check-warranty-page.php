<?php

/**
 * Template Name: Warranty check page
 */

get_header();

?>

<style>
    /* Custom styling */
    .full-screen {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .rounded-container {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .button-check-warranty {
        display: block;
        margin: 0 auto;
    }
</style>

<div class="container-fluid full-screen">
    <div class="row justify-content-center" style="width: 100%;">
        <div class="col-md-6">
            <div class="rounded-container" >
                <h2 class="text-center">Kiểm tra bảo hành</h2>
                <form>
                    <div class="form-group">
                        <label for="warrantyCode">Mã bảo hành:</label>
                        <input type="text" class="form-control" id="warrantyCode" placeholder="Nhập mã bảo hành của bạn *">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block text-center button-check-warranty">Kiểm tra</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
