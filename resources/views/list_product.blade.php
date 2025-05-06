
@extends('layout.list')

@section('title', 'Ini adalah judul pada meta')

@section('content')
    <table>
        <thead>
    </thead>
    <tbody>
        @foreach($data as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['produk'] }}</td>
                <!-- Data lainnya -->
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
>>>>>>> ef6c8e4634c82768d3845f5f943bc29f6fd6639a
