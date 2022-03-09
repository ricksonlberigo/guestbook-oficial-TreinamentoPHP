<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/e52263f0c5.js" crossorigin="anonymous"></script>

  <title>Guestbook</title>
</head>

<body>
  <div class="jumbotron bg-dark text-light py-3">
    <div class="container">
      <h2 class="py-5">Bem-vindo ao nosso livro de visitas <i class="fa-solid fa-book-open"></i></h2>
    </div>
  </div>

  <div class="container mt-5">
    <div class="container-fluid">
      <h3 class="text-center">Assinar livro de visitas.</h3>

      <form class="py-5" method="POST" action="../controller/SaveVisitorControllerWeb.php">
        <div class="mb-3">
          <label for="email" class="form-label">Digite o seu E-mail</label>
          <input name="email" type="email" class="form-control form-control-lg" id="email" class="form-text">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Digite o seu Nome</label>
          <input name="name" type="text" class="form-control form-control-lg" id="name" class="form-text">
        </div>

        <input type="submit" class="btn btn-primary btn-lg" value="Assinar">
        <a href="../admin.php" class="btn btn-secondary btn-lg">Lista de visitantes</a>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>