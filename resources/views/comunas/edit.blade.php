<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Edit Comuna</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <i class="fas fa-edit fa-2x"></i>
            <h1 class="d-inline ml-3">Edit Comuna</h1>
        </div>
        <form method="POST" action="{{ route('comunas.update', ['comuna' => $comuna->comu_codi]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label"><i class="fas fa-id-badge"></i> Id</label>
                <input type="text" class="form-control rounded" id="id" aria-describedby="codigoHelp" name="id" disabled="disabled" value="{{ $comuna->comun_codi }}">
                <div id="codigoHelp" class="form-text">Comune Id.</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label"><i class="fas fa-building"></i> Comune</label>
                <input type="text" required class="form-control rounded" id="name" placeholder="Commune name" name="name" value="{{ $comuna->comu_nomb }}">
            </div>
            <div class="mb-3">
                <label for="municipality" class="form-label"><i class="fas fa-city"></i> Municipality</label>
                <select class="form-control rounded" id="municipality" name="code" required>
                    <option selected disabled value="">choose one ...</option>
                    @foreach ($municipios as $municipio)
                        @if ($municipio->muni_codi == $comuna->muni_codi)
                            <option selected value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
                        @else
                            <option value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary rounded"><i class="fas fa-save"></i> Update</button>
                <a href="{{ route('comunas.index') }}" class="btn btn-warning rounded"><i class="fas fa-times"></i> Cancel</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
