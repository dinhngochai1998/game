<style>
    #logo a:before {
        content: "";
    }
    #logo a:after {
        top: 55px;
    }
    @media (max-width: 480px) {
        #header {
            padding-left: 0px !important;
            height:0px !important;
        }
        #logo {
            z-index: unset !important;
            width: 400px !important;
        }
        .show-info{
            display: none;
        }
        #search {
            margin-top: 60px;
            margin-left: -2px;
        }
        #block-pegi-branding h5 {
            left: 146px !important;
            top: 26px !important;
        }
        #block-pegi-branding h3 {
            left: 140px !important;
            top: 20px !important;
        }
    }
</style>
<header id="header" style="padding-left:460px;height:165px">
    <div id="logo" style="width:475px;height: 165px;">
        <div id="block-pegi-branding" style="text-align: center;">
        <h5 style="
            position: absolute;
            z-index: 99;
            font-weight: bold;
            left: 160px;
            font-size: 13px;
            margin-right: 31px;
            top: 50px;
        "> 
        BỘ THÔNG TIN VÀ TRUYỀN THÔNG
        <!-- VIỆN CÔNG NGHIỆP PHẦN MỀM VÀ NỘI DUNG SỐ -->
    </h5>
    <h3 style="
            margin-top:30px;
            position: absolute;
            z-index: 99;
            font-weight: bold;
            left: 160px;
            font-size: 17px;
            line-height: 25px;
            margin-right: 31px;
            top: 45px;
        "> 
            VIỆN CÔNG NGHIỆP PHẦN MỀM <br> VÀ NỘI DUNG SỐ 
    </h3>

            <a href="/" title="Home" rel="home">Pegi Public Site</a>
        </div>
    </div>
    <div id="nav-holder">
        <nav role="navigation" aria-labelledby="block-pegi-main-menu-menu" id="block-pegi-main-menu">

            <h2 class="visually-hidden" id="block-pegi-main-menu-menu">Main navigation</h2>
            <ul>
                <li>
                    <a href="javascript:(0)">Danh mục phân loại</a>
                    <ul>
                        @foreach($countries as $country)
                            <li>
                                <a href="{{ route('wave.cate.genre.game', $country->slug) }}">{{ $country->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="javascript:(0)" >Tiêu chí đánh giá</a>
                    <ul>
                        @foreach($countries as $country)
                        <li>
                            <a href="{{ route('wave.cate.descriptor', $country->slug) }}">{{ $country->name }}</a>
                        </li>
                        @endforeach
                    </ul>

                </li>

                <li>
                    <a href="">Hướng dẫn tra cứu</a>
                </li>

                <li>
                    <a href="{{ route('wave.privacy') }}" title="Information for game publishers" data-drupal-link-system-path="node/62">Tin tức</a>
                </li>

                <li>
                    <a href="{{ route('wave.about') }}">Giới Thiệu</a>
                </li>
            </ul>
        </nav>


        <button id="nav-toggle"><span class="bars"></span>Menu</button>
    </div>
    <div id="search">
        <div id="block-searchblock">
            <form class="pegi-search-form" data-drupal-selector="pegi-search-form" action="{{ route('wave.search') }}" method="GET" id="pegi-search-form" accept-charset="UTF-8">
                <h2>Tra cứu mở rộng</h2>
                <div class="inputtext-search-button">

                    <div class="js-form-item form-item js-form-type-search form-item-q js-form-item-q form-no-label">

                        <input placeholder="Tra cứu" data-drupal-selector="edit-q" type="search" id="edit-q" name="search" value="" size="60" maxlength="128" class="form-search" />

                    </div>
                    <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Tra cứu" class="button button--primary js-form-submit form-submit" />

                </div>
                <div class="expand-filters">
                    <span>Tra cứu mở rộng</span>
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
                    <input type="submit" id="submit-button-exposed" value="Tra cứu" class="button button--primary js-form-submit form-submit" />
                </div>
            </form>
        </div>
    </div>
    <div class="show-info" style="margin-top:20px;text-align: center;"><h3>CỔNG TRA CỨU HỆ THỐNG PHÂN LOẠI TRÒ CHƠI THEO LỨA TUỔI</h3></div>
</header>