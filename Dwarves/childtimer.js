Dwarves.newChild = function(num){
	for(i=0; i<num; i++){
		Dwarves.Var.Children += 1;
		setTimeout("Dwarves.growUp(1)",300000);
	}
	Update();
}

Dwarves.growUp = function(num){
	for(i=0; i<num; i++){
		Dwarves.Var.Children -= 1;
		Dwarves.newDwarf(1);
	}
	Update();
}