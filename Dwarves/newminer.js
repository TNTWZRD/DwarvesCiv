Dwarves.newMiner = function(number){
	if(Dwarves.Var.NewDwarves >= number){
	Dwarves.Var.NewDwarves -= number;
	Dwarves.Var.MinerDwarves += number;
	}
}