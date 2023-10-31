<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Listado de Departamentos</title>
</head>

<body class="bg-light">

    <div class="container mt-5 shadow-lg p-4 bg-white rounded">
        <h1 class="mb-4">Departamentos</h1>
        <a href="{{ route('departamentos.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i> Agregar</a>

        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">País</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                    <tr>
                        <td>{{ $departamento->depa_codi }}</td>
                        <td>{{ $departamento->depa_nomb }}</td>
                        <td>{{ $departamento->pais_codi }}</td>
                        <td>
                        <form action="{{ route('departamentos.destroy', ['depa_codi' => $departamento->depa_codi]) }}" method="POST">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
</form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; Bootstrap and Font Awesome JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

</body>
</html>
