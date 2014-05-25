Dwarves.Eat = function(){
	Dwarves.adultsconsumeing = Dwarves.TotalDwarves;
	Dwarves.childrenconsumeing = Dwarves.Childeren / 2;
	
	Dwarves.TotalConsumed = Dwarves.adultsconsumeing + Dwarves.childrenconsumeing;
	
	if(Vars.Food.Apple >= Dwarves.TotalConsumed){
		Vars.Food.Apple -= Dwarves.TotalConsumed;
	}else if(Vars.Food.Berry >= Dwarves.TotalConsumed){
		Vars.Food.Berry -= Dwarves.TotalConsumed;
	}else if(Vars.Food.Fish >= Dwarves.TotalConsumed){
		Vars.Food.Fish -= Dwarves.TotalConsumed;
	}else if(Vars.Food.Beef >= Dwarves.TotalConsumed){
		Vars.Food.Beef -= Dwarves.TotalConsumed;
	}else if(Vars.Food.Ham >= Dwarves.TotalConsumed){
		Vars.Food.Ham -= Dwarves.TotalConsumed;
	}else{
		confirm("You Have Run Out Of Food And Are Now Starving To Death..... Better Luck Next Time!");
		console.log("Clearing Save Game");
		localStorage.clear();
		window.location.reload();
	}
}