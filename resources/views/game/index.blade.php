@extends('themes.tailwind.layouts.app')

@section('content')
<div class="dialog-off-canvas-main-canvas">

    <div class="wrapper content-wrap" style="padding-top: 100px;">
        <main id="main">
            {{-- <div class="views-element-container" id="block-views-block-homepage-intro-block-1">
                <div>
                    <div class="">
                        <div class="views-row">
                            <article  role="article" about="/pegi-helps-parents-make-informed-decisions-when-buying-video-games" id="home-intro">
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
                                                Đánh giá phân loại, xếp hạng theo ESRB
                                            </div>

                                            <div class="labels-holder">
                                                @foreach ($genreGame as $value)
                                                <a href="{{ route('wave.genre.game.detail', $value->slug) }}">
                                                    <div class="field-age-labels entity-reference" style="width: 10%;">


                                                        <article class="label-descriptor">
                                                            <div class="article-content">

                                                                <h3><span>{{ $value->title }}</span>
                                                                </h3>


                                                                <div class="body text-with-summary">
                                                                    <p>{{ $value->description }}</p>
                                                                </div>

                                                                <div class="field-image image">
                                                                    
                                                                        <img src="{{ $value->icon ? asset('storage/'.$value->icon) : '' }}" width="181" height="220" alt="PEGI 3" typeof="foaf:Image" />

                                                                </div>

                                                            </div>
                                                        </article>
                                                    </div>
                                                </a>
                                                @endforeach
                                            </div>

                                            <div class="field-descriptors-title string">
                                                MÔ TẢ NỘI DUNG
                                            </div>

                                            <div class="labels-holder">
                                                @foreach ($contentDescriptor as $value)
                                                <div class="field-descriptors entity-reference" style="width:8%;">
                                                    <article class="label-descriptor">
                                                        <div class="article-content">

                                                            <h3><span>{{ $value->title }}</span>
                                                            </h3>

                                                            <div class="body text-with-summary">
                                                                <p>{{ $value->description }}</p>
                                                            </div>

                                                            <div class="field-image image">
                                                                <a href="{{ route('wave.descriptor.detail', $value->slug) }}">
                                                                    <img src="{{ $value->image ? asset('storage/'.$value->image) : '' }}" width="219" height="220" alt="Drugs" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                @endforeach
                                            </div>

                                            <div class="field-labels-link link">
                                                <a href="{{ route('wave.country') }}">Hơn nữa</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-inner"></div>

                                    <div class="field-background-image image" style="background:url({{ asset('frontend/themes/pegi/images/banner_0.jpg') }});"></div>

                            </article>
                        </div>
                    </div>
                </div>

            </div> --}}

            
                <div id="block-homepagegamesblock" class="views-element-container">
                    @foreach ($countries as $country)
                        @if(count($country->games) > 0)
                            <section id="new-games" style="margin-top:50px;">
                                <div class="title-holder">
                                    <h2>{{ $country->name }} | <a href=" {{ route('wave.cate.descriptor', $country->slug) }}" >MÔ TẢ NỘI DUNG</a> | <a href="{{ route('wave.cate.genre.game', $country->slug) }}">DANH MỤC PHÂN LOẠI</a></h2>
                                    {{-- <a href="/search-pegi" class="btn"><span>Search Games</span></a> --}}
                                </div>
                                    <div class="slider">
                                        @foreach ($country->games as $value)
                                            <article class="game">
                                                <div class="game-content">
                                                    <div class="description">
                                                        <div class="age-rating">
                                                            <a href="{{ route('wave.genre.game.detail', $value->slug) }}">
                                                                <img src="{{ asset('/storage/'.$value->icon) }}" alt=""  />
                                                            </a>
                                                        </div>

                                                        <div class="info">
                                                            <div class="info-inner">
                                                                    <h3>{{ $value->title }}</h3>
                                                                    <span class="platform"><a href="{{ route('wave.genre.game.detail', $value->slug) }}">Xem chi tiết</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- @if ($value->description)
                                                    <div class="descriptors"><img src="{{ asset('/storage/'.$value->contentDescription->image) }}" alt="" /></div>
                                                    @endif --}}

                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                            </section>
                        @endif
                    @endforeach
                </div>

        </main>
        <div class="footer-push"></div>
    </div>
        </main>
        <div class="footer-push"></div>
    </div>

</div>


@endsection