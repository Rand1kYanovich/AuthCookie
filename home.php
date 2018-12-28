<? setcookie("login","ff",time()-3600);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    
    <div class="container">
        <div class="row">
   
    <? if(!isset($_COOKIE["login"])): ?>
        <form action="index.php" method="post">
            <label>Логин</label>
            <input type="text" class="form-control" alt="login" name="login" id="#login" required>
            <label>Пароль</label>
            <input type="text" class="form-control" alt="password" name="password" id="$password" required>
            <button class="btn btn-primary mt-3">Submit</button>
        </form>
        <? endif ?>
    
        </div>
    </div>
   
   <? 
    if(isset($_COOKIE["login"]) && isset($_COOKIE["password"])) {
        echo "Ваш логин: ".$_COOKIE["login"]."<br>";
        echo "Ваш пароль: ".$_COOKIE["password"]."<br>";
        
    }
    
    ?>
</body>
</html>