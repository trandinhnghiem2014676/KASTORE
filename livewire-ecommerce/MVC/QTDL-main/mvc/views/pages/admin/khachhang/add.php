<div class="row">
    <div class="row frmtitle">
        <H1>THÊM KHÁCH HÀNG</H1>
    </div>
    <div class="row frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="" method="post">
            <div class="row mb10">
                Mã khách hàng<br>
                <input type="text" name="manhom" disabled>
            </div>
            <div class="row mb10">
                Tên khách hàng<br>
                <input type="text" required name="tenkh">
            </div>
            <div class="row mb10">
                Email<br>
                <input type="text" required name="email">
            </div>
            <div class="row mb10">
                Số điện thoại<br>
                <input type="text" required name="sdt">
            </div>
            <div class="row mb10">
                Địa chỉ<br>
                <input type="text" required name="diachi">
            </div>
            <div class="row mb10">
                Role<br>
                <input type="text" required name="tennhom">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="<?php echo _WEB_ROOT.'/khachhang/list' ?>"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>