<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Novo Curso</h1>

                <form class="custom-form" method="post" action="<?= base_url('cursos/inserir') ?>">

                    <label>Nome:</label><br>
                    <input type="text" name="nome" class="form-control"><br><br>

                    <label>Descrição:</label><br>
                    <textarea name="descricao" class="form-control"></textarea><br><br>

                    <label>Carga Horária:</label><br>
                    <input type="number" name="carga_horaria" class="form-control"><br><br>

                    <button type="submit" class="form-control">Salvar</button>

                </form>
            </div>
        </div>
    </section>
</main>

<?= view('sistema/layout/footer') ?>