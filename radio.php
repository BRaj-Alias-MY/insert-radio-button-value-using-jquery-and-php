<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('input[type="radio"]').click(function(){
   var gender_val = $(this).val(); 	
	 $.ajax({
		 url: 'process.php',
         type: 'post',
                       data: {
                             "gender" : gender_val
                        },
                        success: function(response) {
                             
                            $("#result").html(response);
                            //console.log(response);
                        }
                    });
});	
});
</script>
</head>
<body>
<input type="radio" name="gender" value="Male"/>Male <br>
<input type="radio" name="gender" value="Female"/>Female <br>
<input type="radio" name="gender" value="Others"/>Others <br>
	<div id="result"></div>
	
</body>