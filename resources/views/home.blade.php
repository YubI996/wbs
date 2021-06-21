@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="hold-transition login-page">
            @if(! isset(Auth::user()->email_verified_at))
                <center>
                    <div class="row">
                        <div class="col">
                            <div class="card" style="">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Selamat Datang</h6>
                                    <p>Email verifikasi telah dikirim ke alamat email Anda, silahkan verifikasi alamat email Anda</p>
                                    <p class="card-text">Anda Belum Memverifikasi email Anda, silahkan periksa kembali email Anda. <br>
                                    Jika Anda belum menerima email verifikasi atau link verifikasi telah kadaluarsa, Anda dapat mengklik tombol di bawah ini.</p>
                                    {{-- <a href="{{route('verification.send')}}" class="card-link">Kirim link baru</a> --}}
                                    <form action="{{route('verification.send')}}" method="POST">
                                        @csrf
                                            <input type="hidden" value="{{Auth::user()->id}}">
                                        <button type="submit" class="btn btn-primary">Kirim link baru</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            @else 
                <center>

                </center>
            @endif

        </div>
    </div>
@endsection
