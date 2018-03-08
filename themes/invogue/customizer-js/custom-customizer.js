/**
 * Customizer Set Child Theme Settings
 */
( function( $ ) {
    
    $( window ).load( function() {
        
        var api = wp.customize;
        var control = api.control.instance( 'vogue-header-layout' );
        control.setting.set( 'vogue-header-layout-three' );
        
        var api = wp.customize;
        var control = api.control.instance( 'vogue-primary-color' );
        control.setting.set( '#000000' );
        var control = api.control.instance( 'vogue-secondary-color' );
        control.setting.set( '#a8a8a8' );
        
    } );
    
} )( jQuery );
