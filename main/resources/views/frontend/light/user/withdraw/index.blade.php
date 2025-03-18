@extends(Config::theme() . 'layout.auth')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="sp_site_card">
                <div class="card-header">
                    <h4 class="mb-0">
                        {{ __('Current Balance: ') }} <span
                            class="color-change">{{ Config::formatter(auth()->user()->balance, 2) }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="">{{ __('Withdraw Method') }}</label>
                            <select name="method" id="" class="form-select">
                                <option value="" selected>{{ __('Select Method') }}</option>
                                @foreach ($withdraws as $withdraw)
                                    <option value="{{ $withdraw->id }}"
                                        data-url="{{ route('user.withdraw.fetch', $withdraw->id) }}">
                                        {{ $withdraw->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row appendData"></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 withdraw-ins">
            <div class="sp_site_card">
                <div class="card-header">
                    <h4 class="mb-0">{{ __('Withdraw Instruction') }}</h4>
                </div>
                <div class="card-body">
                    <p class="instruction"></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            'use strict'

            $('select[name=method]').on('change', function() {
            if ($(this).val() == '') {
                $('.appendData').addClass('d-none');
                $('.instruction').text('');
                return;
            }
            $('.appendData').removeClass('d-none');
            getData($('select[name=method] option:selected').data('url'), $(this).val());
        });



            function getData(url, methodId) {
            $.ajax({
                url: url,
                method: "GET",
                success: function(response) {

                    $('.instruction').html(response.instruction);
                    let accountLabel = methodId == 2 ? '{{ __("Wallet Address") }}' : '{{ __("Account Information") }}';
                    let html = `
                        <div class="col-md-12 mb-3 mt-3">
                            <label for="">{{ __('Withdraw Amount') }} <span class="sp_text_danger">*</span></label>
                            <input type="text" name="amount" class="form-control amount" required>
                            <p class="text-small color-change mb-0 mt-1">
                                <span>{{ __('Min Amount ') }} ${Number.parseFloat(response.min_withdraw_amount).toFixed(2)}</span>
                                <span>{{ __('& Max Amount') }} ${Number.parseFloat(response.max_withdraw_amount).toFixed(2)}</span>
                            </p>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Account Email') }} <span class="sp_text_danger">*</span></label>
                            <input type="text" name="email" class="form-control" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">${accountLabel}</label>
                            <textarea class="form-control" name="account_information" rows="5"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="">{{ __('Additional Note') }}</label>
                            <textarea class="form-control" name="note" rows="5"></textarea>
                        </div>

                        <div class="col-md-12 mt-2">
                            <button class="btn sp_theme_btn w-100" type="submit">{{ __('Withdraw Now') }}</button>
                        </div>
                    `;

                    $('.appendData').html(html);
                }
            });
        }
    });
    </script>
@endpush
