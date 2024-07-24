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

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.pengguna.update', $pengguna->id) }}" method="POST"  >
          @csrf
          @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" value="{{ old('username', $pengguna->username) }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @error('username')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('nama_barang', $pengguna->email)}}">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('email')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ old('nama_barang', $pengguna->password)}}">
              @error('password')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Level</label>
                <select class="form-control" name="level" id="exampleFormControlSelect1">
                <option value="{{ old('nama_barang', $pengguna->level)}}">{{ old('nama_barang', $pengguna->level)}}</option>
                  <option value="customer">Customer</option>
                  <option value="admin">Administrator</option>
                 </select>
                 @error('level')
                 <div class="alert alert-danger mt-2">
                     {{ $message }}
                 </div>
                 @enderror
              </div>
              <br/>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>

        
        {{-- {{ $user->links() }} --}}
    </div>
</div>

@endsection