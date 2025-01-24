<div>
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center text-center">
            <h2 class="varela-round-regular" style="color: #284970;">Testimonias</h2>
            <div class="blue-divider"></div>
            <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
    
        <div class="col-12" style="margin-top: 30px;">
            <div class="row g-3">
    
                @if ($testimonials)
                    @foreach ($testimonials as $testimonial)
                        <div class="col-6">
                            <div class="card-body shadow" style="padding: 40px; background: #ffffff;">
                                <div class="card-body d-flex align-items-center border-0">
                                    <div class="me-3">
                                        <img class="profile-icon me-3" src="{{asset("images/testimonials/$testimonial->image")}}" alt="">
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-0">{{ $testimonial->name}}</h5>
                                        <p class="text-secondary">{{ $testimonial->position}}</p>
                                        <div class="d-flex">
                                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                                <i class="fa-solid fa-star" style="color: #fcc307;"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: 5px;">
                                    <p>
                                        <i class="fa-solid fa-quote-left" style="color: #81c2fe;"></i>
                                        <i>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        </i>
                                        <i class="fa-solid fa-quote-right" style="color: #81c2fe;"></i>
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div style="background: #ffffff; margin-top: 100px; margin-bottom: 100px; padding-top: 50px; ">
        <div class="container">
            <div class="row text-center">
                @if ($stats)
                    @foreach ($stats as $stat)
                        <div class="col-3">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                <h1 style="color: #284970; font-weight: 800">{{ $stat->rating }}</h1>
                                <div class="blue-divider"></div>
                                <p class="text-secondary">{{ $stat->name }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        
    </div>
    
</div>
