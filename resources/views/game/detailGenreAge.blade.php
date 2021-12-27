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
                                <div class="wrapper" style="margin-bottom: 78px;padding-top: 74px;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col" style="width:10%;">Tiêu đề</th>
                                            <th scope="col" style="width:20%;">Ảnh</th>
                                            <th scope="col">Mô tả</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">{{ $genreGame->title }}</td>
                                                <td scope="row">  <img src="{{ asset('storage/'.$genreGame->icon) }}" style="width:100px;height:100px;" alt="Drugs" typeof="foaf:Image" /></td>
                                                <td>{{ $genreGame->description }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            
    <div id="block-homepagegamesblock" class="views-element-container">


                <section id="new-games">
                    <div class="title-holder">
                        <h2>Mô tả liên quan</h2>
                        {{-- <a href="/search-pegi" class="btn"><span>Search Games</span></a> --}}
                    </div>

                    <div class="slider">
                        @foreach ($genreGameByCountry as $value)
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
            </div>
        </main>
        <div class="footer-push"></div>
    </div>


@endsection