(function(){

	var menu = {
		init: function(){
			this.cacheDom();
			this.bindEvents();
		},
		cacheDom: function() {
			this.width = 775;
			this.$nav = $('#site-navigation');
			this.$hamburger = $('.hamburger');
			this.cachedWidth = $(window).width();
			this.window = $(window);
			// this.$subMenu = $('.sub-menu');
			// this.$subParent = $('.sub-menu').parent();
		},
		bindEvents: function(){
			this.$hamburger.on( 'click', this.toggleMenu.bind(this));
			this.window.resize(this.hideMenu.bind(this));
			// this.$subParent.mouseenter(this.fadeMenuIn.bind(this));
			// this.$subParent.mouseleave(this.fadeMenuOut.bind(this));
		},
		hideMenu: function(){
			var newWidth = this.window.width();

			if (newWidth !== this.cachedWidth){
	        //DO RESIZE HERE
	        this.cachedWidth = newWidth;

	        if (this.cachedWidth <= this.width){
						this.$nav.hide();
						this.$hamburger.show();
	        }
	        else{
	          this.$nav.show();
						this.$hamburger.hide();
	        }
	    }
		},
		toggleMenu: function(e){
			e.preventDefault();
			this.$nav.slideToggle(300);
		},
		// fadeMenuIn: function(e){
		//
		// 	e.preventDefault();
		// 	alert();
		// 	$(this).find(this.$subMenu).fadeIn(400);
		// },
		// fadeMenuOut: function(e){
		// 	e.preventDefault();
		//
		// 	$(this).find(this.$subMenu).fadeOut(400);
		// }
	};

	menu.init();

})();

function initSubMenu(){
	var $subMenu = $('.sub-menu');
	var $subParent = $('.sub-menu').parent();

	$subParent.mouseenter(function(e) {
	  e.preventDefault();
		$(this).find($subMenu).fadeIn();
	});
	$subParent.mouseleave(function(e) {
	  e.preventDefault();
		$(this).find($subMenu).fadeOut();
	});
}
initSubMenu();
