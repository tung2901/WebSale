<?php
include "database.php";
?>
<?php
class brand {
  private $db;

  public function __construct()
  {
    $this -> db = new Database();
  }
  public function insert_brand($cartegory_id, $brand_name) {
    $query = "INSERT INTO tbl_brand (cartegory_id,brand_name) VALUES ('$cartegory_id','$brand_name')";
    $result = $this ->db->insert($query);
    return $result;
  }
  public function show_cartegory(){
    $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
    $result = $this ->db->select($query);
    return $result;
  }
 
}
?>