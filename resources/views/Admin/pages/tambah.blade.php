<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex justfy-content-center align-items-center pt-5 mt-5">

            <div class="content w-75" style="margin-left: auto; margin-right: auto; !important">
                <h1 style="color: black;">Create Data User</h1>
                <div class="card p-5 ">
                    <p style="color: black;">Nama Mobil</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="nama mobil" name="name">
                      </div>
                      
                    <p style="color: black;">Brand Name</p>
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    
                    <div class="mb-3">
                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
                    </div>
                    
                    <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                    </div>
                    
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>
                    
                    <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb/js/demo/chart-area-demo.js ') }}"></script>
    <script src="{{ asset('sb/js/demo/chart-pie-demo.js ') }}"></script>

</body>

</html>