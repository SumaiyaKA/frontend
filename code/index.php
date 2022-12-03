
<?php
  
  require_once("nav.php"); 
  $url = "https://stage.harbour.space/api/v1/scholarship_pages/data-science-apprenticeship-zeptolab";

  session_start();
  // Don't show any errors 
  error_reporting(0);

    // ....................................................................................................
    
    $params = array(
        'api_token'  => 'tokenhere'
        );

    // Create a new Request object
    $request = new Request($url, 'POST', $params);

    // Send the request
    $request->send();

    // Get the Response object
    $response = $request->getResponse();

    if($response->getStatusCode() == 200) {

        // Retrieve the session token details
        $token = $response->getBodyDecoded();

        print_r($token);
    }
    else {

        echo $response->getStatusCode() . PHP_EOL;
        echo $response->getReasonPhrase() . PHP_EOL;
        echo $response->getBody() . PHP_EOL;
    }

?>
<html>
<head>
<script type="text/javascript">
// JavaScript code goes here.. 
</script>

</head>
<body>

    <div class="menu">
    <button class="menu-btn">Dropdown</button>
    <div class="menu-content">
        <a href="link here">page name</a>
    </div>
    </div>

  <footer>
      <!-- Footer should be applied to all pages -->
      <h5>Copy Right @ Sumaiya Al Amri 2022</h5>
  </footer>
</body>
</html>