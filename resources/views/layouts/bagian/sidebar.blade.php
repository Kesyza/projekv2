<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data mobil<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('merek.index') }}"><i class="fa fa-maxcdn"></i> Merek</a>
                        <a href="{{ route('sopir.index') }}"><i class="fas fa-user-secret"></i> Sopir</a>
                        <a href="{{ route('mobil.index') }}"><i class="fas fa-user-secret"></i> mobil</a>
                        <a href="{{ route('booking.index') }}"><i class="fas fa-user-secret"></i> booking</a>
                    </li>
                    <li>
                        <a href="morris.html">merek</a>
                    </li>
                </ul>

            <!-- jQuery -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="{{ asset('js/metisMenu.min.js') }}"></script>

            <!-- Morris Charts JavaScript -->
            <script src="{{ asset('js/raphael.min.js') }}"></script>
            <script src="{{ asset('js/morris.min.js') }}"></script>
            <script src="{{ asset('js/morris-data.js') }}"></script>

            <!-- Custom Theme JavaScript -->
            <script src="" {{ asset('js/startmin.js') }}"></script>
