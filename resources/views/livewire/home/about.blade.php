<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <b style="color: #0d83fd">MORE ABOUT US</b>

    
    <div class="row" style="margin-top: 15px;">
        <div class="col-5">
            <h2 class="varela-round-regular" style="color: #284970">What our company does</h2>
            <div>
                <p>
                    {{ $about->description ?? ''}}
                </p>
            </div>

            <div class="row g-3">
                @if ($aboutServices)
                    @foreach ($aboutServices as $service)
                        <div class="col-6">
                            <i class="fa-solid fa-circle-check" style="color: #0d83fd;"></i> {{ $service->description}}
                        </div>
                    @endforeach
                @else
                    Nothing to show
                @endif
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-6">
                    <div class="card-body d-flex align-items-center border-0">
                        <div class="me-3">
                            <img class="user-icon me-3" src="{{asset('images/smith.jpeg')}}" alt="">
                        </div>
                        <div>
                            <h5 class="card-title mb-0">{{ $about->contact_person ?? ''}}</h5>
                            <p class="text-secondary">{{ $about->posistion ?? ''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body d-flex align-items-center shadow justify-content-center" style="border-radius: 15px;">
                        <div class="me-3">
                            <i class="fa-solid fa-phone" style="color: #0d83fd;"></i>
                        </div>
                        <div>
                            <small class="text-secondary mb-0">Call us anytime</small>
                            <p><b>{{ $about->phone ?? ''}}</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-7 d-flex align-items-end justify-content-end">
            <div class="image-container">
                <img src="{{asset('images/office.jpg')}}" alt="Background" class="background-image">
                <img src="{{asset('images/programmer.jpg')}}" alt="Foreground" class="foreground-image">
            </div>
            
        </div>
    </div>
</div>
