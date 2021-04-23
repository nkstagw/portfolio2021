$(function () {

  // ヘッダー_ナビゲーション・アンダーバー・三角矢印 制御
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
      $(".header__subItems").not($(this).next()).removeClass("nav-is-active");
    }
  })
  // ヘッダー_ナビゲーション・アンダーバー・三角矢印 制御

  // fv_スライダー
	$('.fv__items').slick({
    autoplay:true,
    fade:true,
    autoplaySpeed:4000,
		speed:4000,
		easing:'swing',
    slidesToShow:1,
    prevArrow:false,
		nextArrow:false,
		responsive:[
      {
				breakpoint:1025,
				settings:{
					
				}
			},
			{
				breakpoint:769,
				settings:{

				}
			}
		]
  });

		//tab部分の実装
$('.form__tabItem').click(function () {
	if($(this).hasClass('is-active')){
	}
	else{
		$('.form__tabItem').removeClass('is-active');
		$(this).addClass('is-active');
	}
	var id_check = $(this).attr('data-tab');
	var id = `#${id_check}`;
	const checkStatus = $(id).hasClass('is-active');
	if(checkStatus){
		
	}
	else{
		$('.form__cntItem').removeClass('is-active');
		$(id).addClass('is-active');
	}
	});


});
