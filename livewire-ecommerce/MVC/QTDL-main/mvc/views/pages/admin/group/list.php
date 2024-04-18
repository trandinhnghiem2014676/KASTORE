<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH NHÓM NGƯỜI DÙNG</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ NHÓM</th>
                    <th>TÊN NHÓM</th>
                    <th></th>
                </tr>
                <?php
                if (!empty($data['group'])) {

                    foreach ($data['group'] as $item) {
                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>
                            <a href="' ._WEB_ROOT.'/group/update/'.$item['id'].'"><input type="button" value="Sửa" /></a>
                            <a href="' ._WEB_ROOT.'/group/delete/'.$item['id'].'"><input type="button" value="Xóa" /></a>
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
            <a href="<?php echo _WEB_ROOT.'/group/add' ?>"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>