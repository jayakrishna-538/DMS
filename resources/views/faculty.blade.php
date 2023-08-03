@extends('layouts.template')

@section('header')
    <link href="{{ asset('css/styles/faculty1.css') }}" rel="stylesheet" type="text/css" media="all">
@endsection
@section('body')
    <div class="wrapper row1">
        <header id="header" class="clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="/faculty" style="color: white;">Faculty</a></h1>
            </div>
        </header>
    </div>

    <div class="wrapper row3">
        <div class="rounded">
            <main class="container clear">
                <p class="subhead" style="color: #3275AA">Department of Computer Science and Engineering</p>
                <div class="wrapper row3">
                    <div class="rounded">
                        <main class="clear">
                            <div class="row">
                                <div class="col-sm">
                                    <ul style="list-style-type:none">
                                        <li><!-- <h2 class="subhead">Head of Department</h2> --></li>
                                    </ul>
                                </div>
                            </div>

                            @foreach($faculties as $faculty)
                                <a href="/faculty/{{ $faculty->id }}"class="faculty_box">
                                    <div class="professor-img">
                                        <img class="faculty_img" src="{{ $faculty->profileImage() }}" alt="profile">
                                    </div>
                                    <section class="box-info-desc" style="gap: 0.5rem">
                                        <span style="font-size: 1.3rem; border-bottom: solid 1px #214B8C; padding-bottom: 0.5rem">{{ $faculty->name }}</span>
                                        <span style="font-size: 1rem">{{ $faculty->position }}</span>
                                        <span style="font-size: 1rem">{{ $faculty->designation }}</span>
                                        <div class="box-details">
                                            <p><span>E-mail: </span>{{ $faculty->email }}</p>
                                            <p></p><span>Ph: </span>{{ $faculty->contact }} </p>
                                        </div>
                                    </section>
                                </a>
                            @endforeach

                        </main>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
