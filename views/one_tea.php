<?php
    $id = $_GET["tea"];
    $item = $connection->query("SELECT * FROM tea WHERE tea_id = $id");
    $tea = $item->fetch_object();
?>
<div class="one-item">
    <div class="img-text">
        <?php
            echo("<div class='col col-sm-6'><img src='".$tea->image."' alt='".$tea->name."'></div><div class='col col-sm-6'><span class='item-name'>".$tea->name."</span><span class='item-price'>$".$tea->price."</span><p class='item-description'>".$tea->description."</p></div>");
        ?>
    </div>
</div>