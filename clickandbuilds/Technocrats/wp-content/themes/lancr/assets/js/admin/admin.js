/* global ajaxurl, entr_ux */
( function ( wp, $ ) {
    'use strict';

    if ( !wp ) {
        return;
    }

    $( function () {
        // Dismiss notice
        $( document ).on( 'click', '.lancr-notice .notice-dismiss', function () {
            $.ajax( {
                type: 'POST',
                url: ajaxurl,
                data: { nonce: lancr_ux.nonce, action: 'lancr_dismiss_notice' },
                dataType: 'json'
            } );
        } );
    } );

    $( function () {
        $( document ).on( 'click', '.lancr-install-now', function ( event ) {
            var $button = $( event.target );

            if ( $button.hasClass( 'activate-now' ) ) {
                return true;
            }

            event.preventDefault();

            if ( $button.hasClass( 'updating-message' ) || $button.hasClass( 'button-disabled' ) ) {
                return;
            }

            if ( wp.updates.shouldRequestFilesystemCredentials && !wp.updates.ajaxLocked ) {
                wp.updates.requestFilesystemCredentials( event );

                $( document ).on( 'credential-modal-cancel', function () {
                    var $message = $( '.lancr-install-now.updating-message' );

                    $message
                        .removeClass( 'updating-message' )
                        .text( wp.updates.l10n.installNow );

                    wp.a11y.speak( wp.updates.l10n.updateCancel, 'polite' );
                } );
            }

            wp.updates.installPlugin( {
                slug: $button.data( 'slug' )
            } );
        } );
    } );
} )( window.wp, jQuery );