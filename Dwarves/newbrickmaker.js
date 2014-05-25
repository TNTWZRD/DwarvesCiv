Dwarves.newBrickmaker = function(){
	if(Dwarves.Var.noneDwarves >= 1){
	Dwarves.Var.noneDwarves -= 1;
	Dwarves.Var.BrickmakerDwarves += 1;
	Update();
	}
};