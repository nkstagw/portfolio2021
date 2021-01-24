$(function () {
  $(".header__navLink").click(function () {
    if($(this).hasClass("is-active")){
      $(this).removeClass("is-active")
    }
    else{
      $(this).addClass("is-active");
      $(".header__navLink").not(this).removeClass("is-active");
    }

    if($(this).next().hasClass("nav-is-active")){
      $(this).next().removeClass("nav-is-active")
    }
    else{
      $(this).next().addClass("nav-is-active");
      $(".header__globalNav").not($(this).next()).removeClass("nav-is-active");
    }
  })
})