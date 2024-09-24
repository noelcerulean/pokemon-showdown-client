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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.487652608696693" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9088945951142724" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8423053342167273" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3515120031964687" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2937130655289122" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9476455302585403" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.42245028426587106"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5340224607073978" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5898299750104672">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.45973520538894586">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3003179653023751">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.04337480025804519">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6998877473248168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.03788181464830731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8641655927656375"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.30679900665086923"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.28615747156846894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10037900436429426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1109576581884355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7429941575411989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.21400828128761695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6303571656511655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2631205119209823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8795654788547076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6284182083631766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6143008305402975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.17716205910384564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.414103251929846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1652719290426956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9071098158411819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.03873393480362419"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
