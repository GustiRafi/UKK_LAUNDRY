@extends('layouts.dashboard')
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Outlet</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i>Laundry</a></li>
                        <li class="breadcrumb-item active">Daftar Outlet</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal"
                            data-target="#tambahoutlet">Tambah Outlet</button>
                        {{-- modal untuk mrnambah outlet --}}
                        <div class="modal fade" id="tambahoutlet" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="title" id="defaultModalLabel">Tambah Outlet</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <form action="" method="post" id="addoutlet">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="nama" name="nama"
                                                    id="nama" required>
                                                <span id="nama-error" class="invalid-feedback"></span>
                                            </div>
                                            <div class="mb-3">
                                                <textarea name="alamat" id="alamat" placeholder="alamat"
                                                    class="form-control" cols="30" rows="10" required></textarea>
                                                <span id="alamat-error" class="invalid-feedback"></span>
                                            </div>
                                            <div class="mb-3">
                                                <input type="tel" name="telp" placeholder="No Telp" id="telp"
                                                    class="form-control" required>
                                                <span id="telp-error" class="invalid-feedback"></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit"
                                                    class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                                                <button type="button" class="btn btn-danger waves-effect"
                                                    data-dismiss="modal">CLOSE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="header">

                        </div> --}}
                        <div class="body">
                            <div class="table-responsive" id="dataoutlet">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>alamat</th>
                                            <th>telp</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($outlets as $outlet)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $outlet->nama }}</td>
                                                <td>{{ $outlet->alamat }}</td>
                                                <td>{{ $outlet->telp }}</td>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-primary waves-effect m-r-20"
                                                        data-toggle="modal"
                                                        data-target="#editoutlet{{ $outlet->id }}"><i
                                                            class="zmdi zmdi-edit"></i></button>
                                                    {{-- modal untuk edit outlet --}}
                                                    <div class="modal fade" id="editoutlet{{ $outlet->id }}"
                                                        tabindex="-1" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="defaultModalLabel">Edit Outlet
                                                                    </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" method="post" id="editoutlet"
                                                                        class="editoutlet">
                                                                        {{-- @method('put') --}}
                                                                        <div class="mb-3">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="nama" name="nama"
                                                                                id="editnama{{ $outlet->id }}"
                                                                                value="{{ $outlet->nama }}" required>
                                                                            <span id="editnama{{ $outlet->id }}-error"
                                                                                class="invalid-feedback"></span>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <textarea name="alamat"
                                                                                id="editalamat{{ $outlet->id }}"
                                                                                placeholder="alamat"
                                                                                class="form-control" cols="30"
                                                                                value="{{ $outlet->alamat }}"
                                                                                rows="10"
                                                                                required>{{ $outlet->alamat }}</textarea>
                                                                            <span
                                                                                id="editalamat{{ $outlet->id }}-error"
                                                                                class="invalid-feedback"></span>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <input type="tel" name="telp"
                                                                                placeholder="No Telp"
                                                                                id="edittelp{{ $outlet->id }}"
                                                                                class="form-control"
                                                                                value="{{ $outlet->telp }}" required>
                                                                            <span id="edittelp{{ $outlet->id }}-error"
                                                                                class="invalid-feedback"></span>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-default btn-round waves-effect"
                                                                                onclick="return editoutlet({{ $outlet->id }})">SAVE
                                                                                CHANGES</button>
                                                                            <button type="button"
                                                                                class="btn btn-danger waves-effect"
                                                                                data-dismiss="modal">CLOSE</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="post" id="deleteoutlet" class="deleteoutlet"
                                                        data-route="/outlet/{{ $outlet->id }}">
                                                        @method('destroy')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="zmdi zmdi-delete"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        // tambah outlet
        $('#addoutlet').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '/outlet',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $("#addoutlet").serializeArray(),
                success: function (data) {
                    $('#addoutlet')[0].reset();
                    $('#dataoutlet').load(document.URL + ' #dataoutlet');
                    swal(
                        'SUCCESS!!',
                        'Berhasil menambahkan outlet baru',
                        'success'
                    )
                },
                error: function (xhr, status, error) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $('#' + key).addClass('is-invalid');
                        $('#' + key + '-error').text(value[0]);
                    });
                }
            });
        });

        // hapus outlet
        $('.deleteoutlet').on('submit', function (e) {
            e.preventDefault();
            swal({
                    title: "Yakin mau hapus outlet ini?Menghapus outlet juga akan otomatis menghapus semua data yang berkaitan dengan outlet",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: 'post',
                            url: $(this).data('route'),
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                '_method': 'delete'
                            },
                            success: function (data) {
                                $('.deleteoutlet')[0].reset();
                                $('#dataoutlet').load(document.URL + ' #dataoutlet');
                                swal(
                                    'SUCCESS!!',
                                    'Berhasil menghapus outlet ' + data,
                                    'success'
                                )
                            }
                        });
                    }
                });
        });

    });

    function editoutlet(id) {
        $.ajax({
            type: 'PUT',
            url: '/outlet/' + id,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'nama': $('#editnama' + id).val(),
                'alamat': $('#editalamat' + id).val(),
                'telp': $('#edittelp' + id).val(),
            },
            success: function (data) {
                $('#dataoutlet').load(document.URL + ' #dataoutlet');
                swal(
                    'SUCCESS!!',
                    'Berhasil Memperbarui outlet ' + data,
                    'success'
                )
            },
            error: function (xhr, status, error) {
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    $('#edit' + key + id).addClass('is-invalid');
                    $('#edit' + key + id + '-error').text(value[0]);
                });
            }
        });
    }

</script>

@endsection
