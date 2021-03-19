<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="{{asset('front/images/favicon_1.ico')}}">
    <title>Admin Dashboard</title>

    <!-- Base Css Files -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{asset('front/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

    <!-- animate css -->
    <link href="{{asset('front/css/animate.css')}}" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="{{asset('front/css/waves-effect.css')}}" rel="stylesheet">

    <!-- Custom Files -->
    <link href="{{asset('front/css/helper.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet" type="text/css" />
     <!-- DataTables -->
    <link href="{{asset('front/assets/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Toastr alerts -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <script src="{{asset('front/js/modernizr.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">


                        @guest

                        @else
                             <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('front/images/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>

                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                 <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{route('home')}}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-users"></i><span> Employees </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.employee')}}"><i class="fa fa-plus"></i>Add Employee</a></li>
                                    <li><a href="{{route('all.employee')}}"><i class="fa fa-eye"></i>All Employee</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-shopping-cart"></i> <span> Customers </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.customer')}}"><i class="fa fa-plus"></i>Add Customers</a></li>
                                    <li><a href="{{route('all.customer')}}"><i class="fa fa-eye"></i>All Customers</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-truck"></i> <span> Suppliers </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add_supplier')}}"><i class="fa fa-plus"></i>Add Supplier</a></li>
                                    <li><a href="{{route('all_supplier')}}"><i class="fa fa-eye"></i>All Supplier</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-dollar"></i> <span> Salary (EMP) </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.advanced.salary')}}"><i class="fa fa-plus"></i>Add Advanced Salary</a></li>
                                    <li><a href="{{route('all.advanced.salary')}}"><i class="fa fa-eye"></i>All Advanced Salary</a></li>
                                    <li><a href="{{route('pay.salary')}}"><i class="fa fa-plus"></i>Pay Salary</a></li>
                                    <li><a href="{{route('last_month_salary')}}"><i class="fa fa-eye"></i>Last Month Salary</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"> <i class="fab fa-elementor"></i> <span> Category </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.category')}}"><i class="fa fa-plus"></i>Add Category</a></li>
                                    <li><a href="{{route('all.category')}}"><i class="fa fa-eye"></i>All Category</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"> <i class="fab fa-product-hunt"></i> <span> Products </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.product')}}"><i class="fa fa-plus"></i>Add Product</a></li>
                                    <li><a href="{{route('all.product')}}"><i class="fa fa-eye"></i>All Product</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"> <i class="fal fa-calculator"></i> <span> Expense </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.expense')}}"><i class="fa fa-plus"></i>Add Expense</a></li>
                                    <li><a href="{{route('all.expense')}}"><i class="fa fa-eye"></i>All Expense</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-file-invoice-dollar"></i> <span> Invoice </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-plus"></i>Add Invoice</a></li>
                                    <li><a href="#"><i class="fa fa-eye"></i>All Invoice</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Exports </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-plus"></i>Add Export</a></li>
                                    <li><a href="#"><i class="fa fa-eye"></i>All Export</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Imports </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-plus"></i>Add Import</a></li>
                                    <li><a href="#"><i class="fa fa-eye"></i>All Import</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> POS </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-plus"></i>Add Pos</a></li>
                                    <li><a href="#"><i class="fa fa-eye"></i>All Pos</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Daily Reports </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-plus"></i>Add Report</a></li>
                                    <li><a href="#"><i class="fa fa-eye"></i>All Report</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- Left Sidebar End -->
                @endguest
            </div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

   <!--  <footer class="footer text-right">
        2021 © webpanda99.
    </footer> -->

         <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('front/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/js/waves.js')}}"></script>
        <script src="{{asset('front/js/wow.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('front/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('front/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('front/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('front/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('front/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('front/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        <!-- sweet alerts -->
        <script src="assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js')}}"></script>

        <!-- flot Chart -->
        <script src="{{asset('front/assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('front/assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('front/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('front/assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('front/assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('front/assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('front/assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('front/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('front/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('front/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <!-- CUSTOM JS -->
        <script src="{{asset('front/js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('front/js/jquery.dashboard.js')}}"></script>

        <script type="text/javascript">

            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <!---data tables--->
        <script src="{{asset('front/assets/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('front/assets/datatables/dataTables.bootstrap.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
        <!---end data tables--->

        <!----toastr js---->
        <script>
          @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
          @endif
        </script>
</body>
</html>
