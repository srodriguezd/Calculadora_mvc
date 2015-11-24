<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 17:13
 */

require 'application/layouts/header.phtml'; ?>

    <ul>
        <li><a href="/index.php?controller=index&action=index">Index</a></li>
        <li><a href="/index.php?controller=calculator&action=suma">Suma</a></li>
        <li><a href="/index.php?controller=calculator&action=resta">Resta</a></li>
        <li><a href="/index.php?controller=calculator&action=multiplicacion">Multiplicacion</a></li>
        <li><a href="/index.php?controller=calculator&action=division">Division</a></li>
    </ul>

<?php require 'application/layouts/footer.phtml'; ?>