$(document).ready(function(){
    var userlist = $("#user-list");
    var tealist = $("#tea-list");
    var coffeelist = $("#coffee-list");
    var adduserlist = $("#add-user-list");
    var addtealist = $("#add-tea-list");
    var addcoffeelist = $("#add-coffee-list");

    var users_pane = $("#users_pane");
    var tea_pane = $("#tea_pane");
    var coffee_pane = $("#coffee_pane");
    var add_user_pane = $("#add_user_pane");
    var add_tea_pane = $("#add_tea_pane");
    var add_coffee_pane = $("#add_coffee_pane");

    userlist.click(function(){
        if (users_pane.hasClass("hidden_div")) {
            users_pane.removeClass("hidden_div");
        }
        else {
            users_pane.addClass("hidden_div");
        }
    });

    tealist.click(function(){
        if (tea_pane.hasClass("hidden_div")) {
            tea_pane.removeClass("hidden_div");
        }
        else {
            tea_pane.addClass("hidden_div");
        }
    });

    coffeelist.click(function(){
        if (coffee_pane.hasClass("hidden_div")) {
            coffee_pane.removeClass("hidden_div");
        }
        else {
            coffee_pane.addClass("hidden_div");
        }
    });

    adduserlist.click(function(){
        if (add_user_pane.hasClass("hidden_div")) {
            add_user_pane.removeClass("hidden_div");
        }
        else {
            add_user_pane.addClass("hidden_div");
        }
    });

    addtealist.click(function(){
        if (add_tea_pane.hasClass("hidden_div")) {
            add_tea_pane.removeClass("hidden_div");
        }
        else {
            add_tea_pane.addClass("hidden_div");
        }
    });

    addcoffeelist.click(function(){
        if (add_coffee_pane.hasClass("hidden_div")) {
            add_coffee_pane.removeClass("hidden_div");
        }
        else {
            add_coffee_pane.addClass("hidden_div");
        }
    });

    var del_user = $(".del_user");
    del_user.click(function(){
        var id = $(this).attr("id");
        $.ajax({
            url: "modules/delete.php",
            type: "POST",
            data: { id: id, type: "user" },
            success: function(data) {
                location.reload();
            },
        });
    });

    var del_tea = $(".del_tea");
    del_tea.click(function(){
        var id = $(this).attr("id");
        $.ajax({
            url: "modules/delete.php",
            type: "POST",
            data: { id: id, type: "tea" },
            success: function(data) {
                location.reload();
            },
        });
    });

    var del_coffee = $(".del_coffee");
    del_coffee.click(function(){
        var id = $(this).attr("id");
        $.ajax({
            url: "modules/delete.php",
            type: "POST",
            data: { id: id, type: "coffee" },
            success: function(data) {
                location.reload();
            },
        });
    });

});