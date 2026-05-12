<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Novo Aluno</h1>

                <form class="custom-form" method="post" action="<?= base_url('alunos/inserir') ?>">

                    <label>Nome:</label><br>
                    <input type="text" name="nome" class="form-control"><br><br>

                    <label>Email:</label><br>
                    <input type="email" name="email" class="form-control"><br><br>

                    <label>Telefone:</label><br>
                    <input type="tel" name="telefone" class="form-control"><br><br>

                    <label>CPF:</label><br>
                    <input type="text" name="cpf" class="form-control"><br><br>

                    <label>Data de Nascimento:</label><br>
                    <input type="date" name="data_nascimento" class="form-control"><br><br>

                    <button type="submit" class="form-control">Salvar</button>

                </form>
            </div>
        </div>
    </section>
</main>

<?= view('sistema/layout/footer') ?>