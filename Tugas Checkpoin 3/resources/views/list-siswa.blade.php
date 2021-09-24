@extends('layout')

@section('container')
    <main>
        <section>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <a class="tambah-siswa" href="/tambah-siswa">Tambah +</a>
            <div class="main">
                <table>
                    <tr class="header-table">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>No. HP</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($siswa as $k)
                    <tr>
                        <td class="reveal">{{$loop->iteration}}</td>
                        <td class="nama reveal">
                            @if($k->gender == 'Pria')
                            <img src="assets/image/school-boy.svg" alt="">
                            @elseif($k->gender == 'Wanita')
                            <img src="assets/image/school-girl.svg" alt="">
                            @endif
                            <h5>{{$k->nama_siswa}}</h5>
                        </td>
                        <td class="reveal">{{$k->kelas}}</td>
                        <td class="reveal">{{$k->no_hp}}</td>
                        <td class="reveal">
                            <a class="button-action" href="/edit-siswa/{{$k->id}}"><img src="assets/image/edit.svg" alt=""></a>
                        </td>
                        <td class="reveal">
                            <form action="/siswa/{{$k->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="button-action" onclick="return confirm('Anda yakin ingin menghapus {{$k->nama_siswa}} ? 🙁')"><img src="assets/image/delete.svg" alt=""></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </section>
    </main>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/main.js"></script>
@endsection