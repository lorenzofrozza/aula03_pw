<?php $estudantes = $_REQUEST['estudantes']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="bg-black">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER. '/view/navbar.php'; ?>


    <h1 class="bg-black text-center text-white pb-3" >Semana da Acessibilidade</h1>

    <img class="mb-5 mt-5 " src="acessibilidade.jpg" alt="A imagem possui exemplos do direito a acessibilidade, como, cadeirante, gestante, idoso, entre outros. ">

    <br>
  <a href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar " class="btn btn-success"> Cadastrar estudante </a>
    <br>

    <table class="table bg-black text-white">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($estudantes as $estudanteAtual) { ?>
            <tr>
                <td><?php echo $estudanteAtual ['id'] ?> </td>
                <td><?php echo $estudanteAtual ['nome'] ?> </td>
                <td><?php echo $estudanteAtual ['idade'] ?> </td>
                <td>
                  <a href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=editar&id=<?php echo $estudanteAtual ['id']; ?>" class= "btn btn-primary">Editar</a> 
                  <a href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=excluir&id=<?php echo $estudanteAtual ['id']; ?>" class= "btn btn-primary">Excluir</a> 
                </td>
            </tr>
        <?php } ?>
  </tbody>
</table>

</body>
</html>