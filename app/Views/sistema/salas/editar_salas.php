<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Editar Sala</h1>

                <form class="custom-form" method="post" action="<?= base_url('salas/atualizar/'.$sala['ID']) ?>">
                    <label>Nome:</label><br>
                    <input type="text" name="nome" value="<?= $sala['NOME'] ?>" class="form-control"><br><br>

                    <label>Capacidade:</label><br>
                    <input type="number" name="capacidade" value="<?= $sala['CAPACIDADE'] ?>" class="form-control"><br><br>

                    <label>Bloco:</label><br>
                    <input type="text" name="bloco" value="<?= $sala['BLOCO'] ?>" class="form-control"><br><br>

                    <button type="submit" class="form-control">Atualizar</button>
                </form>
            </div>
        </div>
    </section>
</main>
<?= view('sistema/layout/footer') ?>
