<?php
$a=0;
if(isset($_POST['submit'])){
    $a = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Three numbers</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      .navbar{
        margin-bottom:0;
        border-radius:0;
      }
    </style>
  </head>
  <body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  <h1>Enter three numbers</h1>
  <hr>
  <div class="container">
      <form role="form" method="post">
        <div class="form-group">
          <label>Number 1</label>
          <input type="text" class="form-control" name="num1" placeholder="Add Name">
        </div>
        <div class="form-group">
          <label>Number 2</label>
          <input type="text" class="form-control" name="num2" placeholder="Add Name">
        </div>
        <div class="form-group">
          <label>Number 3</label>
          <input type="text" class="form-control" name="num3" placeholder="Add Name">
        </div>
        <button type="submit" class="btn btn-primary">Click here</button>
      </form>
      <?php
      if($a=1){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
       if($num1>$num2 && $num1>$num3){
        echo "<h1>".$num1." Is maximum</h1>";
        }elseif($num2>$num1 && $num2>$num3){
          echo "<h1>".$num2." Is maximum</h1>";
        }elseif($num3>$num2 && $num3>$num2){
          echo "<h1>".$num3." Is maximum</h1>";
        }
        if($num1<$num2 && $num1<$num3){
          echo "<h1>".$num1." Is minimum</h1>";
          }elseif($num2<$num1 && $num2<$num3){
            echo "<h1>".$num2." Is minimum</h1>";
          }elseif($num3<$num2 && $num3<$num2){
            echo "<h1>".$num3." Is minimum</h1>";
          }
        $a=0;
        }
        ?>
  </div>
</html>