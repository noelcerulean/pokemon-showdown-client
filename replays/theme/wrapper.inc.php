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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9949636739512893" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.11318611125807254" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3849517706556862" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.13314787874734635" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8214672295476138" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9672590530251848" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4548169755054754"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3345235392111823" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8350464049876654">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09005243676643748">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6028455908458672">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8789229897536599">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.05067878573842011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.45093746415027125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.46270347106184384"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7093073951950175"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8688224691683257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20797531249245194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8671956310682083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6534127353137213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8750847099640231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6869625936367916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4216602016977149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.17101620878928459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.643800007598488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9405571817764644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20579104158761474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.09861312682953183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1310395058750775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.12531293585543146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7240080501794324"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
