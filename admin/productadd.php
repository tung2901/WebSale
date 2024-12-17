<?php
require "header.php";
include "slider.php";
include "class/product_class.php"
?>
<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $insert_product = $product->insert_product($_POST, $_FILES);
}
?>


<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm Sản phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
            <input name="product_name" required type="text">
            <label for="">Chọn Danh mục <span style="color: red;">*</span></label>
            <select name="cartegory_id" id="cartegory_id">
                <option value="#">--chọn--</option>
                <?php
                $show_cartegory = $product->show_cartegory();
                if ($show_cartegory) {
                    while ($result = $show_cartegory->fetch_assoc()) {


                ?>
                        <option value="<?php echo $result['cartegory_id'] ?> "><?php echo $result['cartegory_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <label for="">Chọn Loại sản phẩm <span style="color: red;">*</span></label>
            <select name="brand_id" id="brand_id">
                <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                <option value="#">--chọn--</option>

                ?>
            </select>
            <label for="">Giá Sản phẩm <span style="color: red;">*</span></label>
            <input name="product_price" required type="text">
            <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
            <input name="product_price_new" required type="text">
            <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
            <textarea required name="product_desc" id="editor1" cols="30" rows="10"></textarea>
            <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
            <input name="product_img" required type="file">
            <label for="">Ảnh Mô tả <span style="color: red;">*</span></label>
            <input name="product_img_desc[]" required multiple type="file">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
</script>


<script>
    $(document).ready(function() {
        $("#cartegory_id").change(function() {
            // alert($(this).val())
            var x = $(this).val()
            $.get("productadd_ajax.php",{caretegory_id:x},function(data){
                $("brand_id").html(data)
             })
        })
    })
</script>

</html>