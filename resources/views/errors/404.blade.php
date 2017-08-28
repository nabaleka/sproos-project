@extends('layouts.error')

@section('content')

<!-- Page Content-->
      <div class="container padding-top-3x padding-bottom-3x mb-1"><img class="d-block m-auto" src="{{ asset('img/404_art.jpg') }}" style="width: 100%; max-width: 550px;" alt="404">
        <div class="padding-top-1x mt-2 text-center">
          <h3>Page Not Found or Under Construction</h3>
          <p>It seems we can’t find page you are looking for. <a href="/">Go back to Homepage</a><br>Or try using search at the top right corner of the page. The page might be under construction.</p>
        </div>
      </div>

@endsection