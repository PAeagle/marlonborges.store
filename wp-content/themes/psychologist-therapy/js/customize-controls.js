( function( api ) {

	// Extends our custom "psychologist-therapy" section.
	api.sectionConstructor['psychologist-therapy'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );