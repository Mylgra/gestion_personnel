<div>
    @if (session('status') === 'verification-link-sent')
        <p
            class="mt-2 text-danger text-sm"
            x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
        >
            {{ __('A new verification link has been sent to your email address.') }}
        </p>
    @endif
    @if (auth()->user() instanceof MustVerifyEmail && ! auth()->user()->hasVerifiedEmail())
        <div class="alert alert-warning mb-2">
            <div class="alert-cta flex-wrap flex-md-nowrap">
                <div class="alert-text">
                    <p> {{ __('Your email address is unverified.') }}</p>
                </div>
                <ul class="alert-actions gx-3 mt-3 mb-1 my-md-0">
                    <li class="order-md-last">
                        <button wire:click.prevent="submit" class="btn btn-sm btn-warning">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    @endif
    <div class="alert alert-warning mb-2">
        <div class="alert-cta flex-wrap flex-md-nowrap">
            <div class="alert-text">
                <p> {{ __('Your email address is unverified.') }}</p>
            </div>
            <ul class="alert-actions gx-3 mt-3 mb-1 my-md-0">
                <li class="order-md-last">
                    <button wire:click.prevent="submit" class="btn btn-sm btn-warning">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>
