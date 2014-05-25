Dwarves.newFarmer = function(){
	if(Dwarves.Var.noneDwarves >= 1){
	Dwarves.Var.noneDwarves -= 1;
	Dwarves.Var.FarmerDwarves += 1;
	Update();
	}
};