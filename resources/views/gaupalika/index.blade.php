<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Digital Nagarpalika</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
        <nav class="navbar">
            <div class="container-fluid">
                <button class="nav-toggler" type="button">
                    <span class="nav-toggler-icon"></span>
                </button>
                <div class="company-title">
                    <img class="logo" src="{{ asset('images/logo.webp')}}"></img>
                    <span class="name">Digital Nagarpalika</span>
                </div>
                <div class="search-box">
                    <input class="search" type="text" name="" placeholder="Search something here"> 
                    <img class="search-btn" src="{{ asset('images/ic_search.png') }}"></img>     
                </div>
                <div class="notify">
                    <span class="square"><img class="bell" src="{{ asset('images/notification.png') }}"></img></span>
                </div>
                <div class="admin">
                    <span class="dot"><img class="hotel" src="{{ asset('images/Icon awesome-hotel.png') }}"></img></span>
                    <span class="adm">Admin</span>
                </div>
            </div>
        </nav>
        <nav class="sidebar">
            <div class="row">
                <div class="card-nkb">
                        <img class="nagarik" src="{{ asset('images/nagarik_badapatra.png') }}">
                    <div class="card-body">
                        <span class="badp">Nagarik badapatra</span> 
                    </div>
                </div>
                <div class="card-srv">
                        <img class="service" src="{{ asset('images/Services.png') }}">
                    <div class="card-body-srv">
                        <span class="ser">Services</span> 
                    </div>
                </div>
                <!-- <div class="card">
                        <img class="" src="{{ asset('images/Communication.png') }}">
                    <div class="container">
                        <span class="">Communication</span> 
                    </div>
                </div>
                <div class="card">
                        <img class="" src="{{ asset('images/PIS.png') }}">
                    <div class="container">
                        <span class="">PIS</span> 
                    </div>
                </div> -->
            </div>
            <!-- <div class="row">
                <div class="card">
                        <img class="nagarik" src="{{ asset('images/Nagarpalika.png') }}">
                    <div class="container">
                        <span class="badp">Gaupalika/Nagarpalika</span> 
                    </div>
                </div>
                <div class="card">
                        <img class="" src="{{ asset('images/Inventory.png') }}">
                    <div class="container">
                        <span class="">Inventory</span> 
                    </div>
                </div>
                <div class="card">
                        <img class="" src="{{ asset('images/HR.png') }}">
                    <div class="container">
                        <span class="">HR</span> 
                    </div>
                </div>
                <div class="card">
                            <img class="" src="{{ asset('images/Budget.png') }}">
                    <div class="container">
                            <span class="">Budget</span> 
                    </div>
                </div>
            </div> -->
        </nav>
        <div class="main-content">
            <span class="heading">Gaupalika/Nagarpalika</span>
            <div class="horizontal-navbar">
                <ul>
                    <li><a href="">Janata</a></li>
                    <li><a href="">Jankari</a></li>
                    <li><a href="">Pratinidhi</a></li>
                    <li><a href="">Karmachari</a></li>
                </ul>
            </div>
        </div>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>