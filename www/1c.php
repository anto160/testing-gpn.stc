<?php
include('db.php');
$page = $_GET['page'];	//номер страницы
$dismissal_period = $_GET['dismissal_period'];   // количестов дней до текущей даты, за котрые необходимо получить уволенных сотрудников

$query_db_1c = mysql_query("SELECT * FROM names", $bd1);

if (mysql_num_rows($query_db_1c)>0){
			$db_1c_array = mysql_fetch_array($query_db_1c);
		}else{
			echo '0000';
		}
echo json_encode( $db_1c_array );


/*
$cart = array(
  "orderID" => 12345,
  "shopperName" => "Ваня Иванов",
  "shopperEmail" => "ivanov@example.com",
  "contents" => array(
    array(
      "productID" => 34,
      "productName" => "Супер товар",
      "quantity" => 1
    ),
    array(
      "productID" => 56,
      "productName" => "Чудо товар",
      "quantity" => 3
    )
  ),
  "orderCompleted" => true
);
 
echo json_encode( $cart );
*/


/*
{
  "orderID": 12345,
  "shopperName": "Ваня Иванов",
  "shopperEmail": "ivanov@example.com",
  "contents": [
    {
      "productID": 34,
      "productName": "Супер товар",
      "quantity": 1
    },
    {
      "productID": 56,
      "productName": "Чудо товар",
      "quantity": 3
    }
  ],
  "orderCompleted": true
}*/
?>