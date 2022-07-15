@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('tpqs.update', $tpqs) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>No<span class="text-danger"></span></label>
                <input class="form-control" type="text" name="no" value="{{ old('no') }}" />
            </div>
            <div class="mb-3">
                <label>Nama TPQ<span class="text-danger"></span></label>
                <input class="form-control" type="text" name="nama_tpq" value="{{ old('nama_tpq') }}" />
            </div>
            <div class="mb-3">
                <label>No TPQ</label>
                <input class="form-control" type="text" name="no_tpq" value="{{ old('no_tpq') }}" />
            </div>
            <div class="mb-3">
                <label>Alamat <span class="text-danger"></span></label>
                <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}" />
            </div>
            <div class="mb-3">
                <label>Nama Ketua</label>
                <input class="form-control" type="text" name="ketua" value="{{ old('ketua') }}" />
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input class="form-control" type="text" name="hp" value="{{ old('hp') }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('tpqs.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection