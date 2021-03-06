<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="Styles/main-style.css">
<link rel="icon" type="image/ico" href="images/favicon.ico">
<title>
Dwarves Civ
</title>
</head>

<body>

<div id="header">


<a href="todolist.php" id="buttons">Todo List</a>
<a href="suggestions.php" id="buttons">Suggestion Box</a>
<span id="headertitle"><a href="index.php" id="home">Dwarf C<img src="images/header-icon.png">vilizations I</a></span>
<a href="updates.php" id="buttons">Updates Log</a>
<a href="howtoplay.php" id="buttons">How To Play</a>

</div>

<ul id="navbar">
	
	<li><a href="">Utility Buttons</a>
	<ul>
		<li><a href="" id="Save-Game">Save Game</a><br>
		<a href="" id="Load-Game">Load Game</a><br>
		<a href="" id="Clear-Game">Clear Game</a><br>
		<a href="" id="AutoSave">Turn Auto Save On</a><br>
		<a href="" id="PauseButton">Pause</a></li>
	</ul>
	</li>
	
	<li><a href="">Dwarves</a>
	<ul>
		<li><a href="" id="NDwarf">New Dwarf</a><br>
		<a href="" id="NMiner">New Miner</a><br>
		<a href="" id="NFarmer">New Farmer</a><br>
		<a href="" id="NLogger">New Logger</a><br>
		<a href="" id="NBlacksmith">New Blacksmith</a><br>
		<a href="" id="NHunter">New Hunter</a><br>
		<a href="" id="NGuard">New Guard</a><br>
		<a href="" id="NShepherd">New Shepherd</a><br>
		<a href="" id="NBuilder">New Builder</a><br>
		<a href="" id="NBrickmaker">New Brickmaker</a></li>
	</ul>
	</li>
	
	<li><a href="">Buildings</a>
	<ul>
		<li><a href="" id="NHouse">New House</a><br>
		<a href="" id="NMine">New Mine</a><br>
		<a href="" id="NFarm">New Farm</a><br>
		<a href="" id="NMill">New Mill</a><br>
		<a href="" id="NSmithery">New Smithery</a><br>
		<a href="" id="NBarracks">New Barracks</a><br>
		<a href="" id="NField">New Field</a><br>
		<a href="" id="NBrickField">New Brick Field</a><br>
		<a href="" id="NBrewery">New Brewery</a><br>
		<a href="" id="NAnimalPen">New Animal Pen</a><br>
		<a href="" id="NChest">New Chest</a><br>
		<a href="" id="NCave">New Cave</a></li>
	</ul>
	</li>
	
	<li><a href="">Tools</a>
	<ul>
		<li><a href="" id="NPick">New Pick</a><br>
		<a href="" id="NHoe">New Hoe</a><br>
		<a href="" id="NAxe">New Axe</a><br>
		<a href="" id="NAnvil">New Anvil</a><br>
		<a href="" id="NHammer">New Hammer</a><br>
		<a href="" id="NSword">New Sword</a><br>
		<a href="" id="NBow">New Bow</a><br>
		<a href="" id="NShear">New Shear</a><br>
		<a href="" id="NBrickMold">New Brick Mold</a></li>
	</ul>
	</li>
	
</ul>

<div id="body">

<hr>

<div id="data">
<table width="100%" style="text-align: left; margin: auto;">
<tr>
	<th width="16.67%">Dwarf Data:</th>
	<th width="16.67%">Building Data:</th>
	<th width="16.67%">Item Data:</th>
	<th width="16.67%">Food Data:</th>
	<th width="16.67%">Tool Data:</th>
	<th width="16.67%">Other Data:</th>
</tr>

<tr>
	<td>
		Dwarves: <span id="Stat.Dwarf">0</span><br>
		Childeren: <span id="Stat.Children">0</span><br>
		Male Dwarves: <span id="Stat.MDwarf">0</span><br>
		Female Dwarves: <span id="Stat.FDwarf">0</span><br>
		No Occupation: <span id="Stat.NOccupation">0</span><br>
		Miner: <span id="Stat.Miner">0</span><br>
		Logger: <span id="Stat.Logger">0</span><br>
		Farmer: <span id="Stat.Farmer">0</span><br>
		Blacksmith: <span id="Stat.Blacksmith">0</span><br>
		Hunter: <span id="Stat.Hunter">0</span><br>
		Guard: <span id="Stat.Guard">0</span><br>
		Shepherd: <span id="Stat.Shepherd">0</span><br>
		Builder: <span id="Stat.Builder">0</span><br>
		Brickmaker: <span id="Stat.Brickmaker">0</span>
	</td>
	
	<td>
		Houses: <span id="Stat.House">0</span><br>
		Mines: <span id="Stat.Mine">0</span><br>
		Farms: <span id="Stat.Farm">0</span><br>
		Mills: <span id="Stat.Mill">0</span><br>
		Smitherys: <span id="Stat.Smithery">0</span><br>
		Barracks: <span id="Stat.Barracks">0</span><br>
		Fields: <span id="Stat.Field">0</span><br>
		Brick Fields: <span id="Stat.BrickField">0</span><br>
		Brewerys: <span id="Stat.Brewery">0</span><br>
		Animal Pens: <span id="Stat.AnimalPen">0</span><br>
		Chests: <span id="Stat.Chest">0</span><br>
		Caves: <span id="Stat.Cave">0</span><br>
		TotalStorage: <span id="Stat.TotalStorage">0</span>
	</td>
	
	<td>
		Stone: <span id="Stat.Stone">0</span><br>
		Dirt: <span id="Stat.Dirt">0</span><br>
		Coal: <span id="Stat.Coal">0</span><br>
		Iron: <span id="Stat.Iron">0</span><br>
		Gold: <span id="Stat.Gold">0</span><br>
		Flint: <span id="Stat.Flint">0</span><br>
		Copper: <span id="Stat.Copper">0</span><br>
		Planks: <span id="Stat.Wood">0</span><br>
		Log: <span id="Stat.Log">0</span><br>
		Wool: <span id="Stat.Wool">0</span><br>
		Clay: <span id="Stat.Clay">0</span><br>
		Brick: <span id="Stat.Brick">0</span><br>
		Grass: <span id="Stat.Grass">0</span><br>
		Wheat: <span id="Stat.Wheat">0</span>
	</td>
	
	<td>
		Apple: <span id="Stat.Apple">0</span><br>
		Berry: <span id="Stat.Berry">0</span><br>
		Fish: <span id="Stat.Fish">0</span><br>
		Beef: <span id="Stat.Beef">0</span><br>
		Ham: <span id="Stat.Ham">0</span>
	</td>
	
	<td>
		Pick: <span id="Stat.Pick">0</span><br>
		Hoe: <span id="Stat.Hoe">0</span><br>
		Axe: <span id="Stat.Axe">0</span><br>
		Anvil: <span id="Stat.Anvil">0</span><br>
		Hammer: <span id="Stat.Hammer">0</span><br>
		Sword: <span id="Stat.Sword">0</span><br>
		Bow: <span id="Stat.Bow">0</span><br>
		Shear: <span id="Stat.Shear">0</span><br>
		Brick Mold: <span id="Stat.BrickMold">0</span>
	</td>
	
	<td>
		Day: <span id="Stat.Time.Day">1</span><br>
		Year: <span id="Stat.Time.Year">1</span><br>
		Time: <span id="Stat.Time.Hours">00</span>:<span id="Stat.Time.Mins">00</span>:<span id="Stat.Time.Seconds">00</span> <span id="Stat.Time.AmPm">PM</span><br>
		Coins: <span id="Stat.Money">0</span><br>
		Prestige: <span id="Stat.Prestige">0</span><br>
		Occupation Limit: <span id="Stat.OccupationLimit">0</span><br>
	</td>
</tr>

</table>
</div>

<hr>

<div id="trade">

</div>


</div>

<div id="footer">
<h5>Dwarf Civilizations I &copy; Daniel Jajliardo 2014</h5>
</div>

<!-- Load Scipts -->
<script src="Scripts/jquery.min.js" /></script>
<script src="Variables/variables.js" /></script>
<script src="Dwarves/dwarfvariables.js" /></script>
<script src="Dwarves/childtimer.js" /></script>
<script src="Dwarves/newdwarf.js" /></script>
<script src="Dwarves/newminer.js" /></script>
<script src="Dwarves/newblacksmith.js" /></script>
<script src="Dwarves/newbrickmaker.js" /></script>
<script src="Dwarves/newbuilder.js" /></script>
<script src="Dwarves/newfarmer.js" /></script>
<script src="Dwarves/newguard.js" /></script>
<script src="Dwarves/newhunter.js" /></script>
<script src="Dwarves/newlogger.js" /></script>
<script src="Dwarves/newshepherd.js" /></script>
<script src="Dwarves/dwarveseat.js" /></script>
<script src="Scripts/initalize.js" /></script>
<script src="Scripts/timeanddate.js" /></script>
<script src="Scripts/localstorage.js" /></script>
<script src="Scripts/updateindex.js" /></script>
<script src="Dwarves/dwarfbuttons.js" /></script>
<script src="Scripts/buttonlistener.js" /></script>
<!-- End Load Scripts -->
<body>
</html>
