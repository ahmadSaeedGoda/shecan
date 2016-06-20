   	<html>
   	<body>
    	<table class="table">
    		<tr>
    			<th>job Title:</th>
    			<td>{{$job->title}}</td>
  			</tr>
  			<tr>
    			<th>Company:</th>
    			<td>{{$job->company->name}}</td>
  			</tr>
  			<tr>
    			<th>Decription:</th>
    			<td>{{$job->description}}</td>
  			</tr>
  			<tr>
    			<th>Industry:</th>
    			<td>{{$job->industeries->name}}</td>
  			</tr>
  			<tr>
    			<th>Country:</th>
    			<td>{{$job->country}}</td>
  			</tr>
  			<tr>
    			<th>City:</th>
    			<td>{{$job->city}}</td>
  			</tr>

    	</table>
    	
    </body>
  </html>