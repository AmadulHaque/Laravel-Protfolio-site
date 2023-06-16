<div class="container">
    <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
        <div class="section__heading max-width-580">
            <span class="section__heading--subtitle text__secondary">CREATIVE SERVICE</span>
            <h2 class="section__heading--title">{{ $setting->s_title }}</h2> 
        </div>
        <div class="section__heading--right max-width-450">
            <p class="section__heading--desc">{{ $setting->s_desc }}</p>
        </div>
    </div>
    
    <div class="services__section--inner">
        <div class="row mb--n30">
          
            @foreach ($service as $item)
            <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="services__card">
                    <span class="services__card--icon d-block  justify-center mb-25">
                        <img style="width: 100%" src="{{ $item->icon }}" alt="">
                    </span>
                    <div class="services__card--content">
                        <h3 class="services__card--title mb-15">{{ $item->title }}</h3>
                        <p class="services__card--desc mb-20">{{ $item->desc }}</p>
                        <a class="services__card--link color2" href="#">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach

       
   
        </div>
    </div>
</div>