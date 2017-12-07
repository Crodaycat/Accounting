$(document).ready(function(){

	$('.btn-menu').click(function(e){
		e.preventDefault();
	});

	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();

		if($(this).hasClass('activated-menu')){
			$(this).removeClass('activated-menu');
			$(this).children(':first-child').children(':last-child').removeClass('fa-rotate-270');
			$(this).children('ul').slideUp();
		}
		else {
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activated-menu');
			$('.menu li a i').removeClass('fa-rotate-270');
			$(this).addClass('activated-menu');
			$(this).children('ul').slideDown();
			$(this).children(':first-child').children(':last-child').addClass('fa-rotate-270');
		}

	});

	$('.btn-menu').click(function(){
		if ($('.contanier-menu').hasClass('container-menu-close')){
			$('.contanier-menu').removeClass('container-menu-close');
            closeOpenContainer();
		}
		else
		{
			$('.contanier-menu').addClass('container-menu-close');		
            closeOpenContainer();
		}
	});

	$(window).resize(function(){
		if ($(document).width() < 780) {
			$('.contanier-menu').addClass('container-menu-close');
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activated-menu');
            $('.menu li a i').removeClass('fa-rotate-270');
            if ($('.btn-menu .icon').hasClass('fa-times')) {
                closeOpenContainer();
            }

		}
		else if($('.contanier-menu').hasClass('container-menu-close')){
         	$('.contanier-menu').removeClass('container-menu-close');
        }
	});

	$('.menu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});


    function closeOpenContainer() {
        if ($('.btn-menu .icon').hasClass('fa-times')){
            $('.btn-menu .icon').removeClass('fa-times');
            $('.btn-menu .icon').addClass('fa-bars');
        }
        else{
            $('.btn-menu .icon').addClass('fa-times');
            $('.btn-menu .icon').removeClass('fa-bars');	
        }
    }

});