<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Editar Curso</h1>

                <form class="custom-form" method="post" action="<?= base_url('cursos/atualizar/'.$curso['ID']) ?>">

                    <label>Nome:</label><br>
                    <input type="text" name="nome" value="<?= $curso['NOME'] ?>" class="form-control"><br><br>

                    <label>Descrição:</label><br>
                    <textarea name="descricao" class="form-control"><?= $curso['DESCRICAO'] ?></textarea><br><br>

                    <label>Carga Horária:</label><br>
                    <input type="number" name="carga_horaria" value="<?= $curso['CARGA_HORARIA'] ?>" class="form-control"><br><br>

                    <button type="submit" class="form-control">Atualizar</button>

                </form>
            </div>
        </div>
    </section>
</main>

<?= view('sistema/layout/footer') ?>
