@extends(Config::theme() . 'layout.auth')
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Material+Icons|Material+Icons+Outlined');

    .upload-files-container {
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        justify-content: center;
        text-align: center;
        border: 2px dashed #ea7e0e;
        border-radius: 25px;
        padding: 30px 40px !important;
        background-color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 20px 0;
    }

    .upload-files-container:hover {
        background-color: #f0f4f0;
    }

    .upload-icon {
        font-size: 50px;
        color: #ea7e0e;
    }

    .upload-message {
        font-size: 18px;
        margin-top: 10px;
        color: #333;
    }

    .browse-files {
        font-size: 16px;
        font-weight: bold;
        color: #ea7e0e;
        cursor: pointer;
    }

    .default-file-input {
        display: none;
        /* Hide the default input */
    }

    .file-block {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #ea7e0e;
        color: #fff;
        margin-top: 15px;
        padding: 10px 15px;
        border-radius: 10px;
    }

    .file-info {
        font-size: 14px;
    }

    .remove-file-icon {
        cursor: pointer;
        color: #fff;
    }

    .progress-bar {
        height: 5px;
        background-color: #4BB543;
        width: 0;
        border-radius: 10px;
        position: absolute;
        bottom: 0;
    }
</style>

@section('content')
    <div class="row gy-4">

        <div class="col-md-12">
            <div class="sp_site_card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h4 class="mb-0">IDENTITY VERIFICATION ( KYC)</h4>
                        <p>Upload any of the following documents</p>
                    </div>

                    @if (auth()->user()->kyc == 2)
                        <div class="alert alert-warning p-2">
                            <p>{{ __('Kyc Verification Requst is Pending') }}</p>
                        </div>
                    @elseif(auth()->user()->kyc == 3)
                        <div class="alert alert-danger p-2">
                            <p>{{ __('Kyc Verification Requst is Rejected! Please Re-submit again') }}</p>
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @foreach (Config::config()->kyc as $proof)
                                @if ($proof['type'] == 'text')
                                    <div class="form-group col-md-12">
                                        <label for="" class="mb-2 mt-2">{{ __($proof['field_label']) }}</label>
                                        <input type="text"
                                            name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                            class="form-control "
                                            {{ $proof['validation'] == 'required' ? 'required' : '' }}>
                                    </div>
                                @endif
                                @if ($proof['type'] == 'textarea')
                                    <div class="form-group col-md-12">
                                        <label for="" class="mb-2 mt-2">{{ __($proof['field_label']) }}</label>
                                        <textarea name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}" class="form-control "
                                            {{ $proof['validation'] == 'required' ? 'required' : '' }}></textarea>
                                    </div>
                                @endif

                                @if ($proof['type'] == 'file')
                                    <div class="upload-files-container">
                                        <div class="drag-file-area">
                                            <div class="form-group col-md-12">
                                                <div class="label-box">
                                                    <label for="" class="mb-2 mt-2 d-flex align-items-center">
                                                        @if (strtolower($proof['field_label']) === 'passport')
                                                            <i class="fas fa-passport me-2" style="font-size: 1.5rem;"></i>
                                                        @elseif (strtolower($proof['field_label']) === 'driver license (front)')
                                                            <i class="fas fa-id-card me-2" style="font-size: 1.5rem;"
                                                                title="Driver License Front"></i>
                                                        @elseif (strtolower($proof['field_label']) === 'driver license (back)')
                                                            <i class="fas fa-id-card me-2" style="font-size: 1.5rem;"
                                                                title="Driver License Back"></i>
                                                        @elseif (strtolower($proof['field_label']) === 'id card (front)')
                                                            <i class="fas fa-address-card me-2" style="font-size: 1.5rem;"
                                                                title="ID Card Front"></i>
                                                        @elseif (strtolower($proof['field_label']) === 'id card (back)')
                                                            <i class="fas fa-address-card me-2" style="font-size: 1.5rem;"
                                                                title="ID Card Back"></i>
                                                        @elseif (strtolower($proof['field_label']) === 'other documents')
                                                            <i class="fas fa-file-alt me-2" style="font-size: 1.5rem;"
                                                                title="Other Documents"></i>
                                                        @else
                                                            <i class="fas fa-question-circle me-2"
                                                                style="font-size: 1.5rem;" title="Unknown Document"></i>
                                                        @endif
                                                        {{ __($proof['field_label']) }}
                                                    </label>


                                                    @if (strtolower($proof['field_label']) === 'passport')
                                                        <img class="kyc-img"
                                                            src="{{ Config::fetchImage('kyc', 'passport.jpg', true) }}">
                                                    @elseif (strtolower($proof['field_label']) === 'driver license (front)')
                                                        <img class="kyc-img"
                                                            src="{{ Config::fetchImage('kyc', 'driver-license.jpg', true) }}">
                                                    @elseif (strtolower($proof['field_label']) === 'driver license (back)')
                                                        <img class="kyc-img"
                                                            src="{{ Config::fetchImage('kyc', 'driver-license.jpg', true) }}">
                                                    @elseif (strtolower($proof['field_label']) === 'id card (front)')
                                                        <img class="kyc-img"
                                                            src="{{ Config::fetchImage('kyc', 'id-card.jpg', true) }}">
                                                    @elseif (strtolower($proof['field_label']) === 'id card (back)')
                                                        <img class="kyc-img"
                                                            src="{{ Config::fetchImage('kyc', 'id-card.jpg', true) }}">
                                                    @endif
                                                </div>
                                                <span class="material-icons-outlined upload-icon">file_upload</span>
                                                <h3 class="dynamic-message">Drag & drop any file here</h3>
                                                <label class="label">
                                                    or <span class="browse-files">
                                                        <span class="browse-files-text">browse file</span>
                                                        <input type="file"
                                                            name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                                            class="default-file-input"
                                                            {{ $proof['validation'] == 'required' ? 'required' : '' }}>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="file-block d-none">
                                            <span class="file-info">
                                                <i class="material-icons-outlined file-icon">description</i>
                                                <span class="file-name"></span> | <span class="file-size"></span>
                                            </span>
                                            <span class="material-icons remove-file-icon">delete</span>
                                            <div class="progress-bar"></div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach


                            <div class="form-group">
                                <button class="btn sp_theme_btn mt-4" type="submit">Submit</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", function () {
    const fileInputs = document.querySelectorAll('.default-file-input');
    
    fileInputs.forEach(input => {
        const container = input.closest('.upload-files-container');
        const fileBlock = container.querySelector('.file-block');
        const fileName = container.querySelector('.file-name');
        const fileSize = container.querySelector('.file-size');
        const progressBar = container.querySelector('.progress-bar');
        const removeFile = container.querySelector('.remove-file-icon');
        
        input.addEventListener('change', function () {
            const file = input.files[0];
            if (file) {
                // Display file details
                fileName.textContent = file.name;
                fileSize.textContent = (file.size / 1024).toFixed(1) + " KB";
                fileBlock.classList.remove('d-none');
                
                // Simulate file upload progress
                let width = 0;
                const interval = setInterval(() => {
                    if (width >= 100) {
                        clearInterval(interval);
                    } else {
                        width += 5;
                        progressBar.style.width = width + '%';
                    }
                }, 100);
            }
        });

        removeFile.addEventListener('click', function () {
            input.value = ''; // Reset input
            fileBlock.classList.add('d-none');
            progressBar.style.width = '0%';
        });
    });
});
    </script>
@endsection
