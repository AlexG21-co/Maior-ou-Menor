<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Verficar os Números</title>
</head>

<body>
    <div class="container mt-5 border p-4 border border-primary rounded-pill">
        <form action="Maior.php" method="POST">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputyvalor1" class="col-form-label">Valor 1: </label>
                </div>
                <div class="col-auto">
                    <input type="number" id="inputyvalor1" require name="vl1" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputyvalor2" class="col-form-label">Valor 2: </label>
                </div>
                <div class="col-auto">
                    <input type="number" id="inputyvalor2" require  name="vl2" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Verificar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>