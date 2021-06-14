                    @if (Auth::user()->role_id == 2)
                        
                        <div class="col-sm-6">
                            <!-- Status Verifikasi Field -->
                            <div class="form-group">
                                {!! Form::label('status', 'Status Verifikasi:') !!}
                                {!! Form::select('status',[1=>'Verifikasi',2=>'Tolak'], null, [ 'placeholder' => 'Pilih Status Verifikasi','class' => 'form-control']) !!}
                                @error('status')
                                <span class="error1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- File Verifikator Field -->
                            <div class="form-group">
                                {!! Form::label('file_verifikator', 'File Verifikator:') !!}
                                {!! Form::file('file_verifikator', null, ['class' => 'form-control']) !!}
                                @error('file_verifikator')
                                    <span class="error1">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                        <!-- Catatan Verifikasi Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('catatan_verifikasi', 'Catatan Verifikasi:') !!}
                            {!! Form::textarea('catatan_verifikasi', null, ['class' => 'form-control']) !!}
                            @error('catatan_verifikasi')
                                <span class="error1">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif
                    @section('scripts')
                        <script>
                            const inputElement = document.querySelector('input[type="file"]');
                            const pond = FilePond.create( inputElement );
                            FilePond.setOptions({
                                server: {
                                    url: '/files/verif',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                }
                            });
                        </script>
                    @endsection
     