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
                    <img src="{{ asset('images/Invento-POS-facilities.png') }}" alt="My Image">
                  </div>
                  <div class="col-md-8">


                      <div class="card bg-light">
                        <div class="card-header">My Project</div>

                        @if ($project)
                        <div class="card-body">
                          <h5 class="card-title" style="text-align: center;"><b>{{ $project['projectName'] }}</b></h5>
                          <p class="card-text">



                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">

                                    <b>Technology:</b> {{ $project['technology'] }}<br>
                                    <b>Description:</b> {{ $project['Description'] }}


                                </li>

                              </ul>
                        </p>
                        </div>

                        @else
                        <p>Project not found.</p>
                    @endif
                      </div>











                  </div>
                </div>

              </div>
        </div>
    </body>
</html>
