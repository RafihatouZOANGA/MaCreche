<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin / Dashboard</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />    
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
  <link href="{{asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/iCheck/flat/blue.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />

</head>
<body class="skin-blue">
  <div class="wrapper">
    
    <header class="main-header">
      <a href="index2.html" class="logo"><b>Administrateur</b></a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">Vous avez count messages</li> <!--requet nombre de messages -->
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- debut message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                        </div>
                        <h4>
                          recuperer le role
                          <small><i class="fa fa-clock-o"></i> recuperer le temps de publication</small>
                        </h4>
                        <p>recuperer le message poster</p>
                      </a>
                    </li><!-- fin message -->
                  </ul>
                </li>
                <li class="footer"><a href="#">Voir tout</a></li>
              </ul>
            </li>
            <!-- Notifications -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">Vous avez count notifications</li> <!--requet nombre de notifications -->
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> count nouveaux visiteurs
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> count nouveaux inscrits
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> count nouvelles reservations
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">Voir tout</a></li>
              </ul>
            </li> 
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                <span class="hidden-xs">Nom d'utilisateur</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                  <p>
                    Recuperer le nom et la profession
                    <small>membre depuis la date d'adhésion</small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profil</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Déconnexion') }}</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                    </form>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- colonne de la gauche -->
    <aside class="main-sidebar">
      <!-- sidebar -->
      <section class="sidebar">
        <!-- user  -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            <p>Nom d'utilisateur</p>

            <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Tableau de bord</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Administrateur</a></li>
              <li><a href="index2.html"><i class="fa fa-circle-o"></i>Administration</a></li>
              <li><a href="index1.html"><i class="fa fa-circle-o"></i>Nounou</a></li>
            </ul>
          </li> 
          <li>
            <a href="pages/widgets.html">
              <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
            </a>
          </li> 
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Formulaires</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>Ajouter un membre</a></li>
              <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Ajouter un inscrit</a></li>
              <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Enregistrer un enfant</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Tables</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
              <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
            </ul>
          </li>
          <li>
            <a href="pages/calendar.html">
              <i class="fa fa-calendar"></i> <span>Calendrier</span>
              <small class="label pull-right bg-red">3</small> <!--a modifier-->
            </a>
          </li>
          <li>
            <a href="pages/mailbox/mailbox.html">
              <i class="fa fa-envelope"></i> <span>Boîte aux lettres</span>
              <small class="label pull-right bg-yellow">12</small> <!--a modifier-->
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-folder"></i> <span>Examples</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
              <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
              <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
              <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
              <!-- <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
              <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
              <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li> -->
            </ul>
          </li>
          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @yield('contenu')
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="http://almsaeedstudio.com">by Rafihatou ZOANGA</a>.</strong> Tous les droits sont réservés.
    </footer>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="{{asset('plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
  <!-- jQuery UI 1.11.2 -->
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>    
  <!-- Morris.js charts -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="{{asset('plugins/morris/morris.min.js')}}" type="text/javascript"></script>
  <!-- Sparkline -->
  <script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
  <!-- jvectormap -->
  <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('plugins/knob/jquery.knob.js')}}" type="text/javascript"></script>
  <!-- daterangepicker -->
  <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="{{asset('plugins/iCheck/icheck.min.js" type="text/javascript')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='{{asset('plugins/fastclick/fastclick.min.js')}}'></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/app.min.js')}}" type="text/javascript"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('dist/js/pages/dashboard.js')}}" type="text/javascript"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}" type="text/javascript"></script>
</body>
</html>