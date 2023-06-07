@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Data Kantor</h3>
        <a class="btn" data-bs-toggle="modal" data-bs-target="#tambahDataModal" style="background-color: #ffa133">Tambah
            Data</a>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="table-responsive justify-content-center mb-5">
                <table class="table table-bordered text-center pt-3" id="listTable">
                    <thead style="background-color: #363636; color:#ffffff;">
                        <tr>
                            <th class="col" scope="col">#</th>
                            <th class="col" scope="col">Nama</th>
                            <th class="col" scope="col">Email</th>
                            <th class="col" scope="col">Nilai X</th>
                            <th class="col" scope="col">Nilai Y</th>
                            <th class="col" scope="col">Nilai Z</th>
                            <th class="col" scope="col">Nilai W</th>
                            <th class="col" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="memberKategori">
                        @foreach ($nilaipesertas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @php
                                    $lastIterationNumber = $loop->iteration;
                                @endphp
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->nilai_x }}</td>
                                <td>{{ $data->nilai_y }}</td>
                                <td>{{ $data->nilai_z }}</td>
                                <td>{{ $data->nilai_w }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary edit"><i
                                            class="fa-solid fa-circle-info"></i></a>
                                    <a href="#" class="btn btn-warning edit"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-danger delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('other')
    <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Peserta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="insertDataKantor">
                        <div class="mb-3">
                            <label for="nama">Nama Peserta</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Masukkan nama peserta" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Peserta</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Masukkan email" required>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_x">Nilai X</label>
                            <input type="number" min="1" max="33" name="nilai_x" id="nilai_x"
                                class="form-control" placeholder="Masukkan nilai x" required>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_y">Nilai Y</label>
                            <input type="number" min="1" max="23" name="nilai_y" id="nilai_y"
                                class="form-control" placeholder="Masukkan nilai y" required>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_z">Nilai Z</label>
                            <input type="number" min="1" max="18" name="nilai_z" id="nilai_z"
                                class="form-control" placeholder="Masukkan nilai z" required>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_w">Nilai W</label>
                            <input type="number" min="1" max="13" name="nilai_w" id="nilai_w"
                                class="form-control" placeholder="Masukkan nilai w" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
