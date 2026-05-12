<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sistema de Gestão Escolar</title>
        <link href="<?= base_url('assets/style/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/style/css/bootstrap-icons.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/style/css/templatemo-kind-heart-charity.css') ?>" rel="stylesheet">
    </head>
    <body id="section_1">
        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            Tambaú, SP
                        </p>
                        <p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>
                            <a href="mailto:senai@senai.com">
                                senai@senai.com
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('/') ?>">
                    <span>
                        Sistema de Gestão Escolar
                    </span>
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/dashboard') ?>">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/alunos') ?>">Alunos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/cursos') ?>">Cursos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/salas') ?>">Salas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?= base_url('/matriculas') ?>">Matrículas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>