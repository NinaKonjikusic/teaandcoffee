<?php
    $id = $_GET["coffee"];
    $item = $connection->query("SELECT * FROM coffee WHERE coffee_id = $id");
    $coffee = $item->fetch_object();
?>
<div class="one-item">
    <div class="img-text">
        <?php
            echo("<div class='col col-sm-6'><img src='".$coffee->image."' alt='".$coffee->name."'></div><div class='col col-sm-6'><span class='item-name'>".$coffee->name."</span><span class='item-price'>$".$coffee->price."</span><p class='item-description'>".$coffee->description."</p></div>");
        ?>
    </div>
</div>