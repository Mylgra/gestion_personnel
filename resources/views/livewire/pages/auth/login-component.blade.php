<div class="nk-block nk-block-middle nk-auth-body">
    <div class="brand-logo pb-5">
        <a href="" class="logo-link">
            <img
                class="logo-light logo-img logo-img-lg"
                src="./images/logo.png"
                srcset="./images/logo2x.png 2x"
                alt="logo">
            <img
                class="logo-dark logo-img logo-img-lg"
                src="./images/logo-dark.png"
                srcset="./images/logo-dark2x.png 2x"
                alt="logo-dark">
        </a>
    </div>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Sign-In</h5>
            <div class="nk-block-des">
                <p>Access the DashLite panel using your email and passcode.</p>
            </div>
        </div>
    </div>
    <form action="" method="post">
        <div class="form-group">
            <x-label
                value="" ,
                name=""
            />
            <x-text-input
                wire:model=""
                id=""
                name=""
                required
                autofocus
                autofocus=""
                type="email"
            />
        </div>

        <div class="form-group">
            <x-label
                value="email" ,
                name="email"
            />
            <x-text-input
                wire:model="password"
                id=""
                name="password"
                required
                autofocus
                autofocus="password"
                type="password"
            />
        </div>
        <x-primary-button
            type="submit"
            class="btn-lg btn-outline-primary btn-block rounded"
        >Sign in
        </x-primary-button>
    </form>
    <div class="form-note-s2 pt-4">
        New on our platform?
        <a href="">Create an account</a>
    </div>
    <div class="text-center pt-4 pb-3">
        <h6 class="overline-title overline-title-sap">
            <span>OR</span>
        </h6>
    </div>
    <ul class="nav justify-center gx-4">
        <li class="nav-item">
            <a class="nav-link" href="#">Facebook</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Google</a>
        </li>
    </ul>
</div>
