Dwarves.newChild = function(num){
	if(Dwarves.Var.MaleReady >= 1 && Dwarves.Var.FemaleReady >= 1){
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
		Dwarves.newDwarf(1);
		Dwarves.Var.MaleReady += 1;
		Dwarves.Var.FemaleReady +=1;
	}
	Update();
}