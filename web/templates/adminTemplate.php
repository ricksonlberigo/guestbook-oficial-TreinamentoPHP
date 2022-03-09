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
      <h2 class="py-5">Lista de visitantes que assinaram <i class="fa-solid fa-list-check"></i></h2>
    </div>
  </div>

  <div class="container mt-5">
    <div class="container-fluid">
      <h3 class="text-center">Lista de Visitantes.</h3>

      <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">E-mail</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($visitors as $visitor) : ?>
            <tr>
              <td><?= $visitor['email']; ?></td>
              <td><?= $visitor['name']; ?></td>
              <td>
                <a href="edit.php?email=<?= $visitor['email']; ?>" class="btn btn-primary btn-sm">Editar</a>
                <a href="delete.php?email=<?= $visitor['email']; ?>" class="btn btn-danger btn-sm">Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <a href="../index.php" class="btn btn-secondary btn-lg">Voltar para assinar</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>