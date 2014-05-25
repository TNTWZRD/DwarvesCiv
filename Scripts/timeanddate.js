Time = {};

Time.Seconds = 0;
Time.Mins = 0;
Time.Hours = 13;
Time.Day = 0;
Time.Year = 0;

Time.Seasons = {};
Time.Seasons.Spring = 91;
Time.Seasons.Summer = 183;
Time.Seasons.Fall = 274;
Time.Seasons.Winter = 365;

Time.Seasons.Current;


Time.Realtime = {};
Time.Realtime.Seconds = 0;
Time.Realtime.Mins = 0;
Time.Realtime.Hours = 0;
Time.Realtime.Day = 0;

Time.Running = true;

SecondsAdd = function(){
	if(Time.Running == true){
		Time.Seconds++;
	}
}

updateTime = function(){
		document.getElementById("Stat.Time.Day").innerHTML = Time.Day;
		document.getElementById("Stat.Time.Year").innerHTML = Time.Year;
		document.getElementById("Stat.Time.Hours").innerHTML = Time.Hours;
		document.getElementById("Stat.Time.Mins").innerHTML = Time.Mins;
		document.getElementById("Stat.Time.Seconds").innerHTML = Time.Seconds;
}

RealSecondsAdd = function(){
	Time.Realtime.Seconds++;
	if(Time.Realtime.Seconds >= 60){
		Time.Realtime.Seconds = 0;
		Time.Realtime.Mins += 1;
	}
	if(Time.Realtime.Mins >= 60){
		Time.Realtime.Mins = 0;
		Time.Realtime.Hours += 1;
	}
	if(Time.Realtime.Hours >= 24){
		Time.Realtime.Hours = 0;
		Time.Realtime.Day += 1;
	}
}

checkTime =  function(){
	
	if(Time.Day > 0 && Time.Day <=91){
		Time.Seasons.Current = "Spring";
	}else if(Time.Day > 91 && Time.Day <=183){
		Time.Seasons.Current = "Summer";
	}else if(Time.Day > 183 && Time.Day <=274){
		Time.Seasons.Current = "Fall";
	}else if(Time.Day > 274 && Time.Day <=365){
		Time.Seasons.Current = "Winter";
	}
	
	if(Time.Day <= 0){
		Time.Day += 1;
	}
	if(Time.Year <= 0){
		Time.Year += 1;
	}
	
	if(Time.Seconds >= 60){
		Time.Seconds = 0;
		Time.Mins += 1;
	}
	if(Time.Mins >= 60){
		Time.Mins = 0;
		Time.Hours += 1;
	}
	if(Time.Hours >= 24){
		Time.Hours = 0;
		Time.Day += 1;
	}
	if(Time.Day > 365){
		Time.Day = 0;
		Time.Year += 1;
	}
	
	if(Time.Hours == 7 || Time.Hours == 12 || Time.Hours == 21){
		Dwarves.Eat();
	}
}

setInterval("checkTime();",10);
setInterval("SecondsAdd();",10);
setInterval("updateTime();",10);
setInterval("RealSecondsAdd();",1000);