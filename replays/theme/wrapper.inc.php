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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9067241233221341" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7166856830516775" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.03694347574977841" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.439983344956024" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.05064922064954058" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.28811504951625855" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7544502634940855"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22814103333343105" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7022968868497181">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8445407532224156">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8874219101058494">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.36258404320611803">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7241761715260411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7612353746407228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9921721846277245"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6069325973537454"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.806686598869649"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.30741371001645446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3964450235007648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8840155347734506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5303436522215603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5575270555862675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.06836439342962897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8178394205895136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3112242889796868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.10437280139362226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5682577809442724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.725595139901352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5634382630317198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.005488295388869302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6841538243428427"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
