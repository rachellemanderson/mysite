( function( $ ) {

	var MySite = {
		/**
		 * Initialize site
		 */
		init : function() {
			/**
			 * Set the initial breakpoint context
			 */
			MySite.challengeElement = document.querySelector( '.breakpoint-context' );
			MySite.challengeContext();
			MySite.scrollToAnchor();
			MySite.initSliders();
			MySite.stickyHeader();

			$( window ).resize( MySite.debounce( function() {
			}, 250 ));

			$( window ).scroll( function() {
				MySite.stickyHeader();
			});
		},

		/**
		 * Throttle/debounce helper
		 * Modified from http://remysharp.com/2010/07/21/throttling-function-calls/
		 */
		debounce : function( fn, delay ) {
			var timer = null;

			return function() {
				var context = this,
					args = arguments;

				clearTimeout( timer );

				timer = setTimeout( function() {
					fn.apply( context, args );
				}, delay );
			};
		},

		/**
		 * Device targeting should be based on media queries in CSS,
		 * we do not define this in scripts
		 * Modified from http://davidwalsh.name/device-state-detection-css-media-queries-javascript
		 */
		challengeContext: function() {
			var styles = window.getComputedStyle( MySite.challengeElement ),
				index = parseInt( styles.getPropertyValue( 'z-index' ), 10 ),
				states = {
					1: 'mobile',
					2: 'tablet'
				};

			MySite.context = states[index] || 'desktop';
		}
	};

	MySite.initSliders = function() {
		$( '.about-slider' ).slick( {
			dots: true,
			infinite: true,
			arrows: true,
			speed: 500,
			autoplay: false,
			pauseOnHover: true,
			cssEase: 'linear',
			adaptiveHeight: false,
			slidesToShow: 1,
			slidesToScroll: 1
		} );
	};

	MySite.scrollToAnchor = function() {
		$( '.js-to-anchor' ).click( function() {
			console.log('test');
			var	indexNumber = $( '.js-to-anchor' ).index( this ),
				anchor = $( '.js-anchor' ).eq( indexNumber );
			$( 'body' ).animate( { scrollTop: anchor.offset().top }, 800 ); 
		});
	};

	MySite.stickyHeader = function() {
		var yScroll = window.pageYOffset,
			siteHeader = $( '.site-header' ),
			yPosition = $( '.page-header' ).outerHeight() - siteHeader.outerHeight();

		if( yScroll > yPosition ) {
			siteHeader.addClass( 'sticky' );
		} else {
			siteHeader.removeClass( 'sticky' );
		}
	};

	$( document ).ready( function() {
		MySite.init();
	} );

} )( jQuery );
