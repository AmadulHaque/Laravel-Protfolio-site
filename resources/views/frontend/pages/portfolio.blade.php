<div class="container">
    <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
        <div class="section__heading max-width-580">
            <span class="section__heading--subtitle text__secondary">PORTFOLIO</span>
            <h2 class="section__heading--title">Never compromise for 
                portfolio quality</h2> 
        </div>
        <div class="section__heading--right max-width-450">
            <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                with the the branded videoscustomers coming back for
                services Makes best effort.</p>
        </div>
    </div>
    <div class="portfolio__section--inner">
        <div class="button-group filters-button-group mb-50">
            <button class="filters__button--items button is-checked" data-filter="*">Show All</button>
            @foreach ($port_types as $item)
                <button class="filters__button--items button" data-filter=".{{ $item->slug }}">{{ $item->title }}</button>
            @endforeach
        </div>

        <div class="portfolio__grid mb--n30">
            @foreach ($portfolios as $item)
            @php
                $type = DB::table('port_types')->where('id',$item->type_id)->first();
            @endphp
            <div class="element-item {{ $type->slug }}" data-category="{{ $type->slug }}">
                <div class="portfolio__card">
                    <a href="#" class="showPortfolioModal popup-modal--open display-block  " data-id="{{ $item->id }}">
                        <div class="portfolio__image--card">
                        <img src="/{{ $item->image }}" alt="img">
                        </div>
                        <div class="portfolio__content">
                            <span class="portfolio__zoom text-white">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio__title text-white">{{ $item->title }}</h3>
                            <p class="portfolio__desc text-white"> {{ substr($item->desc,  10, 70) }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>