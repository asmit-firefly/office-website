<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="./images/logo.png" class="logo" alt="Company Logo">
            </div>
            <div class="col-md-3">
                <h4>Quick Links</h4>
                <ul>
{{--                    <li><a href="#">Dashboard</a></li>--}}
                    <li><a href="{{ route('about') }}">About Company</a></li>
                    <li><a href="{{ route('service') }}">Services</a></li>
                    <li><a href="{{ route('career') }}">Careers</a></li>
{{--                    <li><a href="#">Blog</a></li>--}}
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
{{--            <div class="col-md-3">--}}
{{--                <h4>Support</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Terms and Conditions</a></li>--}}
{{--                    <li><a href="#">Privacy Policy</a></li>--}}
{{--                    <li><a href="#">Cookie Policy</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="col-md-3">
                <h4>Contact Information</h4>
                <ul>
                    <li><i class="icon" data-feather="phone"></i> Phone: 9856084024</li>
                    <li><i class="icon" data-feather="mail"></i> Email: info@thefireflytech.com</li>
                    <li><i class="icon" data-feather="map"></i> Address: Zero KM, Pokhara</li>
                    <li>

                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p>Copyright © 2023 | Firefly IT Solutions</p>
            </div>
            <div class="col-md-3 text-right">
                <ul class="social-icons">
                    <li><a href="#"><i class="icon" data-feather="facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/firefly-it-solutions/"><i class="icon" data-feather="linkedin"></i></a></li>
                    <li><a href="#"><i class="icon" data-feather="instagram"></i></a></li>
                    <li><a href="#"><i class="icon" data-feather="twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.popup').magnificPopup();
    });
</script>

<script>
    window.addEventListener("scroll", function () {
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scrollY > 10);
    });
</script>
<script>
    feather.replace();
</script>
<script>
    AOS.init();
</script>

<!-- Services -->
<script>
    const imgs = document.querySelectorAll(".b img");
    const divs = document.querySelectorAll(".b");
    divs.forEach((b, i) => {
        b.addEventListener("mousemove", (e) => {
            imgs[i].animate(
                { left: `${e.clientX}px` },
                { duration: 750, fill: "forwards" }
            );
        });
    });
</script>
