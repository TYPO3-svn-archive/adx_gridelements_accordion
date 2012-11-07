/** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 ************************************************************************************************
 *
 * @copyright 2012, Arno Dudek, http://www.adgrafik.at
 * @license The GNU General Public License, http://www.gnu.org/copyleft/gpl.html.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 *
 ************************************************************************************************
 ** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


(function($, undefined){

	$.widget('tx-adxgridelements.flexaccordion', {

		options: {
			namespace: 'flexaccordion-',
			columns: 1,
			active: 0,
			event: 'click',
			speed: 'normal',
			collapsible: false,
			slide: false,
			ajax: false,
			pageTypeNum: 1343228380,
		},

		items: [],

		_create: function(){
			this.options.controllerSelector = '> .' + this.options.namespace + 'controllers > li';
			this.options.contentSelector = '> .' + this.options.namespace + 'itemContent';
			var options = this.options;
			var self = this;

			this.itemsLoaded = [];
			this.controlls = [];
			this.contents = [];
			this.current = null;

			this.items.push(this);
			this.controlls = this.element.find(options.controllerSelector);
			this.contents = this.element.find(options.contentSelector);

			$(this.contents).each(function(index, box){
				$(box)
					.height($(box).height())
					.append('<span class="' + options.namespace + 'close" />')
					.find('.close')
					.click(function(event){
						self.close(index);
						return false;
					});
			});
			$(this.contents).hide();

			this.controlls.each(function(index, header){
				if (options.ajax){
					var loader = $(document.createElement('span'))
						.addClass('loader')
						.hide();
					$(header).append(loader);
				}
				$(header)
					.append('<span class="tollger" />')
					.bind(options.event, function(){
						if (options.ajax && self.itemsLoaded[index] === undefined){
							loader.show();
							var url = $(this).find('a').first().attr('href').split('#c');
							$.ajax({
								url: url[0] + (url[0].match(/\?/) ? '&' : '?') + 'type=' + options.pageTypeNum + '&tx_adxgridelementsaccordion[uid]=' + url[1],
								dataType: 'html',
								success: function(content){
									loader.hide();
									self.open(index, content);
								},
								error: function(jqXHR, error, status){
									alert('Sorry the request failed: ' + error + "\nStatus: " + status);
								}
							});
						} else {
							self.open(index);
						}
					return false;
				});
			});

			if (options.active){
				var index = options.active - 1;
				if (this.controlls[index] !== undefined){
					this.open(index);
				}
			}
		},

		close: function(index){
			if (index){
				$(this.controlls[index]).removeClass('active');
				$(this.contents[index]).slideUp(this.options.speed).removeClass('active');
			} else {
				$(this.controlls).removeClass('active');
				$(this.contents).slideUp(this.options.speed).removeClass('active');
			}
			this.current = null;
		},

		open: function(index, content){
			var self = this;
			if (this.current != index){
				$(this.items).each(function(){
					this.close();
				});
				if (content){
					$(this.contents[index])
						.prepend(content)
						.height('auto')
						.height($(this.contents[index]).height());
					self.itemsLoaded[index] = true;
				}
				$(this.controlls[index]).addClass('active');
				$(this.contents[index])
					.slideDown(this.options.speed, function(){
						if (self.options.slide){
							$('html, body').animate({
									scrollTop: $(self.controlls[index]).position().top
							}, 'slow');
						}
					})
					.addClass('active');
				this.current = index;
			} else if (this.options.collapsible){
				this.close();
			}
		}
	});
}(jQuery));