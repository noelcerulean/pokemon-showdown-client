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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6697610361773843" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.349182402315646" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6662370379190936" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7406766780004785" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5525246385372264" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7049430034121609" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.31173401641845877"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1500027020738881" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1269975049244969">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6101601844839974">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.24562579501178194">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4602483320061663">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.33019293830900454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9864539941145023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8101250414833276"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1479196651824608"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.12284922124163944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47931447629773105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9568312844303839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.313977344962332"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3947889513847631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6299933885294968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.020193190075354694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.03117843139491927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8713179667804387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3049386250311812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3356624566721784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8514327714419692"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.08835084481126643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2363073765729018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7445923781433841"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
