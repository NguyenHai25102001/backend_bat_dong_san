<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Quản trị viên</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/images/admin/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/images/admin/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Template Main CSS File -->

    <link rel="stylesheet" href="{{asset('assets/css/admin/style.css')}}">

</head>


<style>
    /*input[type="number"]::-webkit-inner-spin-button,*/
    /*input[type="number"]::-webkit-outer-spin-button {*/
    /*    -webkit-appearance: none;*/
    /*    margin: 0;*/
    /*}*/
</style>

<body>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        {{--                        <div class="d-flex justify-content-center py-4">--}}
                        {{--                            <a href="#" class="logo d-flex align-items-center w-auto">--}}
                        {{--                                <img src="../assets/images/admin/logo.png" alt="">--}}
                        {{--                                <span class="d-none d-lg-block">NiceAdmin</span>--}}
                        {{--                            </a>--}}
                        {{--                        </div><!-- End Logo -->--}}

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Đăng nhập Admin</h5>
                                    {{--                                    <p class="text-center small">Nhập số điện thoại và mật khẩu của bạn để đăng nhập</p>--}}
                                </div>

                                <form class="row g-3 needs-validation" method="post" action="{{route('admin.doLogin')}}"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="username" class="form-control" id="yourUsername"
                                                   required
                                                   placeholder="Vui lòng nhập tên đăng nhập">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword"
                                               required
                                               placeholder="Vui lòng nhập mật khẩu">

                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
                                    </div>

                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </section>

    </div>
</main>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    @if(session('error'))
    Toast.fire({
        icon: "error",
        title: "{{session('error')}}"
    });
    @endif

    @if(session('success'))
    Toast.fire({
        icon: "success",
        title: "{{session('success')}}"
    });
    @endif
</script>

</body>

</html>
