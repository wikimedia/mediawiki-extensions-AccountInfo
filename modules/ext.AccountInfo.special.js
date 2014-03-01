( function( mw, $ ) {
	$( function() {
		$( 'td.mw-accountinfo-useragent' ).on( 'click', function() {
			$( this ).children( 'div.mw-accountinfo-useragent' ).toggleClass( 'mw-accountinfo-show' );
		});
	});
}( mediaWiki, jQuery ) );
