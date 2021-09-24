@extends('layout')

@section('container')
      <main>
          <section>
              <div class="edit">
                <div class="picture">
                    @if($siswa->gender == 'Pria')
                        <img src="/assets/image/school-boy.svg" alt="">
                    @elseif($siswa->gender == 'Wanita')
                        <img src="/assets/image/school-girl.svg" alt="">
                    @endif
                </div>
                <div class="form">
                    <form action="/update-siswa/{{$siswa->id}}" method="post">
                        @method('patch')
                      @csrf()
                        <input type="text" name="nama" class="form-nama @error('nama') is-invalid @enderror" value="{{ $siswa->nama_siswa }}" placeholder="Nama">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name=kelas class="mapel" value="{{ $siswa->kelas }}" placeholder="Kelas">
                        @error('kelas')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" name="nomor" value="{{ $siswa->no_hp }}" onkeypress="return onlyNumberKey(event)" class="form-nama" placeholder="No. HP">
                        @error('nomor')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <select name="gender" value="{{ $siswa->gender }}" class="opsi">
                            <option value="">Gender</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <textarea name="alamat" class="alamat" cols="30" rows="10" placeholder="Alamat">{{ $siswa->alamat }}</textarea>
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