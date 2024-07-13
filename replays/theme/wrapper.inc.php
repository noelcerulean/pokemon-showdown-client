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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5286681620077072" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.707851653090279" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.09080054115772418" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.671827201716946" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9846033159642684" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9549172686082987" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2118556789494883"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5400641299940823" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05278261843886556">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.674401065056843">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8945175734587494">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.030884660639886707">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7430048422592472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.939907108084316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.33497096384393954"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.367671368299056"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.05045223571761559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8492224866409512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5351591541194645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.013291516809993409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6114148008105715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4237589778377122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.325434284141074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7881576972730695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9553764379104095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.182606706352896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.662029796902921"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9557462276099209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4654393396161147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0711106740505889"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.47757591275353484"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
