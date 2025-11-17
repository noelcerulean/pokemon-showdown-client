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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8089479952928553" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7803770459474386" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8726460746043083" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1639167300110096" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9154521360917491" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.44265564670218405" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.44150470665190555"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.32381538427218093" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.48886363151149337">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7359549494652153">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.16695856115992136">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0099179243333134">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4181113556214511"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7471912907339717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6693180199194149"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20699419122338147"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.49766837095831296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.93326075628405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4233002652476012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4585230312491724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2721299364182397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.08758129488011979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9844002350009353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.11543750385891327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8405065791010322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7775536839246298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9786438842690863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.15720737992345657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7670109378748613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.841795352804144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4029106441887298"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
