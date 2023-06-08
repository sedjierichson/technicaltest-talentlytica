@extends('layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Data Kantor</h3>
        <a class="btn" data-bs-toggle="modal" data-bs-target="#tambahDataModal" style="background-color: #ffa133">Tambah
            Data</a>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">{{ session('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger col-lg-8" role="alert">{{ session('error') }}</div>
    @endif
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
                        @foreach ($nilaipesertas as $nilai)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @php
                                    $lastIterationNumber = $loop->iteration;
                                @endphp
                                <td>{{ $nilai->nama }}</td>
                                <td>{{ $nilai->email }}</td>
                                <td>{{ $nilai->nilai_x }}</td>
                                <td>{{ $nilai->nilai_y }}</td>
                                <td>{{ $nilai->nilai_z }}</td>
                                <td>{{ $nilai->nilai_w }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary info"><i
                                            class="fa-solid fa-circle-info"></i></a>
                                    <a href="#" class="btn btn-warning edit" data-nama="{{ $nilai->nama }}"
                                        data-email="{{ $nilai->email }}" data-nilaix="{{ $nilai->nilai_x }}"
                                        data-nilaiy="{{ $nilai->nilai_y }}" data-nilaiz="{{ $nilai->nilai_z }}"
                                        data-nilaiw="{{ $nilai->nilai_w }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="/nilaipeserta/{{ $nilai->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
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
                    <form id="insertData" method="post" action="/nilaipeserta" enctype="multipart/form-data">
                        @csrf
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

    <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Peserta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editDataNilai">
                        {{-- @csrf --}}
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
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('included-js')
    <script type="text/javascript">
        var editEvent;
        $(document).on('click', '.edit', function(event) {
            event.preventDefault();
            editEvent = event;
            $('#editDataModal').modal('show');
            $('#editDataNilai #nama').val($(this).data('nama'));
            $('#editDataNilai #email').val($(this).data('email'));
            $('#editDataNilai #nilai_x').val($(this).data('nilaix'));
            $('#editDataNilai #nilai_y').val($(this).data('nilaiy'));
            $('#editDataNilai #nilai_z').val($(this).data('nilaiZ'));
            $('#editDataNilai #nilai_w').val($(this).data('nilaiw'));
        });
    </script>
@endsection
