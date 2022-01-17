<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RENTAL MOBIL CHAN24</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('backend/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('backend/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('backend/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('backend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.bagian.navbar')
        <!-- /.navbar-top-links -->

        <!-- /input-group -->
        @include('layouts.bagian.sidebar')
        <!-- /.nav-second-level -->
        </li>
        </ul>
    </div>
    </div>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Booking</h1>
                </div>
                <!-- /.col-lg-12 -->
                {{-- TABLE --}}
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Booking
                            <a href="{{ route('booking.create') }}" class="btn btn-primary float-right">Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>kode_booking</th>
                                            <th>tgl_booking</th>
                                            <th>tgl_mulai</th>
                                            <th>tgl_selesai</th>
                                            <th>tgl_kembali</th>
                                            <th>denda</th>
                                            <th>durasi</th>
                                            <th>status_booking</th>
                                            <th>jml_bayar</th>
                                            <th>jml_dp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($booking as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->kode_booking }}</td>
                                                <td>{{ $data->tgl_booking }}</td>
                                                <td>{{ $data->tgl_mulai }}</td>
                                                <td>{{ $data->tgl_selesai }}</td>
                                                <td>{{ $data->tgl_kembali }}</td>
                                                <td>{{ $data->denda }}</td>
                                                <td>{{ $data->durasi }}</td>
                                                <td>{{ $data->status_booking }}</td>
                                                <td>{{ $data->jml_bayar }}</td>
                                                <td>{{ $data->jml_dp }}</td>
                                                <td>
                                                    <form action="{{ route('booking.destroy', $data->id) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf

                                                        <a href="{{ route('booking.edit', $data->id) }}"
                                                            class="btn btn-success float-right">Edit</a>
                                                        <a href="{{ route('booking.show', $data->id) }}"
                                                            class="btn btn-warning float-right">Show</a>
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ini?');">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                {{-- /TABLE --}}
                <!-- /.row -->
                <!-- /.panel-footer -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('backend/js/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/js/morris.min.js') }}"></script>
    <script src="{{ asset('backend/js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('backend/js/startmin.js') }}"></script>

</body>

</html>
