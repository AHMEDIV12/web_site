@extends('layouts.main_layout')



@section('content')

<!-- MAIN-->
        <main id="main">
            <div class="container">
                
            @if (isset($target_project))
                <?php
                    $target_project_imgs = (array) json_decode($target_project->img);
                    $project_meta = (array) json_decode($target_project->meta);
                    // dd($target_project_imgs);
                ?>
                    <article class="project-style-1">
                        <header class="entry-header">
                            <h2 class="entry-title">{{$project_meta['project_name']}}</h2>
                        </header>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="entry-meta">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="entry-meta__item">
                                                <h4 class="key">DATE:</h4>
                                                <span class="value">{{$project_meta['project_date']}}</span>
                                            </div>
                                            <div class="entry-meta__item">
                                                <h4 class="key">status:</h4>
                                                <span class="value">{{$project_meta['project_status']}}</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="entry-meta__item">
                                                <h4 class="key">client:</h4>
                                                <span class="value">{{$project_meta['client_name']}}</span>
                                            </div>
                                            <div class="entry-meta__item">
                                                <h4 class="key">location:</h4>
                                                <span class="value">{{$project_meta['project_adress']}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="entry-content">
                                    <p>
                                        {{$project_meta['project_disc']}}
                                    </p>
                                </div>
                                <div class="entry-share">
                                    <span class="key">Share :</span>
                                    <ul class="list-social list-social--md">
                                        <li class="list-social__item">
                                            <a class="ic-fb" href="{{isset($project_meta['fb_link']) ? $project_meta['fb_link'] : '#' }}">
                                                <i class="zmdi zmdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-insta" href="{{isset($project_meta['insta_link']) ? $project_meta['insta_link'] : '#' }}">
                                                <i class="zmdi zmdi-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-twi" href="{{isset($project_meta['twiter_link']) ? $project_meta['twiter_link'] : '#' }}">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-pinterest" href="{{isset($project_meta['google_link']) ? $project_meta['google_link'] : '#' }}">
                                                <i class="zmdi zmdi-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-google" href="#">
                                                <i class="zmdi zmdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @foreach ($target_project_imgs as $img)
                        <img class="wp-post-image" src="{{asset($img)}}" alt="Post 1">
                        
                        @endforeach
                        
                    </article>
                @else
                
                    <article class="project-style-1">
                        <header class="entry-header">
                            <h2 class="entry-title">Creative Studio 8</h2>
                        </header>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="entry-meta">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="entry-meta__item">
                                                <h4 class="key">DATE:</h4>
                                                <span class="value">May - 21 - 2018</span>
                                            </div>
                                            <div class="entry-meta__item">
                                                <h4 class="key">status:</h4>
                                                <span class="value">Completed</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="entry-meta__item">
                                                <h4 class="key">client:</h4>
                                                <span class="value">Domingo Norton</span>
                                            </div>
                                            <div class="entry-meta__item">
                                                <h4 class="key">location:</h4>
                                                <span class="value">Perth , Australia</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="entry-content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam remaperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        sit
                                    </p>
                                </div>

                                <div class="entry-share">
                                    <span class="key">Share :</span>
                                    <ul class="list-social list-social--md">
                                        <li class="list-social__item">
                                            <a class="ic-fb" href="#">
                                                <i class="zmdi zmdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-insta" href="#">
                                                <i class="zmdi zmdi-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-twi" href="#">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-pinterest" href="#">
                                                <i class="zmdi zmdi-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-google" href="#">
                                                <i class="zmdi zmdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img class="wp-post-image" src="{{asset('images/post-01.jpg')}}" alt="Post 1">
                        <img class="wp-post-image" src="{{asset('images/post-02.jpg')}}" alt="Post 2">
                        <img class="wp-post-image" src="{{asset('images/post-03.jpg')}}" alt="Post 3">
                        <img class="wp-post-image" src="{{asset('images/post-04.jpg')}}" alt="Post 4">
                    </article>
                @endif
            </div>
            <nav class="navigation project-navigation">
                <div class="container">
                    <div class="nav-links">
                        <div class="nav-previous">
                            <a href="#">
                                <span class="ti-arrow-left"></span>
                            </a>
                        </div>
                        <div class="all-link-wrap">
                            <a class="all-link" href="#">
                                <span class="ti-menu"></span>
                            </a>
                        </div>
                        <div class="nav-next">
                            <a href="#">
                                <span class="ti-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </main>
<!-- END MAIN-->


@endsection