<?php
include_once "get_categorias.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <?php
    include_once "../common/head.php";
  ?>
</head>

<body class="">
  <div class="wrapper ">

    <?php
      include_once "../common/sidebar.php";
    ?>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Table List</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th> ID </th>
                        <th> Nome </th>
                        <th> Editar </th>
                        <th> Excluir </th>
                      </thead>

                      <tbody>
                      <?php foreach ($categorias as $categoria): ?>
                        <tr>
                          <td><?= $categoria['id'] ?></td>
                          <td><?= $categoria['nome']?></td>
                          <td>
                            <i class="material-icons">edit</i>
                          </td>
                          <td>
                            <a href="delete.php?id=<?= $categoria['id'] ?>">
                              <i class="material-icons">delete</i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                      </tbody>

                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php
        include_once "../common/footer.php";
      ?>

    </div>
  </div>

  <?php
    include_once "../common/scripts.php";
    if ($_GET['msg'] == 'delerro') {
      echo '
        <script>
          alert("Não é possível excluir essa categoria")
        </script> ';
    } elseif ($_GET['msg'] == 'delsucesso') {
      echo '
        <script>
          alert("Categoria excluída com sucesso")
        </script> ';
    }
  ?>

</body>

</html>
