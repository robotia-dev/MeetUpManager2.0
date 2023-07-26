<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />

    <div id="wrapper">
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="/"
        >
          <div class="sidebar-brand-icon">
            <i class="icon"><img src="./img/presentation-fill.svg" /></i>
          </div>
          <div class="sidebar-brand-text mx-3">Meet up manager</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >User</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">
                Bem-vindo ao Meet Up Manager
              </h1>
            </div>

       

            <!-- Content Row -->
            <!-- Content Row -->
            <div class="row">
              <!-- Content Column -->
              <div class="col-lg-12">
                <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
                  </div>
                  <div class="card-body">
                    <div class="cards row">

                      <div class="card col-md-5 p-4">
                        <h5>Usuarios cadastrados</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $usuario)
                                        <tr>
                                            <td><span>{{ $usuario->id }}</span></td>
                                            <td>{{ $usuario->name }}</td>
                                            <!-- <td>{{ $usuario->email }}</td> -->
                                            <td>
                                          
                                                <a href="#" class="delete"><i class="far fa-trash-alt"></i></a>
                                                <a href="#" class="edit"><i class="far fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
                            Novo
                        </button>
                      </div>


                      <div class="modal" id="myModal1">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Crie um novo usuário</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                                                <div class="col-md-12">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>

                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-12 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Cadastrar') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                      </div>




                      <div class="card col-md-5 p-4">
                      <h5>Salas cadastradas</h5>
                      <div class="table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Capacidade</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($salas as $sala)
                                <tr>
                                    <td><span>{{ $sala->des_sala }}</span></td>
                                    <td><span>{{ $sala->capacidade }}</span></td>
                                    <td>
                                    <form action="{{ route('sala.destroy', $sala->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir<i class="far fa-trash-alt"></i></button>
</form>
                                        <a href="#" class="edit"><i class="far fa-edit"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                      </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
                            Novo
                        </button>
                      </div>

                      <div class="modal" id="myModal2">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Crie uma nova sala</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{ route('salas.create') }}" method="POST">
                                          @csrf
                                            <div class="form-group">
                                                <label for="des_sala">Descrição sala:</label>
                                                <input type="text" name="des_sala" id="des_sala" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="capacidade">Capacidade:</label>
                                                <input type="number" name="capacidade" id="capacidade" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="capacidade">Tipo:</label>
                                                <input type="text" name="tipo" id="tipo" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Criar Sala</button>
                                        </form>
                                    </div>

                                <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                      </div>
                      <div class="card col-md-10 p-4">
                        <h5>Departamentos cadastrados</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Departamento</th>
                                        <th>Descrição</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($departamentos as $departamento)
                                    <tr>
                                        <td><span>{{ $departamento->departamento }}</span></td>
                                        <td><span>{{ $departamento->descricao_departamento }}</span></td>
                                        <td>
                                        <form action="{{ route('departamento.destroy', $departamento->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir<i class="far fa-trash-alt"></i></button>
</form>
                                            <a href="#" class="edit"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            Novo
                        </button>
                            <!-- Modal -->

                      </div>
                      <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Crie um novo departamento</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{ route('departamentos.create') }}" method="POST">
                                            <div class="form-group">
                                                <label for="nome">Nome departamento:</label>
                                                <input type="text" name="nome" id="nome" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="descricao_departamento">Descrição departamento:</label>
                                                <input type="text" name="descricao_departamento" id="descricao_departamento" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Criar Departamento</button>
                                        </form>
                                    </div>

                                <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2021</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Deseja mesmo sair?
            </h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Selecione "Logout" se você desejar encerar a sua sessão.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancelar
            </button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script>
        /*!
 * Start Bootstrap - SB Admin 2 v4.1.3 (https://startbootstrap.com/theme/sb-admin-2)
 * Copyright 2013-2021 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin-2/blob/master/LICENSE)
 */

!(function (l) {
  "use strict";
  l("#sidebarToggle, #sidebarToggleTop").on("click", function (e) {
    l("body").toggleClass("sidebar-toggled"),
      l(".sidebar").toggleClass("toggled"),
      l(".sidebar").hasClass("toggled") &&
        l(".sidebar .collapse").collapse("hide");
  }),
    l(window).resize(function () {
      l(window).width() < 768 && l(".sidebar .collapse").collapse("hide"),
        l(window).width() < 480 &&
          !l(".sidebar").hasClass("toggled") &&
          (l("body").addClass("sidebar-toggled"),
          l(".sidebar").addClass("toggled"),
          l(".sidebar .collapse").collapse("hide"));
    }),
    l("body.fixed-nav .sidebar").on(
      "mousewheel DOMMouseScroll wheel",
      function (e) {
        var o;
        768 < l(window).width() &&
          ((o = (o = e.originalEvent).wheelDelta || -o.detail),
          (this.scrollTop += 30 * (o < 0 ? 1 : -1)),
          e.preventDefault());
      }
    ),
    l(document).on("scroll", function () {
      100 < l(this).scrollTop()
        ? l(".scroll-to-top").fadeIn()
        : l(".scroll-to-top").fadeOut();
    }),
    l(document).on("click", "a.scroll-to-top", function (e) {
      var o = l(this);
      l("html, body")
        .stop()
        .animate(
          { scrollTop: l(o.attr("href")).offset().top },
          1e3,
          "easeInOutExpo"
        ),
        e.preventDefault();
    });
})(jQuery);

    </script>
