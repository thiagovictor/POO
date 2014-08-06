<?php session_start(); ?>
<?php require_once '../classes/Cliente.php'; ?>
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
                <tr>
                    <th>Cpf</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getCpf(); ?></th>
                </tr>
                <tr>
                    <th>Sexo</th>
                    <th>&nbsp;&nbsp;<?php echo $user->getSexo(); ?></th>
                </tr>
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
            </table>
        <?php endif; ?>
    <?php endif; ?>
    <?php
 endif; 



