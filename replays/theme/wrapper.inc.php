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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7785245726585193" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.011330576467571962" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.44478997050884184" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4923569025421375" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9508131727318518" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1668735332115725" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2745248822455679"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12845329014291806" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.31490149638604636">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8122834859218928">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.40416299929321564">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5413350025524761">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6774398389080991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.46076218134258573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4158448814061093"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8441583847643526"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2717765532387375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9926462637226368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8475088344334698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6251073511946024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4784206163761098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.40212496954890264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3004027979610804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.24862671908441958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7975291905092117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.06862734356611622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9289309012043816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.23495146654451693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3889305230608675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.06610719084254213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8627278430632763"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
