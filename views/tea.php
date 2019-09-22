<?php 
    $teas = $connection->query("SELECT * FROM tea");
?>
<h1 class="info-header">Tea</h1>
<div id="change-view">
    <button type="button" id="asc" class="btn btn-primary">Asc</button>
    <button type="button" id="desc" class="btn btn-info">Desc</button>
    <input type="text" id="item-search"/>
    <input type="hidden" id="hidden" value="tea"/>
    <button type="button" id="search" class="btn btn-success">Search</button>
</div>
<div class="item-row">
    <?php
        while ($tea = $teas->fetch_object()) {
            echo("<div class='col col-sm-4 each-tea'><a href='index.php?tea=".$tea->tea_id."'><img src='".$tea->image."' alt='".$tea->name."'><span class='item-name'>".$tea->name."</span><span>$".$tea->price."</span></a></div>");
        }
    ?>
</div>
<script src="assets/js/changeview.js"></script>