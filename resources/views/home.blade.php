@extends('layouts.app')
{{-- Color library --}}
@php
    $color0 = '216, 174, 126'; // #d8ae7e
    $color1 = '232, 186, 137'; // #e8ba89
    $color2 = '248, 199, 148'; // #f8c794
    $color3 = '251, 211, 164'; // #fbd3a4
    $color4 = '255, 224, 181'; // #ffe0b5
    $color5 = '255, 233, 198'; // #ffe9c6
    $color6 = '255, 242, 215'; // #fff2d7
    $color7 = '255, 248, 235'; // #fff8eb
    $color8 = '255, 255, 255'; // #000000
    $color9 = '0, 0, 0'; // #ffffff
    $color10 = '255, 0, 0'; // #ff0000
    $colo11 = '163, 54, 54'; // #a33636
    $color12 = '75, 12, 12'; // #4b0c0c
    $color13 = '255, 184, 0'; // #ffb800
    $color14 = '255, 214, 110'; // #FFD66E

    // Command to use rgb color
    // style="color: rgb({{ $color0 }});"
    // style="background-color: rgb({{ $color1 }});"
    // style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color3 }}));"

@endphp
@section('title', 'Home')

@section('content')
    <!-- Inline CSS -->
    <style>
        .banner {
            background-color: rgb({{ $color13 }});
            height: 800px;
            position: relative;
            overflow: hidden;
        }

        .banners {
            background-color: rgb({{ $color14 }});
            height: 800px;
            position: relative;
            overflow: hidden;
        }

        .banner h1 {
            font-size: 2.5rem;
        }

        #changingText {
            display: inline-block;
            border-right: 2px solid;
            animation: blink-caret 1s step-end infinite;
        }

        @keyframes blink-caret {
            from,
            to {
                border-color: transparent;
            }
            50% {
                border-color: black;
            }
        }

        .wave {
            position: absolute;
            bottom: 0;
            width: 200%;
            height: 150px;
            overflow: hidden;
        }

        .wave svg {
            width: 100%;
            height: 100%;
            animation: wave-animation 15s infinite linear;
        }

        @keyframes wave-animation {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .about-us img {
            max-width: 100%;
            height: auto;
        }

        .our-services .img-fluid {
            max-height: 150px;
        }

        .our-services .col-md-2 span {
            display: block;
            margin-top: 10px;
        }

        .our-advantages p,
        .location-map iframe,
        .faq-section .accordion-item {
            margin-bottom: 20px;
        }

        .faq-section .accordion-item button {
            border: none;
            border-bottom: 1px solid #ddd;
        }

        .image-frame {
            border: 2px solid #;
            padding: 40px;
            border-radius: 10px;
            background-color: rgb({{ $color2 }});
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }

        .btn-learn-more {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: rgb({{ $color12 }});
            /* You can change the color to match your theme */
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        .image-frame {
            border: 2px solid #;
            padding: 30px;
            border-radius: 10px;
            background-color: rgb({{ $color14 }});
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Added shadow for a more attractive look */
            display: inline-block;
        }

        .image-frame img {
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Added shadow to the image */
        }

        /* Fixed menu bar */
        .fixed-menu {
            position: fixed;
            left: 20px;
            /* Add margin from the left */
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1000;
            background-color: rgba({{ $color6 }}, 0.6);
            /* Slightly transparent background */
            padding: 10px;
            border-radius: 15px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            /* Optional shadow for better visibility */
        }

        .fixed-menu button {
            background: none;
            border: none;
            margin: 5px 0;
            cursor: pointer;
        }

        .fixed-menu img {
            max-width: 40px;
            transition: transform 0.3s;
        }

        .fixed-menu img:hover {
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            .banner {
                height: 600px;
            }

            .banner h1 {
                font-size: 2rem;
            }

            .btn-learn-more {
                padding: 8px 16px;
            }

            .fixed-menu {
                left: 10px;
                top: auto;
                bottom: 20px;
                transform: none;
                flex-direction: row;
                justify-content: center;
            }

            .fixed-menu button {
                margin: 0 5px;
            }
        }
    </style>

    <!-- Fixed Menu Bar -->
    <div class="fixed-menu">
        <button onclick="document.getElementById('aboutUsSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/aboutus.png') }}" alt="About Us">
        </button>
        <button onclick="document.getElementById('ourServicesSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/service.png') }}" alt="Our Services">
        </button>
        <button onclick="document.getElementById('ourLiveProduct').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/product.png') }}" alt="Our Product">
        </button>
        <button onclick="document.getElementById('ourAdvantagesSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/advantage.png') }}" alt="Our Advantages">
        </button>
        <button onclick="document.getElementById('locationMapSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/location.png') }}" alt="Location Map">
        </button>
        <button onclick="document.getElementById('faqSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/faq.png') }}" alt="FAQ">
        </button>
        <button onclick="document.getElementById('ourClientsSection').scrollIntoView({ behavior: 'smooth' });">
            <img src="{{ asset('images/client.png') }}" alt="Our Clients">
        </button>
    </div>

    <!-- Banner -->
    <section class="banner d-flex align-items-center">
        <div class="wave">
            <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 490" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
          .path-0{
            animation:pathAnim-0 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-0{
             0%{
              d: path("M 0,500 L 0,125 C 63.78769268713775,130.0232087803675 127.5753853742755,135.04641756073497 178,136 C 228.4246146257245,136.95358243926503 265.48615119003574,133.83753853742755 318,120 C 370.51384880996426,106.16246146257245 438.48000986558145,81.60342828955481 501,69 C 563.5199901344185,56.39657171044519 620.5938093476384,55.748748304353185 665,85 C 709.4061906523616,114.25125169564681 741.1447527438647,173.40157849303245 787,166 C 832.8552472561353,158.59842150696755 892.8271796769022,84.64493772351707 949,68 C 1005.1728203230978,51.35506227648292 1057.5465285485263,92.01867061289926 1117,121 C 1176.4534714514737,149.98132938710074 1242.9867061289924,167.28037982488593 1298,166 C 1353.0132938710076,164.71962017511407 1396.5066469355038,144.85981008755704 1440,125 L 1440,500 L 0,500 Z");
            }
            25%{
              d: path("M 0,500 L 0,125 C 37.02439265014182,166.27744481440374 74.04878530028364,207.5548896288075 132,182 C 189.95121469971636,156.4451103711925 268.8292514490073,64.05788629917376 323,68 C 377.1707485509927,71.94211370082624 406.6342089036873,172.21356517449746 464,174 C 521.3657910963127,175.78643482550254 606.6339129362437,79.08785300283637 657,77 C 707.3660870637563,74.91214699716363 722.8301393513381,167.4350228141571 771,187 C 819.1698606486619,206.5649771858429 900.0455296584043,153.1720557405352 964,139 C 1027.9544703415957,124.82794425946479 1074.9877420150451,149.87675422370205 1129,165 C 1183.0122579849549,180.12324577629795 1244.0035022814156,185.32092736465654 1297,177 C 1349.9964977185844,168.67907263534346 1394.9982488592923,146.83953631767173 1440,125 L 1440,500 L 0,500 Z");
            }
            50%{
              d: path("M 0,500 L 0,125 C 60.185620915032686,124.05729436428659 120.37124183006537,123.11458872857318 169,117 C 217.62875816993463,110.88541127142682 254.70065359477127,99.59893944999382 300,107 C 345.29934640522873,114.40106055000618 398.82614379084964,140.4896534714515 458,132 C 517.1738562091504,123.51034652854851 581.99477124183,80.44244666420028 645,91 C 708.00522875817,101.55755333579972 769.1947712418302,165.74055987174742 815,180 C 860.8052287581698,194.25944012825258 891.2261437908497,158.59531384880995 944,142 C 996.7738562091503,125.40468615119003 1071.9006535947713,127.87818473301269 1132,140 C 1192.0993464052287,152.1218152669873 1237.1712418300654,173.8919472191392 1286,173 C 1334.8287581699346,172.1080527808608 1387.4143790849673,148.5540263904304 1440,125 L 1440,500 L 0,500 Z");
            }
            75%{
              d: path("M 0,500 L 0,125 C 57.22328277222839,154.63714391416943 114.44656554445677,184.27428782833888 166,182 C 217.55343445554323,179.72571217166112 263.4370205944013,145.5399926008139 308,126 C 352.5629794055987,106.4600073991861 395.80535207793815,101.56574176840547 453,119 C 510.19464792206185,136.43425823159453 581.3415710938464,176.1970403255642 638,184 C 694.6584289061536,191.8029596744358 736.8283635466764,167.64609692933777 789,141 C 841.1716364533236,114.35390307066221 903.3449747194476,85.2185719570847 956,101 C 1008.6550252805524,116.7814280429153 1051.7917375755333,177.47961524232338 1111,179 C 1170.2082624244667,180.52038475767662 1245.488074978419,122.86296707362189 1303,104 C 1360.511925021581,85.13703292637811 1400.2559625107906,105.06851646318906 1440,125 L 1440,500 L 0,500 Z");
            }
            100%{
              d: path("M 0,500 L 0,125 C 63.78769268713775,130.0232087803675 127.5753853742755,135.04641756073497 178,136 C 228.4246146257245,136.95358243926503 265.48615119003574,133.83753853742755 318,120 C 370.51384880996426,106.16246146257245 438.48000986558145,81.60342828955481 501,69 C 563.5199901344185,56.39657171044519 620.5938093476384,55.748748304353185 665,85 C 709.4061906523616,114.25125169564681 741.1447527438647,173.40157849303245 787,166 C 832.8552472561353,158.59842150696755 892.8271796769022,84.64493772351707 949,68 C 1005.1728203230978,51.35506227648292 1057.5465285485263,92.01867061289926 1117,121 C 1176.4534714514737,149.98132938710074 1242.9867061289924,167.28037982488593 1298,166 C 1353.0132938710076,164.71962017511407 1396.5066469355038,144.85981008755704 1440,125 L 1440,500 L 0,500 Z");
            }
          }</style><defs><linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="5%" stop-color="#ffb800"></stop><stop offset="95%" stop-color="#ffd66e"></stop></linearGradient></defs><path d="M 0,500 L 0,125 C 63.78769268713775,130.0232087803675 127.5753853742755,135.04641756073497 178,136 C 228.4246146257245,136.95358243926503 265.48615119003574,133.83753853742755 318,120 C 370.51384880996426,106.16246146257245 438.48000986558145,81.60342828955481 501,69 C 563.5199901344185,56.39657171044519 620.5938093476384,55.748748304353185 665,85 C 709.4061906523616,114.25125169564681 741.1447527438647,173.40157849303245 787,166 C 832.8552472561353,158.59842150696755 892.8271796769022,84.64493772351707 949,68 C 1005.1728203230978,51.35506227648292 1057.5465285485263,92.01867061289926 1117,121 C 1176.4534714514737,149.98132938710074 1242.9867061289924,167.28037982488593 1298,166 C 1353.0132938710076,164.71962017511407 1396.5066469355038,144.85981008755704 1440,125 L 1440,500 L 0,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><style>
          .path-1{
            animation:pathAnim-1 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-1{
            0%{
              d: path("M 0,500 L 0,291 C 64.37721050684425,297.3249722530522 128.7544210136885,303.64994450610436 175,292 C 221.2455789863115,280.35005549389564 249.35952645209028,250.7251942286348 295,255 C 340.6404735479097,259.2748057713652 403.8074731779503,297.4492785793563 466,302 C 528.1925268220497,306.5507214206437 589.4105808361081,277.47769145394005 646,276 C 702.5894191638919,274.52230854605995 754.5502034776174,300.6399556048835 809,301 C 863.4497965223826,301.3600443951165 920.3886052534223,275.962486126526 965,260 C 1009.6113947465777,244.03751387347398 1041.8953755086939,237.51009988901225 1090,243 C 1138.1046244913061,248.48990011098775 1202.0298927118015,265.9971143174251 1263,276 C 1323.9701072881985,286.0028856825749 1381.9850536440993,288.5014428412875 1440,291 L 1440,500 L 0,500 Z");
            }
            25%{
              d: path("M 0,500 L 0,291 C 53.31592058206931,292.4699223085461 106.63184116413862,293.93984461709215 167,297 C 227.36815883586138,300.06015538290785 294.78855592551486,304.71054384017754 342,307 C 389.21144407448514,309.28945615982246 416.213935133802,309.2179800221976 462,301 C 507.786064866198,292.7820199778024 572.3557035392773,276.41753607103215 625,271 C 677.6442964607227,265.58246392896785 718.3632507090886,271.1118756936737 781,265 C 843.6367492909114,258.8881243063263 928.191293624368,241.13496115427307 979,256 C 1029.808706375632,270.86503884572693 1046.8715747934393,318.3482796892342 1095,335 C 1143.1284252065607,351.6517203107658 1222.3224072018743,337.4719200887902 1285,325 C 1347.6775927981257,312.5280799112098 1393.8387963990629,301.76403995560486 1440,291 L 1440,500 L 0,500 Z");
            }
            50%{
              d: path("M 0,500 L 0,291 C 43.817289431495865,310.24498705142435 87.63457886299173,329.48997410284863 134,338 C 180.36542113700827,346.51002589715137 229.27897397952887,344.28509064002964 297,314 C 364.72102602047113,283.71490935997036 451.2495252188926,225.36966333703288 509,234 C 566.7504747811074,242.63033666296712 595.7229251449008,318.23625601183875 635,331 C 674.2770748550992,343.76374398816125 723.8587742015044,293.68531261561225 783,267 C 842.1412257984956,240.31468738438775 910.8419780490811,237.0224935257122 967,260 C 1023.1580219509189,282.9775064742878 1066.7733136021704,332.22471328153904 1121,340 C 1175.2266863978296,347.77528671846096 1240.0647675422367,314.0786533481317 1295,299 C 1349.9352324577633,283.9213466518683 1394.9676162288815,287.4606733259342 1440,291 L 1440,500 L 0,500 Z");
            }
            75%{
              d: path("M 0,500 L 0,291 C 71.12877050191148,326.2680231841164 142.25754100382295,361.5360463682328 188,346 C 233.74245899617705,330.4639536317672 254.09860648661976,264.12383771118505 294,237 C 333.90139351338024,209.87616228881492 393.34803304969785,221.96860278702678 459,229 C 524.6519669503022,236.03139721297322 596.5092613145888,238.00175114070785 647,244 C 697.4907386854112,249.99824885929215 726.6149216919472,260.0243926501418 782,256 C 837.3850783080528,251.9756073498582 919.0310519176223,233.90067825872484 984,257 C 1048.9689480823777,280.09932174127516 1097.2608706375631,344.3728943149587 1142,349 C 1186.7391293624369,353.6271056850413 1227.9254655321247,298.60774448144036 1277,279 C 1326.0745344678753,259.39225551855964 1383.0372672339377,275.1961277592798 1440,291 L 1440,500 L 0,500 Z");
            }
            100%{
              d: path("M 0,500 L 0,291 C 64.37721050684425,297.3249722530522 128.7544210136885,303.64994450610436 175,292 C 221.2455789863115,280.35005549389564 249.35952645209028,250.7251942286348 295,255 C 340.6404735479097,259.2748057713652 403.8074731779503,297.4492785793563 466,302 C 528.1925268220497,306.5507214206437 589.4105808361081,277.47769145394005 646,276 C 702.5894191638919,274.52230854605995 754.5502034776174,300.6399556048835 809,301 C 863.4497965223826,301.3600443951165 920.3886052534223,275.962486126526 965,260 C 1009.6113947465777,244.03751387347398 1041.8953755086939,237.51009988901225 1090,243 C 1138.1046244913061,248.48990011098775 1202.0298927118015,265.9971143174251 1263,276 C 1323.9701072881985,286.0028856825749 1381.9850536440993,288.5014428412875 1440,291 L 1440,500 L 0,500 Z");
            }
          }</style><defs><linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="5%" stop-color="#ffb800"></stop><stop offset="95%" stop-color="#ffd66e"></stop></linearGradient></defs><path d="M 0,500 L 0,291 C 64.37721050684425,297.3249722530522 128.7544210136885,303.64994450610436 175,292 C 221.2455789863115,280.35005549389564 249.35952645209028,250.7251942286348 295,255 C 340.6404735479097,259.2748057713652 403.8074731779503,297.4492785793563 466,302 C 528.1925268220497,306.5507214206437 589.4105808361081,277.47769145394005 646,276 C 702.5894191638919,274.52230854605995 754.5502034776174,300.6399556048835 809,301 C 863.4497965223826,301.3600443951165 920.3886052534223,275.962486126526 965,260 C 1009.6113947465777,244.03751387347398 1041.8953755086939,237.51009988901225 1090,243 C 1138.1046244913061,248.48990011098775 1202.0298927118015,265.9971143174251 1263,276 C 1323.9701072881985,286.0028856825749 1381.9850536440993,288.5014428412875 1440,291 L 1440,500 L 0,500 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path></svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-5">
                    <p class="fs-3">Lima Dua Jaya Advertising</p>
                    <p class="fs-1 fw-bold">Kami Membuat <span id="changingText"></span></p>
                    <p class="fs-4 fst-italic fw-lighter">Supplier, Distributor, Advertising</p>
                    <button class="btn-learn-more" onclick="document.getElementById('aboutUsSection').scrollIntoView({ behavior: 'smooth' });">Pelajari Lebih Lanjut</button>
                </div>
                <div class="col-md-6 text-center">
                    <div class="image-frame">
                        <img src="{{ asset('images/logo-square.png') }}" alt="Logo" class="img-fluid" style="max-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="aboutUsSection" class="about-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/LOGO.png') }}" alt="About Us" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>About</h2>
                    <p>We are a company dedicated to providing the best service. Our team is experienced and highly skilled.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section id="ourServicesSection" class="our-services py-5">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <div class="row justify-content-center mt-5 text-center">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-6 col-md-2 mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                        <span class="mb-4">service {{ $i + 1 }}</span>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Live 360 View -->
    <section id="ourLiveProduct" class="our-advantages py-5">
        <div class="container">
            <h2 class="text-center">Our Product</h2>
            <p class="text-center">Wcontoh produk jadi</p>
        </div>
    </section>

    <!-- Our Advantages -->
    <section id="ourAdvantagesSection" class="our-advantages py-5">
        <div class="container">
            <h2 class="text-center">Our Advantages</h2>
            <p class="text-center">We provide unparalleled service and benefits that set us apart from the competition.</p>
        </div>
    </section>

    <!-- Location Map -->
    <section id="locationMapSection" class="location-map py-5">
        <div class="container">
            <h2 class="text-center">Our Location</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <iframe src="https://maps.google.com/maps?q=surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
                        height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faqSection" class="faq-section py-5">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                @foreach (['One', 'Two', 'Three', 'Four', 'Five'] as $item)
                    <div class="accordion-item" style="border: none; margin-bottom: 10px;">
                        <h2 class="accordion-header" id="heading{{ $item }}">
                            <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $item }}"
                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $item }}">
                                Where are you located?
                            </button>
                        </h2>
                        <div id="collapse{{ $item }}"
                            class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                            aria-labelledby="heading{{ $item }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We are located in Surabaya, Indonesia.
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Clients -->
    <section id="ourClientsSection" class="our-services py-5">
        <div class="container">
            <h2 class="text-center">Our Clients</h2>
            <div class="row justify-content-center mt-5 text-center">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-6 col-md-2 mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
                        <span class="mb-4">client {{ $i + 1 }}</span>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Inline JavaScript -->
    <script>
        const texts = ["Neon Box", "Branding Rak", "Roll Up Banner", "Letter Sign", "Spanduk", "Shop Sign", "Bill Board",
            "Car Branding", "Chiller Branding", "Papan Nama Toko"
        ];
        let index = 0;
        let charIndex = 0;
        let currentText = "";
        let isDeleting = false;

        function typeText() {
            const changingTextElement = document.getElementById("changingText");
            const fullText = texts[index];

            if (!isDeleting) {
                currentText = fullText.substring(0, charIndex++);
                changingTextElement.textContent = currentText;

                if (charIndex > fullText.length) {
                    setTimeout(() => {
                        isDeleting = true;
                        typeText();
                    }, 2000); // Wait 2 seconds before deleting
                } else {
                    setTimeout(typeText, 130); // Speed of typing
                }
            } else {
                currentText = fullText.substring(0, charIndex--);
                changingTextElement.textContent = currentText;

                if (charIndex < 0) {
                    isDeleting = false;
                    index = (index + 1) % texts.length;
                    setTimeout(typeText, 700); // Wait 0.7 seconds before typing next text
                } else {
                    setTimeout(typeText, 100); // Speed of deleting
                }
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(typeText, 1000); // Initial delay before typing starts
        });
    </script>

@endsection
