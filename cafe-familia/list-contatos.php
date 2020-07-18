<?php
    require_once('functions.php');
    listContatos();
?>

<?php include(HEADER_TEMPLATE); ?>
<main class="page-list-cadastro">
<section>
    <div class="container">
        <h1 class="text-center titulo-paginas">Lista de contatos</h1>
        <div class="table-responsive">
            <table class="table table-hover mb-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="30%">Nome</th>
                        <th width="20%">Email</th>
                        <th>Data do cadastro</th>
                        <th width="20%" class="text-center">Opções</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($customers) : ?>
                <?php foreach ($customers as $customer) : ?>
                    <tr>
                        <td><?php echo $customer['contato_idx']; ?></td>
                        <td width="30%"><?php echo $customer['nome']; ?></td>
                        <td width="20%"><?php echo $customer['email']; ?></td>
                        <td><?php echo $customer['data_cadastro']; ?></td>
                        <td width="20%" class="actions text-right">
                            <a href="view.php?id=<?php echo $customer['contato_idx']; ?>" class="btn btn-sm btn-success mb-lg-0 mb-2"> Visualizar</a>
                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['contato_idx']; ?>">
                                Excluir
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        
    </div>
    </div>
</section>
<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>