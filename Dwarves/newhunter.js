Dwarves.newHunter = function(){
	if(Dwarves.Var.noneDwarves >= 1){
	Dwarves.Var.noneDwarves -= 1;
	Dwarves.Var.HunterDwarves += 1;
	Update();
	}
};