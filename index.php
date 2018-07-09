
<?php
#error_reporting(0);
$r = $_GET["resto"];
$d = $_GET["dag"];
$s = "PLACEYOUREKEYHERE"; ?>

<style>
@import "https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700";

.rwd-table {
  margin: 0;
  min-width: 100%;
}
.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.rwd-table th {
  display: none;
}
.rwd-table td {
  display: block;
}
.rwd-table td:first-child {
  padding-top: 0.5em;
}
.rwd-table td:last-child {
  padding-bottom: 0.5em;
}
.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 6.5em;
  display: inline-block;
}
@media (min-width: 480px) {
  .rwd-table td:before {
    display: none;
  }
}
.rwd-table th,
.rwd-table td {
  text-align: left;
}
@media (min-width: 480px) {
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: 0.25em 0.5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
}

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #fff;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #000;
}

.rwd-table {
  background: #000;
  color: #fff;
  border-radius: 0.4em;
  overflow: hidden;
}
.rwd-table tr {
  border-color: #000;
}
.rwd-table th,
.rwd-table td {
  margin: 0.5em 1em;
}
@media (min-width: 480px) {
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}
.rwd-table th,
.rwd-table td:before {
  color: #fff;
}
</style>
<table class="rwd-table">
  <tr>
    <th>Type</th>
    <th>Menu</th>
    <th>Prijs</th>
  </tr>
  
<?php 
$xml = simplexml_load_file("https://api.heimdal.be/resto.php?resto=$r&dag=$d&sleutel=$s") or die("Error");
$i = 1;

foreach($xml->menu as $menu)
	{echo "<tr><td data-th='Type'>" . $menu['type'] . "</td><td data-th='menu' width='1000'>" . $menu['aanbod'] . "</td><td data-th='prijs'>" . $menu['prijs'] . "</td></tr>";
	if ($i++ == 8) break;
	} ?></table>
    
