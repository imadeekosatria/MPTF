@extends('layout')

@section('container')
      <main>
          <section>
              <div class="edit">
              <div class="picture">
                    <img class="picture-img" src="/assets/image/undraw_playing_cards_cywn.svg" alt="">
                </div>
                <div class="form">
                    <form action="/data-siswa" method="post">
                      @csrf()
                        <input type="text" name="nama" class="form-nama @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name=kelas class="mapel" value="{{ old('kelas') }}" placeholder="Kelas">
                        @error('kelas')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name="no_hp" value="{{ old('no_hp') }}" onkeypress="return onlyNumberKey(event)" class="form-nama" placeholder="No. HP">
                        @error('no_hp')
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
                        <textarea name="alamat" class="alamat" cols="30" rows="10" placeholder="Alamat">{{ old('alamat') }}</textarea>
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