<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <fieldset>
            <legend>login</legend>
            <p>
                <label>username:</label>
                <input type="text" name="username" placeholder="username..."/>
            </p>
            <p>
                <label>password:</label>
                <input type="password" name="password" placeholder="password..."/>
            </p>
            <p>
                <label><input type="checkbox" name="remember" value="remember"/>ingat</label>
            </p>
            <p>
                <input type="submit" name="submit" value="login"/>
            </p>
        </fieldset>
    </form>
    
</body>
</html>