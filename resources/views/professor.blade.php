@extends('layouts.template')

@section('header')
    <link href="{{ asset('css/styles/faculty1.css') }}" rel="stylesheet" type="text/css" media="all">
@endsection
@section('body')
    <div class="wrapper row1">
        <header id="header" class="clear">
            <div id="logo" class="fl_left">
                <h1><a href="/faculty" style="color: white;">Faculty</a></h1>
            </div>
        </header>
    </div>

    <div class="wrapper row3">
        <div class="rounded">
            <main class="container clear">
                <section class="box">
                    <div class="box-heading">
                        <h2>Faculty</h2>
                    </div>
                    <br>
                    <div class="box-info">
                        <div class="box-info-img">
                            <img src="{{ $faculty->profileImage() }}" alt="image">
                        </div>
                        <section class="box-info-desc">
                            <h2>{{ $faculty->name }}</h2>
                            <span style="font-size: 1rem">{{ $faculty->position }}</span>
                            <span style="font-size: 1rem">{{ $faculty->designation }}</span>
                            <div class="box-details">
                                <p><span>E-mail: </span>{{ $faculty->email }}</p>
                                <p></p><span>Ph: </span>{{ $faculty->contact }} </p>
                            </div>
                        </section>
                        @if(Auth::id() == ($faculty->user_id)||(1))
                            <div class="edit-button">
                                <a href="#" id="profile-form">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Update profile</h1>
                                    <br>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $faculty->name }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Current position</label>
                                            <input class="form-control" name="position" type="text" value="{{ $faculty->position }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Designation</label>
                                            <input class="form-control" name="designation" type="text" value="{{ $faculty->designation }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">E-Mail Address</label>
                                            <input class="form-control" name="email" type="text" value="{{ $faculty->email }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone Number</label>
                                            <input class="form-control" name="contact" type="text" value="{{ $faculty->contact }}"/>
                                        </div>
                                        <button class="btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        @endif

                    </div>
                    <section class="box-info-edu">
                        <div class="box-info-edu-heading">
                            <h3>Education</h3>
                        </div>
                        @foreach($educations as $education)
                            <table class="box-item">
                                <tbody class="box-item-info">
                                <tr>
                                    <th class="box-item__left"><p class="pheader" align="left">
                                            {{ $education->institution }}
                                        </p></th>
                                </tr>
                                <tr>
                                    <th class="box-item__left">
                                        <p class="lheader" align="left">{{ $education->program }} {{ $education->specialization }}</p>
                                    </th>
                                    <th class="box-item__right">
                                        <p class="lheader" align="right"> {{ $education->year }}</p>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        @endforeach
                        @if(Auth::id() == ($faculty->user_id)||(1))
                            <div class="edit-button" style="background-color: transparent">
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Add Education Details</h1>
                                    <br>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Program</label>
                                            <input type="text" name="program" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Specialization</label>
                                            <input class="form-control" name="specialization" type="text"  />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Institution</label>
                                            <input class="form-control" name="institution" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year</label>
                                            <input class="form-control" name="year" type="text" />
                                        </div>
                                        <button class="btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Update Education Details</h1>
                                    <br>
                                    <form action="">
                                    @foreach($educations as $education)
                                        <div class="form-group">
                                            <label for="">Program</label>
                                            <input type="text" name="program" class="form-control" value = {{$education->program}}/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Specialization</label>
                                            <input class="form-control" name="specialization" type="text" value = {{$education->specialization}}/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Institution</label>
                                            <input class="form-control" name="institution" type="text" value = {{$education->institution}}/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year</label>
                                            <input class="form-control" name="year" type="text" value = {{$education->year}}/>
                                        </div>
                                    @endforeach
                                        <button class="btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </section>

                    <section class="box-info-edu">
                        <div class="box-info-edu-heading">
                            <h3>Experience</h3>
                        </div>
                        @foreach($experiences as $experience)
                            <table class="box-item">
                                <tbody class="box-item-info">
                                <tr>
                                    <th class="box-item__left"><p class="pheader" align="left">
                                        {{ $experience->exp_type }}
                                        </p></th>
                                    <th class="box-item__right">
                                        <p class="pheader" align="right">
                                            {{ $experience->years }}
                                        </p></th>
                                </tr>
                                </tbody>
                            </table>
                        @endforeach
                        @if(Auth::id() == ($faculty->user_id)||(1))
                            <div class="edit-button" style="background-color: transparent">
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Update profile</h1>
                                    <br>
                                    <form action="">
                                    @foreach($experiences as $experience)
                                        <div class="form-group">
                                            <label for="">Experience Type</label>
                                            <input type="text" name="exp_type" class="form-control" value = {{$experience->exp_type}}/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Number of Years</label>
                                            <input class="form-control" name="years" type="text"  value = {{$experience->years}}/>
                                        </div>
                                    @endforeach
                                        <button class="btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </section>

                    <section class="box-info-edu">
                        <div class="box-info-edu-heading">
                            <h3>Publications</h3>
                        </div>
                        <ol class="box-list">
                            @foreach($publications as $publication)
                                <li>
                                    <p>
                                        {{ $publication->publication_details }}
                                    </p>
                                </li>
                            @endforeach
                        </ol>
                        @if(Auth::id() == ($faculty->user_id)||(1))
                            <div class="edit-button" style="background-color: transparent">
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Add Publications Details</h1>
                                    <br>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Publication Details</label>
                                            <input type="text" name="program" class="form-control" />
                                        </div>
                                        <button class="btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </section>

                    <section class="box-info-edu">
                        <div class="box-info-edu-heading">
                            <h3>Research Interests</h3>
                        </div>
                        <ol class="box-list">
                            <li>
                                <p>{{$faculty->research_interests}}</p>
                            </li>
                        </ol>
                        @if(Auth::id() == ($faculty->user_id)||(1))
                            <div class="edit-button" style="background-color: transparent">
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Edit Research Interests</h1>
                                    <br>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Enter the Research Interests</label>
                                            <input type="text" name="research_interests" class="form-control" value = {{$faculty->research_interests}}/>
                                        </div>
                                        <button class="btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </section>

                    <section class="box-info-edu">
                        <div class="box-info-edu-heading">
                            <h3>Awards &amp Recognitions</h3>
                        </div>
                        <ol class="box-list">
                            @foreach($awards as $award)
                                <li>
                                    <p>
                                        {{ $award->award_desc }}
                                    </p>
                                </li>
                            @endforeach
                        </ol>
                        @if(Auth::id() == ($faculty->user_id)||(1))
                            <div class="edit-button" style="background-color: transparent">
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>
                            <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Add Awards and Recognitions</h1>
                                    <br>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Award or Recognition</label>
                                            <input type="text" name="award_desc" class="form-control" />
                                        </div>                                    
                                        <button class="btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </section>

                    <section class="box-info-edu">
                        <div class="box-info-edu-heading">
                            <h3>Additional information</h3>
                        </div>
                        <ol class="box-list">
                            @foreach($add_infos as $add_info)
                                <li>
                                    <p>
                                        {{ $add_info->additional_info }}
                                    </p>
                                </li>
                                <div class="form-popup-bg">
                                <div class="form-container">
                                    <button id="btnCloseForm" class="close-button">X</button>
                                    <h1>Add Additional Information</h1>
                                    <br>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Add Additional Info</label>
                                            <input type="text" name="additional_info" class="form-control" />
                                        </div>
                                        <button class="btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </ol>
                        @if(Auth::id() == ($faculty->user_id)||(1))
                            <div class="edit-button" style="background-color: transparent">
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </div>
                        @endif
                    </section>

                </section>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/scripts/jquery.min.js') }}"></script>
    <script>
        function closeForm() {
            $('.form-popup-bg').removeClass('is-visible');
        }

        $(document).ready(function($) {


            $('#profile-form').on('click', function(event) {
                console.log('hi')
                event.preventDefault();

                $('.form-popup-bg').addClass('is-visible');
            });

            //close popup when clicking x or off popup
            $('.form-popup-bg').on('click', function(event) {
                if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });



        });

    </script>
@endsection
