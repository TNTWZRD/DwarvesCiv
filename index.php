<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="Styles/main-style.css">
<link rel="stylesheet" type="text/css" href="Styles/menu-style.css">
<title>
Dwarves Civ
</title>
</head>

<body>

<ul id="navbar">
	
	<li><a href="#">Utility Buttons</a>
	<ul>
		<li><a href="#" id="Save-Game">Save Game</a></li>
		<li><a href="#" id="Load-Game">Load Game</a></li>
		<li><a href="#" id="Clear-Game">Clear Game</a></li>
		<li><a href="#" id="PauseButton">Pause</a></li>
	</ul>
	</li>
	
	<li><a href="#">Dwarves</a>
	<ul>
		<li><a href="#" id="NDwarf">New Dwarf</a></li>
		<li><a href="#" id="NMiner">New Miner</a></li>
		<li><a href="#" id="NFarmer">New Farmer</a></li>
		<li><a href="#" id="NLogger">New Logger</a></li>
		<li><a href="#" id="NBlacksmith">New Blacksmith</a></li>
		<li><a href="#" id="NHunter">New Hunter</a></li>
		<li><a href="#" id="NGuard">New Guard</a></li>
		<li><a href="#" id="NShepherd">New Shepherd</a></li>
		<li><a href="#" id="NBuilder">New Builder</a></li>
		<li><a href="#" id="NBrickmaker">New Brickmaker</a></li>
	</ul>
	</li>
	
	<li><a href="#">Buildings</a>
	<ul>
		<li><a href="#" id="NHouse">New House</a></li>
		<li><a href="#" id="NMine">New Mine</a></li>
		<li><a href="#" id="NFarm">New Farm</a></li>
		<li><a href="#" id="NMill">New Mill</a></li>
		<li><a href="#" id="NSmithery">New Smithery</a></li>
		<li><a href="#" id="NBarracks">New Barracks</a></li>
		<li><a href="#" id="NField">New Field</a></li>
		<li><a href="#" id="NBrickField">New Brick Field</a></li>
		<li><a href="#" id="NBrewery">New Brewery</a></li>
	</ul>
	</li>
	
	<li><a href="#">Tools</a>
	<ul>
		<li><a href="#" id="NPick">New Pick</a></li>
		<li><a href="#" id="NHoe">New Hoe</a></li>
		<li><a href="#" id="NAxe">New Axe</a></li>
		<li><a href="#" id="NAnvil">New Anvil</a></li>
		<li><a href="#" id="NHammer">New Hammer</a></li>
		<li><a href="#" id="NSword">New Sword</a></li>
		<li><a href="#" id="NBow">New Bow</a></li>
		<li><a href="#" id="NShear">New Shear</a></li>
		<li><a href="#" id="NBrickMold">New Brick Mold</a></li>
	</ul>
	</li>
	
	<li><a href="#">Dwarf Data</a>
	<ul>
		<li>Dwarves: <span id="Stat.Dwarf">0</span></li>
		<li>Childeren: <span id="Stat.Children">0</span></li>
		<li>Male Dwarves: <span id="Stat.MDwarf">0</span></li>
		<li>Female Dwarves: <span id="Stat.FDwarf">0</span></li>
		<li>Miner: <span id="Stat.Miner">0</span></li>
		<li>Logger: <span id="Stat.Logger">0</span></li>
		<li>Farmer: <span id="Stat.Farmer">0</span></li>
		<li>Blacksmith: <span id="Stat.Blacksmith">0</span></li>
		<li>Hunter: <span id="Stat.Hunter">0</span></li>
		<li>Guard: <span id="Stat.Guard">0</span></li>
		<li>Shepherd: <span id="Stat.Shepherd">0</span></li>
		<li>Builder: <span id="Stat.Builder">0</span></li>
		<li>Brickmaker: <span id="Stat.Brickmaker">0</span></li>
	</ul>
	</li>
	
	<li><a href="#">Item Data</a>
	<ul>
		<li>Stone: <span id="Stat.Stone">0</span></li>
		<li>Dirt: <span id="Stat.Dirt">0</span></li>
		<li>Coal: <span id="Stat.Coal">0</span></li>
		<li>Iron: <span id="Stat.Iron">0</span></li>
		<li>Gold: <span id="Stat.Gold">0</span></li>
		<li>Flint: <span id="Stat.Flint">0</span></li>
		<li>Copper: <span id="Stat.Copper">0</span></li>
		<li>Wood: <span id="Stat.Wood">0</span></li>
		<li>Log: <span id="Stat.Log">0</span></li>
		<li>Wool: <span id="Stat.Wool">0</span></li>
		<li>Clay: <span id="Stat.Clay">0</span></li>
		<li>Brick: <span id="Stat.Brick">0</span></li>
		<li>Grass: <span id="Stat.Grass">0</span></li>
		<li>Wheat: <span id="Stat.Wheat">0</span></li>
	</ul>
	</li>
	
	<li><a href="#">Tool Data</a>
	<ul>
		<li>Pick: <span id="Stat.Pick">0</span></li>
		<li>Hoe: <span id="Stat.Hoe">0</span></li>
		<li>Axe: <span id="Stat.Axe">0</span></li>
		<li>Anvil: <span id="Stat.Anvil">0</span></li>
		<li>Hammer: <span id="Stat.Hammer">0</span></li>
		<li>Sword: <span id="Stat.Sword">0</span></li>
		<li>Bow: <span id="Stat.Bow">0</span></li>
		<li>Shear: <span id="Stat.Shear">0</span></li>
		<li>Brick Mold: <span id="Stat.BrickMold">0</span></li>
	</ul>
	</li>
	
	<li><a href="#">Storage Data</a>
	<ul>
		<li>Chests: <span id="Stat.Chest">0</span></li>
		<li>Caves: <span id="Stat.Cave">0</span></li>
		<li>TotalStorage: <span id="Stat.TotalStorage">0</span></li>
	</ul>
	</li>
	
	<li><a href="#">Time and Date</a>
	<ul>
		<li>Day: <span id="Stat.Time.Day">1</span></li>
		<li>Year: <span id="Stat.Time.Year">1</span></li>
		<li>Time: <span id="Stat.Time.Hours">00</span>:<span id="Stat.Time.Mins">00</span>:<span id="Stat.Time.Seconds">00</span></li>
	</ul>
	</li>
	
</ul>

<!-- Load Scipts -->
<script src="Scripts/jquery.min.js" /></script>
<script src="Variables/variables.js" /></script>
<script src="Dwarves/dwarfvariables.js" /></script>
<script src="Dwarves/childtimer.js" /></script>
<script src="Dwarves/newdwarf.js" /></script>
<script src="Dwarves/newminer.js" /></script>
<script src="Scripts/initalize.js" /></script>
<script src="Scripts/timeanddate.js" /></script>
<script src="Scripts/localstorage.js" /></script>
<script src="Scripts/updateindex.js" /></script>
<script src="Dwarves/dwarfbuttons.js" /></script>
<script src="Scripts/buttonlistener.js" /></script>
<!-- End Load Scripts -->
<body>
</html>
