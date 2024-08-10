<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.26751373869997264" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.49075580810808295" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.19510949038389258" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3532649382235189" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6362448676916617" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.06749318995596809" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1324434961429879"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8096545934194475" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6780667618002896">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6234831797426903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9217798532636572">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3746400082255126">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3070794318576875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9736603387671952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.296006200883028"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6509904955197165"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.860424183841894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49289822802025895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4931691718126314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.30702236991741216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.49042371536257967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2581134368789253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7597807632395355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3560179302894029"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.01631326859631832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5948986742979407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.248364167264028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10318919909562618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5507658314904771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.036466196066530676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9513698174407517"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
