@extends('layout')

@section('container')
    <main>
        <section>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <a class="tambah" href="/tambah">Tambah +</a>
            <div class="main">
                <table>
                    <tr class="header-table">
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>MAPEL</th>
                        <th>No. HP</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($guru as $k)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="nama">
                            @if($k->gender == 'Pria')
                            <img src="assets/image/school-boy.svg" alt="">
                            @elseif($k->gender == 'Wanita')
                            <img src="assets/image/school-girl.svg" alt="">
                            @endif
                            <h5>{{$k->nama_guru}}</h5>
                        </td>
                        <td>{{$k->nip}}</td>
                        <td>{{$k->mapel}}</td>
                        <td>{{$k->no_hp}}</td>
                        <td>
                            <a class="button-action" href="/edit/{{$k->id}}"><img src="assets/image/edit.svg" alt=""></a>
                        </td>
                        <td>
                            <form action="/guru/{{$k->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="button-action" onclick="return confirm('Anda yakin ingin menghapus {{$k->nama_guru}} ? 🙁')"><img src="assets/image/delete.svg" alt=""></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </section>
    </main>
@endsection