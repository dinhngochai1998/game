
@extends('themes.tailwind.layouts.app')

@section('content')
<div class="search-pegi">

    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

        <div class="wrapper content-wrap" style="padding-top: 100px;">
            <div id="sidebar-left">
                <div id="block-submenusidebarblock">
                </div>
            </div>
            <main id="main">
                <div id="block-pegi-content" style="margin-top: 65px;">
                    <div id="results" typeof="WebPage" class="page">
                        <h1><span property="schema:name">Độ tuổi phân loại</span></h1>
                        <div class="page-content">
                            <div class="results-count"></div>
                            <div property="schema:text" class="body text-with-summary">
                                @foreach ($genreGame as $value)
                                <article class="game">
                                    <div class="game-content" style="padding: 25px 25px 0px;">
                                        <div class="description">
                                            <div class="age-rating">
                                                <a href="{{ route('wave.genre.game.detail', $value->slug) }}">
                                                    <img src="{{ asset('/storage/'.$value->icon) }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="info" style="width: 100%;">
                                                <h3><a style="font-size: 24px;" href="{{ route('wave.genre.game.detail', $value->slug) }}">{{ $value->title }}</a></h3>
                                                <br>
                                                <span style ="margin-top:20px;margin-right:-50px;" class="publisher">By :{{ $value->countryId->name }}</span>
                                                <span class="content-info">{{ $value->description }}</span>
                                                <a href="{{ route('wave.cate.descriptor', $value->countryId->slug) }}" style="padding: 10px;border-radius: 7px;float: right;background: #03b8f4;cursor: pointer;color: #fff;text-decoration: none;margin-bottom: 20px;">Xem chi tiết</a>
                                            </div>
                                            {{-- <div class="technical-info">
                                                <span class="platform">
                                                    <span class="feature-label">Release Dates &amp; Platforms:</span><br>
                                                    <ul>
                                                        <li>11/11/2021 - PlayStation 4</li>
                                                        <li>11/11/2021 - PlayStation 5</li>
                                                        <li>11/11/2021 - Xbox One</li>
                                                        <li>11/11/2021 - Xbox Series X|S</li>
                                                        <li>11/11/2021 - PC</li>
                                                    </ul>
                                                </span>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="descriptors flex">
                                            <div class="descriptors-categories">
                                                <div class="descriptors-category"><img src="https://pegi.info/themes/pegi/public-images/violence.png" alt="" /></div>
                                            </div><a class="btn toggle-advice">More info</a>
                                        </div> --}}
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                        <div class="field-background-image image"></div>
                    </div>
                    {{-- <ul id="search-pagination" class="pagination">
                        <li class="current"><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=1&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">1</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=2&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">2</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=3&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">3</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=4&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">4</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=5&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">5</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=6&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">6</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=7&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">7</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=8&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">8</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=9&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">9</a></li>
                        <li class=""><a href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=10&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form">10</a></li>
                        <li><a class="next" href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=2&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form"> &gt; </a></li>
                        <li><a class="next" href="/search-pegi?q=&amp;op=Search&amp;age%5B0%5D=&amp;descriptor%5B0%5D=&amp;publisher=&amp;platform%5B0%5D=&amp;release_year%5B0%5D=&amp;page=3209&amp;form_build_id=form-5bgtxEpQLG-zJEtZxynVq55I9J9PjUPqQoSkEjEBs9M&amp;form_id=pegi_search_form"> &gt;&gt; </a></li>
                    </ul> --}}
                </div>
                <div data-drupal-messages-fallback class="hidden"></div>


            </main>
            <div class="footer-push"></div>
        </div>
    </div>

</div>

@endsection