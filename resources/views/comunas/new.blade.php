<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Add Comuna</title>
</head>

<body class="bg-light">
    <div class="container mt-5 shadow-lg p-4 bg-white rounded">
        <h1 class="mb-4"><i class="fas fa-plus-square"></i> Add Comuna</h1>
        <form method="POST" action="{{ route('comunas.store') }}" class="p-3">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Code</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                <div id="idHelp" class="form-text">Comune Code</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Comune</label>
                <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Comuna name">
            </div>

            <div class="mb-3">
                <label for="municipality" class="form-label">Municipality</label>
                <select class="form-select" id="municipality" name="code" required>
                    <option selected disabled value="">choose one ...</option>
                    @foreach ($municipios as $municipio)
                        <option value="{{$municipio->muni_codi}}">{{$municipio->muni_nomb}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                <a href="{{ route('comunas.index') }}" class="btn btn-warning"><i class="fas fa-times"></i> Cancel</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; Bootstrap and Font Awesome JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

</body>

</html>
