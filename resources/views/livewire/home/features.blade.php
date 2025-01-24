<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="d-flex flex-column align-items-center justify-content-center text-center">
        <h2 class="varela-round-regular" style="color: #284970;">Features</h2>
        <div class="blue-divider"></div>
        <p>There are many variations of passages of Lorem Ipsum available</p>
    </div>
    
    <div class="d-flex justify-content-center" style="margin-top: 40px;">
        <ul class="nav nav-tabs">
            {{-- Tabs are being created from the database --}}
            @if ($features)
                @foreach ($features as $feature)
                    <li class="nav-item">
                        <a class="nav-link @if ($feature->id == 1) active show @endif" data-bs-toggle="tab" data-bs-target="#nav-tab-{{ $feature->id}}">{{ $feature->tag}}</a>
                    </li>
                @endforeach
            @endif

        </ul>

    </div>

    <div class="tab-content" id="nav-tabContent">
        {{-- Tabs are being created from the database --}}
        @if ($features)
            @foreach ($features as $feature)
                <div class="tab-pane fade @if ($feature->id == 1) active show @endif " id="nav-tab-{{ $feature->id}}" role="tabpanel" aria-labelledby="nav-tab-{{ $feature->id}}" >
                    <div class="row">
                        <div class="col-6">
                            <h2 class="varela-round-regular" style="color: #284970;">{{ $feature->feature}}</h2>
                            <div class="blue-divider"></div>
                            <p>{{ $feature->description }}</p>
        
                            <div class="row g-3">

                                @if ($feature->items)
                                    @foreach ($feature->items as $item)
                                        <div class="col-12">
                                            <i class="fa-solid fa-check-double" style="color: #0d83fd;"></i> {{ $item->description}}
                                        </div>
                                    @endforeach
                                @endif
                                
                            </div>
                        </div>
        
                        <div class="col-6">
                            <img src="{{asset("images/features/$feature->image")}}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        
    </div>


    <div class="col-12" style="margin-top: 100px;">
        <div class="d-flex m-3 adjust-content-evenly">
            @if ($options)
                @foreach ($options as $option)
                    <div class="features m-2" style="background: {{ $option->bg_color}};">
                        <i class="{{ $option->icon}} fa-2xl" style="color: {{ $option->icon_color}};"></i>
                        <h5 class="varela-round-regular" style="margin-top: 30px;">{{ $option->name}}</h5>
                        <small style="margin-top: 30px;">{{ $option->description}}</small>
                    </div>
                @endforeach
            @endif
        </div>
    </div>


    <div class="col-12" style="margin-top: 100px;">
        <div class="card text-center" style="background: #0d83fd; border: 0; border-radius: 20px; padding-left: 20%; padding-right: 20%; padding-top: 20px; padding-bottom: 20px;">
            <p class="varela-round-regular text-white" style="margin-top: 30px; font-size: 40px; font-weight: 200;">
                {{ $action->name ?? ''}}
            </p>

            <div>
                <p class="text-white">
                    {!! $action->description ?? '' !!}
                </p>
            </div>

            <div>
                <button class="btn btn-lg curved-button" style="background: #3195fd !important; border: 1; border-color: #ffffff">
                    Call To Action
                </button>
            </div>
        </div>
    </div>


    <div class="col-12" style="margin-top: 100px;">
        <section class="customer-logos slider">
            @if ($clients)
                @foreach ($clients as $client)
                    <div class="slide"><img src="{{asset("images/clients/$client->image")}}" alt=""></div>
                @endforeach
            @endif
        </section>
    </div>

</div>

<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
