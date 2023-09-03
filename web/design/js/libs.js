$(document).ready(function(){

	$('.cat-t').each(function(){
		var speedbar = $('#dle-speedbar').children('span').eq(1);
		$(this).append('<h2>'+speedbar.text()+'</h2><div class="sect-links icon-l"><a href="'+speedbar.children('a').attr('href')+'rss.xml"><span class="fa fa-rss"></span>Rss</a></div>');
	});
	
	// Вставка блока в тело статьи. Здесь 3 - приблизительно первая треть статьи, сменить на 2 - половина, сменить на 4 - первая четверть.
	$('#rels-in').each(function(){
		var there = Math.floor($('#full-text br').length / 3);
		$('.full-text br').eq(there).after($(this));
	});
	
	// На случай, если не бб-редактор, то закомментировать код выше, раскомментировать код ниже.
	/* $('#rels-in').each(function(){
		var there = Math.floor($('#full-text p').length / 3);
		$('.full-text p').eq(there).after($(this));
	}); */
	
	$(".show-comms").click(function(){
		$('html, body').animate({
		scrollTop: $(".comms-title").offset().top - 10
		}, 600);
	});
	
	$('body').append('<div class="close-overlay" id="close-overlay"></div><div class="side-panel" id="side-panel"></div>');
	$('.mob-menu').each(function() {
		$(this).clone().appendTo('#side-panel');
	});		
	$(".btn-menu").click(function(){
		$('#side-panel').addClass('active');
		$("#close-overlay").fadeIn(200);
	});
	$(".close-overlay").click(function(){
		$('#side-panel').removeClass('active');
		$('#close-overlay').fadeOut(200);
	}); 
	
	$("#login-box").dialog({
		autoOpen: false,
		modal: true,
		show: 'fade',
		hide: 'fade',
		width: 320
	});
	
	$('.show-login').click(function(){
		$('#login-box').dialog('open');
	});
	
	$('#ac-av').html($('#lb-ava').html());
	
	$(".add-comm-btn").click(function(){
		$("#add-comm-form").slideToggle(200);
	});
	$(".reply").click(function(){
		$("#add-comm-form").slideDown(200);
	});
	$('body').on('click','.ac-textarea textarea, .fr-wrapper',function(){
		$('.add-comm-form').addClass('active').find('.ac-protect').slideDown(400);
	});
	$('.lb-soc a, .ac-soc a').on('click',function(){
	   var href = $(this).attr('href');
       var width  = 820;
       var height = 420;
       var left   = (screen.width  - width)/2;
       var top   = (screen.height - height)/2-100;   

       auth_window = window.open(href, 'auth_window', "width="+width+",height="+height+",top="+top+",left="+left+"menubar=no,resizable=no,scrollbars=no,status=no,toolbar=no");
       return false;
	});
    $('#dle-content > #dle-ajax-comments').appendTo($('#full-comms')); 

	$('body').append('<div id="gotop"><span class="fa fa-chevron-up"></span></div>');
	var $gotop=$('#gotop'); 
	$(window).scroll (function () {
		if ($(this).scrollTop () > 300) {$gotop.fadeIn(200);
		} else {$gotop.fadeOut(200);}
	});	
	$gotop.click(function(){
		$('html, body').animate({ scrollTop : 0 }, 'slow');
	});
	
});

jQuery.fn.tcarusel = function(options){
	
	return this.each(function() {
			
		var tcaruselBlock = $(this);
		var tcaruselScroll = tcaruselBlock.find('.tcarusel-scroll');
		var tcaruselFirstItem = tcaruselBlock.find('.tcarusel-item:first');
		var tcaruselLastItem = tcaruselBlock.find('.tcarusel-item:last');
		
		var tcaruselBlockWidth = tcaruselBlock.find(tcaruselFirstItem).outerWidth(true);
	
		function tcaruselShowNext() {
			tcaruselScroll.animate({'left':-tcaruselBlockWidth}, 200, function(){
				tcaruselBlock.find('.tcarusel-item:first').appendTo(tcaruselScroll);
				tcaruselScroll.css({'left':'0'});
			});
		}
		
		function tcaruselShowPrev() {
			tcaruselBlock.find('.tcarusel-item:last').prependTo(tcaruselScroll);
			tcaruselScroll.css({'left':-tcaruselBlockWidth});
			tcaruselScroll.animate({'left':0}, 200);
		}
		
		tcaruselBlock.find('.tcarusel-next').click(tcaruselShowNext);
		tcaruselBlock.find('.tcarusel-prev').click(tcaruselShowPrev);
		
	});
	
};
$(document).ready(function() {
$('.tcarusel').tcarusel();
});


	// tooltip 
	$(document).ready(function () {
		var targets = $('[rel~=tooltip]'),
			target = false,
			tooltip = false,
			title = false;
		targets.bind('mouseenter', function () {
			target = $(this);
			tip = target.attr('title');
			tooltip = $('<div id="tooltip"></div>');
			if (!tip || tip == '') return false;
			target.removeAttr('title');
			tooltip.css('opacity', 0).html(tip).appendTo('body');
			var init_tooltip = function () {
					if ($(window).width() < tooltip.outerWidth() * 1.5) tooltip.css('max-width', $(window).width() / 2);
					else tooltip.css('max-width', 340);
					var pos_left = target.offset().left + (target.outerWidth() / 2) - (tooltip.outerWidth() / 2),
						pos_top = target.offset().top - tooltip.outerHeight() - 18;
					if (pos_left < 0) {
						pos_left = target.offset().left + target.outerWidth() / 2 - 18;
						tooltip.addClass('left')
					} else tooltip.removeClass('left');
					if (pos_left + tooltip.outerWidth() > $(window).width()) {
						pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
						tooltip.addClass('right')
					} else tooltip.removeClass('right');
					if (pos_top < 0) {
						var pos_top = target.offset().top + target.outerHeight();
						tooltip.addClass('top')
					} else tooltip.removeClass('top');
					tooltip.css({
						left: pos_left,
						top: pos_top
					}).animate({
						top: '+=10',
						opacity: 1
					}, 100)
				};
			init_tooltip();
			$(window).resize(init_tooltip);
			var remove_tooltip = function () {
					tooltip.animate({
						top: '-=10',
						opacity: 0
					}, 50, function () {
						$(this).remove()
					});
					target.attr('title', tip)
				};
			target.bind('mouseleave', remove_tooltip);
			tooltip.bind('click', remove_tooltip)
		})
	});
	

/* end */