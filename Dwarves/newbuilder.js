Dwarves.newBuilder = function(){
	if(Dwarves.Var.noneDwarves >= 1){
	Dwarves.Var.noneDwarves -= 1;
	Dwarves.Var.BuilderDwarves += 1;
	Update();
	}
};