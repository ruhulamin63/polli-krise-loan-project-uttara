<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$title?></title>

    <link rel="shortcut icon" href="{{asset('media/fabric icon/car-service.png')}}" />

    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet"> 
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap CSS v5.0.2 -->
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"> 
</head>

<body>
    <!-- HeaderTop1 -->
    <section id="header-top-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 clearfix">
                    <div class="hader-top">
                        <ul>
                            <li><strong>{{$all_apply_count}}</strong><span style="margin-left: 10px;">ঋণ আবেদন</span></li>
                            <li><strong>{{$info_verify}}</strong><span style="margin-left: 10px;">যাচাইকৃত ঋণ</span></li>
                            <li><strong>{{$loan_verify}}</strong><span style="margin-left: 10px;">অনুমোদিত ঋণ</span></li>
                            <li><strong>{{$delivery_loan}}</strong><span style="margin-left: 10px;">বিতরনকৃত ঋণ</span></li>
                            <li><strong> {{$total_delivery_loan}}</strong><span style="margin-left: 10px;">নিবন্ধিত মোট কৃষক</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HeaderTop1 -->
    <!-- HeaderTop2 -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 p-4">
                    <div class="header-to-image owl-carousel owl-theme">
                       <div class="item">
                        <img src="{{asset('assets/img/1.png')}}" alt="">
                       </div>
                       <div class="item">
                        <img src="{{asset('assets/img/2.png')}}" alt="">
                       </div>
                       <div class="item">
                        <img src="{{asset('assets/img/3.png')}}" alt="">
                       </div>
                       <div class="item">
                        <img src="{{asset('assets/img/4.png')}}" alt="">
                       </div>
                       <div class="item">
                        <img src="{{asset('assets/img/5.png')}}" alt="">
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HeaderTop2 -->
    <!-- MainHeader -->
  <!-- =======Main Header ======= -->
  <nav class="navbar navbar-expand-lg navbar-dark main-header">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('customer.home')}}">হোম</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">আবেদনের অগ্রগতি</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ইউজার ম্যানুয়্যাল
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('customer.administrative.manual')}}">প্রশাসনিক কর্মকর্তাদের জন্য</a></li>
              <li><a class="dropdown-item" href="{{route('customer.upazila.manual')}}">উপজেলা কৃষি, মৎ্স,প্রাণী সম্পদ কর্মকর্তাদের জন্য</a></li>
              <li><a class="dropdown-item" href="{{route('customer.bank.manual')}}">ব্যাংক ব্যবহারের জন্য</a></li>
              <li><a class="dropdown-item" href="{{route('customer.lead.bank.manual')}}">লীড ব্যাংকের জন্য</a></li>
              <li><a class="dropdown-item" href="{{route('customer.farmar.manual')}}">কৃষকের জন্য</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active mobileversonot" aria-current="page" href="{{route('customer.install.element')}}">কি‌স্তি প‌রি‌শোধ করুন</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mobileversonot" aria-current="page" href="{{route('register')}}">নিবন্ধন</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mobileversonot" aria-current="page" href="{{route('login')}}">লগইন</a>
          </li>
        </ul>
      </div>
      <div class="mobile-view">
        <ul>
          <li><a href="{{route('customer.install.element')}}">কি‌স্তি প‌রি‌শোধ করুন</a></li>
          <li><a href="{{route('register')}}">নিবন্ধন</a></li>
          <li><a href="{{route('login')}}">লগইন</a></li>
        </ul>
      </div>
    </div>
  </nav>