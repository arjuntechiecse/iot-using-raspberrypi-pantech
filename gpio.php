<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
</head>
        <body>
        WEB PAGE ON PHP BASED GPIO Control:
        <form method="get" action="gpio.php">
                <input type="submit" value="ON" name="on">
                <input type="submit" value="OFF" name="off">
		<input type="submit" value="ON1" name="on1">
                <input type="submit" value="OFF1" name="off1">
        </form>
        <?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
        if(isset($_GET['on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
                echo "LED is on";
        }
        else if(isset($_GET['off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
                echo "LED is off";
        }
	$setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
        if(isset($_GET['on1'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");
                echo "LED is on";
        }
        else if(isset($_GET['off1'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 0");
                echo "LED is off";
        }




        ?> 



        </body>
</html>

