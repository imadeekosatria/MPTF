@extends('layout')
@section('container')
    <main>
        <section>
            <a class="tambah" href="">Tambah +</a>
            <div class="main">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>MAPEL</th>
                        <th>No. HP</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="nama">
                            <img src="assets/image/school-boy.svg" alt="">
                            <h5>I Made Eko Satria Wiguna</h5>
                        </td>
                        <td>10909909090909</td>
                        <td>MIPA</td>
                        <td>081803634659</td>
                        <td><a class="button-action" href=""><img src="assets/image/edit.svg" alt=""></a></td>
                        <td><a class="button-action" href=""><img src="assets/image/delete.svg" alt=""></a></td>
                    </tr>
                </table>

            </div>
        </section>
    </main>
@endsection