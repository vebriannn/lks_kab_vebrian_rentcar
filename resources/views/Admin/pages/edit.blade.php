<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Edit</title>

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
                @if ($errors->any()) 
                    <div class="alert alert-danger ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 style="color: black;">Edit Data Cars</h1>
                <div class="card p-5">               
                    <form action="{{ route('admin.edit.data.process', $cars->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <p style="color: black;">Name Mobil</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="name cars" name="name" value="{{$cars->name}}">
                        </div>
                        
                        <p style="color: black;">Images Cars</p>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="images">
                        </div>
                        
                        <p style="color: black;">Brand Name</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="brand cars" name="brand_name" value="{{$cars->brand_name}}">
                        </div>
    
                        <p style="color: black;">Price</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Price per day" name="price_per_day" value="{{$cars->price_per_day}}">
                        </div>
    
                        <p style="color: black;">Stock</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Stock" name="stock" value="{{$cars->stock}}">
                        </div>

                        <div class="btn-group pt-3 ">
                            <button class="btn btn-primary px-4" type="submit">Save</button>
                        </div>
                    </form>       
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