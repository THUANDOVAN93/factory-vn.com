// global.js

$(function() {
	$(".aside_ul").css("display","none");
	$(".navcr").children().addClass("menuon");
	$(".navcr").next().css("display","block");
	$(".aside_p").click(function(){
		$(".aside_ul").slideUp("slow");
		var slideBtn = $(this).next();
		var slideBtnNow = $(this).next().css("display");
		if (slideBtnNow == "none") {
			$(this).children().addClass("menuon");
			$(slideBtn).slideDown("slow");
		} else {
			$(this).children().removeClass("menuon");
			$(slideBtn).slideUp("slow");
		}
	});
});