<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
 
</head>
<body>
    <div id="app" class="container-for-admin">
      <!-- <example-component></example-component> -->
        <!--Main Navigation-->
          <header>
        
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
              <div class="container-fluid">
        
        
                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
                  <!-- Left -->
                  <ul class="navbar-nav mr-auto">
                    
                    
                  </ul>
        
                  <!-- Right -->
                  <ul class="navbar-nav nav-flex-icons">
                    
                    <li class="nav-item">
                      <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
                        target="_blank">
                        Sair
                      </a>
                    </li>
                  </ul>
        
                </div>
        
              </div>
            </nav>
            <!-- Navbar -->
        
            <!-- Sidebar -->
            <div class="sidebar-fixed position-fixed">
        
                <side-menu/>
        
            </div>
            <!-- Sidebar -->
        
          </header>
          <!--Main Navigation-->
        
          <!--Main layout-->
          <main class="pt-5 mx-lg-5">
            <div class="container-fluid mt-5">
        
              <!-- Heading -->
              <div class="card mb-4 wow fadeIn">
        
                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">
        
                  <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Inicio</a>
                    <span>/</span>
                    <span>Nova postagem</span>
                  </h4>
        
                  <form class="d-flex justify-content-center">
                    <!-- Default input -->
                    <input type="search" placeholder="Buscar postagens" aria-label="Search" class="form-control">
                    <button class="btn btn-primary btn-sm my-0 p" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
        
                  </form>
                    
                </div>
        
              </div>
              <!-- Heading -->
        
              <!--Grid row-->
              <div class="row wow fadeIn">
                
                <div class="col-xs-12 mb-4 container">
                    <div class="card card-body">
                            {{-- <label for="pagina"> Categoria </label>
                            <select id="pagina" class="form form-control" name="Categoria">
                                <option> Prestação de contas </option>
                                <option> Informativo </option>
                            </select> --}}
                            <div class="form-outline">
                              <input
                                type="text"
                                id="form1"
                                class="form-control"
                                data-mdb-showcounter="true"
                                maxlength="20"
                              />
                              <label class="form-label" for="form1">Example label</label>
                              <div class="form-helper"></div>
                            </div>
                    </div>  
                </div>
                <!--Grid column-->
                <div class="col-md-12 mb-4">
        
                  <!--Card-->
                  <div class="card">
        
                    <!--Card content-->
                    <div class="card-body">
        
                        
        
                    </div>
        
                  </div>
                  
        
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                
        
              
        
              
                            <!--Body-->
                           
                      
                      </div>
                      <!-- /.First row-->
        
                    </div>
        
                  </div>
                  <!--/.Card-->
        
                </div>
                <!--Grid column-->
        
              </div>
              <!--Grid row-->
        
            </div>
          </main>
          <!--Main layout-->
        
          
        </div>
        
</body>
</html>

<script src="{{ asset('js/app.js') }}"></script>

<style>
    .sidebar-fixed{height:100vh;width:270px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);z-index:1050;background-color:#fff;padding:0 1.5rem 1.5rem}.sidebar-fixed .list-group .active{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);-webkit-border-radius:5px;border-radius:5px}.sidebar-fixed .logo-wrapper{padding:2.5rem}.sidebar-fixed .logo-wrapper img{max-height:50px}@media (min-width:1200px){.navbar,.page-footer,main{padding-left:270px}}@media (max-width:1199.98px){.sidebar-fixed{display:none}}

.container-for-admin{
background-color: #eee!important;
}

.map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style>