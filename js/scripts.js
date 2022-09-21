// ********* PROFILE SCRIPT START  *********** \\
$(".edit_profile_option").click(function(){
    $(".my_profile").addClass("hide");
    $(".edit_profile_start").removeClass("hide");
});
$(".edit_password_option").click(function () {
    $(".my_profile").addClass("hide");
    $(".edit_password_start").removeClass("hide");
});
$(".add_address_btn").click(function () {
    $(".current_addresses").addClass("hide");
    $(".new_address_section").removeClass("hide");
});
$(".see_order_details").click(function () {
    $(".the_orders_table").addClass("hide");
    $(".orders_details_start_here").removeClass("hide");
});