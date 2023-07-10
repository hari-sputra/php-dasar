<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <?php if (isset($_GET["message"])) {
            $msg = $_GET["message"];
            echo "<div class='msg'>$msg</div>";
        } ?>
        <section class="wrapper">
            <h2 class="title">LOGIN</h2>
            <div class="">
                <form action="login.php" method="post" class="form-login">
                    <label for="employee_id">Employee ID</label>
                    <input type="number" id="employee_id" class="input-login" placeholder="123" name="employee_id">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="input-login" placeholder="******" name="password">
                    <button type="submit" class="button-login" name="login">Login</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>