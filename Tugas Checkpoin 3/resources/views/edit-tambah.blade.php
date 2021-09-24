@extends('layout')

@section('container')
      <main>
          <section>
              <div class="edit">
                <div class="picture">
                    <img src="assets/image/school-girl.svg" alt="">
                </div>
                <div class="form">
                    <form action="/data" method="post">
                      @csrf()
                        <input type="text" name="nama" class="form-nama @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name=mapel class="mapel" value="{{ old('mapel') }}" placeholder="Mapel">
                        @error('mapel')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name="nip" value="{{ old('nip') }}" class="form-nama" placeholder="NIP">
                        @error('nip')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name="nomor" value="{{ old('nomor') }}" onkeypress="return onlyNumberKey(event)" class="form-nama" placeholder="No. HP">
                        @error('nomor')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select name="gender" value="{{ old('gender') }}" class="opsi">
                            <option value="">Gender</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="alamat" class="alamat" cols="30" value="{{ old('alamat') }}" rows="10" placeholder="Alamat"></textarea>
                        @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="button-submit">Simpan</button>
                    </form>
                </div>
              </div>
          </section>
      </main>
      <script>
          function onlyNumberKey(evt) { 
            // Only ASCII charactar in that range allowed 
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
            return true; 
        } 
      </script>
@endsection