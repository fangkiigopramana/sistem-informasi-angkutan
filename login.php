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
            <i class="fa-solid fa-door-open" style="font-size: 40px;"></i>

            <h1 class="h3 mb-3 fw-normal">Please log in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <a href="index.php">
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            </a>
            <p class="mt-5 mb-3 text-body-secondary">&copy; <?php echo date('Y') ?></p>
</div>
    </main>
    
</body>

</html>