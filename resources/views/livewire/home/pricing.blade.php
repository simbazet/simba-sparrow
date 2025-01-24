<div>
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center text-center">
            <h2 class="varela-round-regular" style="color: #284970;">Pricing</h2>
            <div class="blue-divider"></div>
            <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
    
        <div class="col-12" style="margin-top: 30px;">
            <div class="row g-3">

                @if ($prices)
                    @foreach ($prices as $price)
                        @if ($price->popular == "Yes")
                            <div class="col-4">
                                <div class="card-body" style="padding: 20px; background: #0d83fd; color:#ffffff; border: 0; border-radius: 15px">
                                    <div class="text-center shadow" style="margin-top: -30px; margin-left: 30%; margin-right: 30%;  border: 0; border-radius: 50px; background: #ffffff; color: #0d83fd"><b>Most Popular</b></div>
                                    
                                    <div class="d-flex-column">
                                        <div>
                                            <h5 class="varela-round-regular">{{$price->name}}</h5>
                                        </div>
            
                                        <div>
                                            <b class="varela-round-regular" style="font-size: 60px"><sup><small>$</small></sup>{{$price->price}}</b>
                                            <span><small>/ month</small></span>
                                        </div>
            
                                        <div>
                                            <small>
                                                {{$price->description}}
                                            </small>
                                        </div>
            
                                        <div style="margin-top: 25px;">
                                            <h6 class="varela-round-regular" style="font-weight:200">Features Included</h6>
                                            <div class="row g-3">

                                                @if ($price->features)
                                                    @foreach ($price->features as $feature)
                                                        <div class="col-12">
                                                            <i class="fa-solid fa-circle-check"></i> {{$feature->description}}
                                                        </div>
                                                    @endforeach
                                                @endif
                                                
                                            </div>
                                        </div>
            
                                        <div class="text-center" style="margin-top: 30px;">
                                            <button class="btn btn-primary curved-button" style="width: 70%; background: #ffffff; color: #0d83fd">
                                                <b>Buy Now</b>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-4">
                                <div class="card-body" style="padding: 20px; background: #ffffff; border: 0; border-radius: 15px">
                                    <div class="d-flex-column">
                                        <div>
                                            <h5 class="varela-round-regular" style="color: #284970;">{{$price->name}}</h5>
                                        </div>
            
                                        <div>
                                            <b class="varela-round-regular" style="color: #284970; font-size: 60px"><sup><small>$</small></sup>{{$price->price}}</b>
                                            <span><small class="text-secondary">/ month</small></span>
                                        </div>
            
                                        <div>
                                            <small class="text-secondary">
                                                {{$price->description}}
                                            </small>
                                        </div>
            
                                        <div style="margin-top: 25px;">
                                            <h6 class="varela-round-regular" style="color: #284970; font-weight:200">Features Included</h6>
                                            <div class="row g-3">
                                                @if ($price->features)
                                                    @foreach ($price->features as $feature)
                                                        <div class="col-12">
                                                            <i class="fa-solid fa-circle-check" style="color: #0d83fd;"></i> {{$feature->description}}
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
            
                                        <div class="text-center" style="margin-top: 30px;">
                                            <button class="btn btn-primary curved-button" style="width: 70%;">
                                                <b>Buy Now</b>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>
    
</div>
