<html>
  <head>	
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SI E-TLE | Login Admin</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="text-center">
    <main class="form-signin w-50" style="margin: 200px 300px;">
      <form action="auth.php" method="post">
          <h1 class="h3 mb-3 fw-normal"><strong>Login Admin</strong></h1>

          <div class="form-floating mb-3">
          <input type="text" class="form-control" id="username" name="username"  required>
          <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-3">
          <input type="password" class="form-control" name="password" id="password"  required>
          <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Masuk</button>
      </form>
    </main>
    <script>
        alert("Silahkan masukan username dan password dengan benar!");  
    </script>
  </body>
</html>