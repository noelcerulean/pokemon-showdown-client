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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6610129732554011" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7223307229295644" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.05415941591470452" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.0985319223527159" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.08932018383664131" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1239701585588373" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8510042208843003"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2987487959276618" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9765883011866567">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3058162891300016">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.46964905245653554">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0824260876596059">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.335563805312171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9403030501160943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9471356082487514"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6828829851322367"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.524376613371176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.41440561552468735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2858084016502036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5371458133426121"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3471626753291257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2703135704776538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5304648401805123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5963116112840221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.43069391751954056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4226418262481817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7017287844060687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.028214913180406143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9945026980904574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.009454486784834293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.44365937143440703"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
