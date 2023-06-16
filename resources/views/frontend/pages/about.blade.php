        <!-- Start about section -->
        <section class="about__section about__section--bg section--padding" id="about">
            <div class="container">
                <div class="about__section--inner d-flex">
                    <div class="about__content">
                        <div class="section__heading mb-30">
                            <span class="section__heading--subtitle text__secondary">ABOUT ME</span>
                            <h2 class="section__heading--title">{{ $setting->a_title }}</h2> 
                        </div>
                        <div class="about__info">
                            <h3 class="about__info--title text__secondary mb-20">PERSONAL INFOS:</h3>
                            <ul class="about__info--wrapper d-flex">
                                <li class="about__info--items">First Name: {{ $about->firstname }}</li>
                                <li class="about__info--items">Last Name: {{ $about->lastname }}</li>
                                <li class="about__info--items">Address: {{ $about->address }}</li>
                                <li class="about__info--items">Phone: {{ $about->phone }}</li>
                                <li class="about__info--items">Age: {{ $about->age }}</li>
                                <li class="about__info--items">Email: {{ $about->email }}</li>
                                <li class="about__info--items">Nationality: {{ $about->nationality }}</li>
                                <li class="about__info--items">whatsapp: {{ $about->whatsapp }}</li>
                                <li class="about__info--items">Freelance: {{ $about->firstname ? $about->firstname : "Not Available" }}</li>
                                <li class="about__info--items">Languages: {{ $about->languages }}</li>
                            </ul>
                            <a class="about__btn primary__btn" href="#">Hire Me</a>
                        </div>
                    </div>
                    <div class="about__thumbnail">
                        <div class=" position__relative">
                            <img class="position__relative" src="{{ $about->image }}" alt="img">
                        </div>
                        <div class="about__experience text-center">
                            <h4 class="about__experience--title title-stroke">{{ $about->work_year }}+ Year </h4>
                            <span class="about__experience--subtitle">Experience Working</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->

        <!-- Start skills Section -->
        <section class="skills__section section--padding pt-5">
            <div class="container pt-5">
                <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                    <div class="section__heading max-width-580">
                        <span class="section__heading--subtitle text__secondary">SKILLs</span>
                        <h2 class="section__heading--title">{{ $setting->sk_title }}</h2> 
                    </div>
                    <div class="section__heading--right max-width-450">
                        <p class="section__heading--desc">{{ $setting->sk_desc }}</p>
                    </div>
                </div>
                <div class="skills__section--inner d-flex justify-content-between">
                    <div class="skills__step">
                        @foreach ($skillF as $item)
                            <div class="skills__items">
                                <div class="skills__text">
                                    <span class="skills__name">{{ $item->name }}</span>
                                    <span class="skills__count width_100">{{ $item->number==0 ? "N/A" : $item->number }}</span>
                                </div>
                                <div class="skills__field width_100">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="skills__step">
                        @foreach ($skillB as $item)
                            <div class="skills__items">
                                <div class="skills__text">
                                    <span class="skills__name">{{ $item->name }}</span>
                                    <span class="skills__count width_100">{{ $item->number==0 ? "N/A" : $item->number }}</span>
                                </div>
                                <div class="skills__field width_100">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End skills Section -->





        