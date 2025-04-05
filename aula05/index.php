<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title> 
    <link rel="stylesheet" href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</body>
</head>
<body>

    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="processa.php" method="POST">
                <div class="mb-3">
                    <label for="formExample1" class="form-label">Email address</label>
                    <input type="email" id="formExample1" class="form-control" name="email" />
                </div>

                <div class="mb-3">
                    <label for="formExample2" class="form-label">Password</label>
                    <input type="password" id="formExample2" class="form-control" name="senha" />
                </div>

                <input type="submit" class="btn btn-primary w-100" value="Sign in">
            </form>
        </div>
    </div>
</div>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>