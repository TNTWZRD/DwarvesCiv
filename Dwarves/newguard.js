Dwarves.newGuard = function(){
	if(Dwarves.Var.noneDwarves >= 1){
	Dwarves.Var.noneDwarves -= 1;
	Dwarves.Var.GuardDwarves += 1;
	Update();
	}
};