<?php
 //$url = "http://localhost/hello/api/api.php";
 // validation
  
 $curl = curl_init();


 curl_setopt($curl,CURLOPT_URL,'http://localhost/hello/api/api.php'); 
 
 //https://dummyjson.com/products // this url need ssl verify 
  /**
   * curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false); // Bypass SSL verification
     curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
   */
 curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,false); // Bypass SSL verification
 curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);// Bypass SSL verification
 $response = curl_exec($curl);
 
 if(curl_errno($curl))
 {
   echo "Curl is not working properly " . curl_error($curl); 
 }else{
    $data = json_decode($response,true);
    echo "<pre>";
    print_r($data);
 }


 $ex = curl_close($curl);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Name : <?php echo $data["user"]['name']; //echo  $data->user->name;?> </h1>
</body>
</html>