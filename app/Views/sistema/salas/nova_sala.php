<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Nova Sala</h1>

                <form class="custom-form" method="post" action="<?= base_url('salas/inserir') ?>">

                <label>Nome:</label><br>
                <input type="text" name="nome" class="form-control"><br><br>

                <label>Capacidade:</label><br>
                <input type="number" name="capacidade" class="form-control"><br><br>

                <label>Bloco:</label><br>
                <input type="text" name="bloco" class="form-control"><br><br>

                <button type="submit" class="form-control">Salvar</button>

                </form>
            </div>
        </div>
    </section>
</main>

<?= view('sistema/layout/footer') ?>