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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6949499038742621" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5733184798767794" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11465921926467049" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9750252319603776" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32425388310219905" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9285869929858017" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.021494356546710502"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8993254965407826" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3155759216523528">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.024589263238393055">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8779533758120703">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.21277854635652327">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5793357207259724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6052584912496741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4838989327502885"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24413512620441002"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.33239842230862626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36086180388331224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.10118628322059031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5096288658405896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0386669125692789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0066114115181110655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4485726926995348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3967608320358975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2850240914575284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.76537453315322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.47330688787432407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9894905423464861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6000307938052127"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6867059222988232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8781702325790306"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
