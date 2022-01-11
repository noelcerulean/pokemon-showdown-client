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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4652394897774428" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16027027473138378" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.10935417091260913" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5348845394763906" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1582814136454198" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.40816328306052907" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3565477261996981"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.28044360361112375" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23078383859178153">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5136648414776859">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6586554129441389">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5306843129089127">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5745505971479012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7909967744228357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20004861539418473"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7488026949455764"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3665613910731875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.517160224734786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6327052676551785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.30383985132360203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.018429029978960676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7334743676391067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.280586358465174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3443010617995359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.030368458579071778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7182598003379848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5849003967117989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.49961511675246717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8881667894390675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8321664676490339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.06515802767549284"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
