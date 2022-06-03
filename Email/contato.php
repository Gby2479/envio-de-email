<?php
include "config.php";
include DIR_PATH."./template/header.php";
include DIR_PATH."./template/nav.php";
?>
<main>
    <h2>Contato</h2>
    <div id="formulario">
        <form action="enviaremail.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="text" name="assunto" placeholder="Assunto" required>
            <textarea name="msg" id="msg" cols="39" rows="7" placeholder="Mensagem"></textarea>
            <input type="submit" name="Enviar">
            
        </form>
    </div>
</main>
<?php 
require DIR_PATH."./template/footer.php";

