Game = {};

Game.SaveRes = function(){
	localStorage.setItem('Dwarves.Var', btoa(JSON.stringify(Dwarves.Var)));
	localStorage.setItem('Vars', btoa(JSON.stringify(Vars)));
	localStorage.setItem('Time', btoa(JSON.stringify(Time)));
	console.log("Game Saved!");
}

Game.LoadRes = function(){
	if(localStorage.getItem("Dwarves.Var") != null){
		Dwarves.Var = JSON.parse(atob(localStorage.getItem('Dwarves.Var')));
		Vars = JSON.parse(atob(localStorage.getItem('Vars')));
		Time = JSON.parse(atob(localStorage.getItem('Time')));
		console.log("Game Loaded!");
	}
}

Game.ClearRes = function(){
	if(confirm("Are You Sure That You Want To Clear Your Save?") == true){
		console.log("Clearing Save Game");
		localStorage.clear();
		window.location.reload();
	}
}

if(localStorage.getItem("Dwarves.Var") != null){Game.LoadRes();}else{Game.SaveRes();}

setInterval("Game.SaveRes();",300000);