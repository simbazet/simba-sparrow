<div style="background: #ffffff;">
    {{-- I am using livewire ccomponents for better code readability - Just avoiding a very long page --}}
    
    {{-- Home --}}
    <div class="home-bg">
        <div class="container home">

            {{-- Top navigation --}}
            <div class="navigation-menu card shadow">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center" style="height: 60px">
                        <h5>iLanding</h5>
                    </div>
                    
                    <div class="text-center d-flex align-items-center justify-content-center">
                        <nav></nav>
                        <ul class="nav justify-content-center">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                            <a class="nav-link" href="#about">About</a>
                            <a class="nav-link" href="#features">Features</a>
                            <a class="nav-link" href="#services">Services</a>
                            <a class="nav-link" href="#pricing">Pricing</a>
                            <a class="nav-link" href="#dropdown">Dropdown</a>
                            <a class="nav-link" href="#contact-us">Contact</a>
                        </ul>
                    </div>
                    
                    <div class="d-flex align-items-center justify-content-end">
                        <button class="btn btn-primary curved-button">Get Started</button>
                    </div>
                </div>
            </div>

            {{-- Wrap the Livewire Home Component --}}
            <div wire:key="home-component" id="home">
                <div>
                    @livewire('home.home', key('home'))
                </div>
            </div>
        </div>
    </div>

    {{-- About Section --}}
    <div wire:key="about-component" id="about" style="padding-top: 80px; padding-bottom: 50px;">
        <div class="container">
            <div>
                @livewire('home.about', key('about'))
            </div>
        </div>
    </div>

    {{-- Features Section --}}
    <div wire:key="features-component" id="features" style="padding-top: 100px; padding-bottom: 50px;">
        <div class="container">
            <div>
                @livewire('home.features', key('features'))
            </div>
        </div>
    </div>

    {{-- Testimonials Section --}}
    <div wire:key="testimonials-component" id="testimonials" style="background: #f3f9ff; padding-top: 100px;">
        <div>
            @livewire('home.testimonials', key('testimonials'))
        </div>
    </div>

    {{-- Services Section --}}
    <div wire:key="services-component" id="services" style="background: #f3f9ff; padding-top: 50px; padding-bottom: 50px;">
        <div>
            @livewire('home.services', key('services'))
        </div>
    </div>

    {{-- Pricing Section --}}
    <div wire:key="pricing-component" id="pricing" style="background: #f3f9ff; padding-top: 50px; padding-bottom: 50px;">
        <div>
            @livewire('home.pricing', key('pricing'))
        </div>
    </div>

    {{-- FAQ Section --}}
    <div wire:key="faq-component" id="faq" style="background: #f3f9ff; padding-top: 50px; padding-bottom: 50px;">
        <div>
            @livewire('home.f-a-q', key('faq'))
        </div>
    </div>

    {{-- Contact Us Section --}}
    <div wire:key="contact-us-component" id="contact-us" style="background: #f3f9ff; padding-top: 50px; padding-bottom: 50px;">
        <div>
            @livewire('home.contact-us', key('contact-us'))
        </div>
    </div>

    <button class="card-icon backToTop" id="backToTop" title="Back to Top">
        <i class="fa-solid fa-up-long"></i>
    </button>
</div>
