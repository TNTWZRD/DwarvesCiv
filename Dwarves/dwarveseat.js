Dwarves.Eat = function(){
	Dwarves.TotalConsumed = Dwarves.Var.TotalDwarves + (Dwarves.Var.Children/2);
	
	for(i=0; i<=Dwarves.TotalConsumed; i++){
	if(Vars.Food.Apple >= 1){
		Vars.Food.Apple -= 1;
	}else if(Vars.Food.Berry >= 1){
		Vars.Food.Berry -= 1;
	}else if(Vars.Food.Fish >= 1){
		Vars.Food.Fish -= 1;
	}else if(Vars.Food.Beef >= 1){
		Vars.Food.Beef -= 1;
	}else if(Vars.Food.Ham >= 1){
		Vars.Food.Ham -= 1;
	}else{
		console.log("Clearing Save Game");
		localStorage.clear();
		window.location.reload();
		confirm("You Have Run Out Of Food And Are Now Starving To Death..... Better Luck Next Time!");
	}
	}
} 