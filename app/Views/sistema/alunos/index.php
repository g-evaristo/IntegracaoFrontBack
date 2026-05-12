<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Lista de Alunos</h1>
                <br><br>
                
                <!--
                btn: aplica o estilo base de botão do Bootstrap
                btn-primary: aplica a cor personalizada usando var(--primary-color)
                btn-sm: deixa o botão menor
                mb-3: adiciona margem inferior
                w-auto: mantém a largura automática, sem ocupar 100%
                -->
                <a class="btn btn-primary btn-sm mb-3 w-auto" href="<?= base_url('alunos/novo') ?>">Novo Aluno</a><br><br>
                
                <!-- 
                table-striped   -> uma linha de cada cor
                table-hover     -> efeito ao passar o mouse
                table-bordered  -> bordas em todos os lados 
                -->
                <table class="table table-striped table-hover table-bordered" border="1">
                    <tr>
                        <!-- p -> padding -->
                        <th class="p-4">ID</th>
                        <th class="p-4">Nome</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Telefone</th>
                        <th class="p-4">CPF</th>
                        <th class="p-4">Data Nascimento</th>
                        <th class="p-4">Ações</th>
                    </tr>

                    <?php foreach($alunos as $aluno): ?>
                    <tr>
                        <td class="p-3"><?= $aluno['ID'] ?></td>
                        <td class="p-3"><?= $aluno['NOME'] ?></td>
                        <td class="p-3"><?= $aluno['EMAIL'] ?></td>
                        <td class="p-3"><?= $aluno['TELEFONE'] ?></td>
                        <td class="p-3"><?= $aluno['CPF'] ?></td>
                        <td class="p-3"><?= $aluno['DATA_NASCIMENTO'] ?></td>
                        <td class="p-3">
                            <a class="btn btn-sm btn-outline-primary me-2" href="<?= base_url('alunos/editar/'.$aluno['ID']) ?>">Editar</a>
                            <a class="btn btn-sm btn-outline-danger" href="<?= base_url('alunos/excluir/'.$aluno['ID']) ?>"
                                onclick="return confirm('Tem certeza que deseja excluir?')"> Excluir </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>
</main>

<?= view('sistema/layout/footer') ?>

