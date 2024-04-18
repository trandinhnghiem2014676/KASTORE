<div class="row">
    <div class="row frmtitle">
        <H1>THÊM MỚI SẢN PHẨM</H1>
    </div>
    <div class="row frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="<?php echo _WEB_ROOT.'/sanpham/add' ?>" method="post" enctype="multipart/form-data">
            <div class="row mb10" style = "width:100%;">
                 Tên loại danh mục<br>
                <select class="form-select" style = "width:100%;
                                                    padding: 5px;
                                                    border-radius: 5px;" 
                    name= "cate" aria-label="Default select example">
                    <?php 
                        foreach($data['cate'] as $item){
                            echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
                        }
                    ?>                   
                </select>
            </div>
            <div class="row mb10">
                Mã sản phẩm<br>
                <input type="text" name="masp" disabled>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" required name="tensp">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                Hình<br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="<?php echo _WEB_ROOT.'/sanpham/list' ?>"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>