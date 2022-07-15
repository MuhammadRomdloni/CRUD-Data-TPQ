@extends('app')
@section('content')
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="cari..." />
            </div>
            <div class="col">
                <button class="btn btn-success">Search</button>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('tpqs.create') }}"> + Tambah</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama TPQ</th>
                    <th>No TPQ</th>
                    <th>Alamat</th>
                    <th>Nama Ketua</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($tpqs as $tpq)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $tpq->nama_tpq }}</td>
                <td>{{ $tpq->no_tpq }}</td>
                <td>{{ $tpq->alamat }}</td>
                <td>{{ $tpq->ketua }}</td>
                <td>{{ $tpq->hp }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('tpqs.edit', $tpq) }}">Edit</a>
                    <form method="POST" action="{{ route('tpqs.destroy', $tpq) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection