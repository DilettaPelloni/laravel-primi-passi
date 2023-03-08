<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Laravel Primi Passi - Zucchero</title>
    </head>
    <body>
        <header class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark py-4 bg-primary">
                <div class="container">
                    <a class="navbar-brand fw-bold " href="/">
                        Hello Laravel!
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/zucchero">
                                    Zucchero
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cannella">
                                    Cannella
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ogni">
                                    Ogni
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cosa">
                                    Cosa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/bella">
                                    Bella
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main class="vh-100">
            <div class="container h-100">
                <div class="row h-100 flex-column justify-content-center">
                    <div class="col-12">
                        <h1 class="display-1 text-center fw-bold text-primary">
                            Bella!
                        </h1>
                    </div>
                    <div class="col-12">
                        <h2 class="display-5 text-center">
                            É la ricetta per creare le Super Chicche!
                        </h2>
                    </div>
                    <div class="col-12">
                        <img
                            class="d-block w-25 m-auto"
                            src="https://www.partylandia.it/6835-large_default/cialda-ostia-festa-le-superchicche-bimbe-torta-decorazione-dischi-commestibile.jpg"
                            alt="SuperChicche"
                        >
                    </div>
                </div>
            </div>
        </main>


        <!-- BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>