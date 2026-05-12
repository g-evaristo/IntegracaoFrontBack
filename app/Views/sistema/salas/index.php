<?= view('sistema/layout/header') ?>

<main>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <h1>Lista de Salas</h1>

                <a class="btn btn-primary btn-sm mb-3 w-auto" href="<?= base_url('salas/novo') ?>">Nova Sala</a><br><br>

                <table class="table table-striped table-hover table-bordered" border="1">
                <tr>
                    <th class="p-4">ID</th>
                    <th class="p-4">Nome</th>
                    <th class="p-4">Capacidade</th>
                    <th class="p-4">Bloco</th>
                    <th class="p-4">Ações</th>
                </tr>

                <?php foreach($salas as $sala): ?>
                <tr>
                    <!-- Exibe dados vindos do banco -->
                    <td class="p-3"><?= $sala['ID'] ?></td>
                    <td class="p-3"><?= $sala['NOME'] ?></td>
                    <td class="p-3"><?= $sala['CAPACIDADE'] ?></td>
                    <td class="p-3"><?= $sala['BLOCO'] ?></td>
                    <td class="p-3">
                        <!-- Link de edição -->
                        <a class="btn btn-sm btn-outline-primary me-2" href="<?= base_url('salas/editar/'.$sala['ID']) ?>">Editar</a>

                        <!-- Link de exclusão -->
                        <a class="btn btn-sm btn-outline-danger" href="<?= base_url('salas/excluir/'.$sala['ID']) ?>">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </table>
            
            </div>
        </div>
    </section>
</main>
<?= view('sistema/layout/footer') ?>

