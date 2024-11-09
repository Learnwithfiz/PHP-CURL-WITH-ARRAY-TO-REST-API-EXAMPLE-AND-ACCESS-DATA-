<?php

 header('Content-Type: application/json');

  if($_SERVER['REQUEST_METHOD'] !="GET")
  {
    http_response_code(405);
    echo json_encode([
        "status"=>405,
        "Error"=>"Post Request not allow , only allow get Request"
    ]);

    exit;
  }
  $arr = [
    "user"=>[
        "name"=>"Fiz",
        "user id"=>1,
        "dept"=>"CSE",
        "Tution Fee"=>20000,
        
    ],
    "msg"=>[
        "error_msg"=>"has no error",
        "status"=>200
    ]

  ];
  $result = json_encode($arr);
  echo $result;

//   $convert_data = json_decode($result);
//   echo "<pre>";
//   print_r($convert_data);
 
?>
