<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Listado de Comunas</title>
</head>

<body class="bg-light">

    <div class="container mt-5 shadow-lg p-4 bg-white rounded">
        <h1 class="mb-4">Commune List</h1>
        <a href="{{ route('comunas.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i> Add</a>

        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Commune</th>
                    <th scope="col">Municipality</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comunas as $comuna)
                    <tr>
                        <td>{{$comuna->comu_codi}}</td>
                        <td>{{$comuna->comu_nomb}}</td>
                        <td>{{$comuna->muni_nomb}}</td>
                        <td>
                            <a href="{{ route('comunas.edit', ['comuna' => $comuna->comu_codi]) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>

                            <form action="{{ route('comunas.destroy', ['comuna'=> $comuna->comu_codi]) }}" method='POST' style="display: inline-block">
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
