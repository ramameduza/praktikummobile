@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Daftar Brand</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">Tambah Brand</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Brand Produk</th>
            <th>Status</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->product_brand }}</td>
                <td>{{ $brand->status }}</td>
                <td>
                    <form action="{{ route('brands.destroy',$cat->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('brands.show',$cat->id) }}">Lihat</a>
                        <a class="btn btn-primary" href="{{ route('brands.edit',$cat->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection