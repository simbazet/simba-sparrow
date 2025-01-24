<div>
    {{-- In work, do what you enjoy. --}}
    <div class="col-12">

        <div class="row" style="margin-top: 100px;">
            <div class="col-6">
                <button class="btn" style="background: #e5f1fe; border-radius: 30px; color: #0d83fd;">
                    <i class="fa-solid fa-gear" style="color: #0d83fd;"></i>
                    <b>{{$home->tag}}</b>
                </button>

                <h1 class="varela-round-regular" style="margin-top: 20px; font-size: 52px !important;">
                    {!! $home->title !!}
                </h1>

                <h1 class="varela-round-regular" style="color: #0d83fd; font-size: 52px !important;">
                    {!! $home->title_focused !!}
                </h1>

                <p style="margin-top: 20px;">
                    {!! $home->description !!}
                </p>

                <div class="d-flex align-items-center" style="margin-top: 20px">
                    <button class="btn btn-primary curved-button" style="height: 50px; padding-left: 25px;; padding-right: 25px">
                        <b>Get Started</b>
                    </button>
                    <button class="btn btn-primary borderless-button">
                        <i class="fa-regular fa-circle-play"></i>
                        <b>Play Video</b>
                    </button>
                </div>
            </div>

            <div class="col-6">
                <img src="{{asset('images/home.png')}}" alt="">
            </div>

            <div class="col-12">
                <div class="card-body bg-white shadow" style="border: 0; border-radius: 15px; padding: 40px; margin-top: 80px;">
                    <div class="row g-3">

                        <div class="col-3">
                            <div class="card-body d-flex align-items-center justify-content-center border-0">
                                <div class="card-icon me-3">
                                    <i class="fa-solid fa-trophy"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-0">{{$home->awards}}x Won Awards</h5>
                                    <p class="text-secondary">Since 2010</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card-body d-flex align-items-center justify-content-center border-0">
                                <div class="card-icon me-3">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-0">{{$home->money}}k Faucibus</h5>
                                    <p class="text-secondary">Since 2010</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card-body d-flex align-items-center justify-content-center border-0">
                                <div class="card-icon me-3">
                                    <i class="fa-solid fa-chart-line"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-0">{{$home->clients}}k Mauris</h5>
                                    <p class="text-secondary">Since 2010</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card-body d-flex align-items-center justify-content-center border-0">
                                <div class="card-icon me-3">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-0">{{$home->prices}}x Phasellus</h5>
                                    <p class="text-secondary">Since 2010</p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
