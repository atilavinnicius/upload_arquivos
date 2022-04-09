<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body class="bg-light">
    <div class="container">
        <form action="{{ route('times.store') }}" class="p-5 bg-white rounded" method="POST"  enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title">Nome do Time:</label>
                <input type="text" name="nome_time" class="form-control">
            </div>

            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="brasoes[]" multiple>
                <label class="custom-file-label" for="customFile" data-browse="Enviar Imagens">Escolha seu Arquivo</label>
            </div>

            <button type="submit" class="btn btn-primary">Salvar time</button>

        </form>
    </div>
</body>
</html>
