<div class="tudo">
    <x-guest-layout>

        <style>
        .tudo {
            background-image: url(https://c.tenor.com/-gkNI0FL3HwAAAAC/video-games-retro.gif);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            padding-top:10%;
            padding-bottom:15%;
            padding-right:20%;
            margin-top: 0;
            text-align: center;
        }
        form{
            padding: 10% !important;
        }

        .btn {
            border: none !important;
        }
        </style>

        <!-- <x-auth-card>
        <x-slot name="logo">
            <a href="/images/logo.png">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> -->

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <image src="images/logo.png" width="250px" height="250px">
                </div>
                <div class="col-sm">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" class="form-control" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                required autofocus />
                            <br>
                            <x-input id="password" class="form-control" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="btn">
                                {{ __('Login') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </x-auth-card>
    </x-guest-layout>
</div>