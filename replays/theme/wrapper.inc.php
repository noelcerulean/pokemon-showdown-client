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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40779827816365155" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.819558585407639" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.950125252160126" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.539964039255181" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7513516812338428" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.18187050750695666" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08726548799487799"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6521071932083118" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3315660824421476">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5921874519119479">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.39360149564785596">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5078034934805999">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.912465101419649"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7001510687788741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.30500389111484316"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4758686446500353"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8878862655449455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10879629909387356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6587437764783477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.505986952662115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8269774888757233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09298876204890538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7340837119088357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6815043698692327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4850116268249336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09595045950657122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4292182965891629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7738785387148841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.26877736263012775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6173342600735621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3542702796222672"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
