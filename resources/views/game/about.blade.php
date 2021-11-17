@extends('themes.tailwind.layouts.app')

@section('content')


<div class="wrapper content-wrap">
	<div id="sidebar-left">
		<div id="block-submenusidebarblock"></div>
	</div>
	<main id="main">
        <div id="block-pegi-content">
            <article data-history-node-id="25" role="article" about="/page/contact-us" typeof="schema:WebPage" class="page">

                <h1><span property="schema:name">Về chúng tôi</span></h1>
                <span property="schema:name" content="Contact us" class="hidden"></span>

                <div class="article-content" style="min-height: 0px;">
                    <div property="schema:text" class="body text-with-summary">
                        {!! $about->body !!}
                    </div>
                </div>
                
                <div class="field-background-image image" style="background:url({{ asset('frontend/themes/pegi/images/banner_0.jpg') }});"></div>

            </article>
        </div>
        <div data-drupal-messages-fallback="" class="hidden"></div>
</div>

  </div>

  </div>


	</main>

<div class="footer-push" style="height: 121px; margin-bottom: -121px;"></div>
</div>
@endsection