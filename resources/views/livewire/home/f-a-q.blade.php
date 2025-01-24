<div>
    <div class="container">
        {{-- Success is as dangerous as failure. --}}
        <div class="row g-3">
            <div class="col-5">
                <h2 class="varela-round-regular" style="color: #284970;">Have a question? Check out the FAQ</h2>
                <small>
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings
                </small>
            </div>
    
            <div class="col-7">
                <div class="accordion g-3" id="faqs">

                    @if ($faqs)
                        @foreach ($faqs as $faq)
                            <div class="accordion-item" style="margin-bottom: 15px; border: 0; border-radius: 15px;">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapseThree">
                                        {{ $faq->name }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">
                                        {{ $faq->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    
                </div>
            </div>
            
        </div>
    </div>

    <div class="card text-center" style="background: #0d83fd; margin-top: 50px; border: 0; padding-left: 20%; padding-right: 20%; padding-top: 50px; padding-bottom: 50px;">
        <p class="varela-round-regular text-white" style="font-size: 40px; font-weight: 200;">
            Call to Action
        </p>

        <div>
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>

        <div>
            <button class="btn btn-lg curved-button" style="background: #3195fd !important; border: 1; border-color: #ffffff">
                Call To Action
            </button>
        </div>
    </div>
</div>

