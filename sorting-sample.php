
<html>
<head><title>Sample</title>
<style>
body {
  font-family: helvetica, sans-serif;
}

header {
height: 70px;
clear: both;
text-align: center;
}

header img {
max-height: 30px;
margin-top: 20px;
}

main {
margin-left: -10px;
}

main div.set {
display: block;
width: 11%;
float: left;
vertical-align: top;
margin-bottom: 10px;
box-sizing: border-box;
padding-left: 10px;
text-align: center;
}

@media (min-width: 601px) and (max-width: 1200px) {
	main div.set {
	width: 20%;
	}
	main div.set:nth-child(6) {
	clear: both;
	}
}

@media (min-width: 0px) and (max-width: 600px) {
	main div.set {
	width: 33%;
	}
	main div.set:nth-child(4) {
	clear: both;
	}
}

main div.set div.pad {
border: 1px solid #eee;
padding-bottom: 10px;
}

main div.set a {
display: block;
padding: 5px 10px;
}

main div.set img {
max-width: 100%;
}

h2 {
color: #09bdd8;
font-weight: bold;
font-size: 20px;
}
</style>
</head>
<body>
<header><a href="http://www.blackpepper.co.nz/"><img src="http://www.blackpepper.co.nz/images/logo1.png"></a></a></header>
<main>
  <?php
  if (($cell = fopen("sample-data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($cell)) !== FALSE) {
      $column1 = $data[0];
      $column2 = $data[1];
      $column3 = $data[2];

      $title[]=$column1;
      $link[]=$column2;
      $image[]=$column3;
      array_multisort($title,$link,$image);

      $clength = count($title);
        if ($clength == 26) {
          $ab = array('A','B');
          $cd = array('C','D');
          $ef = array('E','F');
          $gh = array('G','H');
          $kl = array('K','L');
          $mn = array('M','N');
          $op = array('O','P');
          $qr = array('Q','R');
          $st = array('S','T');

          // Start to Call A to B
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>A - B</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $ab) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

          // Start to Call C to D
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>C - D</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $cd) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

          // Start to Call E to F
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>E - F</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $ef) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

          // Start to Call G to H
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>G - H</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $gh) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

          // Start to Call K to L
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>K - L</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $kl) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

          // Start to Call M to N
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>M - N</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $mn) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

          // Start to Call O to P
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>O - P</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $op) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

          // Start to Call Q to R
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>Q - R</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $qr) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

          // Start to Call S to T
          echo "<div class=\"set\"><div class=\"pad\">";
          echo "<h2>S - T</h2>";
            for($x = 0; $x < $clength; $x++) {
              if (in_array($title[$x][0], $st) ){
                echo "<a href=\"$link[$x]\" title=\"$title[$x]\" target=\"_blank\"><img src=\"$image[$x]\" alt=\"$title[$x]\"></a>";
              }
            }
          echo "</div></div>";

        }

      }
    fclose($cell);
  }
  ?>
</main>
</html>
