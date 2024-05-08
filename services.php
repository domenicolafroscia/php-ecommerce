<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP E-COMMERCE</title>

    <!-- Layout bootstrap modificato con Bootswatch -->
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg px-5" aria-label="Offcanvas navbar large" style="background-color: #007cdc;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chi siamo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servizi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contatti</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <form class="d-flex mt-3 mt-lg-0" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <div class="container my-5">
        <div class="row">

            <div class="col-9">
                <h1>Servizi</h1>
                <p>Noi offriamo....</p>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="px-5 py-3" style="background-color: #007cdc;">
        <div class="container-fluid">
            <p class="text-light">Copyright &copy; 2024</p>
        </div>
    </footer>





    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootswatch.com/_vendor/prismjs/prism.js"></script>
</body>

</html>