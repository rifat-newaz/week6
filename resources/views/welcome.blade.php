@include('includes.header')
    <body class="antialiased">

 <!-- In your welcome.blade.php -->
<!-- In your welcome.blade.php -->




        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">

                <div class="row justify-content-center">
                  <div class="col-md-4">
                    <img src="{{ asset('images/Rifat_Newaz.jpg') }}" alt="My Image">
                  </div>
                  <div class="col-md-8">


                      <div class="card bg-light">
                        <div class="card-header">Details About Me</div>
                        <div class="card-body">
                          <h5 class="card-title" style="text-align: center;"><b>MUHAMMED RIFATH NEWAZ</b></h5>
                          <p class="card-text">



                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Contact Me:</b><br>

                                    Email: rifatnewaz074@gmail.com <br>
                                    Cell Phone: +8801818279054 <br>

                                </li>
                                <li class="list-group-item"><b>BSc.:</b><br>

                            Department : B.Sc in Business Information Technology<br>
                            Institution : University of Greenwich, UK<br>
                            Campus : Daffodil Institute IT<br>

                            House# 59/A, Road# 7/A, Dhanmondi. Dhaka-1205<br>

                            Passing Year : 2014<br>
                            Grade : First Class (73%)<br>

                                </li>
                                <li class="list-group-item">
                                    ❖ Hard mental influence<br>
                                    ❖ Better communication power with others<br>
                                    ❖ Good inter-personal skill</li>
                              </ul>
                        </p>
                        </div>
                      </div>











                  </div>
                </div>

              </div>
        </div>
    </body>
</html>
