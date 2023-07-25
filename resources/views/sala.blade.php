

    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon">
            <i class="icon"><img src="./img/presentation-fill.svg" /></i>
          </div>
          <div class="sidebar-brand-text mx-3">Meet up manager</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fa fa-home" aria-hidden="true"></i>

            <span>Home</span></a
          >
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-comments"></i>
            <span>Sala</span></a
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
                    >Douglas</span
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
              <h1 class="h3 mb-0 text-gray-800">Sala 01</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
              <!-- Content Column -->
              <div class="col-lg-12">
                <!-- Illustrations -->
                <section style="background-color: #eee">
                  <div class="container py-5">
                    <div class="row">
                      <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                        <h5
                          class="font-weight-bold mb-3 text-center text-lg-start"
                        >
                          Member
                        </h5>

                        <div class="card">
                          <div class="card-body">
                            <ul class="list-unstyled mb-0">
                              <li
                                class="p-2 border-bottom"
                                style="background-color: #eee"
                              >
                                <a
                                  href="#!"
                                  class="d-flex justify-content-between"
                                >
                                  <div class="d-flex flex-row">
                                    <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp"
                                      alt="avatar"
                                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                      width="60"
                                    />
                                    <div class="pt-1">
                                      <p class="fw-bold mb-0">John Doe</p>
                                      <!-- <p class="small text-muted">
                                        Hello, Are you there?
                                      </p> -->
                                    </div>
                                  </div>
                                  <!-- <div class="pt-1">
                                    <p class="small text-muted mb-1">
                                      Just now
                                    </p>
                                    <span class="badge bg-danger float-end"
                                      >1</span
                                    >
                                  </div> -->
                                </a>
                              </li>
                              <li class="p-2 border-bottom">
                                <a
                                  href="#!"
                                  class="d-flex justify-content-between"
                                >
                                  <div class="d-flex flex-row">
                                    <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp"
                                      alt="avatar"
                                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                      width="60"
                                    />
                                    <div class="pt-1">
                                      <p class="fw-bold mb-0">Danny Smith</p>
                                      <!-- <p class="small text-muted">
                                        Lorem ipsum dolor sit.
                                      </p> -->
                                    </div>
                                  </div>
                                  <!-- <div class="pt-1">
                                    <p class="small text-muted mb-1">
                                      5 mins ago
                                    </p>
                                  </div> -->
                                </a>
                              </li>
                           
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-7 col-xl-8">
                        <ul class="list-unstyled" id="messageList">
                          <!-- <li class="d-flex justify-content-between mb-4">
                            <img
                              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                              alt="avatar"
                              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong"
                              width="60"
                            />
                            <div class="card">
                              <div
                                class="card-header d-flex justify-content-between p-3"
                              >
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-muted small mb-0">
                                  <i class="far fa-clock"></i> 12 mins ago
                                </p>
                              </div>
                              <div class="card-body">
                                <p class="mb-0">
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do eiusmod tempor
                                  incididunt ut labore et dolore magna aliqua.
                                </p>
                              </div>
                            </div>
                          </li>   -->
    
                          <li class="bg-white mb-3">
                            <div class="form-outline">
                              <textarea
                                class="form-control"
                                id="textAreaExample2"
                                rows="4"
                              ></textarea>
                              <label class="form-label" for="textAreaExample2">Message</label>
                            </div>
                          </li>
                          <button
                            type="button"
                            class="btn btn-info btn-rounded float-end"
                            onclick="sendMessage()"
                          >
                            Send
                          </button>
                        </ul>
                      </div>
                    </div>
                  </div>
                </section>

                <script>
                  function sendMessage() {
                    // Capturar o conteúdo do textarea
                    var message = document.getElementById("textAreaExample2").value;
                
                    if (message.trim() !== "") {
                      // Criar elementos HTML para a nova mensagem
                      var listItem = document.createElement("li");
                      listItem.className = "d-flex justify-content-between mb-4";
                
                      var avatarImg = document.createElement("img");
                      avatarImg.src =
                        "https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp";
                      avatarImg.alt = "avatar";
                      avatarImg.className =
                        "rounded-circle d-flex align-self-start me-3 shadow-1-strong";
                      avatarImg.width = "60";
                
                      var cardDiv = document.createElement("div");
                      cardDiv.className = "card";
                
                      var cardHeaderDiv = document.createElement("div");
                      cardHeaderDiv.className =
                        "card-header d-flex justify-content-between p-3";
                
                      var nameParagraph = document.createElement("p");
                      nameParagraph.className = "fw-bold mb-0";
                      nameParagraph.textContent = "You"; // Adicionar o nome do usuário aqui
                
                      var timeParagraph = document.createElement("p");
                      timeParagraph.className = "text-muted small mb-0";
                      var currentTime = new Date();
                      timeParagraph.innerHTML = `<i class="far fa-clock"></i> ${currentTime.getHours()}:${currentTime.getMinutes()}`;
                
                      cardHeaderDiv.appendChild(nameParagraph);
                      cardHeaderDiv.appendChild(timeParagraph);
                
                      var cardBodyDiv = document.createElement("div");
                      cardBodyDiv.className = "card-body";
                
                      var messageParagraph = document.createElement("p");
                      messageParagraph.className = "mb-0";
                      messageParagraph.textContent = message;
                
                      cardBodyDiv.appendChild(messageParagraph);
                      cardDiv.appendChild(cardHeaderDiv);
                      cardDiv.appendChild(cardBodyDiv);
                
                      listItem.appendChild(avatarImg);
                      listItem.appendChild(cardDiv);
                
                      // Inserir a nova mensagem na lista de mensagens
                      var messageList = document.getElementById("messageList");
                      messageList.insertBefore(listItem, messageList.firstChild);
                
                      // Limpar o conteúdo do textarea após o envio
                      document.getElementById("textAreaExample2").value = "";
                    }
                  }
                </script>
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
                      <h2>Cadastro de Reuniões</h2>
                      <form id="meetingForm">
                        <div class="form-group">
                          <label for="participants"
                            >Número de Participantes:</label
                          >
                          <input
                            type="number"
                            id="participants"
                            name="participants"
                            required
                          /><br />
                        </div>

                        <div class="form-group">
                          <label for="meetingType">Tipo de Reunião:</label>
                          <select id="meetingType" name="meetingType" required>
                            <option value="virtual">Virtual</option>
                            <option value="fisica">Física</option></select
                          ><br />
                        </div>

                        <div id="physicalMeetingFields" style="display: none">
                          <div class="form-group">
                            <label for="department">Setor/Departamento:</label>
                            <select id="department" name="department">
                              <option value="virtual">TI</option>
                              <option value="fisica">Call center</option>
                              <option value="fisica">Vendas</option>
                              <option value="fisica">Rh</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="meetingTime">Horário:</label>
                            <input
                              type="time"
                              id="meetingTime"
                              name="meetingTime"
                            /><br />
                          </div>
                        </div>

                        <input type="submit" value="Cadastrar Reunião" />
                      </form>
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
    <script>
      const meetingTypeSelect = document.getElementById("meetingType");
      const physicalMeetingFields = document.getElementById(
        "physicalMeetingFields"
      );

      meetingTypeSelect.addEventListener("change", function () {
        if (meetingTypeSelect.value === "fisica") {
          physicalMeetingFields.style.display = "block";
        } else {
          physicalMeetingFields.style.display = "none";
        }
      });

      const meetingForm = document.getElementById("meetingForm");
      meetingForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const participants = document.getElementById("participants").value;
        const meetingType = document.getElementById("meetingType").value;
        const department = document.getElementById("department").value;
        const meetingTime = document.getElementById("meetingTime").value;

        // Aqui você pode processar os dados enviados pelo formulário, por exemplo,
        // enviá-los para um servidor, armazená-los em um banco de dados, etc.
        // Por se tratar apenas de um exemplo, não incluí essa parte de processamento aqui.

        // Exemplo de saída dos dados no console:
        console.log("Número de Participantes:", participants);
        console.log("Tipo de Reunião:", meetingType);
        console.log("Setor/Departamento:", department);
        console.log("Horário da Reunião:", meetingTime);

        // Limpar o formulário após enviar os dados (opcional)
        meetingForm.reset();
      });
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
