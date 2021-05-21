                    {!! Form::hidden('user_id', Auth::id(), ['class' => 'form-control']) !!}
                    
                    <!-- Jenis Aduan Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('jenis_aduan', 'Jenis Aduan:') !!}
                        {!! Form::select('jenis_aduan', $ja,null,['placeholder' => 'Masukkan jenis aduan','class' => 'form-control']) !!}
                        @error('jenis_aduan')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>
                       
                        




                    <!-- Nama Terlapor Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('nama_terlapor', 'Nama Terlapor:') !!}
                        {!! Form::text('nama_terlapor', null, ['class' => 'form-control']) !!}
                        @error('nama_terlapor')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Jabatan Terlapor Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('jabatan_terlapor', 'Jabatan Terlapor:') !!}
                        {!! Form::text('jabatan_terlapor', null, ['class' => 'form-control']) !!}
                        @error('jabatan_terlapor')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pangkat Terlapor Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('pangkat_terlapor', 'Pangkat Terlapor:') !!}
                        {!! Form::text('pangkat_terlapor', null, ['class' => 'form-control']) !!}
                        @error('pangkat_terlapor')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Instansi Terlapor Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('instansi_terlapor', 'Instansi Terlapor:') !!}
                        {!! Form::text('instansi_terlapor', null, ['class' => 'form-control']) !!}
                        @error('instansi_terlapor')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Unit Terlapor Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('unit_terlapor', 'Unit Terlapor:') !!}
                        {!! Form::text('unit_terlapor', null, ['class' => 'form-control']) !!}
                        @error('unit_terlapor')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Kota Terlapor Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('kota_terlapor', 'Kota Terlapor:') !!}
                        {!! Form::text('kota_terlapor', null, ['class' => 'form-control']) !!}
                        @error('kota_terlapor')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-sm-6"></div>
                    <!-- Penjelasan Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('penjelasan', 'Penjelasan:') !!}
                        {!! Form::textarea('penjelasan', null, ['class' => 'form-control']) !!}
                        @error('penjelasan')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- File Bukti Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('file_bukti', 'File Bukti:') !!}
                        {!! Form::file('file_bukti', null, ['class' => 'form-control', 'required']) !!}
                        @error('file_bukti')
                            <span class="error1">{{ $message }}</span>
                        @enderror
                    </div>


                    @section('scripts')
                        <script>
                            const inputElement = document.querySelector('input[type="file"]');
                            const pond = FilePond.create( inputElement );
                            FilePond.setOptions({
                                server: {
                                    url: '/files',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                }
                            });
                        </script>
                    @endsection