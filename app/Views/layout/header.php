<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/heroes.css" rel="stylesheet">
    <style>
        body {
            min-height: 75rem;
            padding-top: 3.5rem;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white border-bottom fixed-top">
        <div class="container">
            <!-- <a class="navbar-brand text-danger" href="/"><i class="fa-solid fa-wallet"></i> SIMS PPOB</a> -->
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKWSURBVHgBzZe/b9NAFMe/z7GTFlBIBqQAizsEioREKrG3HdhbCYkJhQ7MdGZpsiA2wsxAujJA+QdomKqy0AUBYuAkBMoWE36k5Jw87twk0Pyy4/xQP8vZ8vne8/e9e75HCEjFTiQi1txaBMYygzNMZBM4oZ8xyCFmAdABqFmS9cOXSeE4QdYlX8OLKdts0CaIsm2DgWAqStnMJ0VZIIwD+osta35LzdjEODAKUtbygxTp64D+aqtJu+rSxmQQss6r/dQweoynL2YmbFxjW1Ha/Zk+l+l+cEyBKXx5Nz1KdBzwYh6dfztF4/85UVtq50QnBF7CTd+4xm7Z8vAUaEn/GTNEhWJBh8JTINKkHGaMaZG3vali2yr2fyp+L0Tv52Fl7yIIcvsJ6g+2/KY5KhcWqJpO3TGInvrNPv3xG0bh1+ULvnOazBumKrErCAF//YLa7ZveGJYIsGwaTNdAjFFpvH/nGY89fNT/+f4e3BfPhq6hfmgZpUDIrVf97g3m+q0Bq8PXAYWtdsEIf7gBaCV+X1+Eq5JvRBIGJgBrNeJnEQZT7URnXBWMK1dx6tU+QuCYKlZC5UEGIXGf949z480eAiCoeilVNEBZv5nddYCrVdTWboy1DcFc1AqUlAK+DnRD8fhQ2YMUImW3ZDTk3M5RHgxnlAwPOlcfXr2/4Y/0+QIR7mGWKPnPfCpveNvQjXABM0ZK5PXoOZD8UBbMeIwZoW21j2WdQuTKWE4NAtNHuLKWa990HEgK4UiDV6fsROtQ+q9HOFaKdSjAxvqUnBBSrd3dG5y8xkSjlZD12NIkElOvcXQM798jBmpOI03kgpTrjlFd2Ji3XcmF0M1pjyOt9ly9saJPUf3ac3V/0ABeN+ThTtD2/C8+BTObmtMPygAAAABJRU5ErkJggg==" class="img-fluid" alt="">
            <a class="navbar-brand" href="/">&nbsp; SIMS PPOB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
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
                    </li> -->
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Top Up</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Transaction</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">Akun</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>