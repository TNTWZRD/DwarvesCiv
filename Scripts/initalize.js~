Main = {};

Init = function(){
	console.log("Initalizing....");
	console.log("Please Wait....");
	if(localStorage.getItem("VARS") != null){
		Main.LoadSaveGame();
	}else{
		Main.SaveGame();
	}
}

Main.LoadSaveGame = function(){
	localStorage.setItem("VARS", btoa(JSON.stringify(Vars.Data)));
}

Main.SaveGame = function(){
	Vars.Data = atob(JSON.parse(localStorage.getItem("VARS")));
}

Init();
