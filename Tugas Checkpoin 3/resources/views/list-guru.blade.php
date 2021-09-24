@extends('layout')

@section('container')
    <main>
        <section>
            <a class="tambah" href="">Tambah +</a>
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
                            <img src="assets/image/school-boy.svg" alt="">
                            <h5>{{$k->nama_guru}}</h5>
                        </td>
                        <td>{{$k->nip}}</td>
                        <td>{{$k->mapel}}</td>
                        <td>{{$k->no_hp}}</td>
                        <td><a class="button-action" href=""><img src="assets/image/edit.svg" alt=""></a></td>
                        <td><a class="button-action" href=""><img src="assets/image/delete.svg" alt=""></a></td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </section>
    </main>
@endsection