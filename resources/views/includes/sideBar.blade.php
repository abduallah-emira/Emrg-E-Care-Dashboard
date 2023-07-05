<body class="fixed-left">

       

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu" style="background: radial-gradient(at 50% -20%, #3e726d, #1c2537) fixed;">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <!--<a href="index.html" class="logo text-center">Fonik</a>-->
                        <a href="{{Route('index')}}" class="logo"><img src="{{ asset('/images/logo2.png')}}" height="130" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>

                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{Route('index')}}" class="waves-effect"><i class="dripicons-device-desktop"></i><span> Home </span></a>
                            </li>
                            

                          
                            <li>
                                <a href="{{Route('users')}}" class="waves-effect"><i class="dripicons-calendar"></i><span> Users </span></a>
                            </li>
                            <li>
                                <a href="{{Route('terminatedRequests')}}" class="waves-effect"><i class="dripicons-calendar"></i><span> Terminated Requests </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-blog"></i><span> Drivers <span class="badge badge-pill badge-success float-right">~</span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{Route('driversForm')}}">Add New Driver</a></li>
                                    <li><a href="{{Route('drivers')}}">Show All Drivers</a></li>
                                    <li><a href="{{Route('delete')}}">Delete Drivers</a></li>
                                </ul>
                            </li> 
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-blog"></i><span> Admins <span class="badge badge-pill badge-success float-right">~</span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{Route('RegisterPage')}}">Add New Admins</a></li>
                                    <li><a href="{{Route('adminsView')}}">Show All Admins</a></li>
                                    
                                </ul>
                            </li> 
                           

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
</body>
 