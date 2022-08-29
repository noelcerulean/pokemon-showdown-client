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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.029412524884440572" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.40945395726196687" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.02598827050212771" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.46763433224991946" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7436909449524471" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.745540316710926" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.38755457269141225"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10796329672741423" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9430807279281628">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9834537585503815">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8720716042117682">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4520724225888224">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5989771139244839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.720350423138393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7660134905729001"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.014134108990927485"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.86780334714968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6485572437261511"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8089884180633757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.21316187063342507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.02321696117346672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6156503776930411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7173992618008846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.018392942164229042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.004939996786524903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.008391145535311617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1678593352526614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.767689338118358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.18455895839846193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.992412100412861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3147074587781875"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
