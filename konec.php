<?php
        session_start();

        $_SESSION["p1Score"];
        $_SESSION["p2Score"];
        $_SESSION["p3Score"];
        $_SESSION["p1"];
        $_SESSION["p2"];
        $_SESSION["p3"];
        $_SESSION["stevKoc"];
        $_SESSION["stevMet"];
        $_SESSION["stevVrz"];
        $max=$_SESSION["p1Score"];

        for($x=0;$x<3;$x++){
            if($max<$_SESSION["p2Score"])
                $max=$_SESSION["p2Score"];
            else if($max<$_SESSION["p3Score"]){
                $max=$_SESSION["p3Score"];
            }
        }
?>
<!DOCTYPE html>
<html lang="sl">
	<head>
        <title>Dice Game</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="slike/vijola.png">
        <script src="js/konec.js"></script>
        <link href="https://fonts.cdnfonts.com/css/speed-freaks" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/sf-old-republic" rel="stylesheet">
	</head>
	<body >
    <div class="main">
        <h1>Zmagovalec</h1>
        <div id="center">
            <form name="Obrazec" id="obrazec" method="post" autocomplete="off" action="index.php">
                <div id="zmagovalec">
                    <?php
                        
                        if($max==$_SESSION["p1Score"] && $max==$_SESSION["p2Score"]){echo 'Izenačenje med '.$_SESSION["p1"].' in '.$_SESSION["p2"];}
                        elseif($max==$_SESSION["p1Score"] && $max==$_SESSION["p3Score"]){echo 'Izenačenje med '.$_SESSION["p1"].' in '.$_SESSION["p3"];}
                        elseif($max==$_SESSION["p3Score"] && $max==$_SESSION["p2Score"]){echo 'Izenačenje med '.$_SESSION["p3"].' in '.$_SESSION["p2"];}
                        elseif($max==$_SESSION["p1Score"]){echo 'Čestitke '.$_SESSION["p1"].' !';}
                        elseif($max==$_SESSION["p2Score"]){echo 'Čestitke '.$_SESSION["p2"].' !';}
                        elseif($max==$_SESSION["p3Score"]){echo 'Čestitke '.$_SESSION["p3"].' !';}
                        else{
                            echo 'ERROR NO WINERS';
                        }
                    ?>
                    <br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p1"];  ?></br>
                    <?php echo $_SESSION["p1Score"];  ?></br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p2"];  ?></br>
                    <?php echo $_SESSION["p2Score"];  ?></br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p3"];  ?></br>
                    <?php echo $_SESSION["p3Score"];  ?></br>
                </div>
                <div>
                <button class="baton" id="navigateButton">Domov</button>
                </div>
            </form>
        </div>
        </div>
        <script>
        document.getElementById("navigateButton").onclick = function () {
            location.href = "index.php";
        };
    </script>
	</body>
</html>