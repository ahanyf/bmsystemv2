<!--
<button type="button" class="dropdown-item suggestion-item">Apple</button>
<button type="button" class="dropdown-item suggestion-item">Banana</button>
<button type="button" class="dropdown-item suggestion-item">Cherry</button>
-->
<?php

/*
$connection = new mysqli("localhost", "root", "", "your_database");

if (isset($_POST['query'])) {
  $query = $connection->real_escape_string($_POST['query']);
  $sql = "SELECT productName FROM products WHERE productName LIKE '%$query%' LIMIT 5";
  $result = $connection->query($sql);

  while ($row = $result->fetch_assoc()) {
    echo "<div class='suggestion-item'>" . htmlspecialchars($row['productName']) . "</div>";
  }
}


*/


require '../../conn.php';

if (isset($_POST['query'])) {
	
	
 $query = $_POST['query'];
	
	
///	 $sql = "SELECT productName FROM products WHERE productName LIKE '%$query%' LIMIT 10";
	
$sql = "SELECT item_name, COUNT(*) AS count 
        FROM bm_delivery_items 
        WHERE item_name LIKE '%$query%'    
        GROUP BY item_name 
        ORDER BY count DESC 
        LIMIT 10";
	
$result = mysqli_query($conn, $sql );
	
while ($row = mysqli_fetch_assoc($result)) {

	
$di_item_name  = $row['item_name'];	

echo "<div class='suggestion-item'>".$di_item_name."</div>";

}
	
	

}

?>

