<div class="row">
    <div class="row frmtitle">
        <H1>THÊM MỚI LOẠI HÀNG HÓA</H1>
    </div>
    <div class="row frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" required name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="<?php echo _WEB_ROOT.'/danhmuc/list' ?>"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>