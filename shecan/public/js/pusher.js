//renders item's new state to the page
function addItem( id, isCompleted ) {
    $.get( "/items/" + id, function( data ) {
        if ( isCompleted ) {
            $( "#completedItemsList" ).append( data );
        } else {
            $( "#uncompletedItemsList" ).append( data );
        }
    });
}

//removes item's old state from the page
function removeItem( id ) {
    $( 'li[data-id="' + id + '"' ).remove();
}

( function( $, pusher, addItem, removeItem ) {
	console.log('push1');
var itemActionChannel = pusher.subscribe( 'itemAction' );
console.log(itemActionChannel);
itemActionChannel.bind( "App\\Events\\ItemCreated", function( data ) {
	console.log('push3');
    addItem( data.id, false );
} );

itemActionChannel.bind( "App\\Events\\ItemUpdated", function( data ) {

    removeItem( data.id );
    addItem( data.id, data.isCompleted );
} );

itemActionChannel.bind( "App\\Events\\ItemDeleted", function( data ) {

    removeItem( data.id );
} );

} )( jQuery, pusher, addItem, removeItem);