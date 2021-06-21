<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Registrasi</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q=="
          crossorigin="anonymous"/>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/>

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box1">
    <div class="register-logo">
        <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Daftarkan diri Anda!</p>

            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-6">

                <div>
                    <input type="hidden"
                           name="role"
                           value={{4}}>
                </div>
                
                <span class="badge">NIP</span>
                        <div class="input-group mb-3">
                            <input required type="number"
                                name="nip"
                                class="form-control @error('nip') is-invalid @enderror"
                                value="{{ old('nip') }}"
                                placeholder="NIP / NIK">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-fingerprint"></span></div>
                            </div>
                            @error('nip')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Username</span>
                        <div class="input-group mb-3">
                            <input required type="text"
                                name="username"
                                class="form-control @error('username') is-invalid @enderror"
                                value="{{ old('username') }}"
                                placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('username')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Nama</span>
                        <div class="input-group mb-3">
                            <input required type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}"
                                placeholder="Nama">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('name')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <span class="badge">Tempat Lahir</span>
                        <div class="input-group mb-3">
                            <input required type="text"
                                name="tempat"
                                class="form-control @error('tempat') is-invalid @enderror"
                                value="{{ old('tempat') }}"
                                placeholder="Tempat lahir">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-city"></span></div>
                            </div>
                            @error('tempat')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div> 

                        <span class="badge">Tanggal Lahir</span>
                        <div class="input-group mb-3">
                            <input required type="date"
                                name="tanggal"
                                class="form-control @error('tanggal') is-invalid @enderror"
                                value="{{ old('tanggal') }}"
                                placeholder="Tanggal lahir">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-baby-carriage"></span></div>
                            </div>
                            @error('tanggal')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Email</span>
                        <div class="input-group mb-3">
                            <input required type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                            @error('email')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Password</span>
                        <div class="input-group mb-3">
                            <input required type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                            @error('password')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Konfirmasi Password</span>
                        <div class="input-group mb-3">
                            <input required type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Ulangi password">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                        {{-- jabatan --}}
                        <span class="badge">Jabatan</span>
                        <div class="input-group mb-3">
                            <input required type="string"
                                name="jabatan"
                                class="form-control @error('jabatan') is-invalid @enderror"
                                value="{{ old('jabatan') }}"
                                placeholder="Jabatan">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('jabatan')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Pangkat</span>
                        <div class="input-group mb-3">
                            <input required type="string"
                                name="pangkat"
                                class="form-control @error('pangkat') is-invalid @enderror"
                                value="{{ old('pangkat') }}"
                                placeholder="Pangkat">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('pangkat')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Instansi</span>
                        <div class="input-group mb-3">
                            <input required type="string"
                                name="instansi"
                                class="form-control @error('instansi') is-invalid @enderror"
                                value="{{ old('instansi') }}"
                                placeholder="Instansi">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('instansi')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Unit</span>
                        <div class="input-group mb-3">
                            <input required type="string"
                                name="unit"
                                class="form-control @error('unit') is-invalid @enderror"
                                value="{{ old('unit') }}"
                                placeholder="Unit kerja">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('unit')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <span class="badge">Kota</span>
                        <div class="input-group mb-3">
                            <input required type="string"
                                name="kota"
                                class="form-control @error('kota') is-invalid @enderror"
                                value="{{ old('kota') }}"
                                placeholder="Kota"
                                value="Bontang">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('kota')
                            <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                <span class="badge">Alamat</span>
                        <div class="input-group mb-3">
                    <input type="string"
                           name="alamat"
                           class="form-control @error('alamat') is-invalid @enderror"
                           value="{{ old('alamat') }}"
                           placeholder="Alamat">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('alamat')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <span class="badge">Nomor Hp</span>
                <div class="input-group mb-3">
                    <input type="string"
                           name="nohp"
                           class="form-control @error('nohp') is-invalid @enderror"
                           value="{{ old('nohp') }}"
                           placeholder="Nomor HP">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('nohp')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <span class="badge">Nomor Lain yang Bisa Dihubungi</span>
                <div class="input-group mb-3">
                    <input type="string"
                           name="nolain"
                           class="form-control @error('nolain') is-invalid @enderror"
                           value="{{ old('nolain') }}"
                           placeholder="Nomor lain">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('nolain')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-8">
                        <a href="{{ route('login') }}" class="text-center">Sudah memiliki akun</a>
                        {{-- <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div> --}}
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{-- <a href="{{ route('login') }}" class="text-center">Sudah memiliki akun</a> --}}
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->

    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>

</body>
</html>
