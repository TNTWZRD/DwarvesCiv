Dwarves.newBlacksmith = function(){
	if(Dwarves.Var.noneDwarves >= 1){
	Dwarves.Var.noneDwarves -= 1;
	Dwarves.Var.BlacksmithDwarves += 1;
	Update();
	}
};