(function(){

	var search = {
		init: function(){
			this.cacheDom();
			this.bindEvents();
		},
		cacheDom: function() {
			this.$search = $('#header-search a');
      this.$searchDrop = $('#search-drop');
		},
		bindEvents: function(){
			this.$search.on( 'click', this.showSearch.bind(this));
		},
		showSearch: function(e){
      e.preventDefault();
      this.$searchDrop.fadeToggle(300);
		}
	};

	search.init();

})();
