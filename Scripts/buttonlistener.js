$(function(){
		$("#PauseButton").click(function(event) {
			event.preventDefault();
			if(Time.Running == false){
			Main.Pause = false;
			Time.Running = true;
			document.getElementById("PauseButton").innerHTML = "Pause";
			}
			else if(Time.Running == true){
			Main.Pause = true;
			Time.Running = false;
			document.getElementById("PauseButton").innerHTML = "Unpause";
			}
		});
	}
);

$(function(){
		$("#Save-Game").click(function(event) {
			event.preventDefault();
			Game.SaveRes();
		});
	}
);

$(function(){
		$("#Load-Game").click(function(event) {
			event.preventDefault();
			Game.LoadRes();
		});
	}
);

$(function(){
		$("#Clear-Game").click(function(event) {
			event.preventDefault();
			Game.ClearRes();
		});
	}
);