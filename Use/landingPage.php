<?php
session_start();
//require_once('functions.php');
	//loggedCheck();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src=landingPage.js></script>
	<link rel="stylesheet" href="landingPage.css">
</head>
<body>
		<main>
				<div id="header">
						<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
							<a class="navbar-brand" href="landingPage.php">SportWatch</a>
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="landingPage.php">Home</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="events.php">Events</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="favorites.php">Favorites</a>
									</li>
								</ul>
								<ul class="navbar-nav ml-auto">
									<a class="navbar-brand pl-4" href="profile.php">
										<img src="person.png" alt="logo" style="width:40px;">
									</a>
									<li class="nav-item active">
										<a class="nav-link" href="logout.php">Logout</a>
									</li>
								</ul>
						</nav>
						<br><br><br>

						<div class="container-fluid">
							 <?php $uname = $_SESSION["uname"]; echo "<h1>Welcome $uname</h1>"; ?>

						</div>
				</div>
				<div id="teamsearch">
						<div id="teamSearchbox">
								<input type="hidden" id="type" name="type" value="Search">
								<input type="text" id="searchText" placeholder="Search for a Team" name="searchText">
								<input type="button" onclick="teamsearch()" class="btn btn-dark" value="Search">
								<div id="teamresult">
										<h1>100 thieves</h1>
										<button type="button" onclick="favoriteteam()">Click Me!</button>
										<table border="1px" style="width:100%">
												<tbody>
														<tr>
															<th>Player</th>
															<th>Team</th>
															<th>Sport</th>
														</tr>
														<input type="hidden" id="teamId" value="sr:competitor:401559">
														<tr>
															<td>Sun, Cody</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Garcia, Juan Arturo</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Le, Tommy</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Soong, Max</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Lee, Aaron</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Chen, William</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Lavoie-Giguere, Philippe</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Feinstein, Jacob</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Keesey, Brindon</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Kim, Chan-ho</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr>
														<tr>
															<td>Hartman, William</td>
															<td>100 Thieves</td>
															<td>lol-t1</td>
														</tr></tbody>
													</table>
												</div>
						</div>
				</div>
				<div id="post">
						<input type="hidden" id="username" name="username" value="something">
						<div id=messagebox>
								<input id= "message" type="text"  name="message">
								<input type="button" onclick="sendMessage()" class="btn btn-dark" value="Search"><br><br><br>
						</div>
						<div id="posts">
                <div class="chat">
                    <div class="chatUser">ddd </div>
                    <div class="chatMessage">ssss </div>
                </div>
                <div class="chat">
                    <div class="chatUser">testUser </div>
                    <div class="chatMessage">test1 </div>
                </div>
                <div class="chat">
                    <div class="chatUser">testUser </div>
                    <div class="chatMessage">test1 </div>
                </div>
                <div class="chat">
                    <div class="chatUser">testUser </div>
                    <div class="chatMessage">yo </div>
								</div>
                <div class="chat">
										<div class="chatUser">jj356 </div>
                    <div class="chatMessage">yo v2 </div>
                </div>
                <div class="chat">
                  <div class="chatUser">JJ356 </div>
                  <div class="chatMessage">this is a test </div>
                </div>
                <div class="chat">
                    <div class="chatUser">ddd </div>
                    <div class="chatMessage">Ddd </div>
                </div>
                <div class="chat">
                    <div class="chatUser">ddd </div>
                    <div class="chatMessage">Ddd </div>
                </div>
								<div class="chat">
                    <div class="chatUser">jj356 </div>
                    <div class="chatMessage">this is a test for the second time </div>
                </div>
								<div class="chat">
                    <div class="chatUser">testUser </div>
                    <div class="chatMessage">test12 </div>
                </div>
            </div>
				</div>
				<div id="sport_feed">
						<button type="button" value= "espn" onclick="buttonclick(this)">ESPN</button>
						<button type="button" value= "lol" onclick="buttonclick(this)">League Of Legends</button>
						<button type="button" value="csgo"onclick="buttonclick(this)">CSGO</button>
						<button type="button" value="dota2" onclick="buttonclick(this)">DOTA2</button>
						<div id="espn" class="sportNews">
								<a id="espn" class="twitter-timeline" href="https://twitter.com/espn?ref_src=twsrc%5Etfw">ESPN</a>
								<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
						<div id="lol" class="sportNews">
								<a id= "lol" class="twitter-timeline" href="https://twitter.com/LCSOfficial?ref_src=twsrc%5Etfw">Tweets by LCSOfficial</a>
								<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
						<div id="csgo" class="sportNews">
								<a id="csgo" class="twitter-timeline" href="https://twitter.com/ESLCS?ref_src=twsrc%5Etfw">Tweets by ESLCS</a>
								<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
						<div id ="dota2" class="sportNews">
								<a id= "dota2" class="twitter-timeline" href="https://twitter.com/ESLDota2?ref_src=twsrc%5Etfw">Tweets by ESLDota2</a>
								<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
				</div>
		</main>
</body>
</html>
