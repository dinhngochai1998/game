@extends('themes.tailwind.layouts.app')

@section('content')
<div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

    <div class="wrapper content-wrap">
        <main id="main">
            <div class="views-element-container" id="block-views-block-homepage-intro-block-1">
                <div>
                    <div class="js-view-dom-id-1603382be561472bf1899ee5e5be0e88bbe5e7bb226a400f505419c452bb0f34">
                        <div class="views-row">
                            <article data-history-node-id="17" role="article" about="/pegi-helps-parents-make-informed-decisions-when-buying-video-games" id="home-intro">
                                <div class="wrapper">
                                    <!-- <div class="intro left">
                                        <div class="intro-content">

                                            <h1><span>PEGI helps parents to make informed decisions when buying video games</span>
                                            </h1>


                                            <div class="body text-with-summary">
                                                <p><span><span><span lang="EN-GB" xml:lang="EN-GB" xml:lang="EN-GB">PEGI provides age classifications for video games in 38 European countries. The age rating confirms that the game is appropriate for players of certain age. PEGI considers the age suitability of a game, not the level of difficulty.</span></span></span></p>
                                            </div>


                                            <div class="field-link link">
                                                <a href="/page/pegi-age-ratings">Find Out More</a>
                                            </div>

                                        </div>
                                    </div> -->
                                    <div class="intro right">
                                        <div class="intro-content" style="margin:auto;">

                                            <div class="field-age-labels-title string">
                                                HAI CẤP ĐỘ THÔNG TIN NHƯ HƯỚNG DẪN: NHÃN HIỆU PEGI TUỔI
                                            </div>

                                            <div class="labels-holder">
                                                @foreach ($genreGame as $value)
                                                <div class="field-age-labels entity-reference" style="width: 10%;">


                                                    <article data-history-node-id="5" role="article" about="/pegi-3" class="label-descriptor">
                                                        <div class="article-content">

                                                            <h3><span>{{ $value->title }}</span>
                                                            </h3>


                                                            <div class="body text-with-summary">
                                                                <p>{{ $value->description }}</p>
                                                            </div>

                                                            <div class="field-image image">
                                                                <a href="{{ route('wave.genre.game.detail', $value->slug) }}">
                                                                    <img src="{{ asset('storage/'.$value->icon) }}" width="181" height="220" alt="PEGI 3" typeof="foaf:Image" />
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </article>
                                                </div>
                                                @endforeach
                                            </div>

                                            <div class="field-descriptors-title string">
                                                MÔ TẢ NỘI DUNG
                                            </div>

                                            <div class="labels-holder">
                                                @foreach ($contentDescriptor as $value)
                                                <div class="field-descriptors entity-reference" style="width:8%;">
                                                    <article data-history-node-id="12" role="article" about="/drugs" class="label-descriptor">
                                                        <div class="article-content">

                                                            <h3><span>{{ $value->title }}</span>
                                                            </h3>

                                                            <div class="body text-with-summary">
                                                                <p>{{ $value->description }}</p>
                                                            </div>

                                                            <div class="field-image image">
                                                                <a href="{{ route('wave.descriptor.detail', $value->slug) }}">
                                                                    <img src="{{ asset('storage/'.$value->image) }}" width="219" height="220" alt="Drugs" typeof="foaf:Image" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                @endforeach
                                            </div>

                                            <div class="field-labels-link link">
                                                <a href="/what-do-the-labels-mean">Hơn nữa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-inner"></div>

                                    <div class="field-background-image image" style="background:url(https://pegi.info/sites/default/files/default_images/banner_0.jpg);"></div>

                            </article>
                        </div>








                    </div>
                </div>

            </div>
            <!-- <div id="block-homepagegamesblock" class="views-element-container">


                <section id="new-games">
                    <div class="title-holder">
                        <h2>Newly Rated Games</h2>
                        <a href="/search-pegi" class="btn"><span>Search Games</span></a>
                    </div>

                    <div class="slider">
                        @foreach ($game as $value)
                        <article class="game">
                            <div class="game-content">
                                <div class="description">
                                    @if ($value->genreGame)
                                    <div class="age-rating">
                                        <img src="{{ asset('/storage/'.$value->genreGame->icon) }}" alt="" />
                                    </div>
                                    @endif

                                    <div class="info">
                                        <div class="info-inner">
                                            <h3>{{ $value->name }}</h3>
                                            <span class="publisher">{{ $value->main_description }}</span>
                                            <span class="platform">PC</span>
                                        </div>
                                    </div>
                                </div>
                                @if ($value->contentDescription)
                                <div class="descriptors"><img src="{{ asset('/storage/'.$value->contentDescription->image) }}" alt="" /></div>
                                @endif

                            </div>
                        </article>
                        @endforeach
                    </div>


                </section>
            </div> -->
            <!-- <div class="views-element-container" id="block-views-block-important-links-block-2">


                <div>
                    <div class="js-view-dom-id-7c569a9b926369e232375c17f98eb609b064cd491e52d25bf040d636daf88d49">








                        <div class="views-row">

                            <article data-history-node-id="2" role="article" about="/pegi-age-rating-process" class="important-link">
                                <div class="article-content">

                                    <h3><span>The PEGI age rating process</span>
                                    </h3>


                                    <div class="field-video video-embed-field">
                                        <div class="video-embed-field-provider-youtube video-embed-field-responsive-video"><iframe width="854" height="480" frameborder="0" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/W_Uvf8sq7PU?autoplay=0&amp;start=0&amp;rel=0"></iframe>
                                        </div>

                                    </div>

                                    <div class="field-link link">
                                        <a href="https://www.youtube.com/user/PEGIgames/">More Videos</a>
                                    </div>

                                    <div class="field-video-thumbnail image" style="background:url(https://pegi.info/sites/default/files/2017-12/video%20capture.jpeg);">
                                        <span class="play"></span>
                                    </div>

                                    <div class="field-ribbon-title string">
                                        PEGI Video
                                    </div>

                                </div>
                            </article>

                        </div>








                    </div>
                </div>

            </div> -->


        </main>
        <div class="footer-push"></div>
    </div>

</div>


@endsection