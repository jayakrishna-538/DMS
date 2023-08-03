<!DOCTYPE html>
<html>
<head>
    <title>Dept. of CSE, JNTUACEA, Anantapur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{asset('css/styles/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/styles/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/styles/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('css/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('header')
</head>
<body id="top" style="background-color: #04414d">

<div class="wrapper row2">
    <div class="rounded">
        <div id="header" class="clear">
            <div class="row align-items-center equal" style="display: flex">
                <div id="deptLogo" class="col-xs-12" > 	<img id="CSElogo" style="max-width: 170px;max-height: 180px; width: 100%" src="{{ asset('images/logo.png') }}" align="center" />   			</div>
                <div id="deptTitle" class="col-xs-12"> <h1 style="font-size:34px; text-align: center;  margin: 0px 0px 0px 0px;"><a href="#">Department of Computer Science & Engineering</a></h1>
                    <h2 style="font-size:17px; text-align: center; margin: 5px 0px 5px 0px;"><a href="https://www.jntuacea.ac.in/">Jawaharlal Nehru Technological University College of Engineering, Anantapur</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.navbar')

@yield('body')

@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="{{ asset('js/scripts/jquery.min.js') }}"></script>
<script src="{{ asset('js/scripts/owl.carousel.js') }}"></script>
<script src="{{ asset('js/scripts/jquery.fitvids.min.js') }}"></script>
<script src="{{ asset('js/scripts/tabslet/jquery.tabslet.min.js') }}"></script>
<script type="text/javascript">
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
</script>
</body>
</html>
