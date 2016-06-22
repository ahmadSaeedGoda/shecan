$(window).load(function() { 
	console.log('hello');
	// tag
	$("#tag" ).keypress(function( event ) 
	{
          if ( event.which == 13 ) {
		     event.preventDefault()
		     console.log("enter");
		     var text= $('#tag').val();
		     var token =  $(this).data('rowtok');
            var data={};
            data.text=text;
            data.token=token;
            console.log(data);
            
            $.ajax({
                type: "post",
                url: '/tag',
                data: data,
                success: function(response)
                {
                    console.log(response);                    
                }
            });
        }
    }); 
});    