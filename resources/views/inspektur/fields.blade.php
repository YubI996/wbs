                    @if (Auth::user()->role_id == 1)
                        
                        <div class="col-sm-6">
                            <!-- Status Verifikasi Field -->
                            <div class="form-group">
                                {!! Form::label('status_validasi', 'Status Validasi:') !!}
                                {!! Form::select('status_validasi',[ 1=>'Validasi',2=>'Tolak'], null, ['placeholder' => 'Pilih Status','class' => 'form-control']) !!}
                                @error('status_validasi')
                                <span class="error1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- File Verifikator Field -->
                            <div class="form-group">
                                {!! Form::label('file_inspektur', 'File Inspektur:') !!}
                                {!! Form::file('file_inspektur', null, ['class' => 'form-control']) !!}
                                @error('file_inspektur')
                                    <span class="error1">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                        <!-- Catatan Verifikasi Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('catatan_validasi', 'Catatan validasi:') !!}
                            {!! Form::textarea('catatan_validasi', null, ['class' => 'form-control']) !!}
                            @error('catatan_validasi')
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
                                    url: '/files/inspektur',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                }
                            });
                        </script>
                    @endsection
     