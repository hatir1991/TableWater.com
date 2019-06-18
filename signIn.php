<?php
  
session_start();
?>

<!DOCTYPE HTML>

<html>
<head>
 <style>
    html, body{width:100%; height:100%; margin:0}
    #action_form{
        position:absolute;
        width:200px;
        height:150px;
        left:50%;
        top:50%;
        margin-left:-100px;
        margin-top:-100px;
        border:1px solid
        
    }
	label{color:red;}
    form{padding:14px}
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<title>Вход</title>
</head>
<body >

<form id='action_form' action='Index.php' method='post'>
<p style="color: red;"><?php  echo($_SESSION['text']); ?></p>
<div class="form-group">
<label for='login'>Логин</label>
<input class="form-control" type="text" id="login" name="login" required >
</div>
<div class="form-group">
<label for='pass'>Пароль</label>
<input class="form-control" type="password" id="pass" name="pass" required >

</div>
<input type="submit" name='signIn' value="Войти">
</form>
<?php
//nclude('Function.php');
//signIn($_POST['login'],$_POST['pass']);

?>
</body>

</html

