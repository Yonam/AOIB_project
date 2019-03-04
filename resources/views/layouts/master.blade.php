<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{env('APP_NAME')}} | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->

  <!-- Appel les assets -->

  <link rel="stylesheet" href="{{asset('StyleAdmin/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="StyleAdmin\vendor\font-awesome\css\font-awesome.min.css">
  <!-- Ionicons -->
<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('StyleAdmin/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
      -->
      <link rel="stylesheet" href="{{ asset('StyleAdmin/dist/css/skins/skin-blue.min.css') }}">

<!-- Alertify -->
  <link rel="stylesheet"  href="{{ asset('alertifyjs\css\alertify.css')}}">
    <link rel="stylesheet" href="{{ asset('alertifyjs\css\themes\default.css')}}">
      @stack('scripts.header')

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{env('APP_NAME')}}</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
           <!-- 
            <li class="dropdown messages-menu"> -->
              <!-- Menu toggle button -->
            <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li> -->
                  <!-- inner menu: contains the messages -->
                  <!-- <ul class="menu"> -->
                    <!-- <li>start message -->
                      <!-- <a href="#"> -->
                        <!-- <div class="pull-left"> -->
                          <!-- User Image -->
                          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                        <!-- </div> -->
                        <!-- Message title and timestamp -->
                        <!-- <h4> -->
                          <!-- Support Team -->
                          <!-- <small><i class="fa fa-clock-o"></i> 5 mins</small> -->
                        <!-- </h4> -->
                        <!-- The message -->
                        <!-- <p>Why not buy a new awesome theme?</p> -->
                      <!-- </a> -->
                    <!-- </li> -->
                    <!-- end message -->
                  <!-- </ul> -->
                  <!-- /.menu -->
                <!-- </li> -->
                <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
              <!-- </ul> -->
            <!-- </li> -->
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>

            
            <!-- Tasks Menu -->
            <!-- <li class="dropdown tasks-menu"> -->
              <!-- Menu Toggle Button -->
              <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li> -->
                  <!-- Inner menu: contains the tasks -->
                  <!-- <ul class="menu"> -->
                    <!-- <li>Task item -->
                      <!-- <a href="#"> -->
                        <!-- Task title and progress text -->
                     <!--    <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3> -->
                        <!-- The progress bar -->
                        <!-- <div class="progress xs"> -->
                          <!-- Change the css width attribute to simulate progress -->
                         <!--  <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li> -->
                    <!-- end task item -->
                <!--   </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li> -->

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <!-- <img src="/uploads/avatars/{{--Auth::user()->avatar--}}" class="user-image" alt="User Image"> -->

                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{--Auth::user()->name.' '.Auth::user()->lastname--}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="/uploads/avatars/{{--Auth::user()->avatar--}}" class="img-circle" alt="User Image">

                  <p>
                    {{--Auth::user()->name.' '.Auth::user()->lastname--}}
                    <small>Membre depuis {{--Auth::user()->created_at->format('d-m-Y')--}} </small>
                  </p>
                </li>
                <!-- Menu Body -->
               <!--  <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div> -->
                  <!-- /.row -->
               <!--  </li> -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{ url('/profile') }}" class="btn btn-default btn-flat"><i class="fa fa-btn fa-user"></i>  Profile</a>
                  </div>
                  <div class="pull-right">
                    
                    <a href="{{-- route('logout') --}}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-btn fa-sign-out"></i>
                                        Déconnexion
                      </a>

                   <form id="logout-form" action="{{-- route('logout') --}}" method="POST" style="display: true;">
                                            {{ csrf_field() }}

                   </form>
                   <!--/formLogout -->
                  </div>
                  <!-- /divLogout -->
                </li>
                  <!-- userFoot -->
              </ul>
              <!-- /dropdownMenu -->
            </li>
            <!-- /dropdown user -->
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
          <!-- nav nav-bar menu -->
        </div>
        <!-- nav vbar custom menu -->
      </nav>
      <!-- nav bar static top -->
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="/uploads/avatars/{{--Auth::user()->avatar--}}"" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{--Auth::user()->name.' '.Auth::user()->lastname--}}</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
         <!--    <li class="header">HEADER</li> -->
         <!-- Optionally, you can add icons to the links -->
        <!--   <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Link in level 2</a></li>
              <li><a href="#">Link in level 2</a></li>
            </ul>
          </li> -->
          <li> 
            <a href="{{route('home1')}}">
              <i class="fa fa-dashboard fa-fw"></i> <span>Tableau de bord</span>
              <span class="pull-right-container">
                <i class=""></i>
              </span>
            </a>
            </li>
         

          <li class="treeview">
            <a href="#">
              <i class="fa fa-sign-in"></i> <span>Gestions Enregistrement </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('ajoutEnfant.index')}}"><i class="fa fa-circle-o"></i> Nouvelle Enregistrement</a></li>
              <li><a href="{{route('finAjoutEnfant.index')}}"><i class="fa fa-circle-o"></i> Finaliser les Enregistrements</a></li>
              <li><a href="{{route('listeEnfant')}}"><i class="fa fa-circle-o"></i> Liste des enfants</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-sign-out"></i> <span>Gestion des documents</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{--route('ajoutSortie')--}}"><i class="fa fa-circle-o"></i> Consulatation de document</a></li>
              <li><a href="{{--route('listeSortie')--}}"><i class="fa fa-circle-o"></i> Galerie photos</a></li>
              <li><a href="{{--route('listeSortie')--}}"><i class="fa fa-circle-o"></i> Suivi scolaire</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-users fa-fw"></i> <span>Gestion des sélection</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('selectionEnfant.index')}}"><i class="fa fa-circle-o"></i> Novuelle sélection</a></li>
                <li><a href="{{route('selectionEnfant.create')}}"><i class="fa fa-circle-o"></i> Listes des  sélections</a></li>

              </ul>
            </li>

            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-sign-out"></i> <span>Gestion des traductions</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{--route('ajoutFournisseur')--}}"><i class="fa fa-circle-o"></i> Traduire les listes</a></li>
                <li><a href="{{--route('listeFournisseur')--}}"><i class="fa fa-circle-o"></i> Liste des fournisseurs</a></li>

              </ul>
            </li> -->


           <!--  <li class="treeview">
              <a href="#">
                <i class="fa fa-sign-out"></i> <span>Gestion des déclarations</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{--route('editer_Declaration')--}}"><i class="fa fa-circle-o"></i> Ajouter une déclaration</a></li>
                <li><a href="{{--route('liste_Declaration')--}}"><i class="fa fa-circle-o"></i> Liste des déclarations</a></li>

              </ul>
            </li> -->
            <!-- Caisse -->
           <!--  <li class="treeview">
              <a href="#">
                <i class="fa fa-diamond fa-fw"></i> <span>Caisse</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a> -->
         <!--  <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Ajouter une déclaration</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Liste des déclarations</a></li>
         
          </ul> -->
        <!-- </li> -->

   <!--      <li class="treeview">
              <a href="#">
                <i class="fa fa-diamond fa-fw"></i> <span>Declaration</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a> -->
         <!--  <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Ajouter une déclaration</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Liste des déclarations</a></li>
         
          </ul> -->
       <!--  </li> -->
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     @yield('page.header')
      </h1>


      @yield('detail.chemin')
  
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
   <!--    <h1>Je suis le contenu excitant</h1>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam culpa illo, hic quaerat in. Asperiores dolorum, expedita debitis dolorem neque optio minima natus quia ab, distinctio, iste mollitia explicabo tempora?

      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.

      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      v
      v
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      v
      v
      v

      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      v  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus officia, provident, perspiciatis deserunt atque odio tempora rem rerum cum neque ullam quod quasi cupiditate quaerat nihil? Omnis repellendus, dolorem veritatis.
      v
 -->
        <!--------------------------
          | Your Page Content Here |
          -------------------------->
  @yield('page.body')
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 ONG_AOIB<a href="#"></a>.</strong>Tous droits réservés.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="pull-right-container">
                      <span class="label label-danger pull-right">70%</span>
                    </span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

          </div>
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Some information about this general settings option
                </p>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>
      <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->


  <!-- jQuery 3.1.1 -->
  <script src="{{ asset('StyleAdmin/plugins/jQuery/jquery-3.1.1.min.js')}}"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="{{ asset('StyleAdmin/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('StyleAdmin/dist/js/adminlte.min.js')}}"></script>
  <script src="{{ asset('alertifyjs\alertify.js')}}"></script>
  <!-- translate-master -->
  <script src="translate.min.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
       @stack('scripts.footer')
   </body>
   </html>
