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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8940267705913323" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.41262141035978805" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8280812941995537" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6008750365836262" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10875705721347662" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4358910236401117" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8318746838277349"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.14095552240681375" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6557554412865632">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03183204490843594">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7776194107354155">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6484587682447704">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10367220435186875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.11550672403723983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7554404467793154"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9225653637404525"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5467038931045225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7109344984165293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.502150624306372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8809821405360332"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6009039845377913"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.11787979604877274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2987129443822121"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9504445348962998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8182871855446878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6192996188209161"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6835716818741682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8350856181875015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5766358266864446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5205278112973741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1533403627662684"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
