<html>
<head>
 <script src="/jquery-1.11.1.min.js"></script>
 <script src="/bootstrap.js"></script>
 <script src="/bootstrap.min.js"></script>
<link href="/bootstrap-theme.css" rel="stylesheet">
<link href="/bootstrap-theme.min.css" rel="stylesheet">
<link href="/bootstrap.css" rel="stylesheet">
<link href="/bootstrap.min.css" rel="stylesheet">
<title>
Matt Chat
</title>
</head>
<body>
		<div class="container">
		  <div class="jumbotron">
		 
            <h3>Welcome to Matt Chat, the site that features all the random shit I say that people find incredibly quotable and hilarious.</h3>
            <h2 id="chats" style="color:grey;">Get the chats</h2>
            <p class="lead">
              <a onclick="generateChat()" class="btn btn-lg btn-default" role="button" style="color:white;">Generate</a>
            </p>
		
          </div>
		  </div>
<script>
var thespew = ["Everything is mucus and phlegm",
"Thats not chocolate milk",
"The only time I shush is when my mouth is full of boobies",
"If you dont like it whyd you put a ring on it",
"Im as hot as an ice cube",
"A pie with glass in it",
"On my way, prepare your anus; Because I'm going to snuggle the shit out of you",
"Snoop Snakes 4 ever",
"chat9",
"chat10"];
function generateChat()
{
	var chatIndex = Math.floor((Math.random() * 10));
	document.getElementById('chats').innerHTML = thespew[chatIndex];
}
</script>
</body>
</html>
