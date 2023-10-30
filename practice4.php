<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>	
		<?php
			function render_Table($highest_Number_Inclusive) {
				echo "<table border=\"1\">\n";
				
				echo "<tr>\n<th></th>\n";

				for ($i = 1; $i <= $highest_Number_Inclusive; $i++) {
					echo "<th>" . $i . "</th>\n";
				}

				echo "</tr>\n";

				for ($i = 1; $i <= $highest_Number_Inclusive; $i++) {
					echo "<tr>";
					
					for ($j = 0; $j <= $highest_Number_Inclusive; $j++) {
						if ($j == 0) {
							echo "<th>" . $i . "</th>";
							continue;
						}

						echo "<th>" . $i * $j . "</th>";
					}
					
					echo "</tr>";
				}
				
				echo "</table>";
			}
			
			render_Table($_GET["n"]);
		?>
	</body>
</html>
