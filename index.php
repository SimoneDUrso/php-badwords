<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Badwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./badwords.php" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <label for="paragraph">Paragrafo</label>
                            <textarea name="paragraph" class="form-control" placeholder="Scrivi qui un messaggio" id="paragraph"></textarea>
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <label for="badword">Parola da censurare nel paragrafo</label>
                            <input class="form-control w-50" type="text" name="badword" id="badword" placeholder="Scrivi la parola da censurare">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-md btn-primary">Invia dati</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>