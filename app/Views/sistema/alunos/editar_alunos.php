<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Editar Aluno</h1>

                <form class="custom-form" method="post" action="<?= base_url('alunos/atualizar/'.$aluno['ID']) ?>">

                    <label>Nome:</label><br>
                    <input type="text" name="nome" value="<?= $aluno['NOME'] ?>" class="form-control"><br><br>

                    <label>Email:</label><br>
                    <input type="text" name="email" value="<?= $aluno['EMAIL'] ?>" class="form-control"><br><br>

                    <label>Telefone:</label><br>
                    <input type="text" name="telefone" value="<?= $aluno['TELEFONE'] ?>" class="form-control"><br><br>

                    <label>CPF:</label><br>
                    <input type="text"  name="cpf" value="<?= $aluno['CPF'] ?>" class="form-control"><br><br>

                    <label>Data Nascimento:</label><br>
                    <input type="date"  name="data_nascimento" value="<?= $aluno['DATA_NASCIMENTO'] ?>" class="form-control"><br><br>

                    <button type="submit" class="form-control">Atualizar</button>

                </form>
            </div>
        </div>
    </section>
</main>

<?= view('sistema/layout/footer') ?>