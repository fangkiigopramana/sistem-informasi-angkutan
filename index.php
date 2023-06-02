<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'partial/head.php';
    ?>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/examples/sign-in/sign-in.css">
</head>

<body>

    <main class="form-signin w-100 m-auto">
        <div class="text-center">
            <form method="post" action="kelola/auth.php">

                <i class="fa-solid fa-door-open" style="font-size: 40px;"></i>

                <h1 class="h3 mb-3 fw-normal">Please log in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="sandi" placeholder="Password">
                    <label for="sandi">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Log in</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; <?php echo date('Y') ?></p>
            </form>
        </div>
    </main>
    
</body>

</html>