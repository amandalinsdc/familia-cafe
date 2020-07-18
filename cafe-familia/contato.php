<?php require_once('functions.php'); ?>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); 
?>

<main class="page-contato">
<section>
    <div class="container">
        <h1 class="text-center titulo-paginas">Contato</h1>
        
        <article class="text-center"> 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper ante ante, <br>
        sit amet finibus massa euismod sed. Vestibulum ipsum nunc, scelerisque a malesuada id, <br>
        luctus nec arcu. Phasellus ut ex id dolor molestie pellentesque. Cras quis sem elit. <br>
        </article>

        <?php if ($db) : ?>
        <div class="container smaller py-5">
            <div class="alert alert-success" style="display: none">Dados enviados com sucesso. Aguarde enquanto o download começa...</div>
            <form name="form_name" enctype="multipart/form-data" method="post" action="add.php" id="form_index">
                    <div class="form-group" >
                        <label for="nome">Nome</label>
                        <input class="form-control" placeholder="Nome completo" id="nome" type="text" required name="customer['nome']">
                    </div>

                    <div class="form-group" >
                        <label for="email">E-mail</label>
                        <input class="form-control" placeholder="email@exemplo.com" id="email" type="email" required name="customer['email']">
                    </div>

                    <div class="form-group" >
                        <label for="email">Telefone</label>
                        <input class="form-control" placeholder="(DDD) 99999-9999" id="telefone" type="tel" maxlength="16" name="customer['telefone']">
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" placeholder="Tire suas dúvidas..." id="mensagem" required type="text" rows="4" name="customer['mensagem']"></textarea>
                    </div>
                    <div id="actions" >
                        <div class="d-flex justify-content-end">
                            <button id="submit_id" value="submit" type="submit" class="btn btn-secondary btn-block">Enviar</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center container" style="height:25px;">
                        <small id="alert_id" class="alert_class"></small>
                    </div>
                
            </form>
            </div>
        </div>


        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
            </div>

        <?php endif; ?>
    </div>
</section>

<?php include(FOOTER_TEMPLATE); ?>