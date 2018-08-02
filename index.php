<!DOCTYPE html>
<html>
<head>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes">
<link rel="shortcut icon" href="css/images/favicon.ico">
<link rel="apple-touch-icon"  href="css/images/apple-touch-icon.ico">
<meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
<title>Tastify</title> 
<link rel="stylesheet" href="./css/jquery.mobile-1.3.1.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>

<body>
  <! -- Index Tab -- >
  <div data-role="page" id="index">
    <div data-role="header" data-position="fixed">
      
      <center><h1>HajjFood</h1></center>
    </div>

    <div class="panel left" data-role="panel" data-position="left" data-display="reveal" id="panel-01">  
      <ul>
        
      </ul>
    </div>  

    <div data-role="content">
      <?php
        $mysqli = new mysqli("localhost", "id6663956_root","root1","id6663956_categories_db");
          if ($mysqli == false) {
            die("Error: Could not connect. " . mysql_connect_error());
          } 
      ?>   
      <a>HajjFood is an recommendation app based on your special request.</a>
      <h5>This is a beta version.</h5>
      <a>For now, it can only recommend a meal from the app</a>
      <h5>Please try it, and leave feedback </h5>
    </div>

    <div data-role="footer" data-position="fixed">
      <div data-role="navbar">
        <ul>
          
          <li><a href="addToFav.php" data-role="button">Add</a></li>
        </ul>
      </div>  
    </div>
  </div> <br><br><br>All Righs Reserved (Team M-091)
</body>
</html>
