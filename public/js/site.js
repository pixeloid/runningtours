if (typeof Object.create !== 'function') {
        Object.create = function (o) {
            function F() { }
            F.prototype = o;
            return new F();
        };
    }

Site = (function() {

	var privateVar = null;

	var onWindowLoad = function() {
		$('.loading').fadeOut();
	}


	var initAjaxOperations = function(){

		$('body').delegate('select#persons', 'change', function(e){
			
			var 	url = $(this).data('url');
					$this = $(this),
					$holder = $this.closest('.controls').next('div.controls.price').length ? $this.closest('.controls').next('div.controls.price') : $('<div class="controls price">Price for 1 person: <b class="subtotal"></b> EUR<br>Total: <b class="total"></b> EUR</div>').insertAfter($this.closest('.controls'));
					
			e.preventDefault();
			
			$holder.css('opacity', 0);
			
			$.getJSON(url, {persons: $(this).val()}, function(data){
				$holder.find('b.subtotal').text(data)
				$holder.find('b.total').text(data * $this.val())
				$holder.animate({ opacity: 1 })
			})

		})
		
		$('body').delegate('.modal', 'loadcomplete', function(e){
			$('select#persons').change()
		 	FB.XFBML.parse();
			$('.pop').popover().click(function(e){e.preventDefault()})
		})
		
		
		$('body').delegate('a.ajax, button.ajax', 'click', function(e){
			
			
			$('body').modalmanager('loading');
			
			var url = $(this).attr('data-url') || $(this).attr('href') ;
			var $modal = $($(this).data('targetmodal'));

			setTimeout(function(){
			    $modal.load(url + '?' + $.param({format: 'html'}), function(){
			      	$modal.modal();
					$modal.trigger('loadcomplete')
			    });
			  }, 300);
			
			
			e.preventDefault();
			e.stopPropagation();

		})


		$('body').delegate('form.ajax', 'submit', function(e){
			
			e.preventDefault();


			var url = $(this).attr('action');
			var $form = $(this);
			var formData = $form.serialize();
			var $progress = $('<div class="progress progress-striped active"><div class="bar"  style="width: 100%;"></div></div>');
			var $loadTarget = $form.closest('.modal') || eval($form.data('loadtarget'))
			
			
			$form.prepend($progress);
			
			formData += '&format=html';
			
			$.ajax({
				url: url,
				type: 'POST',
				dataType: 'html',
				data: formData,
				complete: function(xhr, textStatus) {
				},
				success: function(data, textStatus, xhr) {
				
					console.log('target',  $loadTarget)

					if(data === 'true'){
						location.reload(true);
					}
					else
					{	
						if($loadTarget){

							return $loadTarget.html(data);
							//$loadTarget.trigger('loadcomplete')

						}
						else
						{
							$form.parent().empty().append(data);
						}
					}
					
					
				},
				error: function(xhr, textStatus, errorThrown) {
					alert(errorThrown)
				}
			});



		})
	}

	var initPlUpload = function(options){
		
		if(typeof plupload == "undefined" || !$('#pickfiles').length) return;
		
		var uploader = new plupload.Uploader({
			runtimes : 'gears,html5,flash,silverlight,browserplus',
			browse_button : 'pickfiles',
			container: 'uploadContainer',
			max_file_size : '100mb',
			chunk_size: '1MB',
			url : '/file/upload/',
		//	multipart_params: { 'start-upload': true, s: options.s, contentId: options.contentId},
		//	resize : {width : 320, height : 240, quality : 90},
			flash_swf_url : '../plupload/js/plupload.flash.swf',
			silverlight_xap_url : '../plupload/js/plupload.silverlight.xap',
			filters : [
				{title : "Image files", extensions : "jpg,gif,png,psd"}
				//{title : "Zip files", extensions : "zip"}
			]
		});

		uploader.bind('Init', function(up, params) {
		//	$('#filelist').html("<div>Current runtime: " + params.runtime + "</div>");
			$('#uploadfiles').hide();
		});

		uploader.bind('FilesAdded', function(up, files) {
			$('#uploadfiles').show();
			for (var i in files) {
				$('#filelist').append(
					
					'<div id="' + files[i].id + '"><hr />'
				+	'<span class="disable"><small>' + files[i].name + ' (' + plupload.formatSize(files[i].size) + ')</small></span>'
				+	'<div class="progress progress-striped active ">'
				+	  '<div class="bar" style="width: 0%;"></div>'
				+	'</div>'
				+	'</div>'
				
				)	
					
			}
			
			
            setTimeout(function () { up.start(); }, 500);
          
		});

		uploader.bind('UploadProgress', function(up, file) {
			$('#' + file.id).find('.bar').css('width', file.percent + "%");
		});


		uploader.bind('FileUploaded', function(up, file, response) {
			$('#' + file.id).remove()
			var response = $.parseJSON(response.response)
			$('.imageList .thumbnails').prepend('<li class=" span2"><img src="' + response.filename +'" /><small><a href="#" data-id="'+response.id+'" class="text-error delete">Kép törlése</a></small></li>')
			
			
			
			var $i = $('input[type=text][name=photos]')
			var vals = $i.val() ? $i.val().split(',') : [];
			
			vals.push(response.id)
			
			$i.val(vals.join(','))
			
		});

		$('.imageList .thumbnails').delegate('li small a[data-id]', 'click', function(e){

			e.preventDefault();

			var $i = $('input[type=text][name=photos]')
			var vals = $i.val() ? $i.val().split(',') : [];
			
			var index = vals.indexOf($(this).data('id'));
			vals.splice(index, 1);
			
			$(this).closest('li').remove()
		
			$i.val(vals.join(','))

		})


		$('#uploadfiles').click(function(e) {
			e.preventDefault();
			uploader.start();
			return false;
		});

		uploader.init();
		
	}

	var initThumbnails = function(){

		$('.productList .product h2').css({'top': -50})
		$('.productList .product img').css({'opacity': 0.7})
		$('.productList .product small').css({'bottom': -20})

		$('.productList .product').hover(function(){
			$('h2', this).stop().animate({'top': 0}, 200)
			$('img', this).stop().animate({'opacity': 1}, 100)
			$('small', this).stop().animate({'bottom': 0},200)
		}, function(){
			$('h2', this).stop().animate({'top': -50}, 400)
			$('img', this).stop().animate({'opacity': 0.7}, 400)
			$('small', this).stop().animate({'bottom': -20}, 500)
		})
	}

	return {


		init: function(options) {

			$(window).load(onWindowLoad);
			initAjaxOperations()
			$('.mainSlider .container').slideshow()
			
			$('a[data-toggle="tab"]').on('show', function (e) {
				$content = $($(e.target).attr('href'));
			  	Site.Maps.initialize($content.find('.map')[0], $content.find('.points'))
			}).first().click()
			
			$('.toursSlider .item').each(function(){
				
			  	Site.Maps.initialize($(this).find('.map')[0], $(this).find('.points'))
			})

			initPlUpload();

		}

	}

	})();


	Site.Maps = {


		initialize: function(el, $points) {

			var directionsDisplay = new google.maps.DirectionsRenderer();
			var directionsService = new google.maps.DirectionsService();
			var geocoder = new google.maps.Geocoder();
			var points = [];
			var map = null;
			var mapEl = el || $('#route-map')[0];

			var styles = [
			  {
			    stylers: [
			      { hue: "#dc0384" },
			      { saturation: 0 }
			    ]
			  },{
			    featureType: "road",
			    elementType: "geometry",
			    stylers: [
			      { lightness: 20 },
			      { visibility: "simplified" }
			    ]
			  },{
			    featureType: "road",
			    elementType: "labels",
			    stylers: [
			     // { visibility: "off" }
			    ]
			  }
			];


			$points.find('li').each(function(){
				points.push({
					location: $(this).text(),
					stopover: true
				});
			})

			$points.hide();
			
			if(points.length < 3) return;
			
			var start = $(points).first()[0].location;
			var end = $(points).last()[0].location;

			$(points).first().remove()
			$(points).last().remove()


			geocoder.geocode( { 'address': start}, function(results, status) {
				
				if (status == google.maps.GeocoderStatus.OK) {
					
					var myOptions = {
						//zoom: 14,
						overviewMapControl: true,
						zoomControl: true,
						disableDefaultUI: true,
						center: results[0].geometry.location,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					}

					map = new google.maps.Map(mapEl, myOptions);
				
					
				//	map.setOptions({styles: styles});


					directionsDisplay.setMap(map);
					

				}
				
			});


			var request = {
				origin: start,
				destination: end,
				waypoints: points,
				optimizeWaypoints: true,
				travelMode: google.maps.DirectionsTravelMode.WALKING
			};

			directionsService.route(request, function(response, status) {

				if (status == google.maps.DirectionsStatus.OK) {
					directionsDisplay.setDirections(response);
				}
			})
		}
	}
	
	Site.Slideshow = {
		
		$el: null,
		$elements: [],
		currentIndex: 0,
		timer : null,
		init: function(options, el){
			
			that = this;
			this.$elements = $(el).children().hide()
			this.$el = $(el);
			this.$nav = $('<ul />').addClass('slideshowNav').prependTo(this.$el)
			
			this.$nav.wrap('<div class="container" />')
			
			
			this.$elements.each(function(i){
			
				$(this).find('img, dt, dd.details').each(function(){

					$(this).data('orig', {
						left: $(this).css('left'),
						right: $(this).css('right'),
						top: $(this).css('top'),
						opacity: $(this).css('opacity'),
						marginLeft: $(this).css('marginLeft'),
						marginRight: $(this).css('marginRight')
					}).css({'opacity': 0})
					
				})

				var $navItem = $('<a href="#" />').text(i+1).data('toggle', i)
				that.$nav.append($navItem)
				$navItem.wrap('<li>')
				
				$navItem.click(function(e){
					
					that.currentIndex = $(this).data('toggle');
					
					clearInterval(that.timer);
					
 					that.showSlide(that.currentIndex)		
					
					that.startTimer()
					
					e.preventDefault();
	
				})
			})
			
			
			this.startTimer();
			this.showSlide(this.currentIndex)			
		},
		
		startTimer: function(){
		
			var that = this;
			
			this.timer = setInterval(function(){

				that.currentIndex ++;
				that.currentIndex = (that.currentIndex < that.$elements.length) ? that.currentIndex : 0;

				that.showSlide(that.currentIndex)


			}, 6000);
			
			this.showSlide(this.currentIndex)
			
		},
		
		resetCss: function($el){
			$el.css({
				marginRight: $(this).data('orig').marginRight,
				marginLeft: $(this).data('orig').marginLeft,
				left: $(this).data('orig').left,
				right: $(this).data('orig').right,
				top: $(this).data('orig').top,
				opacity: $(this).data('orig').opacity
			})
		},
		
		showSlide: function(index){
			
			var $el = this.$elements.eq(index)
			var $navItem = this.$nav.find('li').eq(index)
			
			this.$nav.find('li').removeClass('active')
			$navItem.addClass('active');

			this.$elements.hide();
			
			$el.show();
			
			$('img', $el).css({
				opacity: 0,
				right: -300
			
			}).delay(200).animate({
				
				right: $('img', $el).data('orig').right, 
				opacity: 1

			}, 500, jQuery.easing.easeOutBounce)

			$('dd.details', $el).css({
				
				opacity: 0,
				marginLeft: 300
			
			}).delay(400).animate({
				
				marginLeft: $('dd', $el).data('orig').marginLeft, 
				opacity: $('dd', $el).data('orig').opacity

			}, 300, jQuery.easing.easeOutBounce)


			$('dt', $el).css({
				
				marginLeft: -140,
				opacity: 0
			
			}).animate({
				
				marginLeft: $('dt', $el).data('orig').marginLeft, 
				opacity: $('dt', $el).data('orig').opacity

			}, 600, jQuery.easing.easeOutBounce)

			
			
		}
		
		
	}
	
	;(function($){

		$.fn.slideshow = function(options) {

			if (this.length) {

				return this.each(function(){

					var _ss = Object.create(Site.Slideshow);

					_ss.init(options, this); // `this` refers to the element

					$.data(this, 'slideshow', _ss);
				});
			};
		};
		
	})(jQuery);
	
	
	

	$(window).load(function() {


	});


	$(document).ready(function() {

		Site.init();

		Site.Maps.initialize($('#route-map')[0], $('#points'));
		
		$('label a').click(function(e){
			e.stopPropagation();
		})
		
		tinyMCE.init({
		        // General options
		        mode : "specific_textareas",
		        editor_selector : "tiny",
		        theme : "advanced",
		     //   plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		        // Theme options
		        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull",
		        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,cleanup,help,code",
		        theme_advanced_buttons3 : "",
		        theme_advanced_buttons4 : "",
		        theme_advanced_toolbar_location : "top",
		        theme_advanced_toolbar_align : "left",
		        theme_advanced_statusbar_location : "bottom",
		        theme_advanced_resizing : true,

		        // Skin options
		        skin : "o2k7",
		        skin_variant : "silver",

		        // // Example content CSS (should be your site CSS)
		         content_css : "css/styles.css",


		});
		
		
		
		
		
		
		
	});


