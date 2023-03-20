
$(document).ready(function(){$('.masters').each(function(i,item){var carousel=item.querySelector('.masters__carousel');var prev=item.querySelector('.carousel-nav__prev');var next=item.querySelector('.carousel-nav__next');var mastersCarousel=new Swiper(carousel,{wrapperClass:'masters__list',slideClass:'masters__slide',loop:false,slidesPerView:'auto',watchOverflow:true,navigation:{prevEl:prev,nextEl:next,disabledClass:'_disabled',lockClass:'_lock',},});});$('.gallery').each(function(i,item){var _item=$(item);var carousel=_item.find('.gallery__carousel:not(._mob)');var carouselMob=_item.find('.gallery__carousel._mob');var navWrap=_item.find('.gallery__carousel-nav:not(._mob)');var navWrapMob=_item.find('.gallery__carousel-nav._mob');var prev=navWrap.find('.carousel-nav__prev');var next=navWrap.find('.carousel-nav__next');var prevMob=navWrapMob.find('.carousel-nav__prev');var nextMob=navWrapMob.find('.carousel-nav__next');var deskGalleriesCarousels;var mobGalleryCarousel;var timer;function mobGallery(){return new Swiper(carouselMob,{wrapperClass:'gallery__list',slideClass:'gallery__slide',loop:false,slidesPerView:'auto',watchOverflow:true,navigation:{prevEl:prevMob,nextEl:nextMob,disabledClass:'_disabled',lockClass:'_lock',},});}
function deskGalleries(){return new Swiper(carousel,{wrapperClass:'gallery__list',slideClass:'gallery__slide',loop:false,slidesPerView:'auto',allowTouchMove:false,watchOverflow:true,navigation:{prevEl:prev,nextEl:next,disabledClass:'_disabled',lockClass:'_lock',},});}
runGalleries();$(window).resize(function(){clearTimeout(timer);timer=setTimeout(function(){runGalleries();},500);});function runGalleries(){var width=$(window).width();if(width>767){if(deskGalleriesCarousels&&!deskGalleriesCarousels[0].destroyed){deskGalleriesCarousels.forEach(function(item){item.destroy();});}
deskGalleriesCarousels=deskGalleries();if(mobGalleryCarousel&&!mobGalleryCarousel.destroyed){mobGalleryCarousel.destroy();}}else{if(mobGalleryCarousel&&!mobGalleryCarousel.destroyed){mobGalleryCarousel.destroy();}
mobGalleryCarousel=mobGallery();if(deskGalleriesCarousels&&!deskGalleriesCarousels[0].destroyed){deskGalleriesCarousels.forEach(function(item){item.destroy();});}}}});});$(document).ready(function(){var timer;$('[data-scroll-to-link]').click(function(e){e.preventDefault();var _self=this;clearTimeout(timer);timer=setTimeout(function(){var name=$(_self).attr('data-scroll-to-link');var block=$('[data-scroll-to="'+name+'"]');$('html, body').animate({scrollTop:block.offset().top},1500);},100);})});$(document).ready(function(){var daysMin=['Нд','Пн','Вт','Ср','Чт','Пт','Сб'];var months=['Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень'];var monthsShort=['Січ','Лют','Бер','Кві','Тра','Чер','Лип','Сер','Вер','Жов','Лис','Гру'];$('[data-datepicker]').each(function(i,item){var $item=$(item);var input=$(item).find('[data-datepicker-input]');var container=$(item).find('[data-datepicker-container]');var datepickerFrom=input.datepicker({startDate:new Date(),format:'dd/mm/yyyy',daysMin:daysMin,months:months,monthsShort:monthsShort,weekStart:1,offset:0,inline:true,container:container,filter:function(date,view){if(date.getDay()===0&&view==='day'){return false;}},pick:function(e){if(e.view=='day'){containerClose();}}});input.click(function(){if(container.hasClass('_active')){containerClose();}else{containerOpen();$(document).on('mouseup.datepickerOut',function(e){if(!$item.is(e.target)&&$item.has(e.target).length===0){containerClose();}});}});function containerOpen(){container.addClass('_active');}
function containerClose(){container.removeClass('_active');$(document).off('.datepickerOut');}});});function initMap(){var map=document.getElementById('map');var winWidth=$(window).width();if(!map)return;var defPos=JSON.parse(map.getAttribute('data-def-props'));var mapPointCords={lat:defPos.lat,lng:defPos.lng};var mapCords={lat:defPos.lat+0.0009,lng:defPos.lng};var zoom=defPos.zoom||12;var map=new google.maps.Map(map,{center:mapCords,zoom:zoom,styles:styles,disableDefaultUI:true});var marker=new google.maps.Marker({position:mapPointCords,map:map,icon:'img/svg/ico/mark.svg'});};var styles=[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ca2031"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"lightness":"58"},{"saturation":"-100"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":"-100"},{"lightness":"45"},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":"-100"},{"visibility":"simplified"},{"lightness":"31"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#0075ff"},{"lightness":"-25"},{"saturation":"-94"},{"visibility":"simplified"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}];$(document).ready(function(){if(!$('body').mask)return;$('input[data-mask]').each(function(i,item){dataAttr=$(item).attr('data-mask');$(item).mask(dataAttr,{'translation':{'_':{pattern:/[0-9]/}},placeholder:dataAttr});})});$(document).ready(function(){var menu=$('[data-menu]');var btnOpen=$('[data-menu-open]');var btnClose=$('[data-menu-close]');var menuLink=$('.menu__link');var scrollVal=0;btnOpen.click(function(){menuOpen();$(document).on('mouseup.clickout',function(e){if(!menu.is(e.target)&&menu.has(e.target).length===0){menuClose();}});menuLink.click(function(){menuClose();})});btnClose.click(function(){menuClose();});function menuOpen(){menu.addClass('_open');scrollVal=window.pageYOffset;$(document).on('scroll.scrollClose',function(){if(!(window.pageYOffset<scrollVal+50)||!(scrollVal-50<window.pageYOffset)){menuClose();}});}
function menuClose(){menu.removeClass('_open');$(document).off('.scrollClose');$(document).off('.clickout');}});$(document).ready(function(){var sidesBlock=$('.masters__carousel');var modalBlock=$('.modal');var btnOpenModal=$('[data-open-modal]');var closeBtn=$('[data-close-modal]');var timer;btnOpenModal.click(function(){modalOpen();$(document).on('mouseup.modalOut',function(e){if(!modalBlock.is(e.target)&&modalBlock.has(e.target).length===0){modalClose();}});closeBtn.click(function(){modalClose();})});if(!modalBlock.length==0){changeOffset();resizeBlock();}
function modalOpen(){modalBlock.addClass('_open');if($(window).width()<768){stopScroll();}}
function modalClose(){modalBlock.removeClass('_open');$(document).off('.modalOut');removeStopScroll();}
function resizeBlock(){$(window).resize(function(){clearTimeout(timer);timer=setTimeout(function(){changeOffset();},1000);});}
function changeOffset(){var offsetLeft=sidesBlock.offset().left;var offsetTop=sidesBlock.offset().top;if($(window).width()<768){modalBlock.css({'left':'0','top':'0'});}else{modalBlock.css({'left':offsetLeft+'px','top':offsetTop+'px'});removeStopScroll();}}
function stopScroll(){scrollLock.disablePageScroll();}
function removeStopScroll(){scrollLock.enablePageScroll();}});$(document).ready(function(){var blocks=$('[data-m-parallax]');var maxMovePx=20/100/10;blocks.each(function(i,item){var block=$(item);var winWidth=$('html').width();var blockWidth=block.width();var blockHeight=block.height();if(winWidth<768)return;block.on('mousemove',function(e){var moveX=200/blockWidth*(blockWidth/2-e.clientX)*maxMovePx;var moveY=200/blockWidth*(blockHeight/2-e.clientY)*maxMovePx;setPosition(block,moveX,moveY);});function setPosition(block,x,y){var items=block.find('[data-m-parallax-item]');items.each(function(i,item){var item=$(item);var moveVal=+item.attr('data-m-move-val')||5;var posX=x*moveVal;var posY=y*moveVal;item.css('transform','translate('+posX+'px, '+posY+'px)');});};});});$(document).ready(function(){var sidesBlock=$('.product__col');var imageBg=$('.product__bg');var winWidth=$(window).width();if(!imageBg.length==0){changeOffset();resizeBlock();}
function resizeBlock(){$(window).resize(function(){setTimeout(changeOffset,1000);});}
function changeOffset(){var offsetLeft=sidesBlock.offset().left;imageBg.css("width",offsetLeft+'px');}});$(document).ready(function(){$('[data-timepicker]').each(function(i,item){$item=$(item);var input=$item.find('[data-timepicker-input]');var list=$item.find('[data-timepicker-list]');var radioInput=$item.find('input:radio');input.click(function(){if(list.hasClass('_active')){listClose();}else{listOpen();radio();$(document).on('mouseup.timepickerOut',function(e){if(!$item.is(e.target)&&$item.has(e.target).length===0){listClose();}});}});function radio(){radioInput.change(function(){var thisValue=$(this).val();input.val(thisValue);listClose();});}
function listOpen(){list.addClass('_active');}
function listClose(){list.removeClass('_active');$(document).off('.timepickerOut');}});});