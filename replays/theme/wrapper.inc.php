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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.00256936743822056" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6122894260071858" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7060200165349879" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7096665639835797" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7448143659806354" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9394553878822911" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8726894339865119"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.09606852731544868" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9903977189491595">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.33937724865309193">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8107854597695796">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6628576744688621">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23661009719376946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3794717732929884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9976430697476164"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.17672654403801014"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8862841356232662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24484216489492772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.853175642972329"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.713381328802108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9578768732004463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6214219166484145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.12745944155165856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6064982586386285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.07084842480449782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.008399432187308653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8298721036246646"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.48566480446769456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.17939299614613335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7435543462080383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3369829384353882"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
