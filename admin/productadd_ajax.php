<?php
include "class/product_class.php"

?>




<?php
$show_brand_ajax = $product->show_brand_ajax($cartegory_id);
if ($show_brand_ajax) {
    while ($result = $show_brand_ajax
->fetch_assoc()) {
?>
        <option value="<?php echo $result['brand_id'] ?> "><?php echo $result['brand_name'] ?></option>
<?php
    }
}
