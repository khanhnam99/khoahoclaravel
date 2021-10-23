<x-layout.login>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>



        <form method="post" action="{{ $urlRedirect }}" id="fLogin">

            @csrf
        <div class="app-auth-container">



            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="sign-up.html">Sign Up</a></p>
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{$errors->first()}}
                </div>
            @endif
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="email" name="email" id="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com" r>

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
            </div>

            <div class="auth-submit">
                <a href="#" class="btn btn-primary" id="SignIn">Sign In</a>
                <a href="#" class="auth-forgot-password float-end">Forgot password?</a>
            </div>
            <div class="divider"></div>
            <div class="auth-alts">
                <a href="#" class="auth-alts-google"></a>
                <a href="#" class="auth-alts-facebook"></a>
                <a href="#" class="auth-alts-twitter"></a>
            </div>
        </div>
        </form>
    </div>

    <x-slot name="javascript">
        <script src="{{ asset('backend/assets/js/backend/user/login.js') }}"></script>
    </x-slot>
</x-layout.login>
