<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Ziarah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- ... (bagian sebelumnya tetap sama) ... -->

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('ziarah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Tambahkan input file -->
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Lokasi</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                    </div>
                    <!-- ... (input lainnya tetap sama) ... -->
                </form>
            </div>
        </div>

        <div class="mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Lokasi</th>
                        <!-- ... (kolom lainnya) ... -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($ziarahs as $ziarah)
                        <tr>
                            <td>
                                @if($ziarah->gambar)
                                    <img src="{{ asset('images/ziarah/' . $ziarah->gambar) }}" alt="{{ $ziarah->nama_lokasi }}" width="100">
                                @else
                                    <span class="text-muted">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td>{{ $ziarah->nama_lokasi }}</td>
                            <!-- ... (data lainnya) ... -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>