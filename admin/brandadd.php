<?php
require "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>

<?php
$cartegory = new cartegory;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
}
?>
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_add">
        <h1>Thêm danh mục</h1>
        <form action="" method="POST">
        <select name="" id="">
            <option value="">--Chọn Danh mục</option>
            <option value="">Nam</option>
            <option value="">Nữ</option>
        </select>
        <input name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
        <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>