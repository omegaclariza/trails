<div>
<html>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>tiket</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td>{{ $dataku['id'] }}</td>
            <td>{{ $dataku['nama'] }}</td>
            <td>{{ $dataku['tiket'] }}</td>
        </tr>
        
        @endforeach
    </tbody>
</table>
</div>
