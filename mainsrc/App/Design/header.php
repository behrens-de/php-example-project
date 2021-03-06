<!doctype html>
<html lang="de">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/php-example-project">Happy Panda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/php-example-project/users">Users</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/php-example-project/photoalben">Photoalben</a>
          </li>


        </ul>
        <form class="d-flex">
          <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
            <a class="btn btn-primary mx-2" href="/php-example-project/userdashboard">Dashboard</a>
            <a class="btn btn-outline-secondary" href="/php-example-project/logout">Abmelden</a>
          <?php else : ?>
            <a class="btn btn-primary mx-2" href="/php-example-project/login">Login</a>
            <a class="btn btn-outline-secondary" href="/php-example-project/register">Register</a>
          <?php endif; ?>
        </form>
      </div>
    </div>
  </nav>