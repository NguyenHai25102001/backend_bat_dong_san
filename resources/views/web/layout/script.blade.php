<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js "></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/admin/main.js"></script>
<script src="assets/vendor/ckeditor/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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

@yield('script')
