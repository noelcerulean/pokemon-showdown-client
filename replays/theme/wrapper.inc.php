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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.0015508859236368355" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6942841627981311" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2595581950936885" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.22556683907210728" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6794115109970291" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.18044814205999615" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.565842398921611"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12731666792633134" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6003582673103223">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4730685652423172">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9552790020375972">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6923150106702503">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47587504814956705"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.29469770360509107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6061917140846547"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3220090280254435"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17735074653854466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16085581022357975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18987717703711215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5336796721260639"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7765349740190257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.004558242623434294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.15152929777599633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.17401385839203476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3542126793965419"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1124631664349307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3087415739107606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45972468259332877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11009015449956872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7600335679305885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9617655466017405"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
