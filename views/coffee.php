<?php 
    $coffees = $connection->query("SELECT * FROM coffee");
?>
<h1 class="info-header">Coffee</h1>
<div id="change-view">
    <button type="button" id="asc" class="btn btn-primary">Asc</button>
    <button type="button" id="desc" class="btn btn-info">Desc</button>
    <input type="text" id="item-search"/>
    <input type="hidden" id="hidden" value="coffee"/>
    <button type="button" id="search" class="btn btn-success">Search</button>
</div>
<div class="item-row">
    <?php
        while ($coffee = $coffees->fetch_object()) {
            echo("<div class='col col-sm-4 each-tea'><a href='index.php?coffee=".$coffee->coffee_id."'><img src='".$coffee->image."' alt='".$coffee->name."'><span class='item-name'>".$coffee->name."</span><span>$".$coffee->price."</span></a></div>");
        }
    ?>
</div>
<script src="assets/js/changeview.js"></script>