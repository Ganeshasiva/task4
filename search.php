<!DOCTYPE html>
<html>
<head>
	<title>Seaching Characters</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
	body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #e3ea0bf5;
    font-weight: bold;
    font-size: 30px;
    background-image: url(image05.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
	input   {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    background-color: #c7c6cc;
    color: #ef250d;
} 
</style>
	<script>

	// $(document).ready(function(){
	function myFunction() {
	    var x = document.getElementById("email");
		document.getElementById("tab").innerHTML="";
	    		if(x.value.length > 3){
	    		$.ajax({
	    			url: "search_helper.php",
	    			type: "POST",
	    			data : {data:
	    				x.value},
	    			dataType: 'json',
					success: function(data){
						// var email_array=[];
						var email_list = "<ol style='list-style: roman;border: 1px solid #1a17d8;width: 300px;height: 300px;overflow-x: scroll; backgroun-color: #009900;'>";
						for(i=0; i<data["value"].length; i++){
							email_list +="<li>"+data["value"][i].email+"</li>";
						}
						email_list += "</ol>";
						console.log(email_list)	;		
					$("#tab").append(email_list)	
	    			}
	    		});



	   		 }
	    }

	// });

	</script>
	</head>
	<body>
		<form action="ajax_helper.php">
			<div class="row container">
				  <div class="col-md-2"></div>
				  <div class="col-md-4">Enter your name:</div>
				  <div class="col-md-4"> <input type="text" id="email" name="valueToSearch" onkeyup="myFunction()"></div>
			</div>
			<div class="row container">
				<div class="col-md-2"></div>
				<div class="col-md-4">Suggestion are :</div>
				<div class="col-md-4" id="tab" style="margin:5px"></div>
			</div>

		 

		
</body>
</html>