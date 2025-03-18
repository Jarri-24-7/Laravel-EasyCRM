@extends(Config::theme() . 'layout.auth')
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Material+Icons|Material+Icons+Outlined');

    .upload-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        border: 2px dashed #ea7e0e;
        border-radius: 25px;
        padding: 30px;
        background-color: #f7fff7;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .upload-container:hover {
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
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="sp_site_card">
                <div class="card-header">
                    <h5 class="mb-0">{{ __(optional($gateway->parameter)->name . ' Information') }}</h5>
                </div>
                <div class="card-body">
                    @if ($gateway->parameter->gateway_type == 'crypto')
                        <ul class="list-group">
                            <li class="list-group-item  d-flex justify-content-between">
                                <span>{{ __('Gateway Name') }}</span>
                                <span>{{ optional($gateway->parameter)->name ?? 'N/A' }}</span>
                            </li>

                            <li class="list-group-item  d-flex justify-content-between">
                                <span>{{ __('Method Currency') }}</span>
                                <span>{{ optional($gateway->parameter)->gateway_currency }}</span>
                            </li>

                            <li class="list-group-item">
                                <img src="{{ Config::getFile('gateways', $gateway->parameter->qr_code, true) }}"
                                    alt="">
                            </li>

                            <li class="list-group-item copy-instruction position-relative">
                                <span class="w-100"><?= clean($gateway->parameter->payment_instruction) ?></span>
                                <!-- Placeholder for the 'Copied' message -->
                                <small class="copy-feedback text-success position-absolute"
                                    style="top: 50%; right: 10px; transform: translateY(-50%); display: none;">
                                    <i class="fa fa-check"></i> Copied!
                                </small>
                            </li>

                        </ul>
                    @else
                        <ul class="list-group">
                            <li class="list-group-item  d-flex justify-content-between">
                                <span>{{ __('Gateway Name') }}</span>
                                <span>{{ optional($gateway->parameter)->name ?? 'N/A' }}</span>
                            </li>

                            <li class="list-group-item  d-flex justify-content-between">
                                <span>{{ __('Account Number') }}</span>
                                <span>{{ optional($gateway->parameter)->account_number ?? 'N/A' }}</span>
                            </li>

                            <li class="list-group-item  d-flex justify-content-between">
                                <span>{{ __('Routing Number') }}</span>
                                <span>{{ optional($gateway->parameter)->routing_number ?? 'N/A' }}</span>
                            </li>

                            <li class="list-group-item  d-flex justify-content-between">
                                <span>{{ __('Branch Name') }}</span>
                                <span>{{ optional($gateway->parameter)->branch_name ?? 'N/A' }}</span>
                            </li>

                            <li class="list-group-item  d-flex justify-content-between">
                                <span>{{ __('Method Currency') }}</span>
                                <span>{{ optional($gateway->parameter)->gateway_currency }}</span>
                            </li>

                            <li class="list-group-item ">

                                <span class="w-100"><?= clean($gateway->parameter->payment_instruction) ?></span>

                            </li>

                        </ul>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="sp_site_card h-100">
                <div class="card-header">
                    <h5 class="mb-0">{{ __('Payment Information') }}</h5>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item   d-flex justify-content-between">
                            <span>{{ __('Gateway Name') }}:</span>

                            <span>{{ str_replace('_', ' ', $deposit->gateway->name) }}</span>

                        </li>
                        <li class="list-group-item   d-flex justify-content-between">
                            <span>{{ __('Amount') }}:</span>
                            <span>{{ Config::formatter($deposit->amount) }}</span>
                        </li>

                        <li class="list-group-item   d-flex justify-content-between">
                            <span>{{ __('Charge') }}:</span>
                            <span>{{ Config::formatter($deposit->charge) }}</span>
                        </li>

                        <li class="list-group-item   d-flex justify-content-between">
                            <span>{{ __('Conversion Rate') }}:</span>
                            <span>{{ '1 ' . Config::config()->currency . ' = ' . Config::formatOnlyNumber($deposit->rate) }}</span>
                        </li>

                        <li class="list-group-item   d-flex justify-content-between">
                            <span>{{ __('Total Payable Amount') }}:</span>
                            <span>{{ Config::formatOnlyNumber($deposit->total) . ' ' . $deposit->gateway->parameter->gateway_currency }}</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="sp_site_card">
                <div class="card-header">
                    <h5 class="mb-0">{{ __('Requirments') }}</h5>
                </div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            @foreach ($gateway->parameter->user_proof_param as $proof)
                                @php
                                    $proof = (array) $proof;
                                @endphp


                                @if ($proof['type'] == 'text')
                                    <div class="form-group col-md-12">
                                        <label for="" class="mb-2 mt-2">{{ __($proof['field_name']) }}</label>
                                        <input type="text"
                                            name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                            class="form-control"
                                            {{ $proof['validation'] == 'required' ? 'required' : '' }}>
                                    </div>
                                @endif
                                @if ($proof['type'] == 'textarea')
                                    <div class="form-group col-md-12">
                                        <label for="" class="mb-2 mt-2">{{ __($proof['field_name']) }}</label>
                                        <textarea name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}" class="form-control"
                                            {{ $proof['validation'] == 'required' ? 'required' : '' }}></textarea>
                                    </div>
                                @endif

                                @if ($proof['type'] == 'file')
                                    <div class="form-group col-md-12 text-center">
                                        <label for="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                            class="upload-container">
                                            <div class="upload-area">
                                                <span class="material-icons-outlined upload-icon">file_upload</span>
                                                <h3 class="upload-message">Drag & drop any file here</h3>
                                                <label class="browse-files">
                                                    or <span class="browse-text">browse file</span>
                                                    <input type="file"
                                                        id="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                                        name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                                        class="default-file-input"
                                                        {{ $proof['validation'] == 'required' ? 'required' : '' }}>
                                                </label>
                                            </div>
                                            <div class="file-block d-none">
                                                <span class="file-info">
                                                    <i class="material-icons-outlined file-icon">description</i>
                                                    <span class="file-name"></span> | <span class="file-size"></span>
                                                </span>
                                                <span class="material-icons remove-file-icon">delete</span>
                                                <div class="progress-bar"></div>
                                            </div>
                                        </label>
                                    </div>
                                @endif
                            @endforeach


                            <div class="form-group">
                                <button class="btn sp_theme_btn mt-4" type="submit">{{ __('Pay Now') }}</button>

                            </div>


                        </div>



                    </form>



                </div>

            </div>




        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select all elements with the class 'copy-instruction'
            const copyItems = document.querySelectorAll('.copy-instruction');

            copyItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Get the text content of the clicked item
                    const textToCopy = this.querySelector('span').textContent;

                    // Create a temporary textarea element to copy the text
                    const tempTextarea = document.createElement('textarea');
                    tempTextarea.value = textToCopy;
                    document.body.appendChild(tempTextarea);

                    // Select and copy the text
                    tempTextarea.select();
                    document.execCommand('copy');

                    // Remove the temporary textarea
                    document.body.removeChild(tempTextarea);

                    // Show the 'Copied' message
                    const feedback = this.querySelector('.copy-feedback');
                    feedback.style.display = 'inline'; // Show the message

                    // Hide the 'Copied' message after 3 seconds
                    setTimeout(() => {
                        feedback.style.display = 'none'; // Hide the message
                    }, 3000);
                });
            });

            const fileInput = document.querySelector('.default-file-input');
            const fileBlock = document.querySelector('.file-block');
            const fileName = document.querySelector('.file-name');
            const fileSize = document.querySelector('.file-size');
            const removeFileIcon = document.querySelector('.remove-file-icon');
            const progressBar = document.querySelector('.progress-bar');

            fileInput.addEventListener('change', function() {
                const file = fileInput.files[0];
                if (file) {
                    fileName.textContent = file.name;
                    fileSize.textContent = (file.size / 1024).toFixed(1) + " KB";
                    fileBlock.classList.remove('d-none');

                    // Simulate file upload progress
                    let width = 0;
                    const interval = setInterval(() => {
                        if (width >= 100) {
                            clearInterval(interval);
                        } else {
                            width += 10;
                            progressBar.style.width = width + '%';
                        }
                    }, 100);
                }
            });

            removeFileIcon.addEventListener('click', function() {
                fileBlock.classList.add('d-none');
                fileInput.value = '';
                progressBar.style.width = '0%';
            });
        });
    </script>
@endsection
