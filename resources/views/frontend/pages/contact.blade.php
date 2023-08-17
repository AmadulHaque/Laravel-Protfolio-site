<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="contact__left">
                <div class="section__heading mb-50">
                    <span class="section__heading--subtitle text__secondary">CONTACT</span>
                    <h2 class="section__heading--title mb-10">Get I contact work </h2> 
                    <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                        with the the branded videoscustomers coming back for
                        services Makes best effort.</p>
                </div>
                <form class="contact__form" action="{{ route('ContactPost') }}"  method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                            <input class="contact__input--field" required name="name" placeholder="Your name" type="text">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                            <input class="contact__input--field" required name="email"  placeholder="Your email" type="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-30">
                            <input class="contact__input--field" required name="subject" placeholder="Your Subject" type="text">
                        </div>
                    </div>
                    <textarea class="contact__textarea--field" required name="message" placeholder="Message"></textarea>
                    <button class="contact__button primary__btn">Send Request</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="contact__info">
                <div class="contact__info--items d-flex align-items-center">
                    <span class="contact__info--icon">
                        <svg width="25" height="34" fill="currentColor" stroke="currentColor" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path></svg>
                    </span>
                    <div class="contact__info--content">
                        <h3 class="contact__info--title">Call Me</h3>
                        <p class="contact__info--desc">
                            <a href="tel:+88{{ $about->phone }}">+88{{ $about->phone }}</a> <br>
                        </p>
                    </div>
                </div>
                <div class="contact__info--items d-flex align-items-center">
                    <span class="contact__info--icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </span>
                    <div class="contact__info--content">
                        <h3 class="contact__info--title">Email Us</h3>
                        <p class="contact__info--desc">
                            <a href="mailto:{{ $about->email }}">{{ $about->email }}</a> <br>
                        </p>
                    </div>
                </div>
                <div class="contact__info--items d-flex align-items-center">
                    <span class="contact__info--icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </span>
                    <div class="contact__info--content">
                        <h3 class="contact__info--title">Address</h3>
                        <p class="contact__info--desc">
                            {{ $about->address }} <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>