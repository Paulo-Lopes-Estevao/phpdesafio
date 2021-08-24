<?php
require_once("../vendor/autoload.php");
?>

<!DOCTYPE html>

<html lang="pt-AO">

<head>

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="author" content="Walalétec & JandyEgi.  Desenvolvido Por Herlander Bento">

  <title>JandyEgi - Prestação de serviços.</title>

  <link rel="shortcut icon" href="res/site/icon/JandyEgi/favicon.png" type="image/x-icon">

  <!-- Bootstrap  CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/Bootstrap v4.4.1/css/bootstrap.min.css">

  <!-- Simple-sidebar -->
  <link rel="stylesheet" href="res/admin/library-HCB/style/sidebar.css">

  <!-- Style  CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/style/style.css">

  <!-- Font-awesome  CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/font-awesome/css/font-awesome.min.css">

  <!-- MDB CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/mdb/css/mdb.min.css">

  <link rel="stylesheet" href="res/admin/library-HCB/datatables/css/dataTables.bootstrap4.css">


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <aside class="bg-white border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <a href="#">
          <img style="margin-left: -43px;" src="" alt="">
          <span class="logo-text"></span>
        </a>
      </div>

      <div class="sidebar-user d-flex border-top border-bottom mx-2">
        <div class="photo">
          <img src='res/site/images/profile/' alt="" srcset="">
        </div>
        <div class="description">
          <span class="user"></span>
          <span class="function"></span>
        </div>
      </div>

      <ul class="list-group mt-3 list-group-flush">

        <div class="group-dasboard">

          <li class="list-group-item dashboard">

            <a href="#" class="active">
              <i class="fa fa-dashboard mr-1"></i>
              Dashboard
            </a>

          </li>

        </div>

        <li class="list-group-item">
          <a class="blue-text" href="#layoutSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa-users mr-1"></i>
            Usuários
          </a>

          <ul class="collapse show list-unstyled" data-parent="#sidebar-wrapper" id="layoutSubmenu">
            <li>
              <a href="users/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar Usuários</span></a>
            </li>
            <li>
              <a href="users" class="active"><i class="fa  fa-ellipsis-h "></i><span>Lista de Usuários</span></a>
            </li>
          </ul>

        </li>


      </ul>
    </aside>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg  navbar-default">

        <a href="#" class="ml-2" id="menu-toggle"><i class="fa fa-bars"></i></a>


        <div id="navbar-content">
          <ul class="menu-container nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item dropdown message">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <span class="icons"><i class="fa fa-envelope-o"></i></span>
                <span class="badge bg-danger"></span>
              </a>

              <ul class="dropdown-menu dropdown-message dropdown-menu-right wow flipInX">
                <li class="header border-bottom"><span>Você tem mensagens</span></li>

                <li class="body dropdown-backdrop">

                  <ul class="menu">

                    <li>
                      <a href="post-office-box">
                        <span class="pull-left photo"><img alt="avatar" src="res/site/images/profile/user.jpg"></span>
                        <span class="subject">
                          <span class="from"></span>
                          <span class="time"></span>
                        </span>
                        <span class="message">

                        </span>
                      </a>
                    </li>
                    {/loop}
                  </ul>

                </li>

                <li class="footer border-top"><a href="post-office-box">Veja Todas as Mensagens</a></li>
              </ul>

            </li>

            <li class="nav-item dropdown message">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <span class="icons"><i class="fa fa-bell-o"></i></span>
                <span class="badge bg-warning"></span>
              </a>

              <ul class="dropdown-menu dropdown-message dropdown-menu-right wow flipInX">
                <li class="header border-bottom"><span>Você tem Notificações</span></li>

                <li class="body dropdown-backdrop ">

                  <ul class="menu">

                    <li>
                      <a href='posts/{function="utf8_encode($value.desurl)"}/shows?#comments-area'>
                        <span class="pull-left photo"><img alt="avatar" src="res/site/images/profile/{$value.photos}"></span>
                        <span class="subject">
                          <span class="from"></span>
                          <!--span class="time">Agora Mesmo</span--->
                        </span>
                        <span class="message">

                        </span>
                      </a>
                    </li>
                    {/loop}
                  </ul>

                </li>

                <li class="footer border-top"><a href="notifications">Veja Todas as Notificações</a></li>
              </ul>

            </li>

            <li id="user" class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <!--span class="username"><i class="fa fa-caret-down mr-1"></i>Herlander Bento</span-->
                <span><img src='res/site/images/profile/{function="getUserPhoto()"}' alt=""></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right dropdown-user wow flipInX border">
                <li class="dropdown-item"><a href='profile/{function="getUserIdProfile()"}'><i class="fa fa-user"></i> Perfil</a></li>
                <li class="dropdown-item"><a href="../home?#home"><i class="fa fa-ellipsis-h"></i>Home</a></li>
                <li class="dropdown-item"><a href="../home?#about"><i class="fa fa-ellipsis-h"></i>Sobre</a></li>
                <li class="dropdown-item"><a href="../home?#services"><i class="fa fa-ellipsis-h"></i>Serviços</a></li>
                <li class="dropdown-item"><a href="../home?#portfolios"><i class="fa fa-ellipsis-h"></i>Portfólios</a></li>
                <li class="dropdown-item"><a href="../home?#clients"><i class="fa fa-ellipsis-h"></i>Clientes</a></li>
                <li class="dropdown-item"><a href="../blog"><i class="fa fa-ellipsis-h"></i>Blog</a></li>
                <li class="dropdown-item"><a href="../home?#contacts"><i class="fa fa-ellipsis-h"></i>contactos</a></li>
                <li class="dropdown-item border-top mt-1"><a href="logout"><i class="fa fa-power-off"></i> Sair</a></li>
              </ul>
            </li>


          </ul>
        </div>
        <br>
      </nav>


      <!-- content-wrapper --->

      <div class="content-wrapper">

        <div class="container-fluid">

          <div class="row py-5 px-3">
            <div class="col-lg-12 col-sm-12">
              <div class="cards  row  content-header">
                <div class="content-header-left col-lg-10 col-sm-10">
                  <span class="title">Bem-vindo</span>
                  <span><b>c</b> dashboard <b>app</b></span>
                </div>
              </div>
            </div>
          </div>


          <div class="row  pb-5">
            <div class="col-lg-12">
              <div class="cards cards-ds table-darks shadow">
                <div class="heading pb-3">
                  <span>Lista de Usuários</span>
                  <a href="users/create" class="ml-5 btn btn-register">Cadastrar</a>

                </div>
                <div class="table-search table-pagination table-responsive">
                  <table id="table2" class="table align-items-center">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Data Nascimento</th>
                        <th>Endereço</th>
                        <th>Descrição Titulo</th>
                        <th>Valor</th>
                        <th>Data Vencimento</th>

                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="tbody-first">

                      <?php


                      use App\controllers\DevedorControllers;

                      $devedor = new DevedorControllers();
                      $show = $devedor->List();

                      foreach ($show as $key => $value) {

                      ?>
                        <tr>
                          <td>
                            <span><?= $value["id"] ?></span>
                          </td>

                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i> <strong><?= $value["nome"] ?></strong>
                            </span>
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i> <strong><?= $value["cpf"] ?></strong>
                            </span>
                          </td>
                          <td>
                            <span>
                              <i class="bg-warning"></i> <strong><?= $value["datanascimento"] ?></strong>
                            </span>
                          </td>
                          <td>
                            <span>
                              <i class="bg-warning"></i> <strong><?= $value["endereco"] ?></strong>
                            </span>
                          </td>
                          <td>
                            <span>
                              <i class="bg-warning"></i> <strong><?= $value["descricaotitulo"] ?></strong>
                            </span>
                          </td>
                          <td>
                            <span>
                              <i class="bg-warning"></i> <strong><?= $value["valor"] ?></strong>
                            </span>
                          </td>
                          <td>
                            <span>
                              <i class="bg-warning"></i> <strong><?= $value["datavencimento"] ?></strong>
                            </span>
                          </td>

                          <td class="text-right">

                            <div class="dropdown action">
                              <a href="#" class="btn btn-action  dropdown-toggle-split" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="users/{$value.iduser}">Actualizar</a>
                                <a class="dropdown-item" onclick="return confirm('Deseja realmente excluir este post ?')" href="<?php #$devedor ?>">Eliminar</a>
                                <a class="dropdown-item" href="users/{$value.iduser}/password">Editar Senha</a>
                              </div>
                            </div>

                          </td>
                        </tr>
                      <?php } ?>


                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

      <footer class="footer">
        <span>Copyright © 2020 <strong></strong> <a href="mailto:herlanderbento19@gmail.com">Paulo Lopes</a>. - Solucões Tecnológicas</span>
      </footer>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="res/admin/library-HCB/jquery v3.4.1/jquery.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="res/admin/library-HCB/Bootstrap v4.4.1/js/bootstrap.bundle.min.js"></script>

  <!-- MDB core JavaScript -->
  <script src="res/admin/library-HCB/mdb/mdb.js"></script>

  <!-- Popper core JavaScript -->
  <script src="res/admin/library-HCB/mdb/js/popper.min.js"></script>

  <script src="res/admin/library-HCB/datatables/js/jquery.dataTables.js"></script>

  <script src="res/admin/library-HCB/datatables/js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript">
    new WOW().init();

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    $(function() {

      $('#table2').DataTable({

        "language": {
          "sInfo": "Mostrar usuários _START_ à _END_ - Total de Usuários: _TOTAL_ ",
          "sInfoFiltered": "(filtered from _MAX_ total )",
          "sLengthMenu": "Mostrar usuários _MENU_ ",
          "sSearch": "",
          "sSearchPlaceholder": "Procurar...",
          "sInfoEmpty": "Mostrando 0 à 0 de usuários 0 ",
          "sZeroRecords": "Nenhum registro encontrado"
        }
      });
    });
  </script>
</body>

</html>