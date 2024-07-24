@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Pengguna</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.pengguna.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Level</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($user as $index => $pengguna)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $pengguna->username }}</td>
                            <td>{{ $pengguna->email }}</td>
                            <td>{!! Str::limit($pengguna->password,10) !!}</td>
                            <td>{{ $pengguna->level }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.pengguna.destroy', $pengguna->id) }}" method="POST">
                                    <a href="{{ route('admin.pengguna.show', $pengguna->id) }}" class="btn btn-sm btn-primary">SHOW</a>
                                    <a href="{{ route('admin.pengguna.edit', $pengguna->id) }}" class="btn btn-sm btn-primary">EDIT</a> @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data User Belum Ada.
                        </div>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection