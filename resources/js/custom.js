$(document).on('click','.navbar-toggler',function(){
    if($('#app').hasClass("bmd-drawer-out")){
        $('#app').addClass("bmd-drawer-in")
        $('#app').removeClass("bmd-drawer-out")
    }else{
        $('#app').addClass("bmd-drawer-out")
        $('#app').removeClass("bmd-drawer-in")
    }
    console.log("$");
});
$(document).on('click','.dropdown-toggle',function(){
  $(this).nextAll('div').first().toggleClass('show')
})