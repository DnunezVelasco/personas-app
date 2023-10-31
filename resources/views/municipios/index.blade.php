<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>Comunas</title>
</head>

<body>

    <div class="container mt-5">

        <div class="mb-4">
            <h2>Lista municipios</h2>
            <a href="{{ route('municipios.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i> Add</a>
        </div>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Municipio</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($municipios as $municipio)
                    <tr>
                        <td>{{ $municipio->muni_codi }}</td>
                        <td>{{$municipio->muni_nomb}}</td>
                        <td>{{ $municipio->departamento->depa_nomb ?? 'No disponible' }}</td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
