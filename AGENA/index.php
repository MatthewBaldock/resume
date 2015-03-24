<html>
<head>

<link href="bootstrap-theme.css" rel="stylesheet">
<link href="bootstrap-theme.min.css" rel="stylesheet">
<link href="bootstrap.css" rel="stylesheet">
<title>
AGENA
</title>
</head>
<body onload="copySquare()"> 
<div class="col-lg-3">
<small>(super cool name)</small>
<p class="lead">
Asset Generator Application
(AGENA)
</p>
<p class="lead">
Here you can generate icon assets for your mobile development projects
</p>
<p class="lead">
Soon to come: Download as zip, IOS Assets.
</p>
<p> If you have any requests or suggestions you can shoot me an e-mail. If you would like to support this project please feel free to donate! </p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KXZFGLCMRAFUJ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
<div class="col-lg-8">
<div class="well bs-component">
<form class="form-horizontal"> 
<div > 
		<img id="myImg" src="TESTImage.png" alt="your image" />
		<input type='file' accept='image/png,image/gif,image/jpg'onchange="imageLoaded(this)"/>
		 <button type="button" class="btn btn-warning" onclick="copySquare()">Create Assets</button>
		 </div>
		<div >
		<h3> Android Assets </h3>
		<canvas id="mdpi" width="48" height="48" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		
		 <canvas id="hdpi" width="72" height="72" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		  <canvas id="xhdpi" width="96" height="96" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		  <canvas id="xxhdpi" width="144" height="144" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		  <canvas id="xxxhdpi" width="192" height="192" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		 </div>
		 <h3> iOS Assets </h3>
		 <div>
		  <table class="table table-striped table-hover ">
  <thead>
    <tr class="active">
	  <th>Icon type</th>
      <th>iPhone 6 Plus</th>
      <th>iPhone 6/5</th>
      <th>iPhone 4s</th>
	  <th>iPad / iPad Mini</th>
	  <th>iPad2 / iPad Mini</th>
    </tr>
  </thead>
  <tbody>
    <tr class="active">
	<td>Toolbar/Navigation</td>
      <td><canvas id="i6pone" width="66" height="66" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65one" width="44" height="44" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4sone" width="44" height="44" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
	  <td><canvas id="iPadone" width="44" height="44" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2one" width="22" height="22" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr class="active">
	<td>Tab bar</td>
      <td><canvas id="i6ptwo" width="75" height="75" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65two" width="50" height="50" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4stwo" width="50" height="50" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPadtwo" width="50" height="50" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2two" width="25" height="25" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr class="active">
	<td>Settings</td>
      <td><canvas id="i6pthree" width="87" height="87" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65three" width="58" height="58" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4sthree" width="58" height="58" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPadthree" width="58" height="58" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2three" width="29" height="29" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr class="active">
	<td>Spotlight Search</td>
      <td><canvas id="i6pfour" width="120" height="120" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65four" width="80" height="80" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4sfour" width="80" height="80" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPadfour" width="80" height="80" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2four" width="40" height="40" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr class="active">
	<td>App Icon</td>
      <td><canvas id="i6pfive" width="180" height="180" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65five" width="120" height="120" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4sfive" width="120" height="120" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPadfive" width="152" height="152" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2five" width="76" height="76" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr class="active">
	<td>Web Clip</td>
	  <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
    </tr>
	 <tr class="active">
	 <td>App Store icon</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
    </tr>
    <tr class="active">
	<td>Launch file</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td> 
    </tr>
  </tbody>
</table> 
		 </div>
		 </form>
		 </div>
		 </div>

 <script>
 	function downloadStuff()
	{
	var zip = new JSZip();
	var resources = zip.folder("images");
	resources.file(canvas.toDataUrl(), imgData, {base64: true});
	var content = zip.generate({type:"blob"});
	saveAs(content, "example.zip");
	}
    var mdpi = document.getElementById("mdpi");
    var mdpitx = mdpi.getContext("2d");
	var hdpi = document.getElementById("hdpi");
    var hdpitx = hdpi.getContext("2d");
	var xhdpi = document.getElementById("xhdpi");
    var xhdpitx = xhdpi.getContext("2d");
	var xxhdpi = document.getElementById("xxhdpi");
    var xxhdpitx = xxhdpi.getContext("2d");
	var xxxhdpi = document.getElementById("xxxhdpi");
    var xxxhdpitx = xxxhdpi.getContext("2d");
	var i6pone = document.getElementById("i6pone");
    var i6ponetx = i6pone.getContext("2d");
	var i65one = document.getElementById("i65one");
    var i65onetx = i65one.getContext("2d");
	var i4sone = document.getElementById("i4sone");
    var i4sonetx = i4sone.getContext("2d");
	var iPadone = document.getElementById("iPadone");
    var iPadonetx = iPadone.getContext("2d");
	var iPad2one = document.getElementById("iPad2one");
    var iPad2onetx = iPad2one.getContext("2d");
	var i6ptwo = document.getElementById("i6ptwo");
    var i6ptwotx = i6ptwo.getContext("2d");
	var i65two = document.getElementById("i65two");
    var i65twotx = i65two.getContext("2d");
	var i4stwo = document.getElementById("i4stwo");
    var i4stwotx = i4stwo.getContext("2d");
	var iPadtwo = document.getElementById("iPadtwo");
    var iPadtwotx = iPadtwo.getContext("2d");
	var iPad2two = document.getElementById("iPad2two");
    var iPad2twotx = iPad2two.getContext("2d");
	var i6pthree = document.getElementById("i6pthree");
    var i6pthreetx = i6pthree.getContext("2d");
	var i65three = document.getElementById("i65three");
    var i65threetx = i65three.getContext("2d");
	var i4sthree = document.getElementById("i4sthree");
    var i4sthreetx = i4sthree.getContext("2d");
	var iPadthree = document.getElementById("iPadthree");
    var iPadthreetx = iPadthree.getContext("2d");
	var iPad2three = document.getElementById("iPad2three");
    var iPad2threetx = iPad2three.getContext("2d");
	var i6pfour = document.getElementById("i6pfour");
    var i6pfourtx = i6pfour.getContext("2d");
	var i65four = document.getElementById("i65four");
    var i65fourtx = i65four.getContext("2d");
	var i4sfour = document.getElementById("i4sfour");
    var i4sfourtx = i4sfour.getContext("2d");
	var iPadfour = document.getElementById("iPadfour");
    var iPadfourtx = iPadfour.getContext("2d");
	var iPad2four = document.getElementById("iPad2four");
    var iPad2fourtx = iPad2four.getContext("2d");
	var i6pfive = document.getElementById("i6pfive");
    var i6pfivetx = i6pfive.getContext("2d");
	var i65five = document.getElementById("i65five");
    var i65fivetx = i65five.getContext("2d");
	var i4sfive = document.getElementById("i4sfive");
    var i4sfivetx = i4sfive.getContext("2d");
	var iPadfive = document.getElementById("iPadfive");
    var iPadfivetx = iPadfive.getContext("2d");
	var iPad2five = document.getElementById("iPad2five");
    var iPad2fivetx = iPad2five.getContext("2d");
   function copySquare()
	{   
		var img = document.getElementById("myImg");
		mdpitx.drawImage(img, 0,0, 48,48);
		hdpitx.drawImage(img, 0,0, 72,72);
		xhdpitx.drawImage(img, 0,0, 96,96);
		xxhdpitx.drawImage(img, 0,0, 144,144);
		xxxhdpitx.drawImage(img, 0,0, 192,192);
		i6ponetx.drawImage(img, 0,0, 66,66);
		i65onetx.drawImage(img, 0,0, 44,44);
		i4sonetx.drawImage(img, 0,0, 44,44);
		iPadonetx.drawImage(img, 0,0, 44,44);
		iPad2onetx.drawImage(img, 0,0, 22,22);
		i6ptwotx.drawImage(img, 0,0, 75,75);
		i65twotx.drawImage(img, 0,0, 50,50);
		i4stwotx.drawImage(img, 0,0, 50,50);
		iPadtwotx.drawImage(img, 0,0, 50,50);
		iPad2twotx.drawImage(img, 0,0, 25,25);
		i6pthreetx.drawImage(img, 0,0, 87,87);
		img = document.getElementById("myImg");
		i65threetx.drawImage(img, 0,0, 58,58);
		i4sthreetx.drawImage(img, 0,0, 58,58);
		iPadthreetx.drawImage(img, 0,0, 58,58);
		iPad2threetx.drawImage(img, 0,0, 29,29);
		i6pfourtx.drawImage(img, 0,0, 120,120);
		i65fourtx.drawImage(img, 0,0, 80,80);
		i4sfourtx.drawImage(img, 0,0, 80,80);
		iPadfourtx.drawImage(img, 0,0, 80,80);
		iPad2fourtx.drawImage(img, 0,0, 40,40);
		i6pfivetx.drawImage(img, 0,0, 180,180);
		i65fivetx.drawImage(img, 0,0, 120,120);
		i4sfivetx.drawImage(img, 0,0, 120,120);
		iPadfivetx.drawImage(img, 0,0, 152,152);
		iPad2fivetx.drawImage(img, 0,0, 76,76);
		
	}
	function imageLoaded(input) {
   
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#myImg')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58312314-2', 'auto');
  ga('send', 'pageview');

</script>
 <script src="jquery-1.11.1.min.js"></script>
 <script src="bootstrap.js"></script>
 <script src="bootstrap.min.js"></script>
 <script src="jszip.min.js"></script>
 <footer id="footer" class="col-lg-12">
 <div class="col-lg-5"></div>AGENA Copyright &copy; 2015 <a href="matt.w.g.baldock@gmail.com">Matthew Baldock.</a> All rights reserved
 </footer>
 </body>
 
</html>
