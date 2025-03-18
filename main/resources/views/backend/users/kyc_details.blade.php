@extends('backend.layout.master')
<style>
    /* Lightbox Modal Styling */
.lightbox-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    text-align: center;
}

.lightbox-content {
    max-width: 90%;
    max-height: 90%;
    border: 5px solid #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
}

.lightbox-close {
    position: absolute;
    top: 20px;
    right: 30px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s ease;
}

.lightbox-close:hover {
    color: #ccc;
    transform: scale(1.2);
}

.lightbox-image {
    cursor: pointer;
    transition: transform 0.2s ease;
}

.lightbox-image:hover {
    transform: scale(1.05);
}

</style>
@section('element')
    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="card-body text-center">
                    <ul class="list-group">

                        @if ($user->kyc_information != null)
                            @foreach ($user->kyc_information as $key => $proof)
                                @if (is_array($proof))
                                    <li class="list-group-item d-flex justify-content-between">

                                        <span>{{ __(str_replace('_', ' ', ucwords($key))) }}</span>
                                        <!-- Image Display with Lightbox -->
                                        <span class="text-right">
                                            <a href="{{ Config::getFile('user', $proof['file']) }}" class="lightbox-trigger">
                                                <img src="{{ Config::getFile('user', $proof['file']) }}" alt="Document"
                                                    class="w-50 lightbox-image">
                                            </a>
                                        </span>

                                        <!-- Lightbox Modal -->
                                        <div id="lightbox-modal" class="lightbox-modal">
                                            <span class="lightbox-close">&times;</span>
                                            <img class="lightbox-content" id="lightbox-enlarged-image" src=""
                                                alt="Enlarged Image">
                                        </div>

                                    </li>

                                    @continue
                                @endif

                                <li class="list-group-item d-flex justify-content-between">

                                    <span>{{ __(str_replace('_', ' ', ucwords($key))) }}</span>
                                    <span>{{ __($proof) }}</span>

                                </li>
                            @endforeach
                        @endif

                    </ul>


                    @if ($user->is_kyc_verified == 2)
                        <div class="col-md-12 mt-4 text-right">

                            <button class="btn btn-success approve"
                                data-url="{{ route('admin.user.kyc.status', ['approve', $user->id]) }}">
                                <i class="fa fa-check"></i>
                                {{ __('Approve') }}
                            </button>


                            <button class="btn btn-danger reject"
                                data-url="{{ route('admin.user.kyc.status', ['reject', $user->id]) }}">
                                <i class="fa fa-times"></i>
                                {{ __('Reject') }}
                            </button>
                        </div>
                    @endif






                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="approve" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('KYC Request Update') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{ __('Are You Sure to Approve') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Approve') }}</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="reject" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('KYC Request Update') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{ __('Are You Sure to Reject') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Reject') }}</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            'use strict'

            $('.approve').on('click', function() {
                const modal = $('#approve')


                modal.find('form').attr('action', $(this).data('url'))


                modal.modal('show')
            })


            $('.reject').on('click', function() {
                const modal = $('#reject')


                modal.find('form').attr('action', $(this).data('url'))


                modal.modal('show')
            })
        })

        document.addEventListener('DOMContentLoaded', function () {
    const lightboxTrigger = document.querySelectorAll('.lightbox-trigger');
    const lightboxModal = document.getElementById('lightbox-modal');
    const enlargedImage = document.getElementById('lightbox-enlarged-image');
    const lightboxClose = document.querySelector('.lightbox-close');

    lightboxTrigger.forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default anchor action
            const imageUrl = this.href; // Get the image URL from href
            enlargedImage.src = imageUrl;
            lightboxModal.style.display = 'flex'; // Show the lightbox
        });
    });

    // Close the lightbox when clicking the close button
    lightboxClose.addEventListener('click', function () {
        lightboxModal.style.display = 'none';
        enlargedImage.src = ''; // Reset image
    });

    // Close lightbox when clicking outside the image
    lightboxModal.addEventListener('click', function (e) {
        if (e.target === lightboxModal) {
            lightboxModal.style.display = 'none';
            enlargedImage.src = '';
        }
    });
});

    </script>
@endpush
