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
      <h2 class="py-5">Excluindo Visitante <i class="fa-solid fa-user-xmark"></i></h2>
    </div>
  </div>
  <div class="container">
    <h2 class="text-center mt-5">Excluindo Visitante <?= $visitor['name']; ?></h2>

    <form method="post" action="controller/DeleteVisitorControllerWeb.php?email=<?= $visitor['email'] ?>">
      <div class="mb-3 mt-5">
        <label class="form-label">Tem certeza que quer excluir o visitante <strong><?= $visitor['email']; ?></strong> ?</label>
      </div>
      <input type="hidden" name="email" value="<?= $visitor['email']; ?>">
      <input type="submit" value="Excluir" class="btn btn-danger">
      <a href="../admin.php" class="btn btn-secondary">Voltar</a>
    </form>
  </div>
</body>

</html>