@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-about-bg"></div>        
            </div>
        </div>
        
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">About Our Company</h2>         
                    </div>
                </div>
                
                <div class="row tm-welcome-row">
                    <div class="tm-about">
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fab fa-5x fa-accusoft tm-about-icon"></i>
                            <div>
                                <p><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision HTML Template</a> is provided by TemplateMo for 100% free of charge. Vestibulum consectetur urna augue, in sagittis mi sodales ut. Maecenas at quam et ligula vulputate commodo. Integer tempor nec velit ut pulvinar. In hac habitasse platea dictumst.</p>
                            </div>
                        </div>
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fas fa-5x fa-air-freshener tm-about-icon"></i>
                            <div>
                                <p>Curabitur et viverra purus, in ornare sem. Donec eu imperdiet felis, sed interdum leo. Mauris nisl mi, bibendum eu venenatis at, condimentum et dui. Proin mi enim, dapibus at metus semper, hendrerit faucibus nisi.</p>
                            </div>
                        </div>
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fas fa-5x fa-fire-alt tm-about-icon"></i>
                            <div>
                                <p>Duis accumsan dolor feugiat dapibus ultrices. Vestibulum consectetur urna augue, in sagittis mi sodales ut. Maecenas at quam et ligula vulputate commodo. Integer tempor nec velit ut pulvinar. In hac habitasse platea dictumst.</p>
                            </div>
                        </div>    
                    </div>
                </div>
                
                <div class="row tm-welcome-row-2">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-4">Our Background and Environment</h2>        
                    </div>
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="img/img-3x1-01.jpg" alt="Image" class="img-fluid mb-5">
                            <p class="tm-article-text">Phasellus blandit tortor vel odio hendrerit, eleifend ultricies odio temport. Etiam euismod, lectus convallis efficitur convallis, risus orci auctor orci.</p>
                            <p>Cras imperdiet in ligula sit amet fringilla. Morbi posuere mattis ornare. Nunc iaculis porta ipsum. Aliquam vehicula egestas diam auctor ornare.</p>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="tm-about-1">
                            <img src="img/img-3x1-02.jpg" alt="Image" class="img-fluid mb-5">
                            <p class="tm-article-text">Quisque sed tortor sed metus vehicula pulvinar vel dictum tortor. Nivamus eu posuere arcu. Vivamus vel urna id mi congue convallis at sed augue.</p>
                            <p>Praesent venenatis risus aliquet semper porta. Maecenas mollis nisi non hendrerit finibus. Ut eu convallis massa. Sed imperdiet arcu non egestas elementum.</p>
                        </div>    
                    </div>
                </div>
            </section>
            
            <!-- Featured -->
            <section class="tm-featured">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-section-header-small mb-3">Our Team Members</h2>        
                    </div>
                </div>
                
                <!-- Carousel -->
                <div class="grid tm-carousel">
                    @foreach ($pegawai as $employee)
                        <figure class="effect-zoe">
                            <img src="{{$employee -> featured_image}}" alt="Featured Item">
                            <figcaption>
                                <h2>{{$employee -> name}}</h2>
                                <p class="icon-links">
                                    <a href="{{$employee -> fb}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{$employee -> twitter}}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{$employee -> ig}}"><i class="fab fa-instagram"></i></a>
                                </p>
                            </figcaption>
                        </figure>    
                    @endforeach
                </div>
            </section>
@endsection