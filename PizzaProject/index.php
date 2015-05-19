<!DOCTYPE HTML>
<h5>Order?</h5>
<body>
    <form method="post">
        <input type="text" name="order">
        <input type="submit" value="Order">
        <br />
    </form>
</body>
</html>

<?php

if(!empty($_POST)) {
    echo $_POST['order'];
}
