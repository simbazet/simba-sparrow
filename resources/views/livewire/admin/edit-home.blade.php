{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

<div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="editHome" tabindex="-1" aria-labelledby="editHome" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow border-5 border-start-0 border-end-0 border-bottom-0 border-info">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Edit Home</h1>
                <button wire:click="close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @csrf

                <div class="input-group mb-3">
                    <span class="input-group-text">Tag</span>
                    <input wire:model="tag"  id="tag" name="tag" type="text" class="form-control filterBox @error('tag') is-invalid @enderror">
                    @error('tag') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">title</span>
                    <input wire:model="title"  id="title" name="title" type="text" class="form-control filterBox @error('title') is-invalid @enderror">
                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">title_focused</span>
                    <input wire:model="title_focused"  id="title_focused" name="title_focused" type="text" class="form-control filterBox @error('title_focused') is-invalid @enderror">
                    @error('title_focused') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">description</span>
                    <input wire:model="description"  id="description" name="description" type="text" class="form-control filterBox @error('description') is-invalid @enderror">
                    @error('description') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">awards</span>
                    <input wire:model="awards"  id="awards" name="awards" type="text" class="form-control filterBox @error('awards') is-invalid @enderror">
                    @error('awards') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">money</span>
                    <input wire:model="money"  id="money" name="money" type="text" class="form-control filterBox @error('money') is-invalid @enderror">
                    @error('money') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">clients</span>
                    <input wire:model="clients"  id="clients" name="clients" type="text" class="form-control filterBox @error('clients') is-invalid @enderror">
                    @error('clients') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">prices</span>
                    <input wire:model="prices"  id="prices" name="prices" type="text" class="form-control filterBox @error('prices') is-invalid @enderror">
                    @error('prices') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                
                
            </div>
            <div class="modal-footer">
                <button wire:click="close" type="button" class="btn btn-secondary curvedButton" data-bs-dismiss="modal">Cancel</button>
                <button wire:click="save" type="button" class="btn btn-primary curvedButton">
                    <i wire:loading.hide class="fa-regular fa-floppy-disk"></i>
                    <i wire:loading class="fa-solid fa-spinner fa-spin"></i>
                    Save Changes
                </button>
            </div>
        </div>
    </div>
</div>