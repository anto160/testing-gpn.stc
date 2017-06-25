<?php

//API Url
$url = 'http://example.com/api/JSON/create';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
include('db.php');
$page = $_GET['page'];	//номер страницы
$dismissal_period = $_GET['dismissal_period'];   // количестов дней до текущей даты, за котрые необходимо получить уволенных сотрудников

$query_db_1c = mysql_query("SELECT * FROM EMEX LIMIT 1", $bd1);
if (mysql_num_rows($query_db_1c)>0){
			$db_1c_array = mysql_fetch_array($query_db_1c);
		}else{
			echo '0000';
		}
//echo json_encode( $db_1c_array );
 
/*$jsonData = array(
    'username' => 'MyUsername',
    'password' => 'MyPassword'
);*/
$jsonData = $db_1c_array;

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);
?>