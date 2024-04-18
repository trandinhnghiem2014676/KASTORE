<div class="row">
    <div class="row frmtitle">
        <H1>THÊM MỚI Sản Phẩm</H1>
    </div>
    <div class="row frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select class="form-select " name= "cate" aria-label="Default select example">
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
                <input type="text" value="<?php echo $data['sanpham'][0]['name'] ?>" required name="tensp">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" value="<?php echo $data['sanpham'][0]['price'] ?>" name="giasp">
            </div>
            <div class="row mb10">
                Hình<br>
                <input type="file" name="hinh" id="">
                <img src="<?php echo _PATH_UPLOAD_PRODUCT .$data['sanpham'][0]['img']?>" style ="object-fit:cover;width:50px" alt="">
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" cols="100" rows="10">
                <?php echo $data['sanpham'][0]['mota'] ?>
                </textarea>
                
            </div>
            <div class="row mb10">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <a href="<?php echo _WEB_ROOT.'/sanpham/list' ?>"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>