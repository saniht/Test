<?php 

	//List subjects
	function listSubjects(){

		//Start list
		echo('<ul class="list">');

		//Get all subjects
		$getsubs = mysql_Query("select * from subjects");

		//Collate data
		while($sub = mysql_fetch_array($getsubs)){

			echo('<li><a href="subject.php?ID='.$sub['ID'].'">'.$sub['name'].'</a></li>');
		}

		//End list
		echo('</ul>');
	}

	//Get my homework
	function getMyHomework(){

		//start list
		echo('<ul class="list">');

		//get my classes
		$classes = mysql_query("select * from enroll WHERE user='$_SESSION[USERID]'");

		//collate
		while($class = mysql_fetch_array($classes)){

			//get homework function
			getHomework($class['class']);
		}

		//end list
		echo('</ul>');
		
	}

	//Get Homework
	function getHomework($class){

		//get all homework
		$gethomework = mysql_query("select * from homework WHERE class='$class'");

		//collate
		while($homework = mysql_fetch_array($gethomework)){

			//echo out the task
			echo('<li><a href="task.php?ID='.$homework['ID'].'">'.$homework['title'].'</a></li>');
		}
	}

	//Get Today
	function getToday(){

		if(date('l') == 'Saturday' || date('l') == 'Sunday'){

			echo('<p>Woohoo! It\'s the weekend!</p>');
		} else{

			getLessons(date('l'));
		}
	}

	//Get lessons
	function getLessons($day){

		//start list
		echo('<ul class="list">');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='$day'");

		//Colalte
		while($lesson = mysql_fetch_array($getlessons)){

			echo('<li>'.$lesson['lesson'].'</li>');
		}

		if(mysql_num_rows($getlessons) == 0){

			echo('<li>Awesome! - No Lessons today!</li>');
		}

		//end list
		echo('</ul>');
	}

	//Full timetable
	function fullTimetable(){

		//start table
		echo('<table cellpadding="0" cellspacing="0" class="timetable">');

		//Set row variable
		$row = 0;

		//Set class variable
		$class = "";

		echo('<tr>');

			echo('<td><b>Day</b></td>');
			echo('<td><b>Lesson 1</b></td>');
			echo('<td><b>Lesson 2</b></td>');
			echo('<td><b>Lesson 3</b></td>');
			echo('<td><b>Lesson 4</b></td>');
			echo('<td><b>Lesson 5</b></td>');
			echo('<td><b>Lesson 6</b></td>');

		echo('</tr>');

		if(date('l') == 'Monday'){

			$class = "today";
		}

		echo("<tr class=".$class." >");

		echo('<td><b>Monday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='monday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable.php');	
		}

		echo('</tr>');

		if(date('l') == 'Tuesday'){

			$class = "today";
		}

		echo('<tr>');

		echo('<td><b>Tuesday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='tuesday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable.php');
		}

		echo('</tr>');

		if(date('l') == 'Wednesday'){

			$class = "today";
		}

		echo('<tr>');

		echo('<td><b>Wednesday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='wednesday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable.php');		
		}

		echo('</tr>');

		if(date('l') == 'Thursday'){

			$class = "today";
		}

		echo('<tr>');

		echo('<td><b>Thursday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='thursday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable.php');
		}

		echo('</tr>');

		if(date('l') == 'Friday'){

			$class = "today";
		}

		echo('<tr>');

		echo('<td><b>Friday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='friday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable.php');
		}

		echo('</tr>');

		//end table
		echo('</table>');
	}

	//Subject
	function subject($row){

		$getsubs = mysql_query("select * from subjects where ID='$_GET[ID]'");

		while($sub = mysql_fetch_array($getsubs)){

			echo($sub[$row]);
		}
	}

	//Lesson Link
	function lessonLink($name){

		//get lessons with same name
		$getlessons = mysql_query("select * from subjects where name='$name'");

		//collate data
		while($lesson = mysql_fetch_array($getlessons)){

			return("subject.php?ID=" . $lesson['ID']);
		}
	}
	
	//Get Teacher
	function getTeacher($ID){
	
		//get teachers
		$getteachers = mysql_query("select * from users WHERE ID='$ID'");
		
		//collate
		while($teacher = mysql_fetch_array($getteachers)){
		
			echo($teacher['staffcode']);	
		}
	}
	
	//Get timetable editor
	function getTimetableEditor(){
		
		//start table
		echo('<table cellpadding="0" cellspacing="0" class="timetable">');

		//Set row variable
		$row = 0;

		//Set class variable
		$class = "";

		echo('<tr>');

			echo('<td><b>Day</b></td>');
			echo('<td><b>Lesson 1</b></td>');
			echo('<td><b>Lesson 2</b></td>');
			echo('<td><b>Lesson 3</b></td>');
			echo('<td><b>Lesson 4</b></td>');
			echo('<td><b>Lesson 5</b></td>');
			echo('<td><b>Lesson 6</b></td>');

		echo('</tr>');

		if(date('l') == 'Monday'){

			$class = "today";
		}

		echo("<tr class=".$class." >");

		echo('<td><b>Monday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='monday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable-edit.php');	
		}

		echo('</tr>');

		if(date('l') == 'Tuesday'){

			$class = "today";
		}

		echo('<tr>');

		echo('<td><b>Tuesday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='tuesday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable-edit.php');
		}

		echo('</tr>');

		if(date('l') == 'Wednesday'){

			$class = "today";
		}

		echo('<tr>');

		echo('<td><b>Wednesday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='wednesday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable-edit.php');		
		}

		echo('</tr>');

		if(date('l') == 'Thursday'){

			$class = "today";
		}

		echo('<tr>');

		echo('<td><b>Thursday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='thursday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable-edit.php');
		}

		echo('</tr>');

		if(date('l') == 'Friday'){

			$class = "today";
		}

		echo('<tr>');

		echo('<td><b>Friday</b</td>');

		//Get my lessons
		$getlessons = mysql_query("select * from timetable where USERID='$_SESSION[USERID]' AND day='friday'");

		//Collate data
		while($lesson = mysql_fetch_array($getlessons)){

			include('coreservices/learningservices/timetable-edit.php');
		}

		echo('</tr>');

		//end table
		echo('</table>');
	}
	
	//list teachers select
	function listTeachersSelect(){
		
		//start select
		echo('<select name="teacher">');
	
		//get teachers
		$getteachers = mysql_query("select * from users WHERE teacher='true'");
		
		//collate
		while($teacher = mysql_fetch_array($getteachers)){
		
			echo('<option value="'.$teacher['ID'].'">'.$teacher['staffcode'].'</option>');
		}
		
		//end select
		echo('</select>');
	}

	//List classes
	function listClasses($sub){

		//start list
		echo('<ul class="list">');

		//get all classes
		$getclass = mysql_query("select * from classes WHERE lesson='$sub'");

		//collate
		while($class = mysql_fetch_array($getclass)){

			echo('<li>'.$class['name'].' - '. ' '. user($class['teacher'], 'prefix') . ' ' . user($class['teacher'], 'lname') .'</li>');
		}

		//end list
		echo('</ul>');
	}

	//user
	function user($ID, $ROW){

		//getuser
		$getuser = mysql_query("select * from users where ID='$ID'");

		//collate
		while($user = mysql_fetch_array($getuser)){

			return($user[$ROW]);
		}
	}

	//task
	function task($row){

		//get task
		$gettask = mysql_query("select * from homework WHERE ID='$_GET[ID]'");

		//collate
		while($task = mysql_fetch_array($gettask)){

			//echo data
			echo($task[$row]);
		}
	}

?>








