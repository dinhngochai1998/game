@extends('themes.tailwind.layouts.app')

@section('content')
<style>
    .active_des {
        color: #fff !important;
        padding-left: 5px;
        padding-right: 5px;
        line-height: 41px;
        background: #007bff;
    }
    .slick-slide {
        height: auto !important;
    }
</style>
<div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

    <div class="wrapper content-wrap" style="padding-top: 100px;">
        <main id="main">
        <div class="views-element-container" id="block-views-block-homepage-intro-block-1">
                <div>
                    <div>
                        <div class="views-row">
                            <article id="home-intro">
                                <div class="wrapper" style="padding-top: 45px;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">Tiêu đề</th>
                                            <th scope="col">Ảnh</th>
                                            <th scope="col">Mô tả</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">{{ $descriptor->title }}</td>
                                                <td scope="row">  <img src="{{ asset('storage/'.$descriptor->image) }}" width="219" height="220" alt="Drugs" typeof="foaf:Image" /></td>
                                                <td>{{ $descriptor->description }}</td>
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
                    @foreach ($descriptorByCountry as $value)
                    <article class="game">
                        <div class="game-content">
                            <div class="description">
                                <div class="age-rating">
                                    <a href="{{ route('wave.descriptor.detail', $value->slug) }}">
                                        <img src="{{ asset('/storage/'.$value->image) }}" alt="" />
                                    </a>
                                </div>

                                <div class="info">
                                    <div class="info-inner">
                                            <h3>{{ $value->title }}</h3>
                                            <span class="platform"><a href="{{ route('wave.descriptor.detail', $value->slug) }}">Xem chi tiết</a></span>
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

        

        <div class="views-element-container" id="block-views-block-homepage-intro-block-1">
            <div>
                <div class="js-view-dom-id-1603382be561472bf1899ee5e5be0e88bbe5e7bb226a400f505419c452bb0f34">
                    <div class="views-row">
                        <article data-history-node-id="17" role="article" about="/pegi-helps-parents-make-informed-decisions-when-buying-video-games" id="home-intro">
                            <div class="wrapper" style="margin-bottom: 78px;padding-top: 74px;">
                                <div class="card text-center" style="width: 100%;">
                                    <div class="card-header">
                                        <div class="title-holder">
                                            <h1 style="color: #000;">MÔ TẢ NỘI DUNG</h1>
                                        </div>
                                        <nav role="navigation" aria-labelledby="block-pegi-footer-menu" id="block-pegi-footer" style="background: white;">
                                            <ul>
                                                <li style="margin-left:10px;">
                                                    <a href="javascript:(0)" class="active_des move-description" data-all="{{ $descriptor->slug }}" data-url="{{ route('wave.descriptor.detail', $value->slug) }}">Tất cả nội dung</a>
                                                </li> 
                                                @foreach ($descriptorByCountry as $value)
                                                    <li>
                                                        <a href="javascript:(0)" data-id="{{ $value->slug }}" data-url="{{ route('wave.descriptor.detail', $value->slug) }}" class="move-description">{{ $value->title }}</a>
                                                    </li>   
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:30%;" scope="col">Tiêu đề</th>
                                                    <th scope="col">Mô tả</th>
                                                </tr>
                                            </thead>
                                            <tbody class="show-list">
                                                @foreach ($listDescriptorByCountry as $value)
                                                    <tr>
                                                        <td scope="row">{{ $value->title }}</td>
                                                        <td style="padding-bottom: 70px;">{{ $value->description }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        </main>
        <div class="footer-push"></div>
    </div>
    
@endsection
<script src="{{ asset('frontend/core/assets/vendor/jquery/jquery.min.js?v=3.5.1') }}"></script>
<script>
    $(document).on('click', '.move-description', function() {
        var url = $(this).attr('data-url');
        var  slug = $(this).attr('data-id');
        var  slug_default = $(this).attr('data-all');
        var selfClass = $(this);
        $('.move-description').removeClass('active_des');
        selfClass.addClass('active_des');
        $.ajax({
            url: url,
            type: "GET",
            data: {
                slug,
                slug_default
            },
            success: function (response) {
                if(response.html != '') {
                    
                    $('.show-list tr').remove();
                    $('.show-list').html(response.html);
                } else {
                    selfClass.addClass('active_des');
                    $('.show-list tr').remove();
                    $('.show-list tr').text('Không có');
                }
            }
        });
    });
</script>