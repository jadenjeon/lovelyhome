<!doctype html>
<html>
<head>
  <title>전병훈</title>
  <meta charset="utf-8">
</head>
<body>
  <h1><a href="number.php">Beginning</a></h1>

  <h2>
  <?php
    if(isset($_GET['id'])){
      echo $_GET['id'];
    } else{
      echo "Welcome";
    }
   ?>
  </h2>
  <?php
  if(isset($_GET['id'])){
    echo file_get_contents("dataa/".$_GET['id']);
  } else {
    echo "hello" ;
  }
  ?>
</body>
</html>
