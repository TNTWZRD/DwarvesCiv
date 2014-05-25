Dwarves.newLogger = function(){
	if(Dwarves.Var.noneDwarves >= 1){
	Dwarves.Var.noneDwarves -= 1;
	Dwarves.Var.LoggerDwarves += 1;
	Update();
	}
};