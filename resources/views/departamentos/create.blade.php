<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Agregar Departamento</title>
</head>

<body class="bg-light">
    <div class="container mt-5 shadow-lg p-4 bg-white rounded">
        <h1 class="mb-4"><i class="fas fa-building"></i> Agregar Departamento</h1>
        <form method="POST" action="{{ route('departamentos.store') }}" class="p-3">
            @csrf

            <div class="mb-3">
                <label for="id" class="form-label">Código</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                <div id="idHelp" class="form-text">Código del Departamento</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Departamento</label>
                <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Nombre del departamento">
            </div>

            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <select class="form-select" id="pais" name="pais" required>
                    <option selected disabled value="">Escoge uno...</option>
                    @foreach ($pais as $paisItem)
                        <option value="{{ $paisItem->pais_codi }}">{{ $paisItem->pais_nomb }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                <a href="{{ route('departamentos.index') }}" class="btn btn-warning"><i class="fas fa-times"></i> Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; Bootstrap and Font Awesome JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>

</html>
