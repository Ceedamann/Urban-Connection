<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>{{$post->title}}</title>

    <!-- Styles -->
    <link href="{{asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
  </head>

  <body style='font-family: "Nunito", sans-serif;'>
    <nav class="navbar navbar-expand navbar-dark bg-dark" data-navbar="sticky">
        @csrf
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Urban Connection') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/events">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        @csrf
    </nav>


    <!-- Header -->
    <header class="header text-white h-fullscreen pb-80" style="background-image: url({{asset('storage/'.$post->image)}});" data-overlay="9">
      <div class="container text-center">

        <div class="row h-100">
          <div class="col-lg-8 mx-auto align-self-center">

            <p class="opacity-70 text-uppercase small ls-1">{{$post->category->name}}</p>
            <h1 class="display-4 mt-7 mb-8">{{$post->title}}</h1>
            <p>{{$post->description}}</p>

          </div>

          <div class="col-12 align-self-end text-center">
            <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
          </div>

        </div>

      </div>
    </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content">


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section" id="section-content">
        <div class="container">

          <div class="row">
            <div class="col-lg-8 mx-auto">

              <p class="lead">{!!$post->content!!}</p>

              <hr class="w-100px">

            </div>
          </div>

          <div class="text-center my-6">
            <img class="rounded-md" src="{{asset('storage/'.$post->image)}}" alt="...">
          </div>



          <div class="gap-xy-2 mt-6 leftBox">

                  @foreach($post->tags as $tag)
                  <a class="" href="{{route('details.tag', $tag->id)}}">{{$tag->name}}</a>
                  @endforeach

                 </div>
            </div>
          </div>
        </div>
      </div>



      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Comments
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section bg-gray">
        <div class="container">

          <div class="row">
            <div class="col-lg-8 mx-auto">
              <hr>
              <div id="disqus_thread"></div>

              <script>

              /**
              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

              var disqus_config = function () {
              this.page.url = "{{config('app.url')}}/details/posts/{{$post->id}}";  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = {{$post->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };

              (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://urbanconncetion.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


            </div>
          </div>

        </div>
      </div>



    </main>


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="/">Urban ConnectionC</a>
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="{{asset('js/page.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>

  </body>
</html>
