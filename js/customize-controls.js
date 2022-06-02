( function( api ) {

	// Extends our custom "engineering-manufacturing" section.
	api.sectionConstructor['engineering-manufacturing'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );