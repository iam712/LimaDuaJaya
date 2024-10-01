<!-- Footer -->
<footer class="text-center text-lg-start text-dark"
    style="background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color4 }})); font-family: Inria Sans, sans-serif;">
    <!-- Grid container -->
    <div class="container p-3">
        <!-- Section: Links -->
        <section>
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-12 col-md-6 col-lg-6 mx-auto mt-3">
                    <h6 class="mb-4 text-light fw-bold">
                        Lima Dua Jaya
                    </h6>
                    <p class="text-light">
                        Standar yang diberikan oleh Lima Dua Jaya adalah
                        yang Terbaik. <br>
                        Kami berfokus untuk memberikan pelayanan yang
                        bisa dibanggakan
                    </p>
                    <p>
                        <a class="text-light" href="/review">Send us a feedback!</a>
                    </p>
                    <p>
                        <a href="/workshops#workshopPartnershipProgram" class="text-light">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="/#faqSection" class="text-light">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />


                <!-- Grid column -->
                <div class="col-12 col-md-6 col-lg-6 mt-3">
                    <h6 class="text-uppercase text-light mb-4 fw-bold">Contact</h6>
                    <p class="text-light"><i class="fas fa-home mr-3"></i><a class="text-light"
                            href="/#locationMapSection">
                            LIMA DUA JAYA pusat Surabaya, Jl. Lakarsantri no.9, Kec.Lakarsantri,<br> Kota SBY, Jawa Timur
                            60215
                            Surabaya, Indonesia</a></p>
                    <p class="text-light"><i class="fas fa-envelope mr-3"></i> limaduaadvertising@gmail.com</p>
                    <p class="text-light"><i class="fas fa-phone mr-3"></i>
                        +62 821 1598 3575</p>
                    <p class="text-light"><i class="fas fa-print mr-3"></i>
                        +01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="">
            <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="text-center">
                    <!-- Copyright -->
                    <div class="p-3 text-light">
                        © 2024 Copyright:
                        <a href="/" class="text-light">Lima Dua Jaya</a>
                    </div>
                    <!-- Copyright -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col ml-lg-0 text-center text-md-end">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" class="text-light" role="button"><i
                            class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" class="text-light" role="button"><i
                            class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" class="text-light" role="button"><i
                            class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/limaduajaya/"
                        role="button"><i class="fab fa-instagram"></i></a>

                </div>
                <!-- Grid column -->
            </div>
        </section>
        <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
</footer>
<!-- Footer -->

<style>
    a {
        text-decoration: none;
        /* Remove default underline */
        position: relative;
        /* Position for the pseudo-element */
        color: rgb({{ $color2 }});
        /* Ensure link color matches your theme */
    }

    a::after {
        content: '';
        /* Create an empty pseudo-element */
        position: absolute;
        left: 0;
        bottom: -2px;
        /* Adjust to position the underline */
        width: 100%;
        height: 2px;
        /* Thickness of the underline */
        background-color: rgb({{ $color1 }});
        /* Color of the underline */
        transform: scaleX(0);
        /* Start with no scale (invisible) */
        transition: transform 0.3s ease;
        /* Animation effect */
    }

    a:hover::after {
        transform: scaleX(1);
        /* Scale to full width on hover */
    }
</style>
