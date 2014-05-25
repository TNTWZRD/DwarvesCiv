<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>SimpleSubmit - Form</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="robots" content="noindex, nofollow" />
<meta name="author" content="Corbin Matschull">
<meta name="keywords" content="Art,Code,Team">
<meta name="robots" content="index, nofollow">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="images/FaviCon.png">
<link rel="stylesheet" type="text/css" href="screen.css">
<link rel="stylesheet" type="text/css" href="Styles/main-style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/js/page_context.js"></script>
<link rel="icon" type="image/png" href="FaviCon.png">	
<style type="text/css">
///////////////////////////////////****///////////////////////
.border-box{
	background:-webkit-linear-gradient(rgba(200,110,223,0.6),rgba(209,238,252,0.4));
	border-bottom-right-radius:4px;
}

#header{
	margin-top: -120px;
	margin-left: -20px;
	margin-right: -20px;
}

#footer{
	margin-left: -20px;
	margin-right: -20px;
}
.main-wrapper{
	display:-webkit-box;
	margin-left: auto;
	margin-right: auto;
}
body {
    font-family:"Source Sans Pro", "Lucida Grande", "Tahoma", "Verdana", sans-serif;
    margin: 120px 20px 0px 20px;
}
textarea{
	color:black;
}
#contact-wrapper {  /* border around the main wrapper  */
	width:430px; 
	border-radius:8px;
	background: -webkit-linear-gradient(top left,rgba(200,110,223,0.6), rgba(52,170,220,0.4)); 
	padding:3em;
	margin: 0 auto 0 auto;
}
#contact-wrapper div { /* the inner contact wrapper dvi  */
	clear:both; 
	margin:1em 0;
}
#contact-wrapper label {  /* requirement alert font and color */
	display:block; 
	float:none; 
	font-size:10px; color:#F00;
	width:auto;
 
}
.labelname { /* label and input font and color  */
	display:block; 
	float:none;
	font-size:13px; color:#333; font-family:Arial, Helvetica, sans-serif;
	width:auto; 
}
form#simplesubmit input {  /* input style  */
	border-color:#B7B7B7 #E8E8E8 #E8E8E8 #B7B7B7; 
	border-style:solid; 
	border-width:1px; 
	padding:5px; 
	font-size:13px; 
	color:#333; 
	background-color: #ffffff;
	background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dddddd));
	background: -webkit-linear-gradient(top, #ffffff, #dddddd);
	background: -moz-linear-gradient(top, #ffffff, #dddddd);
	background: -ms-linear-gradient(top, #ffffff, #dddddd);
	background: -o-linear-gradient(top, #ffffff, #dddddd);
	background: linear-gradient(top, #ffffff, #dddddd);
}
	

form#simplesubmit select {  /* select style  */
	border-color:#B7B7B7 #E8E8E8 #E8E8E8 #B7B7B7; 
	border-style:solid; 
	border-width:1px; 
	padding:5px; 
	font-size:13px; 
	color:#333; 
	background-color: #ffffff;
	background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dddddd));
	background: -webkit-linear-gradient(top, #ffffff, #dddddd);
	background: -moz-linear-gradient(top, #ffffff, #dddddd);
	background: -ms-linear-gradient(top, #ffffff, #dddddd);
	background: -o-linear-gradient(top, #ffffff, #dddddd);
	background: linear-gradient(top, #ffffff, #dddddd);
}

form#simplesubmit textarea {  /* textarea style  */
	font-family:Arial, Tahoma, Helvetica, sans-serif; 
	font-size:100%; 
	padding:0.6em 0.5em 0.7em; 
	border-color:#B7B7B7 #E8E8E8 #E8E8E8 #B7B7B7; 
	border-style:solid; 
	border-width:1px;
	background-color: #ffffff;
	background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dddddd));
	background: -webkit-linear-gradient(top, #ffffff, #dddddd);
	background: -moz-linear-gradient(top, #ffffff, #dddddd);
	background: -ms-linear-gradient(top, #ffffff, #dddddd);
	background: -o-linear-gradient(top, #ffffff, #dddddd);
	background: linear-gradient(top, #ffffff, #dddddd);
}

button.submit { /* submit button style  */
	background-color: #0078ff;
	background: -webkit-gradient(linear, left top, left bottom, from(#0078ff), to(#00a8ff));
	background: -webkit-linear-gradient(top, #0078ff, #00a8ff);
	background: -moz-linear-gradient(top, #0078ff, #00a8ff);
	background: -ms-linear-gradient(top, #0078ff, #00a8ff);
	background: -o-linear-gradient(top, #0078ff, #00a8ff);
	background: linear-gradient(top, #0078ff, #00a8ff);
	border: 1px solid #0381c2;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	box-shadow: inset 0 1px 0 0 #0381c2;
	-webkit-box-shadow: 0 1px 0 0 #0381c2 inset ;
	-moz-box-shadow: 0 1px 0 0 #0381c2 inset;
	-ms-box-shadow: 0 1px 0 0 #0381c2 inset;
	-o-box-shadow: 0 1px 0 0 #0381c2 inset;
	color: white;
	font-weight: bold;
	padding: 6px 20px;
	text-align: center;
	text-shadow: 0 -1px 0 #006cff;
}
button.submit:hover {
	opacity:.85;
	cursor: pointer; 
}
button.submit:active {
	border: 1px solid #cbcbcb;
	box-shadow: 0 0 10px 5px #cbcbcb inset; 
	-webkit-box-shadow:0 0 10px 5px #cbcbcb inset ;
	-moz-box-shadow: 0 0 10px 5px #cbcbcb inset;
	-ms-box-shadow: 0 0 10px 5px #cbcbcb inset;
	-o-box-shadow: 0 0 10px 5px #cbcbcb inset;
}

button.reset { /* reset button style  */
	background-color: #dddddd;
	background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dddddd));
	background: -webkit-linear-gradient(top, #ffffff, #dddddd);
	background: -moz-linear-gradient(top, #ffffff, #dddddd);
	background: -ms-linear-gradient(top, #ffffff, #dddddd);
	background: -o-linear-gradient(top, #ffffff, #dddddd);
	background: linear-gradient(top, #ffffff, #dddddd);
	border: 1px solid #dddddd;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	box-shadow: inset 0 1px 0 0 #eeeeee;
	-webkit-box-shadow: 0 1px 0 0 #eeeeee inset ;
	-moz-box-shadow: 0 1px 0 0 #eeeeee inset;
	-ms-box-shadow: 0 1px 0 0 #eeeeee inset;
	-o-box-shadow: 0 1px 0 0 #eeeeee inset;
	color: #000000;
	font-weight: bold;
	padding: 6px 20px;
	text-align: center;
	text-shadow: 0 -1px 0 #eeeeee;
}
button.reset:hover {
	opacity:.85;
	cursor: pointer; 
}
button.reset:active {
	border: 1px solid #eeeeee;
	box-shadow: 0 0 10px 5px #eeeeee inset; 
	-webkit-box-shadow:0 0 10px 5px #eeeeee inset ;
	-moz-box-shadow: 0 0 10px 5px #eeeeee inset;
	-ms-box-shadow: 0 0 10px 5px #eeeeee inset;
	-o-box-shadow: 0 0 10px 5px #eeeeee inset;
}


</style>
</head>
<body>

<div id="header">


<a href="todolist.php" id="buttons">Todo List</a>
<a href="suggestions.php" id="buttons">Suggestion Box</a>
<span id="headertitle"><a href="index.php" id="home">Dwarf C<img src="images/header-icon.png">vilizations I</a></span>
<a href="updates.php" id="buttons">Updates Log</a>
<a href="howtoplay.php" id="buttons">How To Play</a>

</div>

</header>
<div id="body">
<div class="main-wrapper">
	<div id="contact-wrapper">

<!-- logo -->
<img src="images/logo.png" alt="" width="174" height="34" />
<!--- logo ends -->
<form method="post" action="submit_now.php" id="simplesubmit">
    					
		<div>
		    <label for="name"><span class="labelname"><strong>Full Name:*</strong></span></label> 
			<input type="text" size="50" name="contactname" id="contactname" value="" class="required" placeholder="Johnny Bravo" required/>
	    </div>
		
		<div>
			<span class="labelname"><strong>Email Address:</strong></span><label for="email" class=""></label> 
			<input type="text" size="50" name="email" id="email" value="" class="required email" placeholder="masterblaster2013@gmail.com"/>
		</div>
        
        <div>
<label for="email">
	<span class="labelname">
		<strong>Telephone Number</strong>
		</span>
	</label> 
<input type="text" size="50" name="tel" id="tel" value="" class="required" placeholder="(123) 555-4123"/>
		</div>
        <div>
		<label for="email"><span class="labelname">
			<strong>Quick Subject*</strong>
				</span>
			</label> 	
	<select name="department" id="department" class="required" required>
             <option value=""> </option>
             <option value="Questions-And-Concerns">Questions or Concerns.</option>
             <option value="Bug-Report">Bug Report</option>
             <option value="Just-Saying-Hello">Just saying hello!</option>
            </select>
		</div>
		       
        <div>
			<label for="subject"><span class="labelname"><strong>Subject(Optional):</strong></span></label> 
			<input type="text" size="50" name="subject" id="subject" value="" class="required" placeholder="Just saying hello!"/>
		</div>
							
	    <div>
<label for="message">
	<span class="labelname">
		<strong>Message:*</strong>
	</span>
</label>
	<textarea rows="5" cols="50" name="message" id="message" class="required" placeholder="Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. " required></textarea>
	    </div>
	<button class="submit" type="submit">Submit Form</button> 
	<button class="reset" type="reset">Reset</button>
</form>

</div>
<br><br>
<!--- you can remove-->
</div>
</div>
<div id="footer">
<h5>Dwarf Civilizations I &copy; Daniel Jajliardo 2014 || Form &copy; <a href="www.techandall.com/simplesubmit-1-0-phpajax-contact-form-made-easy">TechAndAll</a></h5>
</div>
</body></html>