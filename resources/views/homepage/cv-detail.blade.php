@extends('homepage_layout')
@section('homepage_content')
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="container">
        <h1>CV của bạn</h1>
    </div>
</section>
<div class="clearfix"></div>
<style>
    .pdf {
        width: 100%;
        aspect-ratio: 4 / 3;
    }

    .pdf,
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<div class="container">
    <object class="pdf" data="<?php echo 'http://127.0.0.1:8000' . $cvdata->cv_path ?>" width="800" height="500">
    </object>
</div>

@endsection
@section('scripts')

@endsection