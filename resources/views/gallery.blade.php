
@extends('layouts.template')
@section('header')
    <link href="css/styles/gallery/gallery.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/styles/gallery/lightbox.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/styles/gallery/lightbox.min.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/gallery/lightbox-plus-jquery.js"></script>
    <script src="js/gallery/jquery-3.1.1.js"></script>

@endsection
@section('body')
    <div class="wrapper row3">
        <div class="rounded">
            <main class="container clear">
                <div class="gallery">
                    <a href="images/img/1.png" data-lightbox="gallery">
                        <img src="images/img/1.png" alt="1">
                    </a>
                    <a href="images/img/2.jpg" data-lightbox="gallery">
                        <img src="images/img/2.jpg">
                    </a>
                    <a href="images/img/3.jpg" data-lightbox="gallery">
                        <img src="images/img/3.jpg">
                    </a>
                    <a href="images/img/4.jpg" data-lightbox="gallery">
                        <img src="images/img/4.jpg">
                    </a>
                    <a href="images/img/5.jpg" data-lightbox="gallery">
                        <img src="images/img/5.jpg">
                    </a>
                    <a href="images/img/6.jpg" data-lightbox="gallery">
                        <img src="images/img/6.jpg">
                    </a>
                    <a href="images/img/7.jpg" data-lightbox="gallery">
                        <img src="images/img/7.jpg">
                    </a>
                    <a href="images/img/8.jpg" data-lightbox="gallery">
                        <img src="images/img/8.jpg">
                    </a>
                    <a href="images/img/9.jpg" data-lightbox="gallery">
                        <img src="images/img/9.jpg">
                    </a>
                </div>
            </main>
        </div>
    </div>
@endsection
{{--<div class="container-fluid">--}}
{{--    <div class="gallery">--}}
{{--        <!------------------------------------------------------------------------------------------------------------------->--}}
{{--        <!--  Sorting Filter goes here!  -->--}}
{{--        <!--  Data keywords are matched from img Thumbnails  -->--}}
{{--        <!-- <div class="sorting">--}}
{{--            <div class="sortingBg">--}}
{{--                <a class="sortLink selected" data-keyword="all" href="#">All</a>--}}
{{--                <a class="sortLink " data-keyword="1" href="#">St. Vincent</a>--}}
{{--                <a class="sortLink " data-keyword="2" href="#">Random</a>--}}
{{--                <a class="sortLink " data-keyword="3" href="#">Joker</a>--}}
{{--            </div>--}}
{{--        </div> -->--}}
{{--        <!------------------------------------------------------------------------------------------------------------------->--}}
{{--        <!--  Images Goes here!  -->--}}
{{--        <!--  Data keywords are matched with filter  -->--}}
{{--        <div class="photos">--}}
{{--            <div class="thumbnail_container row">--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/1.png" data-keywords="1">--}}
{{--                    <img src="images/img/1.png">--}}
{{--                </a>--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/2.jpg" data-keywords="1"><img src="images/img/2.jpg"></a>--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/3.jpg" data-keywords="2"><img src="images/img/3.jpg"></a>--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/4.jpg" data-keywords="2"><img src="images/img/4.jpg"></a>--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/5.jpg" data-keywords="3"><img src="images/img/5.jpg"></a>--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/6.jpg" data-keywords="2"><img src="images/img/6.jpg"></a>--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/7.jpg" data-keywords="1"><img src="images/img/7.jpg"></a>--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/8.jpg" data-keywords="1"><img src="images/img/8.jpg"></a>--}}
{{--                <a class="thumbnail" title="Some title" href="images/img/9.jpg" data-keywords="3"><img src="images/img/9.jpg"></a>--}}
{{--                --}}{{--                                <a class="thumbnail" title="Some title" href="images/img/76.jpg" data-keywords="2"><img src="images/img/76.jpg"></a>--}}
{{--                --}}{{--                                <a class="thumbnail" title="Some title" href="images/img/j2.jpg" data-keywords="3"><img src="images/img/j2.jpg"></a>--}}
{{--                --}}{{--                                <a class="thumbnail" title="Some title" href="images/img/96.jpg" data-keywords="2"><img src="images/img/96.jpg"></a>--}}
{{--                --}}{{--                                <a class="thumbnail" title="Some title" href="images/img/99.jpg" data-keywords="2"><img src="images/img/99.jpg"></a>--}}
{{--                --}}{{--                                <a class="thumbnail" title="Some title" href="images/img/j4.jpg" data-keywords="3"><img src="images/img/j4.jpg"></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
