<?php
require_once '../classes/Cliente.php';
$lista = array();
/*
 * Criando objetos de teste automaticamente.
 */
session_start();
for ($i = 0; $i < 10; $i++) {
    $cliente = new Cliente("Cliente" . $i, "5487124354" . $i);
    $cliente->setCelular("8755-219" . $i)
            ->setTelefone("3472-253{$i}")
            ->setEndereço("Rua passa vinte n: " . $i)
            ->setId($i)
            ->setSexo("M")
            ->setEmail("Cliente{$i}@empresa.com.br");
    $lista[] = $cliente;
}

if(isset($_GET["order"])){
    arsort ($lista);
    $href = 'index.php';
    $img = "img/DESC.png";
}else{
    asort($lista);
    $href = 'index.php?order=DESC';
    $img = "img/ASC.png";
}
$_SESSION["lista"] = serialize($lista);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>POO</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script type="text/javascript">
            $(function() {

                $(document).on('click', '.edit-record', function(e) {
                    e.preventDefault();

                    $(".modal-body").html('');
                    $(".modal-body").addClass('loader');
                    $("#myModal").modal('show');

                    $.post('remote.php',
                            {id: $(this).attr('data-id')},
                    function(html) {
                        $(".modal-body").removeClass('loader');
                        $(".modal-body").html(html);
                    }
                    );

                });

            });

        </script>
        <style>
            .loader{
                background-image: url(img/ajax-loader.gif);
                background-repeat: no-repeat;
                background-position: center;
                height: 100px;
            }
            label { display: block; margin-top: 10px; }
            label.error { float: none; color: red; margin: 0 .5em 0 0; vertical-align: top; font-size: 12px }
            p { clear: both; }
            .submit { margin-top: 1em; }
            em { font-weight: bold; padding-right: 1em; vertical-align: top; }
        </style>
    </head>
    <body>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Registro de lan&ccedil;amentos</h4>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<!--<button type="button" class="btn btn-primary">Save changes</button>-->
		  </div>
		</div>
	  </div>
	</div>
        <h2>Listagem de objetos clientes</h2>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th><a href="<?php echo $href; ?>" >#&nbsp;<img src="<?php echo $img; ?>"></a></th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $user): ?>
                    <tr>
                        <th><?php echo $user->getId(); ?></th>
                        <th><a href='#' class='edit-record' data-id='<?php echo $user->getId(); ?>'><?php echo $user->getNome(); ?></a></th>
                        <th><?php echo $user->getEmail(); ?></th>
                        <th><?php echo $user->getCelular(); ?></th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>