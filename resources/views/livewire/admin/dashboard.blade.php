<div>
    <div class="container" style="margin-top: 40px;">
        <div class="row g-3">
            {{-- Home details --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Home Section
                        <button class="btn btn-sm btn-primary text-white curvedButton" type="button" data-bs-toggle="modal" data-bs-target="#editHome">
                            <i class="fa-solid fa-add"></i> Make Changes
                        </button>
                        @livewire('admin.edit-home', key("editHome"))
                    </div>
                    <div class="card-body">
                        <p>Tag : {{$home->tag}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>