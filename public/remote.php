<?php 
    require_once '../autoloader.php';

    session_start(); 
    use POO\Cliente\PessoaFisica,
        POO\Interfaces\CobrancaInterface;  
?>


<?php $lista = unserialize($_SESSION["lista"]); ?>

<?php if (isset($_POST["id"])): ?>
    <?php if (!empty($_POST["id"]) or $_POST["id"] == 0): ?>
        <?php if (array_key_exists($_POST["id"], $lista)): ?>
            <?php $user = $lista[$_POST["id"]]; ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getNome(); ?></th>
                </tr>
                
                <?php if($user instanceof PessoaFisica): ?>
                <tr>
                    <th>Cpf</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getCpf(); ?></th>
                </tr>
                <?php else:?>
                <tr>
                    <th>Cnpj</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getCnpj(); ?></th>
                </tr>
                <?php endif;?>
                
                <?php if($user instanceof PessoaFisica): ?>
                <tr>
                    <th>Sexo</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getSexo(); ?></th>
                </tr>          
                <?php endif;?>
                <tr>
                    <th>Endereço</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getEndereço(); ?></th>
                </tr>
                <tr>
                    <th>Email</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getEmail(); ?></th>
                </tr>
                <tr>
                    <th>Celular</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getCelular(); ?></th>
                </tr>
                <tr>
                    <th>Telefone</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getTelefone(); ?></th>
                </tr>
                <tr>
                    <th>Importância</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getImportancia(); ?></th>
                </tr>
                <?php if ($user instanceof CobrancaInterface):?>
                <tr>
                    <th>End. Cobrança</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getEnderecoCobranca(); ?></th>
                </tr>
                <?php endif;?>
            </table>
        <?php endif; ?>
    <?php endif; ?>
    <?php
 endif; 



