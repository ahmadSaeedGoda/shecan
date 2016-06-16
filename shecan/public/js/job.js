$(document).ready(function () {
    console.log("hello");

// <*****accept job******>

    $(".is_accepted").on('change',function(){
        if ($(this).is(':checked')) 
        {   
            var job_id=$(this).data('rowid');//job_id
            console.log(job_id);
            var token =  $(this).data('rowtok');
            console.log(token);
            var data={};
            data.job_id=job_id;
            data._token=token;
            // console.log(data);
            // console.log(job_id);

            $.ajax({
                type: "POST",
                url: '/acceptJobs',
                data: data,
                success: function(response)
                {
                    console.log(response);                    
                }
            });
        }
        else{
            // console.log($(this).val() + ' is now unchecked');
            var job_id=$(this).data('rowid');//job_id
            var token =  $(this).data('rowtok');
            var data={};
            data.job_id=job_id;
            data._token=token;
            // console.log(data);
            // console.log(job_id);

            $.ajax({
                type: "POST",
                url: '/notAcceptJobs',
                data: data,
                success: function(response)
                {
                    console.log(response);                    
                }
            });
        }
         
          
    });
});