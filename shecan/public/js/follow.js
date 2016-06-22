$(document).ready(function () {
    console.log("follow");
     $("#follow").on("click", function() {
     	console.log("follow");
     	var industry_id=$(this).data('rowid');//job_id
            console.log(industry_id);
            var token =  $(this).data('rowtok');
            console.log(token);
            var data={};
            data.industry_id=industry_id;
            data._token=token;
     	$.ajax({
                type: "POST",
                url: '/foll',
                data: data,
                success: function(response)
                {
                    console.log('response');                    
                }
            });
    }
});