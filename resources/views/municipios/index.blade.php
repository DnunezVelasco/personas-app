<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a la biblioteca de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Comunas</title>
</head>

<body>
    <div class="container mt-5">
        <div class="mb-4">
        <a href="{{ route('municipios.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i> Add</a>
        </div>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                <tr>
                    <td>{{ $municipio->muni_codi }}</td>
                    <td>{{ $municipio->muni_nomb }}</td>
                    <td>{{ $municipio->departamento->depa_nomb ?? 'No disponible' }}</td>
                    <td>

                    <div class="btn-group">

                    <form action="{{ route('municipios.destroy', ['municipio' => $municipio->muni_codi]) }}"
                        method="POST" style="display: inline-block; margin: 0; padding: 0;">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>

</html>
