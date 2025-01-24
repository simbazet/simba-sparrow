<div>
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center text-center">
            <h2 class="varela-round-regular" style="color: #284970;">Services</h2>
            <div class="blue-divider"></div>
            <p>There are many variations of passages of Lorem Ipsum available</p>
        </div>
    
        <div class="col-12" style="margin-top: 30px;">
            <div class="row g-3">
                
                @if ($services)
                    @foreach ($services as $service)
                        <div class="col-6">
                            <div class="card-body" style="padding: 40px; background: #ffffff; border: 0; border-radius: 15px">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa-solid fa-trophy card-square"></i>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="varela-round-regular" style="color: #284970;"> {{$service->name}} </h5>
                                        <div>
                                            <small class="text-secondary">
                                                {{$service->description}}
                                            </small>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary borderless-button">
                                                <b>Read more</b>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>
    
</div>
