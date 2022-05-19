<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $view_bag ['title']; ?></title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="container">
        <header style="width: 100%; height:7em; background:pink; display:flex; align-items:center">
            <div style=" font-family: Arial, Helvetica, sans-serif; font-size: 2rem; padding-left:4rem; ">
            <h2><?= $view_bag ['title']; ?></h2>
            </div>
        </header>
        <nav style="display: inline-block;">
            <br>
            <a style=" font-family: Arial, Helvetica, sans-serif; padding-left:4rem;" href="/index.php">Home</a>
            <a style=" font-family: Arial, Helvetica, sans-serif; padding-left:4rem;" href="/admin/admin.php">Admin</a>
            <a style=" font-family: Arial, Helvetica, sans-serif; padding-left:4rem;" href="/login.php">Login</a>
            <a style=" font-family: Arial, Helvetica, sans-serif; padding-left:4rem;" href="/logout.php">Logout</a>
        </nav>
        <nav style="display: inline-block; margin-left:2rem;">
            <form style="align-self: center;" action="" method="post">
                <input type="hidden" value="switch" name="switch"/>
                <input type="submit" value="SWITCH"/>
            </form>
        </nav>
        <?php require "$name.view.php"?>
    </body>
</html>