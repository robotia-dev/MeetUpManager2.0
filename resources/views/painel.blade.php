@extends('layout.header')

@section('content')


<!-- Page Wrapper -->
<div id="wrapper">
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <i class="icon"><img src="./img/presentation-fill.svg" /></i>
      </div>
      <div class="sidebar-brand-text mx-3">Meet up manager</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
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
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
              <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">
            Bem-vindo ao Meet Up Manager
          </h1>
        </div>

        <!-- Content Row -->
        <div class="row">
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      Reuniões
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      {{ $totalReunioes }}

                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                      Em progresso
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      3
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                      Ocupação das salas
                    </div>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                          {{ $ocupacaoSala }}
                        </div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                      Espaços para reuniões
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                      {{$totalEspacos}}
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content Row -->
        <!-- Content Row -->
        <div class="row">
          <!-- Content Column -->
          <div class="col-lg-6 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Reuniões em andamento
                </h6>
              </div>
              @php
              use Carbon\Carbon;
              @endphp
              <div class="card-body">
                <div class="cards row">
                  @foreach ($reunioes as $reuniao)
                  <div class="card-reuniao col-md-5">
                    <p>Departamento: <span>{{ $reuniao->departamento }}</span></p>
                    <p>Horário: <span>{{ $reuniao->dta_acontecimento }}</span></p>
                    <p>Tempo Restante: <span>
                        @php
                        $remainingTime = Carbon::parse($reuniao->dta_acontecimento)->diffForHumans();
                        echo $remainingTime;
                        @endphp </span></p>
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Espaços disponíveis
                </h6>
              </div>
              <div class="card-body">
                <div class="cards row">
                  @foreach ($espacos as $espaco)
                  <div class="card-reuniao col-md-12">
                    <p>Sala: <span>{{ $espaco->des_sala }}</span></p>
                    <p>Capacidade: <span>{{ $espaco->capacidade }}</span></p>
                    <p>Tipo: <span>{{ $espaco->tipo }}</span></p>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Content Column -->
          <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Crie uma nova reunião
                </h6>
              </div>
              <div class="card-body">
                <div class="form">
                  <h3>Cadastro de Reuniões</h3>
                  <form action="{{ route('reunioes.create') }}" method="POST">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>

                </div>
                <div class="form-group">

                  <label for="organizador">ID do organizador:</label>
                  <select name="organizador" id="organizador" required>
                    @foreach ($usuarios as $user)

                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                  </select>

                </div>
                <div class="form-group">

                  <label for="sala">ID da sala:</label>
                  <select name="sala" id="sala" required>
                    @foreach ($espacos as $sala)

                    <option value="{{ $sala->id }}">{{ $sala->des_sala }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">

                  <label for="tipo">Tipo:</label>
                  <select name="tipo" id="tipo" required>
                    <option value="FISICA">FISICA</option>
                    <option value="VIRTUAL">VIRTUAL</option>
                  </select>

                </div>
                <div class="form-group">

                  <label for="dta_criacao">Data de criação:</label>
                  <input type="datetime-local" name="dta_criacao" id="dta_criacao" required>

                </div>
                <div class="form-group">
                  <label for="dta_encerramento">Data de encerramento:</label>
                  <input type="datetime-local" name="dta_encerramento" id="dta_encerramento" required>
                </div>
                <div class="form-group">
                  <label for="departamento">Departamento:</label>
                  <select name="departamento" id="departamento" required>
                    @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->descricao_departamento }}</option>
                    @endforeach
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Criar Reunião</button>
                </form>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Deseja mesmo sair?
          </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Selecione "Logout" se você desejar encerar a sua sessão.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancelar
          </button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  @endsection