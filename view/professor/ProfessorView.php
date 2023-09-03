<?php $professores = $_REQUEST['professores']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="bg-black">
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Site Lorenzo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Estudantes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">Professores</a>
                </li>
                
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>

    <h1 class="bg-black text-center text-white pb-3" >Semana da Acessibilidade</h1>

    <img class="mb-5 mt-5 " src="acessibilidade.jpg" alt="A imagem possui exemplos do direito a acessibilidade, como, cadeirante, gestante, idoso, entre outros. ">

    <br>
  <a href="/aula03/?controller=Professor&acao=salvar " class="btn btn-success"> Cadastrar professor </a>
    <br>

    <table class="table bg-black text-white">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($professores as $professorAtual) { ?>
            <tr>
                <td><?php echo $professorAtual ['id'] ?> </td>
                <td><?php echo $professorAtual ['nome'] ?> </td>
                <td><?php echo $professorAtual ['idade'] ?> </td>
            </tr>
        <?php } ?>
  </tbody>
</table>

</body>
</html>