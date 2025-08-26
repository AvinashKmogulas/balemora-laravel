<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Hotel Admin Login' }}</title>
    <!-- MDBootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
            background-size: cover;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .hotel-logo {
            width: 80px;
            margin-bottom: 15px;
        }

        /* Left align labels and inputs with visible borders */
        .form-label {
            text-align: left !important;
            display: block;
        }

        .form-control {
            text-align: left;
            border: 1px solid #ced4da !important;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card login-card p-5 text-center" style="max-width:400px; width:100%;">

            <!-- Hotel Logo -->
            <center><img src="https://cdn-icons-png.flaticon.com/512/2972/2972185.png" alt="Hotel Logo"
                    class="hotel-logo" /></center>

            <!-- Title -->
            <h4 class="mb-4">Balemora Admin</h4>

            <!-- Login Form -->
            <form method="POST" action="{{ route('loginProcess') }}" class="text-start">
                @csrf

                <div class="form-outline mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required />
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="loginPassword">Password</label>
                    <input type="password" id="loginPassword"
                        class="form-control @error('password') is-invalid @enderror" name="password" required />
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember me & Forgot -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="rememberMe"
                            {{ old('remember') ? 'checked' : '' }} />
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary btn-rounded w-100">Login</button>
            </form>

            <!-- Footer -->
            <p class="mt-4 text-muted small">© {{ date('Y') }} Balemora Resort</p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                toast: true,
                icon: 'success',
                title: "{{ session('success') }}",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        @endif

        @if (session('error'))
            Swal.fire({
                toast: true,
                icon: 'error',
                title: "{{ session('error') }}",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        @endif
    </script>

</body>

</html>
