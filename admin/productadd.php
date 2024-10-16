<?php
require "header.php";
include "slider.php";
?>


<div class="admin-content-right">
<div class="admin-content-right-product_add">
                <h1>Thêm Sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input type="text" >
                    <label for="">Chọn Danh mục <span style="color: red;">*</span></label>
                    <select name="" id="">
                        <option value="#">--chọn--</option>
                    </select>
                    <select name="" id="">
                        <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                        <option value="#">--chọn--</option>
                    </select>
                    <label for="">Giá Sản phẩm <span style="color: red;">*</span></label>
                    <input type="text">
                    <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
                    <input type="text">
                    <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
                    <textarea name="" id="" cols="30" rows="10" ></textarea>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                    <input type="file">
                    <label for="">Ảnh Mô tả <span style="color: red;">*</span></label>
                    <input multiple type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
</div>
</section>
</body>

</html>