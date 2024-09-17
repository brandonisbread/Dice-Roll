<!-- Chapter 2 Exercise -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dice Roll Game</title>
</head>
<body style="background-color: lightcoral;">
	<h1 style="color: darkred;">Let's Roll Some Dice!</h1>
	<?php  
		# Global Array variables
		$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
		$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

		# Definition of the checkForDoubles() function
		function checkForDoubles($Die1, $Die2) {
			global $FaceNamesSingular;
			global $FaceNamesPlural;

			if($Die1 == $Die2) {
				# We're here because we have doubles
				echo "<p> The roll was double ", $FaceNamesPlural[$Die1-1], "</p>";
				return true;
			} else {
				echo "<p>The roll was a ", $FaceNamesSingular[$Die1-1], " and a ", $FaceNamesSingular[$Die2-1], "</p>";
				return false;
			}
		} # end of function

		# Definition of the displayScoreText() function
		function displayScoreText($Score) {
			switch($Score) {
				case 2:
					echo "<p>You rolled Snake Eyes!</p>";
					break;
				case 3:
					echo "<p>You rolled a Loose Deuce!</p>";
					break;
				case 5:
					echo "<p>You rolled a Fever Five!</p>";
					break;
				case 7:
					echo "<p>You rolled a Natural!</p>";
					break;
				case 9:
					echo "<p>You rolled a Nina!</p>";
					break;
				case 11:
					echo "<p>You rolled a Yo!</p>";
					break;
				case 12:
					echo "<p>You rolled Boxcars!</p>";
					break;
			} # end of switch
		}# end of function

		# We're back to global code again
		$Dice = array();
		$DoublesCount = 0;
		$RollCount = 1;

		# Loop to contorl the number of games played
		while($RollCount <= 3) {
			$Dice[0] = rand(1, 6);
			$Dice[1] = rand(1, 6);
			$Total = $Dice[0] + $Dice[1];

			echo "<p>The total score for roll $RollCount was: $Total</p>";
			$Doubles = checkForDoubles($Dice[0], $Dice[1]);
			displayScoreText($Total);

			if($Doubles == true) {
				++$DoublesCount;
			}

			++$RollCount;
			echo "<hr/>";

		} #end of while loop

		echo "<h3>Doubles occured on $DoublesCount of your rolls!</h3>";


	?>
</body>
</html>