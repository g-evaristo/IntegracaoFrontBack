<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Lista de Cursos</h1>
                <a class="btn btn-primary btn-sm mb-3 w-auto" href="<?= base_url('cursos/novo') ?>">Novo Curso</a> <br><br>

                <table class="table table-striped table-hover table-bordered" border="1">
                <tr>
                    <th class="p-4">ID</th>
                    <th class="p-4">Nome</th>
                    <th class="p-4">Carga Horária</th>
                    <th class="p-4">Descrição</th>
                    <th class="p-4">Ações</th>
                </tr>

                <?php foreach($cursos as $curso): ?>
                <tr>
                    <td class="p-3"><?= $curso['ID'] ?></td>
                    <td class="p-3"><?= $curso['NOME'] ?></td>
                    <td class="p-3"><?= $curso['CARGA_HORARIA'] ?></td>
                    <td class="p-3"><?= $curso['DESCRICAO'] ?></td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary me-2" href="<?= base_url('cursos/editar/'.$curso['ID']) ?>">Editar</a>
                        <a class="btn btn-sm btn-outline-danger" href="<?= base_url('cursos/excluir/'.$curso['ID']) ?>"
                            onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>
</main>

<?= view('sistema/layout/footer') ?>
        
                