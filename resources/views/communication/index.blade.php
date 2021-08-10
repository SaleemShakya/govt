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
        <nav class="navbar navbar sticky-top navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="company-title">
                    <img class="logo" src="{{ asset('images/logo.webp')}}"></img>
                    <span>Digital Nagarpalika</span>
                </div>
                <div class="search-box">
                    <input class="search" type="text" name="" placeholder="Search something here"> 
                    <img class="search-btn" src="{{ asset('images/ic_search.png') }}"></img>     
                </div>
                <div class="notify">
                    <span class="square"><img src="{{ asset('images/notification.png') }}"></img></span>
                </div>
                <div class="admin">
                    <span class="dot"><img class="hotel" src="{{ asset('images/Icon awesome-hotel.png') }}"></img></span>
                    <span style="vertical-align:middle">Admin</span>
                </div>
            </div>
        </nav>
            <nav class="sidebar bg-light">
            <div class="row">
                <div class="col-md-4">
                    <ul class="side">
                        <br>
                        <li>
                            <a href="" class="button">
                                    <figure><img src="{{ asset('images/nagarik_badapatra.png') }}"></figure>
                                <div class="text">
                                    Nagarik badapatra
                                </div>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="" class="button">
                                    <figure><img src="{{ asset('images/Services.png') }}"></figure>
                                <div class="text">
                                    Services
                                </div>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="" class="button" onclick=OpenDiv()>
                            <figure><img src="{{ asset('images/Communication.png') }}"></figure>
                            <div class="text">
                                Communication
                            </div>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="" class="button">
                                <figure><img src="{{ asset('images/PIS.png') }}"></figure>
                                <div class="text">
                                    PIS
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                <br>
                <ul class="side">
                        <li>
                            <a href="" class="button">
                                <figure><img src="{{ asset('images/Nagarpalika.png') }}"></figure>
                                <div class="text">
                                    Gaupalika/
                                    Nagarpalika
                                </div>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="" class="button">
                                <figure><img src="{{ asset('images/Inventory.png') }}"></figure>
                                <div class="text">
                                    Inventory
                                </div>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="" class="button">
                                <figure><img src="{{ asset('images/HR.png') }}"></figure>
                                <div class="text">
                                    HR
                                </div>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="" class="button">
                                <figure><img src="{{ asset('images/Budget.png') }}"></figure>
                                <div class="text">
                                    Budget
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h6 style="text-align:center">Communication</h6>
        <div id="page">
            <ul class="side" style="float:right">  
                    <li>
                        <a href="" class="button">
                            <figure><img src=""></figure>
                            <div id="internal" class="text">
                                Internal Communication
                            </div>
                        </a>
                    </li>   
                    <li>
                        <a href="" class="button">
                            <figure><img src=""></figure>
                            <div id="extenal" class="text">
                                External Communication
                            </div>
                        </a>
                    </li>    
                    <li>
                        <a href="" class="button">
                            <figure><img src=""></figure>
                            <div id="meeting" class="text">
                                Meeting/
                                e-meeting
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
            
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script>
            $().click(function(){
                $(this).toggleclass("click");
                $(.sidebar).toggleClass("show");
            })

            fuction OpenDiv(){
                document.getElementById('page').style.display = '';
            }

            // $(document).ready(function(){
		    //     $('button').click(function(event){
            //         event.preventDefault();
            //         var	internal = $('#internal').val();
            //         var	external = $('#external').val();
            //         var	meeting = $('#meeting').val();
            //         $.ajax({
            //             type: "GET",
            //             url: "index.blade.php",
            //             data: { internal, external, meeting },		    
            //             dataType: "",
            //             success: function(result){
            //             }
            //         });
            //     });
            // });
        </script>
    </body>
</html>