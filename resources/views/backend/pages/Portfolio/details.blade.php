<h2 class="portfolio__modal--title text-center mb-30">{{ $data->title }}</h2>
<div class="portfolio__modal--info d-flex align-items-center mb-20">
    <div class="portfolio__modal--info--list">
        <p class="portfolio__modal--info--text">
            <span class="portfolio__modal--info__icon"><svg width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></span>
            Project :
            <span class="portfolio__modal--info__name">{{ $data->project }}</span>
        </p>
        <p class="portfolio__modal--info--text">
            <span class="portfolio__modal--info__icon"><svg width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></span>
            Languages :
            <span class="portfolio__modal--info__name">{{ $data->languages }}</span>
        </p>
    </div>
    <div class="portfolio__modal--info--list">
        <p class="portfolio__modal--info--text">
            <span class="portfolio__modal--info__icon"><svg width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
            Client :
            <span class="portfolio__modal--info__name">{{ $data->client }}</span>
        </p>
        <p class="portfolio__modal--info--text">
            <span class="portfolio__modal--info__icon"><svg width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg></span>
            Preview :
            <a class="portfolio__modal--info__name" href="{{ $data->preview }}" target="_blank" rel="noopener noreferrer">{{ $data->preview }}</a>
        </p>
    </div>
</div>
<p class="portfolio__modal--info__desc mb-30">{{ $data->desc }}</p>
<div class="portfolio__modal--info__media">
    <img style="width: 100%" src="/{{ $data->image }}" alt="img">
</div>