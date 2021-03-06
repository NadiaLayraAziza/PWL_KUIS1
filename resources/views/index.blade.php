@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="tm-main-bg"></div>
    </div>
</div>
<section class="tm-welcome">
    <div class="row">
        <div class="col-12">
            <h2 class="tm-section-header tm-header-floating">Welcome to New Vision</h2>
        </div>
    </div>


    <div class="row tm-welcome-row">
        @foreach ($barang as $item)
        <article class="col-lg-6 tm-media">
            <img src="{{$item -> featured_image}}" alt="Welcome image" class="img-fluid tm-media-img" />
            <div class="tm-media-body">
                <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">{{$item -> title}}</h3></a>
                <p>{{$item -> content}}</p>
            </div>
        </article>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12">
            {{$barang->links('paginate')}}
        </div>
    </div>

    <div class="row tm-welcome-row-2">
        <div class="col-lg-4 tm-dotted-box-container">
            <article class="tm-dotted-box">
                <i class="fas fa-3x fa-binoculars tm-article-icon"></i>
                <h3 class="tm-article-title">Template Usage</h3>
                <p class="tm-article-text">You can feel free to edit and use New Vision template for your commercial websites. Title color is #333</p>
                <a class="tm-btn tm-btn-rounded tm-article-link" href="#">More Details</a>
            </article>
        </div>
        <div class="col-lg-4 tm-dotted-box-container">
            <article class="tm-dotted-box">
                <i class="fas fa-3x fa-microscope tm-article-icon"></i>
                <h3 class="tm-article-title">New Vision</h3>
                <p class="tm-article-text"><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision</a> comes with 4 different HTML pages and provided free of charge by TemplateMo. You can add more pages if you need. Text color is #666</p>
            </article>
        </div>
        <div class="col-lg-4 tm-dotted-box-container">
            <article class="tm-dotted-box">
                <i class="fas fa-3x fa-glasses tm-article-icon"></i>
                <h3 class="tm-article-title">Download Sites</h3>
                <p class="tm-article-text">Do not re-distribute our template ZIP file on your website. Or contact us first. Button color is #C99</p>
                <a class="tm-btn tm-article-link" href="#">Read More...</a>
            </article>
        </div>
    </div>
</section>

<!-- Featured -->
<section class="tm-featured">
    <div class="row">
        <div class="col-12">
            <h2 class="tm-section-header tm-section-header-small">Featured Carousel Items</h2>
        </div>
    </div>

    <!-- Carousel -->
    <div class="grid tm-carousel">
        @foreach ($pelanggan as $plg)
            <figure class="effect-honey">
                <img src="{{$plg -> featured_image}}" alt="Featured Item">
                <figcaption>
                    <h4><i><span>{{$plg -> title}}</span>{{$plg -> content}}</i></h4>
                </figcaption>
            </figure>
        @endforeach
    </div>
</section>
@endsection
