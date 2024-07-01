<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body class="">
@include("admin.layout.topbar")

@include("admin.layout.sidebar")
<main id="main" class="main">

    @yield('content')
</main>
<!--End wrapper-->
@include('admin.layout.script')

</body>
</html>
