<div class="row">
    <div class="row frmtitle">
        <H1>THÊM NHÓM NGƯỜI DÙNG</H1>
    </div>
    <div class="row frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="" method="post">
            <div class="row mb10">
                Mã nhóm<br>
                <input type="text" name="manhom" disabled>
            </div>
            <div class="row mb10">
                Tên nhóm người dùng<br>
                <input type="text" required name="tennhom">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="<?php echo _WEB_ROOT.'/group/list' ?>"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>