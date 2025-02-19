<!DOCTYPE html>
<html lang="en">
@include('web.layout.head')
<body class="">
<header class="">
    <div class="container ">
        <div class="header-main d-flex align-items-center w-100 gap-5">
            <div class="header_logo ">
                <a href="{{route('home')}}">
                    <img src="https://staticfile.batdongsan.com.vn/images/logo/standard/red/logo.svg" class="w-100 h-100 object-fit-contain" alt="">
                </a>
            </div>

            <div class="lv0   h-100 d-flex align-items-center flex-column justify-content-center ">
                <a href="" class=" text-nowrap">Nhà bán</a>
                <div class="re__arrrow"></div>
            </div>
            <div class="lv0   h-100 d-flex align-items-center flex-column justify-content-center ">
                <a href="" class=" text-nowrap">Nhà cho thuê</a>
                <div class="re__arrrow"></div>
            </div>
            <div class="lv0   h-100 d-flex align-items-center flex-column justify-content-center ">
                <a href="" class=" text-nowrap">Dự án bất động sản</a>
                <div class="re__arrrow"></div>
            </div>
            <div class="lv0   h-100 d-flex align-items-center flex-column justify-content-center ">
                <a href="" class=" text-nowrap">Liên hệ</a>
                <div class="re__arrrow"></div>
            </div>

        </div>


    </div>

</header>

<main>

    @yield('content')
</main>

<!-- footer section start -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="index.html"><img src="https://logo-download.com/wp-content/data/images/2021/08/Levi_Strauss__Co.-Logo.png" alt="" class="img-fluid logo-footer"></a>
                <div class="footer-about">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p>
                </div>

            </div>
            <div class="col-md-3">
                <div class="useful-link">
                    <h2>Useful Links</h2>
                    <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                    <div class="use-links">
                        <li><a href="index.html"><i class="fa-solid fa-angles-right"></i> Home</a></li>
                        <li><a href="about.html"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
                        <li><a href="gallery.html"><i class="fa-solid fa-angles-right"></i> Gallery</a></li>
                        <li><a href="contact.html"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="social-links">
                    <h2>Follow Us</h2>
                    <img src="./assets/images/about/home_line.png" alt="">
                    <div class="social-icons">
                        <li><a href=""><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
                    </div>
                </div>


            </div>
            <div class="col-md-3">
                <div class="address">
                    <h2>Address</h2>
                    <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                    <div class="address-links">
                        <li class="address1"><i class="fa-solid fa-location-dot"></i> Kolathur ramankulam-
                            Malappuram Dt
                            Kerala 679338</li>
                        <li><a href=""><i class="fa-solid fa-phone"></i> +91 90904500112</a></li>
                        <li><a href=""><i class="fa-solid fa-envelope"></i> mail@1234567.com</a></li>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
<!-- footer section end -->
<!-- footer copy right section start -->
<section id="copy-right">
    <div class="copy-right-sec"><i class="fa-solid fa-copyright"></i>
        lorem ispum lorem ispum 2022 Powerd By <a href="#">lorem ispum</a>


    </div>

</section>
<!-- footer copy right section end -->






<!--End wrapper-->
@include('web.layout.script')

</body>
</html>
