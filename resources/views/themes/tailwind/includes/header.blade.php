<style>
    @media (max-width: 1024px){
        #nav-holder, #nav-toggle {
            display: flex;
        }
    }
    #logo a:before {
        content: "";
    }
    #logo a:after {
        top: 38px;
        width: 90px;
        left: 0px;
    }
    #header {
        transition:unset;
        top: 0px;
        margin-top: 20px;
    }
    #header.hide {
        top: unset;
    }
    #block-footer>ul>li>ul, #block-mainnavigation>ul>li>ul, #block-pegi-footer>ul>li>ul, #block-pegi-main-menu>ul>li>ul{
        z-index: 99;
    }
    #block-pegi-main-menu ul{
        display: flex;
        justify-content: space-between;
    }
    #block-pegi-main-menu ul li{
        white-space: nowrap;
        margin-left: 0;        
    }
    @media screen and (min-width: 414px){
        #nav-toggle.important {
            margin-left: auto !important;
            margin-right: 16px;
        }

        #block-pegi-main-menu ul {
            display: block !important;
        }
        
    }

    @media screen and (min-width:481px) and (max-width:768px) {
        .title-c {
            top: 11px !important;
        }
        #nav-toggle {
            float: right ;
            margin-right: 104px !important;
        }
        #block-pegi-main-menu ul {
            display: block !important;
        }
    }
    @media screen and (min-width:414px) {
        .title-c {
            top: 11px !important;
         }
         #logo a:after {
            top: 20px !important;
        }
        #search {
            margin-left: -310px !important;
        }
        #logo a {
            box-shadow: unset;
        }
        #search.open {
            margin-left: 12px !important;
        }
        #nav-toggle {
            margin-left: 32px !important;
        }
        #block-pegi-main-menu ul {
            display: block !important;
        }
        /* #header {
            padding-left: 0px !important;
            height:0px !important;
        }
        #logo {
            z-index: unset !important;
            width: 400px !important;
        }
        .show-info{
            display: none;
        } */
        /* #search {
            margin-top: 60px;
            margin-left: -2px;
        } */
        /* #block-pegi-branding h5 {
            left: 146px !important;
            top: 51px !important;
            font-size: 11px!important;
        }
        #block-pegi-branding h3 {
            left: 140px !important;
            top: 40px !important;
            font-size: 14px!important;
        } */
    }
    @media screen and (min-width:1025px) and (max-width:1300px) {
        /* .guide-menu {
            display: none !important;
        }
        .news-menu {
            display: none !important;
        }
        .introduce-menu {
            display: none !important;
        } */
        #search {
            margin-left: 0 !important;
        }
        #logo a {
            box-shadow: 0 0 15px 1px rgb(0 0 0 / 35%) !important;
        }

        .title-c {
            top: 30px !important;
        }

        #logo a:after {
            top: 37px !important;
        }
        
    }
    @media (min-width:1368px) { 
        .guide-menu {
            display: block;
        }
        .news-menu {
            display: block;
        }
        .introduce-menu {
            display: block;
        }
        #search {
            margin-left: 0 !important;
        }
        #logo a {
            box-shadow: 0 0 15px 1px rgb(0 0 0 / 35%) !important;
        }
        .title-c {
            top: 30px !important;
        }
        #logo a:after {
            top: 37px !important;
        }
    }
    @media screen and (min-width:320px) and (max-width:413px) {
        #nav-toggle {
            margin-left: -8px !important;
        }
        .title-c {
            top: 11px !important;
         }
         #logo a:after {
            top: 20px !important;
        }
        #search {
            margin-left: -310px !important;
        }
        #logo a {
            box-shadow: unset;
        }
        #search.open {
            margin-left: 12px !important;
        }
        #block-pegi-main-menu ul {
            display: block !important;
        }
    }
    /* @media (min-width:480px)  {
        /* #header {
            padding-left: 210px !important;
        }
        #logo {
            width: 500px !important;
        }
        .show-info{
            display: none;
        }
        #block-pegi-branding h5 {
            z-index: unset !important;
        }
        #block-pegi-branding h3 {
            z-index: unset !important;
        }
        #search {
            margin-top: 70px !important;
        }
        #nav-holder {
            z-index: 9999 !important;
        } */
    /* }
    @media screen and (min-width:1025px) and (max-width:1300px) {
        .guide-menu {
            display: none !important;
        }
        .news-menu {
            display: none !important;
        }
        .introduce-menu {
            display: none !important;
        }
    }
    @media (min-width:600px)  { 
        #header {
            padding-left: 510px !important;
            height: 165px !important;
        }
        #logo {
            width: 318px !important;
            height: 165px !important;
        }
        #block-pegi-branding h5 {
            left: 128px !important;
            font-size: 9px!important;
        }
        #block-pegi-branding h3 {
            left: 126px !important;
            font-size: 10px!important;
            line-height: 18px !important;
        }
        .show-info {
            display: none;
        }
        #nav-toggle {
            float: right;
            margin-right: 30px;
        }
     }
    @media (min-width:801px)  { 
        #header {
            padding-left: 565px !important;
            height: 165px !important;
        }
        #logo {
            width: 375px !important;
            height: 165px !important;
        }
        #block-pegi-branding h5 {
            left: 128px !important;
            font-size: 12px!important;
        }
        #block-pegi-branding h3 {
            left: 126px !important;
            font-size: 14px!important;
            line-height: 23px !important;
        }
        .show-info {
            display: block;
            margin-top: 15px !important;
            margin-left: -165px !important;
        }
        .show-info h3{
            font-size: 15px;
        }
        #nav-toggle {
            float: right;
            margin-right: 30px;
        }
     }
    @media (min-width:1025px) { 
        #header {
            padding-left: 399px !important;
            height: 165px !important;
        }
        #logo {
            width: 415px !important;
            height: 165px !important;
        }
        .show-info {
            display: block;
            margin-top: 20px !important;
            margin-left: unset !important;
        }
        .show-info h3{
            font-size: 16px !important;
        }
        #block-pegi-branding h5 {
            left: 180px !important;
            font-size: 11px!important;
        }
        #block-pegi-branding h3 {
            left: 160px !important;
            font-size: 14px!important;
        }

    }
    @media (min-width:1368px) { 
        .guide-menu {
            display: block;
        }
        .news-menu {
            display: block;
        }
        .introduce-menu {
            display: block;
        }
     } */
     .title-c {
        position: absolute;
        z-index: 99;
        font-weight: bold;
        left: 73px;
        font-size: 11px;
        margin-right: 31px;
        top: 27px;
        text-align: center;
     }
     @media screen and (min-width:1300px) and (max-width:1367px) {
        #search {
            margin-left: 0 !important;
        }
     }
</style>
<header id="header" style="padding-left: 310px;">
    <div id="logo" style="width: 326px;">
        <div id="block-pegi-branding">
        <h5 class="title-c"> 
            Vi????n CMPM & NDS Vi????t Nam
            <br>
            C???NG TRA C???U H??? TH???NG PH??N LO???I TR?? CH??I THEO L???A TU???I
        </h5>
    <!-- <h3 style="
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
            VI???N C??NG NGHI???P PH???N M???M <br> V?? N???I DUNG S??? VI???T NAM
    </h3> -->

            <a href="/" title="Home" rel="home">Pegi Public Site</a>
        </div>
    </div>
    <div id="nav-holder">
        <nav role="navigation" aria-labelledby="block-pegi-main-menu-menu" id="block-pegi-main-menu">

            <h2 class="visually-hidden" id="block-pegi-main-menu-menu">Main navigation</h2>
            <ul>
                <li>
                    <a href="javascript:(0)">Danh m???c ph??n lo???i</a>
                    <ul>
                        @foreach($countries as $country)
                            <li>
                                <a href="{{ route('wave.cate.genre.game', $country->slug) }}">{{ $country->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="javascript:(0)" >Ti??u ch?? ????nh gi??</a>
                    <ul>
                        @foreach($countries as $country)
                        <li>
                            <a href="{{ route('wave.cate.descriptor', $country->slug) }}">{{ $country->name }}</a>
                        </li>
                        @endforeach
                    </ul>

                </li>

                <li class="guide-menu">
                    <a href="{{ route('wave.guide') }}" >H?????ng d???n tra c???u</a>
                </li>

                <li class="news-menu">
                    <a href="{{ route('wave.privacy') }}" >Tin t???c</a>
                </li>

                <li class="introduce-menu">
                    <a href="{{ route('wave.about') }}" >Gi???i Thi???u</a>
                </li>
            </ul>
        </nav>


        <button id="nav-toggle" class="important"><span class="bars"></span>Menu</button>
    </div>
    <div id="search">
        <div id="block-searchblock">
            <form class="pegi-search-form" data-drupal-selector="pegi-search-form" action="{{ route('wave.search') }}" method="GET" id="pegi-search-form" accept-charset="UTF-8">
                <h2>Tra c???u m??? r???ng</h2>
                <div class="inputtext-search-button">

                    <div class="js-form-item form-item js-form-type-search form-item-q js-form-item-q form-no-label">

                        <input placeholder="Tra c???u" data-drupal-selector="edit-q" type="search" id="edit-q" name="search" value="" size="60" maxlength="128" class="form-search" />

                    </div>
                    <input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Tra c???u" class="button button--primary js-form-submit form-submit" />

                </div>
                <div class="expand-filters">
                    <span>Tra c???u m??? r???ng</span>
                </div>
                
                <div class="exposed-filters js-form-wrapper form-wrapper" data-drupal-selector="edit-exposed-filters" id="edit-exposed-filters">
                    <div class="js-form-item form-item js-form-type-select form-item-age js-form-item-age">
                        <label for="agecategories-exposed">?????t n?????c</label>
                        <select name="country" id="agecategories-exposed" class="form-select">
                            <option value="" selected="selected">T???t c??? ?????t n?????c</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="js-form-item form-item js-form-type-select form-item-descriptor js-form-item-descriptor">
                        <label for="descriptors-exposed">M?? t???</label>
                        <select data-drupal-selector="descriptors-exposed" multiple="multiple" name="descriptor[]" id="descriptors-exposed" class="form-select">
                            @foreach ($genreGame as $value)
                                <option value="{{ $value->id }}">{{ $value->title }} - {{ $value->countryId->name }} </option>
                            @endforeach
                            <option value="" selected="selected">T???t c??? m?? t???</option>
                        </select>
                    </div>
                    <input type="submit" id="submit-button-exposed" value="Tra c???u" class="button button--primary js-form-submit form-submit" />
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="show-info" style="margin-top:20px;text-align: center;"><h4 style="color: #0d7abe;">C???NG TRA C???U H??? TH???NG PH??N LO???I TR?? CH??I THEO L???A TU???I</h4></div> -->
</header>