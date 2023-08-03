@extends('layouts.template')

@section('body')
    <div class="wrapper row1">
        <header id="header" class="clear">
            <div id="logo" class="fl_left">
                <h1><a href="lectnotes.html" style="color: white;">GATE Materials</a></h1>
            </div>
        </header>
    </div>

    <div class="wrapper row3">
        <div class="rounded">
            <main class="container clear">
                <!-- main body -->
                <div class="group btmspace-30">
                    <!-- Left Column -->
                    <div>
                        <h3 id="gamma">Algorithms</h3>
                        <div class="dropdown">
                            <button onclick="myFunction1()" class="dropbtn" type="button">Lecture Notes &#x25BC;</button>
                            <div id="myDropdown1" class="dropdown-content">
                                <a href="media/gateNotes/algorithms.pdf">Download</a>
                                <a href="media/gateNotes/algorithms.pdf">View</a>
                            </div>
                        </div>

                        <script>
                            /* When the user clicks on the button,
                            toggle between hiding and showing the dropdown content */
                            function myFunction1() {
                                document.getElementById("myDropdown1").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function(event) {
                                if (!event.target.matches('.dropbtn')) {

                                    var dropdowns = document.getElementsByClassName("dropdown-content");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }
                        </script>
                        <hr>
                        <h3 id="gamma">Operating Systems</h3>
                        <div class="dropdown">
                            <button onclick="myFunction2()" class="dropbtn" type="button">Lecture Notes &#x25BC;</button>
                            <div id="myDropdown2" class="dropdown-content">
                                <a href="media/gateNotes/os.pdf">Download</a>
                                <a href="media/gateNotes/os.pdf">View</a>
                            </div>
                        </div>

                        <script>
                            /* When the user clicks on the button,
                            toggle between hiding and showing the dropdown content */
                            function myFunction2() {
                                document.getElementById("myDropdown2").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function(event) {
                                if (!event.target.matches('.dropbtn')) {

                                    var dropdowns = document.getElementsByClassName("dropdown-content");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }
                        </script>

                        <hr>
                        <h3 id="gamma">Database Management Systems</h3>
                        <div class="dropdown">
                            <button onclick="myFunction3()" class="dropbtn" type="button">Lecture Notes &#x25BC;</button>
                            <div id="myDropdown3" class="dropdown-content">
                                <a href="media/gateNotes/dbms.pdf">Download</a>
                                <a href="media/gateNotes/dbms.pdf">View</a>
                            </div>
                        </div>

                        <script>
                            /* When the user clicks on the button,
                            toggle between hiding and showing the dropdown content */
                            function myFunction3() {
                                document.getElementById("myDropdown3").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function(event) {
                                if (!event.target.matches('.dropbtn')) {

                                    var dropdowns = document.getElementsByClassName("dropdown-content");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }
                        </script>

                        <hr>
                        <h3 id="gamma">Theory of Computation</h3>
                        <div class="dropdown">
                            <button onclick="myFunction4()" class="dropbtn" type="button">Lecture Notes &#x25BC;</button>
                            <div id="myDropdown4" class="dropdown-content">
                                <a href="media/gateNotes/toc.pdf">Download</a>
                                <a href="media/gateNotes/toc.pdf">View</a>
                            </div>
                        </div>

                        <script>
                            /* When the user clicks on the button,
                            toggle between hiding and showing the dropdown content */
                            function myFunction4() {
                                document.getElementById("myDropdown4").classList.toggle("show");
                            }

                            // Close the dropdown if the user clicks outside of it
                            window.onclick = function(event) {
                                if (!event.target.matches('.dropbtn')) {

                                    var dropdowns = document.getElementsByClassName("dropdown-content");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                        var openDropdown = dropdowns[i];
                                        if (openDropdown.classList.contains('show')) {
                                            openDropdown.classList.remove('show');
                                        }
                                    }
                                }
                            }
                        </script>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
