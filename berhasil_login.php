<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
        exit();
    }

?>

<form action="logout.php" method="POST" class="login-email">
    <h1>Irashai!!!, <?php echo $_SESSION['username']; ?>!</h1>
    <div class="input-group">
        <button type="submit" class="btn">logout</button>
    </div>

</form>