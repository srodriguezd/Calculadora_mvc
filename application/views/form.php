<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 17:13
 */

require 'application/layouts/header.phtml'; ?>

    <form method="post" action="/index.php?controller=calculator&action=<?php echo $accion; ?>">
        <input type="number" name="op1"><br>
        <input type="number" name="op2"><br>
        <input type="submit" value="ok">
    </form>

<?php require 'application/layouts/footer.phtml'; ?>