<!DOCTYPE html>
<html>
<head>
	<title>Timeline</title>
</head>
<body>

	<h2>TIMELINE PAGE</h2>

	@if(Session::get('userrole')=='Student')
		<ul>
    	<li><a href="">View Gradesheet</a></li>
    	<li><a href="">View Enrollment Details</a></li>
    </ul>
    

	@elseif(Session::get('userrole')=='teacher')
	<ul>
    	<li><a href="">Give CT Marks</a></li>
    	<li><a href="">Enroll Student</a></li>
    </ul>



	@endif

</body>
</html>