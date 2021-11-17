<header id="header">
    <div id="logo">
        <div id="block-pegi-branding">
            <a href="/" title="Home" rel="home">Pegi Public Site</a>
        </div>
    </div>
    <div id="nav-holder">
        <nav role="navigation" aria-labelledby="block-pegi-main-menu-menu" id="block-pegi-main-menu">

            <h2 class="visually-hidden" id="block-pegi-main-menu-menu">Main navigation</h2>
            <ul>
                <li>
                    <a href="javascript:(0)">Country</a>
                    <ul>
                        @foreach($countries as $country)
                            <li>
                                <a href="{{ route('wave.cate.genre.game', $country->slug) }}">{{ $country->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="javascript:(0)" >DESCRIPTORS</a>
                    <ul>
                        @foreach($countries as $country)
                        <li>
                            <a href="{{ route('wave.cate.descriptor', $country->slug) }}">{{ $country->name }}</a>
                        </li>
                        @endforeach
                    </ul>

                </li>

                <li>
                    <a href="{{ route('wave.about') }}">Về Chúng tôi</a>
                </li>

                <li>
                    <a href="{{ route('wave.privacy') }}" title="Information for game publishers" data-drupal-link-system-path="node/62">Chính sách</a>
                </li>
            </ul>
        </nav>


        <button id="nav-toggle"><span class="bars"></span>Menu</button>
    </div>
    <div id="search">
        <div id="block-searchblock">
            <form class="pegi-search-form" data-drupal-selector="pegi-search-form" action="{{ route('wave.search') }}" method="GET" id="pegi-search-form" accept-charset="UTF-8">
                <h2>Extended Search</h2>
                <div class="inputtext-search-button">

                    <div class="js-form-item form-item js-form-type-search form-item-q js-form-item-q form-no-label">

                        <input placeholder="Tìm kiếm" data-drupal-selector="edit-q" type="search" id="edit-q" name="search" value="" size="60" maxlength="128" class="form-search" />

                    </div>
                    <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Tìm kiếm" class="button button--primary js-form-submit form-submit" />

                </div>
                <div class="expand-filters">
                    <span>Tìm kiếm mở rộng</span>
                </div>
                <div class="exposed-filters js-form-wrapper form-wrapper" data-drupal-selector="edit-exposed-filters" id="edit-exposed-filters">
                    <div class="js-form-item form-item js-form-type-select form-item-age js-form-item-age">
                        <label for="agecategories-exposed">Đất nước</label>
                        <select name="country" id="agecategories-exposed" class="form-select">
                            <option value="" selected="selected">Tất cả đất nước</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="js-form-item form-item js-form-type-select form-item-descriptor js-form-item-descriptor">
                        <label for="descriptors-exposed">Mô tả</label>
                        <select data-drupal-selector="descriptors-exposed" multiple="multiple" name="descriptor[]" id="descriptors-exposed" class="form-select">
                            @foreach ($genreGame as $value)
                                <option value="{{ $value->id }}">{{ $value->title }} - {{ $value->countryId->name }} </option>
                            @endforeach
                            <option value="" selected="selected">Tất cả mô tả</option>
                        </select>
                    </div>
                    <input type="submit" id="submit-button-exposed" value="Tìm kiếm" class="button button--primary js-form-submit form-submit" />
                </div>
            </form>

        </div>


    </div>
</header>