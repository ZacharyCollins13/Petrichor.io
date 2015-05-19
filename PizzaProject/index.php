<!DOCTYPE HTML>
<html>
    <h5>Order?</h5>
    <body>
        <?php if(empty($_POST)) { ?>
            <form method="post">
                <input type="text" name="order">
                <input type="submit" value="Order">
                <br />
            </form>
        <?php } else {
            echo $_POST['order'];
        } ?>
    </body>
</html>

<?php
/*
if(!empty($_POST)) {
    echo $_POST['order'];
}

    $test = array(
        'test' => 123,
        'dog' => 'hi',
        15 => 'number'
    );

    $test[15];
*/




