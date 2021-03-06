( function ( mw, $ ) {
	/**
	 * Notification badge button widget for echo popup.
	 *
	 * @class
	 * @extends OO.ui.ButtonWidget
	 *
	 * @constructor
	 * @param {Object} [config] Configuration object
	 * @cfg {string} [type] The notification types this button represents;
	 *  'message', 'alert' or 'all'
	 * @cfg {string} [href] URL the badge links to
	 */
	mw.echo.ui.BadgeLinkWidget = function MwEchoUiBadgeLinkWidget( config ) {
		config = config || {};

		// Parent constructor
		mw.echo.ui.BadgeLinkWidget.parent.call( this, config );

		// Mixin constructors
		OO.ui.mixin.LabelElement.call( this, $.extend( { $label: this.$element }, config ) );
		OO.ui.mixin.ButtonElement.call( this, $.extend( { $button: this.$element }, config ) );
		OO.ui.mixin.TitledElement.call( this, $.extend( { $titled: this.$element }, config ) );
		OO.ui.mixin.FlaggedElement.call( this, $.extend( {}, config, { $flagged: this.$element } ) );

		this.$element
			.addClass( 'mw-echo-notifications-badge' );

		this.count = 0;
		this.type = config.type || 'alert';
		this.setCount( config.numItems, config.label );

		if ( config.href !== undefined && OO.ui.isSafeUrl( config.href ) ) {
			this.$element.attr( 'href', config.href );
		}
	};

	OO.inheritClass( mw.echo.ui.BadgeLinkWidget, OO.ui.Widget );
	OO.mixinClass( mw.echo.ui.BadgeLinkWidget, OO.ui.mixin.LabelElement );
	OO.mixinClass( mw.echo.ui.BadgeLinkWidget, OO.ui.mixin.ButtonElement );
	OO.mixinClass( mw.echo.ui.BadgeLinkWidget, OO.ui.mixin.TitledElement );
	OO.mixinClass( mw.echo.ui.BadgeLinkWidget, OO.ui.mixin.FlaggedElement );

	mw.echo.ui.BadgeLinkWidget.static.tagName = 'a';

	/**
	 * Set the count labels for this button.
	 *
	 * @param {number} numItems Number of items
	 * @param {string} [label] Label of the button. Defaults to the item number.
	 */
	mw.echo.ui.BadgeLinkWidget.prototype.setCount = function ( numItems, label ) {
		label = label || numItems;

		this.$element
			.toggleClass( 'mw-echo-notifications-badge-all-read', !numItems )
			.toggleClass( 'mw-echo-notifications-badge-long-label', label.length > 2 )
			.attr( 'data-counter-num', numItems )
			.attr( 'data-counter-text', label );

		if ( this.count !== numItems ) {
			this.count = numItems;

			// Fire badge count change hook
			mw.hook( 'ext.echo.badge.countChange' ).fire( this.type, this.count, label );
		}
	};
}( mediaWiki, jQuery ) );
