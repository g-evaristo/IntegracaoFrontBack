<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Dashboard</h1>

                <p>Bem-vindo ao sistema!</p>

                <h2>Módulos</h2>

                <ul>
                    <li><a href="<?= base_url('alunos') ?>">Alunos</a></li>
                    <li><a href="<?= base_url('cursos') ?>">Cursos</a></li>
                    <li><a href="<?= base_url('salas') ?>">Salas</a></li>
                    <li><a href="<?= base_url('matriculas') ?>">Matrículas</a></li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?= view('sistema/layout/footer') ?>