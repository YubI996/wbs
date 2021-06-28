                    @if (Auth::user()->role_id == 3)
                        
                        <div class="col-sm-6">
                            <!-- Status Verifikasi Field -->
                            <div class="form-group">
                                {!! Form::label('hasil_penyidikan', 'Hasil Pemeriksaan :') !!}
                                {!! Form::select('hasil_penyidikan',[ 5 => 'Terbukti',6=>'Tidak terbukti'], null, ['class' => 'form-control', 'placeholder' => 'Pilih hasil pemeriksaan']) !!}
                                @error('hasil_penyidikan')
                                <span class="error1">{{ $message }}</span>
                                @enderror
                            </div>

                    @endif     