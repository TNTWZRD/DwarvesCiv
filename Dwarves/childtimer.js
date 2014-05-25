Dwarves.newChild = function(num){
	if(Dwarves.Var.MaleReady >= 1 && Dwarves.Var.FemaleReady >= 1 && Dwarves.Var.TotalDwarves < Vars.OccupationLimit){
	for(i=0; i<num; i++){
		Dwarves.Var.Children += 1;
		setTimeout("Dwarves.growUp(1)",300000);
		Dwarves.Var.MaleReady -= 1;
		Dwarves.Var.FemaleReady -=1;
	}
	Update();
	}
}

Dwarves.growUp = function(num){
	for(i=0; i<num; i++){
		Dwarves.Var.Children -= 1;
		Dwarves.newDwarf();
		Dwarves.Var.MaleReady += 1;
		Dwarves.Var.FemaleReady +=1;
	}
	Update();
}