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
                    <img src="{{ asset('images/exp.webp') }}" alt="My Image">
                  </div>
                  <div class="col-md-8">


                      <div class="card bg-light">
                        <div class="card-header">My Work Experiences</div>


                        <div class="card-body">
                          <h5 class="card-title" style="text-align: center;"><b>MUHAMMED RIFATH NEWAZ</b></h5>
                          <p class="card-text">



                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>1. Web Designer At Jobsteambd:</b><br>

                                    Web Designer At Jobsteambd<br>
                                    www.jobsteambd.com<br>
                                    June 2012 to December 2012

                                </li>
                                <li class="list-group-item"><b> 2. Web Designer and Developer At CodeTake IT Solution.</b><br>

                                    99/2, Poribag, Shahabag,
                                    Dhaka, Bangladesh.<br>
                                    20th January 2013 to 31st March 2013

                                </li>
                                </li>
                                <li class="list-group-item"><b>3. Software Programmer At ItechSoft.</b><br>

                                    Boropol,
                                    Chittagong, Bangladesh.<br>
                                    www.itechsoftbd.com<br>
                                    14th January 2014 to 30th November 2014

                                </li>
                                </li>
                                <li class="list-group-item"><b> 4. Manager (Software Division) at E-Group.</b><br>
                                    Corporate Office:<br>
                                    1029, Sufia Monzil-1
                                    Zakir Hossain Road by lane
                                    East Nasirabad, Chittagong<br>
                                    1st December 2014 to Continue.

                                </li>
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
