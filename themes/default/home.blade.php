@extends('layout.master')
@section('body-class', 'page-home')
@section('content')

<div class="modules-box" id="home-modules-box">

  <a href="">
    <img src="" alt="">
  </a>

  @hook('home.modules.before')

  @foreach($modules as $module)
    @include($module['view_path'], $module)
  @endforeach

  @hook('home.modules.after')

</div>

@endsection
