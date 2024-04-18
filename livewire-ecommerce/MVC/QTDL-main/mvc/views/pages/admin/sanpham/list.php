<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
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
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ</th>
                    <th>HÌNH</th>
                    <th>LƯỢT XEM</th>
                    <th>MÔ TẢ</th>
                    <th></th>
                </tr>
                <?php
                if (!empty($data['sanpham'])) {

                    foreach ($data['sanpham'] as $item) {
                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>' . $item['price'] . '</td>
                        <td><img style = "object-fit:cover;width:200px" src="'._PATH_UPLOAD_PRODUCT.'/'.$item['img'].'" /></td>
                        <td>' . $item['luotxem'] . '</td>
                        <td>' . $item['mota'] . '</td>
                        <td>
                            <a href="' ._WEB_ROOT.'/sanpham/update/'.$item['id'].'"><input type="button" value="Sửa" /></a>
                            <a href="' ._WEB_ROOT.'/sanpham/delete/'.$item['id'].'"><input type="button" value="Xóa" /></a>
                        </td>
                    </tr>';
                    }
                }

                ?>


            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="<?php echo _WEB_ROOT.'/sanpham/add' ?>"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>