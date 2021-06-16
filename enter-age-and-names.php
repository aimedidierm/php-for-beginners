<?php
$a=0;
if(isset($_POST['submit'])){
    $a = 1;
    //mbega aga project keza
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enter age and names</title>
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
  <h1>Enter age and names</h1>
  <hr>
  <div class="container">
      <form role="form" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Add Name">
        </div>
        <div class="form-group">
          <label>Age</label>
          <input type="text" class="form-control" name="age" placeholder="Add Name">
        </div>
        <button type="submit" class="btn btn-primary">Click here</button>
      </form>
      <?php
      if($a=1){
        $name = $_POST['name'];
        $age = $_POST['age'];
       if($age<19){
        DisplayName($age,$name); //calling function
        $a=0;
        }else{
             echo "<h4>Programming is good</h4>";
             $a=0;
        }
        }
        // creating function
        function DisplayName($age,$name){
        $i=1;
        while($i<=$age){
            echo "<h4>".$name."</h4>";
            $i++;
            }
        }
        ?>
  </div>
</html>
