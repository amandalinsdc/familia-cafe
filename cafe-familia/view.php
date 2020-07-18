<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<main class="view-contato">
<section>
    <div class="container">
        <h3 class="text-center titulo-paginas smaller">Editar dados de: <?php echo $customer['nome'];?></h3>
		<hr>

		<?php if (!empty($_SESSION['message'])) : ?>
			<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
		<?php endif; ?>

		<div class="pb-5">
			<dl class="dl-horizontal">

				<dt>Nome:</dt>
				<dd><?php echo $customer['nome']; ?></dd>
				<dt>Email:</dt>
				<dd><?php echo $customer['email']; ?></dd>

				<dt>telefone:</dt>
				<dd><?php echo $customer['telefone']; ?></dd>

				<dt>mensagem:</dt>
				<dd><?php echo $customer['mensagem']; ?></dd>

			</dl>

			<div id="actions" class="row">
				<div class="col-md-12">
				<a href="/cafe-familia/list-contatos.php" class="btn btn-secondary">Voltar</a>
				</div>
			</div>
		</div>
	</div>

<?php include(FOOTER_TEMPLATE); ?>