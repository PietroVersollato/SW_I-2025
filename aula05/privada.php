<?php
$nome = $_GET["nome"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Full Width Pics - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">Darth Vader</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Voltar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4" src="img/Darth.png" alt="..." />
            <h1 class="title">BEM VINDO <?php echo $nome; ?></h1>
            <h1 class="text-white fs-3 fw-bolder">Full Width Pics</h1>
            <p class="text-white-50 mb-0">Landing Page Template</p>
        </div>
    </header>
    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Darth Vader quem foi?</h2>
                    <p class="lead">Darth Vader, originalmente Anakin Skywalker, é um dos personagens mais icônicos da saga Star Wars. Ele começou como um talentoso Jedi, mas foi seduzido pelo lado sombrio da Força pelo Imperador Palpatine (Darth Sidious).
                        Anakin se tornou Vader após trair os Jedi e ajudar a instaurar o Império Galáctico. Em um duelo com seu antigo mestre, Obi-Wan Kenobi, ele foi gravemente ferido e passou a usar uma armadura cibernética e um capacete icônico para sobreviver.
                        Apesar de ser um temido lorde Sith, ele ainda possuía resquícios de bondade, o que se revelou quando ele sacrificou sua vida para salvar seu filho, Luke Skywalker, destruindo o Imperador e trazendo equilíbrio à Força.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Content section-->
    <section class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img class=" img-fluid" src="img/darthvader.png" alt="">
                    <h2>Porque ele se levou pelo lado sombriu?</h2>
                    <p class="lead">Anakin Skywalker foi seduzido pelo lado sombrio da Força principalmente por medo da perda e desejo de poder. Ele teve visões da morte de sua esposa, Padmé Amidala, e foi manipulado pelo Imperador Palpatine (Darth Sidious), que prometeu ensiná-lo a salvar aqueles que ama da morte.
                    Além disso, Anakin sempre teve dificuldades em seguir as rígidas regras dos Jedi. Ele sentia que o Conselho Jedi não confiava nele, o que aumentou sua frustração e insegurança. Palpatine usou isso contra ele, oferecendo-lhe poder absoluto e uma suposta maneira de impedir a morte de Padmé.
                    No momento decisivo, Anakin escolheu proteger Palpatine e massacrar os Jedi, acreditando que isso garantiria a segurança de Padmé. No entanto, sua transformação em Darth Vader só trouxe tragédia: Padmé morreu, ele perdeu tudo que amava e ficou preso ao lado sombrio por anos.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>