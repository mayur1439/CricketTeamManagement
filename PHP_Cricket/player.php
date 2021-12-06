<html>
	<title>Add Player</title>
	<body>
		<form action="add_player.php" method="post" enctype="multipart/form-data">
			Player Name:
				<input type="text" name='pname'><br><br>
                        Player Photo:
                            <input type="file" name="ppic" id="ppic"><br><br>
                        Player Age:
                            <input type="number" name='page'><br><br>
			Player Cost:
				<input type="text" name='pcost'><br><br>
			Player typr:
				<input type="radio" name='ptype' value='batsman'>Batsman
				<input type="radio" name='ptype' value='bowler'>Bowler
				<input type="radio" name='ptype' value='allrounder'>All Rounder
				<input type="radio" name='ptype' value='keeper'>Keeper
				<br><br>
			Runs:
				<input type="number" name='prun'><br><br>
			Wickets:
				<input type="number" name='pwicket'><br><br>
			Country:
				<input type="text" name='pcountry'><br><br>
			Birth Place:
				<input type="text" name='pbirth'><br><br>
			<input type="submit">
		</form>
	</body>
</html>