<?php
session_start();
if (isset($_POST['submit'])) {
    $rand=rand();
    $_SESSION['msg']='Your random number is '.$rand;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RanGen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h4>Random Number Generator</h4>
        </div>
        <div class="card-body">
            <form action="index.php" method="POST">
                <input type="submit" name="submit" value="Generate Random Number">
            </form>

            <div class="mt-2">
            <?php
                if(isset($_SESSION['msg'])){
                 echo '<b><div class="alert alert-info">'.$_SESSION['msg'].'</div></b>';
                 unset($_SESSION['msg']);
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>