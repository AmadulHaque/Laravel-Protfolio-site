<div class="container">
    <div class="hero__section--inner d-flex align-items-center">
        <div class="hero__thumbnail position__relative">
            <img class="hero__thumbnail--media light_img" src="{{(!empty($hero->image)) ? url('images/profile/'.$hero->image):url('images/profile/no_image.jpeg') }}" alt="img">
            <img class="hero__thumbnail--media dark_img" src="{{(!empty($hero->image)) ? url('images/profile/'.$hero->image):url('images/profile/no_image.jpeg') }}" alt="img">
            <div class="projects__budget d-flex align-items-center">
                <span class="projects__budget--icon">
                    <svg width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </span>
                <div class="projects__budget--content">
                    <span class="projects__budget--ammount">{{ $hero->project }}+</span>
                    <span class="projects__budget--text">Complete Projects</span>
                </div>
            </div>
            <span class="logo__positioning one">
                <img src="{{(!empty($hero->frontimage)) ? url('images/profile/'.$hero->frontimage):url('images/profile/no_image.jpeg') }}" alt="logo">
            </span>
            <span class="logo__positioning two">
                <img src="{{(!empty($hero->backimage)) ? url('images/profile/'.$hero->backimage):url('images/profile/no_image.jpeg') }}" alt="logo">
            </span>
        </div>
        <div class="hero__content">
            <span class="hero__content--subtitle text__secondary mb-10">{{$hero->head}} </span>
            <h2 class="hero__content--title mb-15">{{$hero->name}}</h2>
            <h3 class="hero__content--subtitle2 mb-20">{{$hero->designation}}</h3>
            <p class="hero__content--desc mb-30">{{$hero->title}}</p>
            <div class="hero__content--footer d-flex align-items-center">
                <a class="btn hero__content--btn" href="#about">About Me</a>
                <div class="social__share d-flex align-items-center">
                    <span class="social__share--title">Follow Me: </span>
                    <ul class="social__share--wrapper d-flex">
                        <li class="social__share--child">
                            <a class="social__share--link" href="{{$hero->fb}}">
                            <svg fill="currentColor"  viewBox="0 0 24 24" width="20px" height="20px">
                            <path d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z"/>
                            </svg>
                            <span class="visually-hidden">Facebook</span>
                        </a>
                        </li>
                        <li class="social__share--child">
                            <a class="social__share--link" href="{{$hero->github}}">
                                <svg  fill="currentColor"  viewBox="0 0 24 24" width="20px" height="20px" >
                                    <path d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.385.6.111.793-.261.793-.577 0-.285-.011-1.039-.015-2.038-3.338.726-4.042-1.609-4.042-1.609C3.52 18.09 2.711 17.7 2.711 17.7c-1.086-.742.083-.727.083-.727 1.202.084 1.838 1.234 1.838 1.234 1.07 1.834 2.807 1.305 3.49.998.108-.776.417-1.305.758-1.605-2.657-.297-5.466-1.327-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.296-.536-1.524.105-3.176 0 0 1.007-.322 3.3 1.23.96-.267 1.98-.399 3-.404 1.02.005 2.04.137 3 .404 2.29-1.552 3.297-1.23 3.297-1.23.642 1.652.242 2.88.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.616-2.81 5.627-5.475 5.917.43.366.81 1.096.81 2.21 0 1.59-.015 2.868-.015 3.257 0 .32.18.694.8.576C20.565 21.793 24 17.296 24 12c0-6.627-5.373-12-12-12"></path>
                                  </svg>
                                <span class="visually-hidden">Github</span>
                            </a>
                        </li>
                        <li class="social__share--child">
                            <a class="social__share--link" href="{{$hero->linkdin}}">
                                <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor"  viewBox="0 0 24 24" width="20px" height="20px" >
                                    <path d="M20.5 4.5h-17C2.2 4.5 2 4.7 2 5.1v13.8c0 .4.2.6.5.6h17c.3 0 .5-.2.5-.6V5.1c0-.4-.2-.6-.5-.6zM7.2 16.6H5.9v-7h1.3v7zm-.6-7.6c-.4 0-.7-.3-.7-.7s.3-.7.7-.7.7.3.7.7-.3.7-.7.7zm9.7 7.6h-1.3V12c0-.4 0-.8-.1-1.1-.2-.6-.6-1-1.2-1-.5 0-.9.3-1.1.9-.1.3-.1.7-.1 1.1v4.9h-1.3v-7h1.2v1c.3-.5.8-.8 1.3-.8.6 0 .9.4 1.1.8.2.3.3.6.3 1.1v4.9zm4-4.9h-1.2V9.2c0-.2 0-.4-.1-.5-.2-.2-.3-.3-.6-.3h-.9v1.2h.9v1c0 .6-.1 1.1-.3 1.4-.2.3-.5.4-.9.4-.4 0-.8-.1-1-.3v-1.2h-.6c-.2 0-.4 0-.5.1-.1.1-.2.2-.2.5v1.6H15v1.2h1.3v4.5h1.2v-4.5h1.4l.1-1.2z"/>
                                  </svg>
                                  
                                  
                                <span class="visually-hidden">Linkdin</span>
                            </a>
                        </li>
                        <li class="social__share--child">
                            <a class="social__share--link" href="{{$hero->youtube}}">
                                <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor"  viewBox="0 0 24 24" width="20px" height="20px" >
                                    <path d="M21.3 7.5c-.2-.8-.8-1.4-1.5-1.5C18.2 6 12 6 12 6s-6.2 0-7.8-.1C3.4 6.1 2.8 6.7 2.7 7.5 2.6 9 2.6 11.3 2.6 12s0 3 .1 4.5c.1.8.7 1.4 1.5 1.5C5.8 18 12 18 12 18s6.2 0 7.8-.1c.8-.1 1.4-.7 1.5-1.5.1-1.5.1-3 .1-4.5s0-3-.1-4.5zm-9.3 7.5V9l5.8 3.5-5.8 3.5z"></path>
                                  </svg>
                                  
                                <span class="visually-hidden">Youtube</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>