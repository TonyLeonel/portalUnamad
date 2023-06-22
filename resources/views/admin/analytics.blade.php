@extends('layouts.admin')

@section('titulo', 'Administración de Carreras')

@section('meta')
   <meta name="google-signin-client_id" content="<REPLACE_WITH_CLIENT_ID>">
   <meta name="google-signin-scope" content="https://www.googleapis.com/auth/analytics.readonly">
@endsection

@section('css')
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
   <!-- Google Fonts Roboto -->
   {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" /> --}}
   <!-- MDB UI KIT -->
   {{--
<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" /> --}}
@endsection

@section('js')
   <script src="{{ asset('lib/datatables/DataTables-1.11.5/js/jquery.dataTables.min.js') }}" type="text/javascript">
   </script>
   <script src="{{ asset('lib/datatables/DataTables-1.11.5/js/dataTables.bootstrap4.min.js') }}" type="text/javascript">
   </script>
   {{-- <script src="{{ asset('js/admin/docentes.js') }}" type="text/javascript"></script> --}}

   <!-- MDB ESSENTIAL -->
   {{-- <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script> --}}
   <!-- Google API -->
   <script src="https://apis.google.com/js/api.js"></script>
   <!-- easyData - Google Analtyics -->
   <script type="text/javascript" src="{{ asset('js/easyData-google-analtyics.js') }}"></script>

   <!-- easyData - Fetching data-->
   <script>
      // Your Client ID
      const CLIENT_ID = "240350945483-ov9ocvc9fa4dlij39sj0kgnfusd5otas.apps.googleusercontent.com";

      function loadData() {
         // Your GA property ID
         const propertyId = "384245786";

         const startDate = "7daysAgo";
         const endDate = "today";
         const metrics = [{
               name: "activeUsers"
            },
            {
               name: "screenPageViews"
            },
            {
               name: "sessions"
            },
         ];

         const query = {
            dateRanges: [{
               startDate,
               endDate
            }],
            metrics: metrics,
         };

         runReport(propertyId, query, displayResult);
      }

      function displayResult(response) {
         document.getElementById("displayUsers").innerHTML =
            response.result.rows[0].metricValues[0].value;
         document.getElementById("displayPageViews").innerHTML =
            response.result.rows[0].metricValues[1].value;
         document.getElementById("displaySessions").innerHTML =
            response.result.rows[0].metricValues[2].value;
      }

      // Login buttons
      document.addEventListener("gapi-loaded", (e) => {
         if (isSignedIn()) {
            document.getElementById("sign-out-btn").style.display = "block";
            document.getElementById("sign-in-btn").style.display = "none";
            loadData();
         } else {
            document.getElementById("sign-in-btn").style.display = "block";
            document.getElementById("sign-out-btn").style.display = "none";
         }
      });
   </script>
@endsection

@section('contenido')
   <div class="container-xl">
      <!-- Page title -->
      <div class="page-header d-print-none">
         <div class="row align-items-center">
            <div class="col">
               <div>
                  <ol class="breadcrumb breadcrumb-alternate" aria-label="breadcrumbs">
                     <li class="breadcrumb-item"><a href="{{ url('admin') }}">Inicio</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Google Analytics</li>
                  </ol>
               </div>
               <h2 class="page-title">
                  Informes Google Analytics
               </h2>
            </div>
            {{-- <div class="col-auto ms-auto">
                <div class="btn-list">
                    <a href="{{url('admin/docentes/nuevo')}}" class="btn btn-primary d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Agregar
                    </a>
                </div>
            </div> --}}
         </div>
      </div>
   </div>
   <div class="page-body">
      <div class="container-xl">
         <div class="row">
            <div class="col-12">
               {{-- <header class="mb-10"> --}}
               <!-- Navbar-->
               {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2 fixed-top"> --}}
               {{-- <div class="container-fluid justify-content-center justify-content-md-between"> --}}
               <div class="navbar-expand-md">
                  <div class="navbar-collapse menu-navegacion collapse" id="navbar-menu">
                     <div class="navbar navbar-light">
                        <!-- Center elements -->
                        <ul class="navbar-nav d-none d-md-flex flex-row">
                           <li class="nav-item me-3 me-lg-1">
                              <a class="nav-link d-flex" href="" target="_blank">
                                 <img src="{{ asset('img/logo-ga.png') }}" height="22" class="me-2" alt="" />
                                 <span>Google Analytics</span>
                              </a>
                           </li>
                        </ul>
                        <!-- Center elements -->

                        <!-- Right elements -->
                        <ul class="navbar-nav d-none d-md-flex flex-row">
                           <li class="nav-item me-3 me-lg-1">
                              <button id="sign-in-btn" type="button" class="btn btn-primary btn-rounded"
                                 style="display: none" onclick="signIn()">
                                 Login
                              </button>
                           </li>

                           <li class="nav-item me-3 me-lg-1">
                              <button id="sign-out-btn" type="button" class="btn btn-primary btn-rounded"
                                 style="display: none" onclick="signOut()">
                                 Logout
                              </button>
                           </li>

                           <li class="nav-item me-3 me-lg-1">
                              <button type="button" class="btn btn-primary btn-rounded" style="display: none"
                                 onclick="loadData()">
                                 Load Data
                              </button>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
               <!-- Right elements -->
               {{--
                        </div> --}}
               {{-- </nav> --}}
               <!-- Navbar -->
               {{--
                </header> --}}
               <!--Main Navigation-->

               <!--Main layout-->
               <main>
                  <div class="container">
                     <!--Section: Design Block-->
                     <section class="mb-8">
                        <h3 class="fw-bold mb-7 text-center">Últimos 7 días</h3>
                        <div class="row">
                           <div class="col-md-4 mb-md-0 mb-4">
                              <!-- Card -->
                              <div class="card">
                                 <div class="card-body d-flex justify-content-start align-items-center">
                                    <div
                                       class="bg-primary rounded-4 d-flex justify-content-center align-items-center text-white"
                                       style="width: 50px; height: 50px">
                                       <i class="fas fa-users fa-lg"></i>
                                    </div>
                                    <div class="ms-3">
                                       <p class="text-muted mb-1">Usuarios en línea</p>
                                       <p class="mb-0">
                                          <span id="displayUsers" class="h4 me-2">05</span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- Card -->
                           </div>
                           <div class="col-md-4 mb-md-0 mb-4">
                              <!-- Card -->
                              <div class="card">
                                 <div class="card-body d-flex justify-content-start align-items-center">
                                    <div
                                       class="bg-primary rounded-4 d-flex justify-content-center align-items-center text-white"
                                       style="width: 50px; height: 50px">
                                       <i class="fas fa-file fa-lg"></i>
                                    </div>
                                    <div class="ms-3">
                                       <p class="text-muted mb-1">Visitas a la página</p>
                                       <p class="mb-0">
                                          <span id="displayPageViews" class="h4 me-2">112</span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- Card -->
                           </div>
                           <div class="col-md-4">
                              <!-- Card -->
                              <div class="card">
                                 <div class="card-body d-flex justify-content-start align-items-center">
                                    <div
                                       class="bg-primary rounded-4 d-flex justify-content-center align-items-center text-white"
                                       style="width: 50px; height: 50px">
                                       <i class="fas fa-chart-line fa-lg"></i>
                                    </div>
                                    <div class="ms-3">
                                       <p class="text-muted mb-1">Sesiones</p>
                                       <p class="mb-0">
                                          <span id="displaySessions" class="h4 me-2">28</span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <!-- Card -->
                           </div>
                        </div>
                     </section>
                     <!--Section: Design Block-->
                  </div>
               </main>
               <!--Main layout-->

               <!--Footer-->
               <footer></footer>
               <!--Footer-->
               {{-- <div class="card">
                    <div id="t_principal">
                        <table id="t_docentes" class="table card-table table-vcenter text-nowrap datatable"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>CARRERA</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="8">Cargando...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            </div>
         </div>
      </div>
   </div>
@endsection
