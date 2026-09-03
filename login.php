<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="login-page">

    <div class="login-container">
        <div class="login-card">
            
            <h1>Login Admin</h1>
            <?php if (isset($_GET['error'])) : ?>
                <div class="alert-error">
                    Username atau Password Admin salah!
                </div>
            <?php endif; ?>
            <form action="proses_login.php" method="POST">
                <div class="form-group">
                    <label for="username">
                        Username
                    </label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        required
                    >
                </div>

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                    >

                </div>

                <button type="submit">
                    Login
                </button>

            </form>

        </div>

    </div>

</body>
</html>