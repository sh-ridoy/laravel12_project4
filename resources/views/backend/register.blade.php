<x-guest-layout>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
                <div class="card border-3">
                    <div class="card-body p-5">

                        <img src="{{ asset('assets/images/logo-icon.png') }}" class="mb-4" width="45" alt="">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to create your account</p>

                        <div class="row g-3 my-4">
                            <div class="col-12 col-lg-6">
                                <button type="button"
                                    class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                                    <img src="{{ asset('assets/images/icons/google-2.png') }}" width="18"
                                        class="me-2" alt="">
                                    Sign Up with Google
                                </button>
                            </div>

                            <div class="col-lg-6">
                                <button type="button"
                                    class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100">
                                    <img src="{{ asset('assets/images/icons/apple-logo.png') }}" width="18"
                                        class="me-2" alt="">
                                    Sign Up with Apple
                                </button>
                            </div>
                        </div>

                        <div class="separator section-padding">
                            <div class="line"></div>
                            <p class="mb-0 fw-bold">OR</p>
                            <div class="line"></div>
                        </div>

                        <div class="form-body mt-4">

                            <form method="POST" action="{{ route('register') }}" class="row g-3">
                                @csrf

                                <!-- Name -->
                                <div class="col-12">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text"
                                        name="name"
                                        id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}"
                                        placeholder="John Doe"
                                        required
                                        autofocus>

                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email"
                                        name="email"
                                        id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}"
                                        placeholder="example@user.com"
                                        required>

                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>

                                    <div class="input-group password-toggle">
                                        <input type="password"
                                            name="password"
                                            id="password"
                                            class="form-control border-end-0 @error('password') is-invalid @enderror"
                                            placeholder="Enter Password"
                                            required>

                                        <a href="javascript:;" class="input-group-text bg-transparent toggle-password">
                                            <i class="bi bi-eye-slash-fill"></i>
                                        </a>
                                    </div>

                                    @error('password')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-12">
                                    <label for="password_confirmation" class="form-label">
                                        Confirm Password
                                    </label>

                                    <div class="input-group password-toggle">
                                        <input type="password"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                            class="form-control border-end-0"
                                            placeholder="Confirm Password"
                                            required>

                                        <a href="javascript:;" class="input-group-text bg-transparent toggle-password">
                                            <i class="bi bi-eye-slash-fill"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" required>
                                        <label class="form-check-label">
                                            I read and agree to Terms & Conditions
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">
                                            Already have an account?
                                            <a href="{{ route('login') }}">
                                                Sign in here
                                            </a>
                                        </p>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.toggle-password').on('click', function(e) {
                    e.preventDefault();

                    let input = $(this).siblings('input');
                    let icon = $(this).find('i');

                    if (input.attr('type') === 'password') {
                        input.attr('type', 'text');
                        icon.removeClass('bi-eye-slash-fill').addClass('bi-eye-fill');
                    } else {
                        input.attr('type', 'password');
                        icon.removeClass('bi-eye-fill').addClass('bi-eye-slash-fill');
                    }
                });
            });
        </script>
    @endpush
</x-guest-layout>