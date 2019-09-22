$(document).ready(function(){
    var asc = $("#asc");
    var desc = $("#desc");
    var hidden = $("#hidden");
    var search = $("#search");
    var name = $("#item-search");

    asc.click(function(){
        var output = $(".item-row");
        $.ajax({
            url: "modules/sort.php",
            type: "POST",
            data: { order: "asc", type: hidden.val()},
            success: function(data) {
                output.html(data);
            }
        });
    });

    desc.click(function(){
        var output = $(".item-row")
        $.ajax({
            url: "modules/sort.php",
            type: "POST",
            data: { order: "desc", type: hidden.val()},
            success: function(data) {
                output.html(data);
            }
        });
    });

    search.click(function(){
        var output = $(".item-row");
        $.ajax({
            url: "modules/sort.php",
            type: "POST",
            data: { search: "search", name: name.val(), type: hidden.val()},
            success: function(data) {
                output.html(data);
            }
        });
    });
});