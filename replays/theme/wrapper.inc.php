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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9705166573826134" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5249932099469548" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7816611184043556" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2013707747431317" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8847411991626073" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8208694475898002" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6308441838009389"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.738316155202378" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15933861803055116">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2210464092751625">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3151576821441151">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7822104245544108">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6412738844412029"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3906987943056992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.12254260454349608"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6570522577649998"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5885429539502791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7049755504832234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.15156233502668282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.004098484164141825"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5564442471138704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.10290319712682638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.37600838597907327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3819314370988982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.21514573255192748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6036605594506215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9570967371667625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3750120473810681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.09268945583372945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.25528791121907557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2953946727759855"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
