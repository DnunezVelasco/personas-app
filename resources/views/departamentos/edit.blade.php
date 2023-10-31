<!doctype html> <html lang="en">

<head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="resource/css/app.css">

    <title>Edit Comuna</title>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-dark text-center text-white rounded-top">
                        <i class="fas fa-edit"></i> <h4 class="d-inline">Edit Comuna</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('departamentos.update', ['departamento' => $departamento->depa_codi]) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="codigo" class="form-label"><i class="fas fa-id-badge"></i> Id de departamento</label>
                                <input type="text" class="form-control rounded" id="id" aria-describedby="codigoHelp" name="id" disabled="disabled" value="{{ $departamento->depa_codi }}">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label"><i class="fas fa-building"></i> Departamento</label>
                                <input type="text" required class="form-control rounded" id="name" placeholder="Nombre del departamento..." name="name" value="{{ $departamento->depa_nomb }}">
                            </div>

                            <div class="mb-3">
                                <label for="pais" class="form-label"><i class="fas fa-globe-americas"></i> Pais</label>
                                <select type="text" id="pais" name="pais" required class="form-control rounded">
                                    <option selected disabled value="">Escoge uno...</option>
                                    @foreach ($pais as $pais)
                                        @if ($pais->pais_codi == $departamento->pais_codi)
                                            <option selected value="{{ $pais->pais_codi }}">{{ $pais->pais_nomb }}</option>
                                        @else
                                            <option value="{{ $pais->pais_codi }}">{{ $pais->pais_nomb }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary rounded"><i class="fas fa-save"></i> Guardar</button>
                                <a href="{{ route('departamentos.index') }}" class="btn btn-danger rounded"><i class="fas fa-times"></i> Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    </body>

    </html>
