<!DOCTYPE html>
<html>
<head>
    <title>Login - Sewa Barang Adventure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg, #e3f2fd, #ffffff);
    font-family:'Segoe UI', sans-serif;
}

/* Card */
.card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    background:white;
}

/* Judul */
h4{
    color:#0d6efd;
    font-weight:700;
}

/* Input */
.form-control{
    border-radius:10px;
    border:1px solid #cfe2ff;
    padding:10px;
}

.form-control:focus{
    border-color:#0d6efd;
    box-shadow:0 0 8px rgba(13,110,253,0.2);
}

/* Button */
.btn-custom{
    background:linear-gradient(135deg, #0d6efd, #6ea8fe);
    color:white;
    border:none;
    padding:10px;
    font-weight:600;
    border-radius:10px;
    transition:0.3s;
}

.btn-custom:hover{
    background:linear-gradient(135deg, #0b5ed7, #0d6efd);
    color:white;
    transform:translateY(-2px);
}

/* Link */
a{
    color:#0d6efd;
    text-decoration:none;
    font-weight:500;
}

a:hover{
    color:#6ea8fe;
}

/* Alert */
.alert-success{
    background:#0d6efd;
    border:none;
    color:white;
    border-radius:10px;
}

.alert-danger{
    border-radius:10px;
}
</style>

</head>

<body class="d-flex align-items-center justify-content-center vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body p-4">

                    <h4 class="text-center mb-4">Login</h4>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <form method="POST" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label class="mb-1">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="mb-1">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button class="btn btn-custom w-100">
                            Login
                        </button>

                        <div class="text-center mt-3">
                            <a href="/register">Belum punya akun?</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>