( function ( mw, $ ) {
	'use strict';

	if ( mw.echo.Logger.static.clickThroughEnabled ) {
		mw.loader.using( 'ext.eventLogging', function () {
			mw.eventLog.setDefaults( 'EchoInteraction', {
				version: mw.config.get( 'wgEchoConfig' ).version,
				userId: +mw.config.get( 'wgUserId' ),
				editCount: +mw.config.get( 'wgUserEditCount' )
			} );
		} );
	}

	// Activate ooui
	$( document ).ready( function () {
		var $existingAlertLink = $( '#pt-notifications_alert a' ),
			$existingMessageLink = $( '#pt-notifications_message a' ),
			numAlerts = $existingAlertLink.text(),
			numMessages = $existingMessageLink.text(),
			hasUnreadAlerts = $existingAlertLink.hasClass( 'mw-echo-unseen-notifications' ),
			hasUnreadMessages = $existingMessageLink.hasClass( 'mw-echo-unseen-notifications' ),
			// Store links
			links = {
				notifications: $( '#pt-notifications_message a' ).attr( 'href' ),
				preferences: $( '#pt-preferences a' ).attr( 'href' )
			};

		if ( $existingMessageLink.length ) {
			mw.echo.ui.messageWidget = new mw.echo.ui.NotificationBadgeWidget( {
				type: 'message',
				markReadWhenSeen: false,
				numItems: numMessages,
				hasUnread: hasUnreadMessages,
				badgeIcon: 'speechBubble',
				links: links
			} );
			$existingMessageLink.replaceWith( mw.echo.ui.messageWidget.$element );
		}

		mw.echo.ui.alertWidget = new mw.echo.ui.NotificationBadgeWidget( {
			type: 'alert',
			markReadWhenSeen: true,
			numItems: numAlerts,
			hasUnread: hasUnreadAlerts,
			badgeIcon: {
				read: 'bell',
				unread: 'bellOn'
			},
			links: links
		} );
		$existingAlertLink.replaceWith( mw.echo.ui.alertWidget.$element );
	} );

} )( mediaWiki, jQuery );