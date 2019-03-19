function createTab(){
	$('.sliderWrapper div.sliderBox').animate({'opacity':'0',left:0});
	$('.sliderWrapper div.sliderBox:first').animate({'opacity':'1',left:0});
	$('.sliderWrapper ul.tabNav li:first').addClass('active');
	$('.sliderWrapper ul.tabNav li a').click(function(){ 
		$('.sliderWrapper ul.tabNav li').removeClass('active');
		$(this).parent().addClass('active');
		var currentTab = $(this).attr('href'); 
		$('.sliderWrapper div.sliderBox').animate({'opacity':'0',left:'-100%'}).animate({left:'100%'});
		$(currentTab).animate({'opacity':'1',left:0});
		return false;
	});
}
function createTabAction(){
	$('.takeactionWrapper div.takeactionBox').hide();
	$('.takeactionWrapper div.takeactionBox:first').show();
	$('.takeactionWrapper ul.tabNav li:first').addClass('active');
	$('.takeactionWrapper ul.tabNav li a').click(function(){ 
		$('.takeactionWrapper ul.tabNav li').removeClass('active');
		$(this).parent().addClass('active'); 
		var currentTab = $(this).attr('href'); 
		$('.takeactionWrapper div.takeactionBox').hide();
		$(currentTab).show();
		return false;
	});
}


function createTabActionNew(selected_tab){
	$('.takeactionWrapper div.takeactionBox').hide();
	
	if(selected_tab==''){
		$('.takeactionWrapper div.takeactionBox:first').show();
		$('.takeactionWrapper ul.tabNav li:first').addClass('active');
	}
	else{
		if(selected_tab==1){
			$('.takeactionWrapper div.takeactionBox:first').show();
			$('.takeactionWrapper ul.tabNav li:first').addClass('active');
		}
		else if(selected_tab==2){
		
			$('.takeactionWrapper div.takeactionBox#tabs-2').show();
			$('.takeactionWrapper ul.tabNav li#tabContribute').addClass('active');
		}
		else if(selected_tab==3){
		
			$('.takeactionWrapper div.takeactionBox#tabs-3').show();
			$('.takeactionWrapper ul.tabNav li#tabShare').addClass('active');
		}
	}
	$('.takeactionWrapper ul.tabNav li a').click(function(){ 
		$('.takeactionWrapper ul.tabNav li').removeClass('active');
		$(this).parent().addClass('active'); 
		var currentTab = $(this).attr('href'); 
		$('.takeactionWrapper div.takeactionBox').hide();
		$(currentTab).show();
		return false;
	});
}

function select_contribute_tab(selected_tab){
	
	if(selected_tab==''){
		$('.takeactionWrapper div.takeactionBox:first').show();
		$('.takeactionWrapper ul.tabNav li:first').addClass('active');
	}
	else{
		if(selected_tab==1){
			$('.takeactionWrapper div.takeactionBox:first').show();
			$('.takeactionWrapper ul.tabNav li:first').addClass('active');
		}
		else if(selected_tab==2){
		
			$('.takeactionWrapper div.takeactionBox#tabs-2').show();
			$('.takeactionWrapper ul.tabNav li#tabContribute').addClass('active');
		}
		else if(selected_tab==3){
		
			$('.takeactionWrapper div.takeactionBox#tabs-3').show();
			$('.takeactionWrapper ul.tabNav li#tabShare').addClass('active');
		}
	}
}


function createSubTabNew(selected_subtab){
	$('.contributeWrapper div.subTabBox').hide();
	
	
	
	if(selected_subtab==''){
		$('.contributeWrapper div.subTabBox:first').show();
		$('.contributeWrapper ul.subTabNav li:first').addClass('active');
	}
	else{
		if(selected_subtab==1){
			
			$('.contributeWrapper div.subTabBox:first').show();
			$('.contributeWrapper ul.subTabNav li:first').addClass('active');

		}
		else if(selected_subtab==2){
			$('.contributeWrapper div.subTabBox#subTab-2').show();
			$('.contributeWrapper ul.subTabNav li#tab_ayo').addClass('active');
		}
		else if(selected_subtab==3){
		
			$('.contributeWrapper div.subTabBox:last').show();
			$('.contributeWrapper ul.subTabNav li:last').addClass('active');
		}
	}
	
	
	$('.contributeWrapper ul.subTabNav li a').click(function(){ 
		$('.contributeWrapper ul.subTabNav li').removeClass('active');
		$(this).parent().addClass('active'); 
		var currentTab = $(this).attr('href'); 
		$('.contributeWrapper div.subTabBox').hide();
		$(currentTab).show();
		$('select').selectOrDie({
			size: 5
		});
		return false;
	});
}

function createSubTab(){
	$('.contributeWrapper div.subTabBox').hide();
	$('.contributeWrapper div.subTabBox:first').show();
	$('.contributeWrapper ul.subTabNav li:first').addClass('active');
	$('.contributeWrapper ul.subTabNav li a').click(function(){ 
		$('.contributeWrapper ul.subTabNav li').removeClass('active');
		$(this).parent().addClass('active'); 
		var currentTab = $(this).attr('href'); 
		$('.contributeWrapper div.subTabBox').hide();
		$(currentTab).show();
		$('select').selectOrDie({
			size: 5
		});
		return false;
	});
}
function showPopupWrapper(){
	
	$('body').css('overflow','hidden');
	$('.popupWrapper').fadeIn();
}
function showPopupPledge(){
	showPopupWrapper();
	$('#popupPledge').fadeIn();
}
function showInfografis(){
	showPopupWrapper();
	$('#infografis').fadeIn();
}

function createInfografis(){
	showPopupWrapper();
	$("select#infografis_pulau_id").selectOrDie("destroy");
	$('#popupInfografis').fadeIn('fast',function(){
		$('select#infografis_pulau_id').selectOrDie({
			size: 5
		});	
	});
	
}

function showInfografis2(img){
	if(img==''){
		alert("Infografis tidak bisa dibuka");
	}
	else{
		$("#infografis_img").attr('src',img);
		
		showPopupWrapper();
		$('#infografis').fadeIn();
	}
}

function showPopupContributeComplete(){
	showPopupWrapper();
	$('#popupContributeComplete').fadeIn();
}

/*
function showPopupPledgeComplete(){
	showPopupWrapper();
	$('#popupPledgeComplete').fadeIn();
}*/

function showPopupPress(){
	showPopupWrapper();
	$('#pressRelease').fadeIn();
}

function showPopupVideo(){
	$('.popupWrapper, #popupVideo').fadeIn();
}

function showPopupVideo2(video_id){
	video_src="https://www.youtube.com/embed/"+video_id;
	
	if(video_id==0){
		alert("Video tidak bisa dibuka");
	}
	else{
		$("#video_src").attr('src',video_src);
		
		showPopupWrapper();
		$('#popupVideo').fadeIn();
	}
}

function hidePopup(){
	$('.popupWrapper, .popupBox').fadeOut();
	$('body').css('overflow','auto');
}
function getHeight(){
	var getHeight = $(window).height();
	$('#homeBanner, .sliderWrapper, .sliderImgBox, .sliderBox, #aboutBanner, #takeactionBanner').css({
		height:getHeight
	});
}
$(document).ready(function(){
	menu_open = false;
	$('.menuBtn').click(function(){
		if(menu_open==false){
			if($(window).width()>400){
				$(this).addClass('open');
				$('.wrapper, #takeactionBanner img, #aboutBanner img').addClass('moveLeft');
				menu_open = true;
			}
			else{
				$(this).addClass('open');
				$('.wrapper, #takeactionBanner img, #aboutBanner img').addClass('moveLeftMobile');
				menu_open = true;
			}
		}
		else{
			if($(window).width()>400){
				$(this).removeClass('open');
				$('.wrapper, #takeactionBanner img, #aboutBanner img').removeClass('moveLeft');
				menu_open = false;
			}
			else{
				$(this).removeClass('open');
				$('.wrapper, #takeactionBanner img, #aboutBanner img').removeClass('moveLeftMobile');
				menu_open = false;
			}
		}
	})
	$('#tabsone').click(function(){
		$('#tabs-1').css('z-index','50');
		$('#tabs-2').css('z-index','40');
		$('#tabs-3').css('z-index','30');
	});
	$('#tabstwo').click(function(){
		$('#tabs-2').css('z-index','50');
		$('#tabs-3').css('z-index','40');
		$('#tabs-1').css('z-index','30');
	});
	$('#tabsone').click(function(){
		$('#tabs-3').css('z-index','50');
		$('#tabs-1').css('z-index','40');
		$('#tabs-2').css('z-index','30');
	});
	if($('#slider_one').length>0){
		$('#slider_one').bxSlider({
			mode:'fade',
			auto: true,
			pause: 6000,
			onSlidePrev: function($slideElement, oldIndex, newIndex){
				//$('ul.slider>li').eq(oldIndex).addClass('navOutPrev').removeClass('navInPrev');
				//$('ul.slider>li').eq(newIndex).removeClass('navOutNext, navOutNext, .navInNext').addClass('navInPrev');
				//$('ul#slider_one > li').eq(oldIndex).find('.sliderImgBox img').removeClass('navInNext');
				//$('ul#slider_one > li').eq(newIndex).find('.sliderImgBox img').addClass('navInNext');
			},
			onSlideNext: function($slideElement, oldIndex, newIndex){
				//$('ul.slider>li').eq(oldIndex).addClass('navOutNext').removeClass('navInNext');
				//$('ul.slider>li').eq(newIndex).removeClass('navOutPrev, .navOutPrev, navInPrev').addClass('navInNext');
				//$('ul#slider_one > li').eq(oldIndex).find('.sliderImgBox img').removeClass('navInNext');
				//$('ul#slider_one > li').eq(newIndex).find('.sliderImgBox img').addClass('navInNext');
			}
			});
		}
		if($('#slider_two').length>0){
			$('#slider_two').bxSlider({
				mode:'fade',	
				auto: true,
				pause: 6000,
				onSlidePrev: function($slideElement, oldIndex, newIndex){
					//$('ul.slider>li').eq(oldIndex).addClass('navOutPrev').removeClass('navInPrev');
					//$('ul.slider>li').eq(newIndex).removeClass('navOutNext, navOutNext, .navInNext').addClass('navInPrev');
					//$('ul#slider_two > li').eq(oldIndex).find('.sliderImgBox img').removeClass('navInNext');
					//$('ul#slider_two > li').eq(newIndex).find('.sliderImgBox img').addClass('navInNext');
				},
				onSlideNext: function($slideElement, oldIndex, newIndex){
					//$('ul.slider>li').eq(oldIndex).addClass('navOutNext').removeClass('navInNext');
					//$('ul.slider>li').eq(newIndex).removeClass('navOutPrev, .navOutPrev, navInPrev').addClass('navInNext');
					//$('ul#slider_two > li').eq(oldIndex).find('.sliderImgBox img').removeClass('navInNext');
					//$('ul#slider_two > li').eq(newIndex).find('.sliderImgBox img').addClass('navInNext');
				}
			});
		}
		if($('#slider_three').length>0){
			$('#slider_three').bxSlider({
				mode:'fade',
				auto: true,
				pause: 6000,
				onSlidePrev: function($slideElement, oldIndex, newIndex){
					//$('ul.slider>li').eq(oldIndex).addClass('navOutPrev').removeClass('navInPrev');
					//$('ul.slider>li').eq(newIndex).removeClass('navOutNext, navOutNext, .navInNext').addClass('navInPrev');
					//$('ul#slider_three > li').eq(oldIndex).find('.sliderImgBox img').removeClass('navInNext');
					//$('ul#slider_three > li').eq(newIndex).find('.sliderImgBox img').addClass('navInNext');
				},
				onSlideNext: function($slideElement, oldIndex, newIndex){
					//$('ul.slider>li').eq(oldIndex).addClass('navOutNext').removeClass('navInNext');
					//$('ul.slider>li').eq(newIndex).removeClass('navOutPrev, .navOutPrev, navInPrev').addClass('navInNext');
					//$('ul#slider_three > li').eq(oldIndex).find('.sliderImgBox img').removeClass('navInNext');
					//$('ul#slider_three > li').eq(newIndex).find('.sliderImgBox img').addClass('navInNext');
				}
			});
		}
	if($('#sliderProvince').length>0){
		$('#sliderProvince').bxSlider({
			//mode:'fade',
			auto: true,
			pager:false,
			onSlidePrev: function($slideElement, oldIndex, newIndex){
				//$('ul.slider>li').eq(oldIndex).addClass('navOutPrev').removeClass('navInPrev');
				//$('ul.slider>li').eq(newIndex).removeClass('navOutNext, navOutNext, .navInNext').addClass('navInPrev');
				//$('ul#sliderProvince > li').eq(oldIndex).find('.sliderProvinceRight img').removeClass('navInPrev');
				//$('ul#sliderProvince > li').eq(newIndex).find('.sliderProvinceRight img').addClass('navInPrev');
			
			},
			onSlideNext: function($slideElement, oldIndex, newIndex){
				//$('ul.slider>li').eq(oldIndex).addClass('navOutNext').removeClass('navInNext');
				//$('ul.slider>li').eq(newIndex).removeClass('navOutPrev, .navOutPrev, navInPrev').addClass('navInNext');
				//$('ul#sliderProvince > li').eq(oldIndex).find('.sliderProvinceRight img').removeClass('navInPrev');
				//$('ul#sliderProvince > li').eq(newIndex).find('.sliderProvinceRight img').addClass('navInPrev');
			}
		});
	}
	$('.sliderInfoRight').click(function(){
		$('html, body').animate({
			scrollTop:$('#homeBanner').height()
		}, 1000);
	});
	$('.closeBtn, .overlay').click(function(){
		hidePopup();
		$("#video_src").attr('src','');
		return false;
	});
	$('.closeBtn2, .overlay').click(function(){
		hidePopup();
		$("#video_src").attr('src','');
		return false;
	});
	if($('select').length>0){
		$('select').selectOrDie({
			size: 5
		});
	}
	createTab();
	//createTabAction();
	//createSubTab();
	$(window).scroll(function () {
		if ($(this).scrollTop() > $(window).height()) {
			$('.backToTop').fadeIn();
		} else {
			$('.backToTop').fadeOut();
		}
	});
})
/*$(window).bind('scroll', function(){
	if($(window).scrollTop() > 150){
		$('#homeBanner, .sliderWrapper, #bx-viewport, .slider li, .sliderImgBox').addClass('animateHeight');
		$('.sliderImgBox img').addClass('animateTop');
	}
	else{
		$('#homeBanner, .sliderWrapper, #bx-viewport, .slider li, .sliderImgBox').removeClass('animateHeight');
		$('.sliderImgBox img').removeClass('animateTop');
	}
});*/
/*$(window).bind('load resize', function(){
	var getWidth = -($('.sliderInfoWrapper').width()/2);
	var getHeight = -($('.sliderInfoBox').height()/2);
		$('#homeBanner .sliderInfoBox, #homeBanner .sliderInfoWrapper').css('transform','translateX(-50%)');
		$('#homeBanner .sliderInfoBox').css({
			'margin-top': getHeight
		});
});*/
/*$(window).bind('load resize', function(){
	var getHeight = $(window).height();
	if($(window).height()>647){
		$('#homeBanner, .sliderWrapper, #bx-viewport, .slider li, .sliderImgBox, .sliderBox, #aboutBanner, #takeactionBanner').css({
			height:648
		});
	}
	else{
		$('#homeBanner, .sliderWrapper, #bx-viewport, .slider li, .sliderImgBox, .sliderBox, #aboutBanner, #takeactionBanner').css({
			height:getHeight
		});
	}
});*/
$(window).bind('load resize', function(){
	var getHeightWindows = $(window).height();
	if($(window).width() <= 340 && $(window).height() <=600){
		$('#aboutBanner').css({
			height: getHeightWindows
		});
		$('#homeBanner, .sliderWrapper, .slider li').css({
			height: 600
		});
	}
	else{
		$('#aboutBanner').css({
			height:583
		});
		$('#homeBanner, .sliderWrapper, .slider li').css({
			height: 648
		});
	}
})