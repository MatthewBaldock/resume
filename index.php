<html>
<header>
<title>
Matt chat
</title>
</header>
<body>
<h1> 
Welcome to MattChat.com, the site that features all the random shit I say that people find incredibly quotable and hilarious.
</h1>
<div id="chats" >
Click to get chat.
</div>
<input type="button" onclick="generateChat()" value="generate"/>
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
