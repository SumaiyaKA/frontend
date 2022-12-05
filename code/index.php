<?php
  
  require_once("nav.php"); 
  $url = 'https://stage.harbour.space/api/v1/scholarship_pages/data-science-apprenticeship-zeptolab';

  $data = array('key1' => 'value1', 'key2' => 'value2');

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'GET',
            'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { 
        echo "Error";
    }


    // var_dump($result);


  session_start();
  // Don't show any errors 
  error_reporting(0);


?>
<html>
<head>
<script type="text/javascript">
// JavaScript code goes here.. 
</script>

</head>
<body>

  <footer>
      <!-- Footer should be applied to all pages -->
      <h5>Copy Right @ Sumaiya Al Amri 2022</h5>
  </footer>
</body>
</html>