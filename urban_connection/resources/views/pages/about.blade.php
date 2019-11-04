@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container">
  <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-5 avatar">

    <span class="bounce_Img img-animation"><img src="https://avatars0.githubusercontent.com/u/51130585?s=460&v=4"
        height="250px" width="250px" class="z-depth-1" alt="sidHicks"></span>
    <h5 class="font-weight-bold mb-3 titleBio">Sid Hicks</h5>
    <p class="text-uppercase blue-text"><strong>Front-End Development</strong></p>
    <p class="white-text">I'm a Full Stack Web Developer living in sunny Orlando, Florida. I spend my free time
      coding, listening to jazz, and spending time with loved ones.</p>
    <ul class="list-unstyled mb-0">
      <!-- LinkedIn -->
      <a class="p-2 fa-lg fb-ic" href="https://www.linkedin.com/in/senien-hicks-55415a1b/" target="_blank">
        <i class="fab fa-linkedin white-text"> </i>
      </a>
      <!-- Github -->
      <a class="p-2 fa-lg ins-ic" href="https://github.com/SidH80" target="_blank">
        <i class="fab fa-github white-text"> </i>
      </a>
      <!-- Email -->
      <a class="p-2 fa-lg ins-ic"href="mailto:senien.hicks@gmail.com?subject=I%20want%20to%20Invest%20in%20%22Name-it!%22&body=Hi%20Sid%2C%0A%0AI%20am%20very%20interested%20investing%20in%20%22Name-it!%22.%20Please%20contact%20me%20at%3A%0A">
        <i class="far fa-envelope"> </i>
      </a>
  </ul>

  </div>
    <!-- Grid column -->

    <!-- Grid column -->

  <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-5 avatar">

      <span class="bounce_Img img-animation"><img src="https://avatars0.githubusercontent.com/u/53629644?s=400&v=4" height="250px" width="250px"
        class="z-depth-1" alt="Carl Robinson"></span>

    <h5 class="font-weight-bold mb-3 titleBio">Carl Robinson</h5>
    <p class="text-uppercase blue-text"><strong>Back-end Development</strong></p>
    <p class="white-text">I’m a full-stack developer, currently based in Orlando. I de-stress by playing board
      games, weightlifting, and indulging a bad online shopping habit..</p>
    <ul class="list-unstyled mb-0">
      <!-- LinkedIn -->
      <a class="p-2 fa-lg fb-ic" href="https://www.linkedin.com/in/carl-robinson-jr-40398068/" target="_blank">
        <i class="fab fa-linkedin white-text"> </i>
      </a>
      <!-- Github -->
      <a class="p-2 fa-lg ins-ic" href="https://github.com/Ceedamann" target="_blank">
        <i class="fab fa-github white-text"> </i>
      </a>
      <!-- Email -->
      <a class="p-2 fa-lg ins-ic"href="mailto:malrsteffes@gmail.com?subject=I%20want%20to%20Invest%20in%20%22Name-it!%22&body=Hi%20Mallory%2C%0A%0AI%20am%20very%20interested%20investing%20in%20%22Name-it!%22.%20Please%20contact%20me%20at%3A%0A">
        <i class="far fa-envelope"> </i>
      </a>
    </ul>
  </div>
</div>
@endsection