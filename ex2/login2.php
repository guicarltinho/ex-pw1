<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title></title>
</head>
<body>

</body>
</html>


<?php
  if($_POST['Username'] == 'marcelo'){
      echo "Usuario identificado";    
    }
    else{
      echo "usuario não identificado";
    }
?>

    <br><br>

<?php
    if ($_POST['senha'] == '123'){
      echo "Senha Correta";
    }

    else{
      echo "senha Incorreta";
    }
    ?>