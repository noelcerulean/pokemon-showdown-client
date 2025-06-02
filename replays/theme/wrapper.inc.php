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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8422002329824803" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.680012781605458" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7431256508907114" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8331955398397171" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2900275147080562" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4407740755226379" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7560013511119834"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6856891060430608" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9175960444403863">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.17605702974277482">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6829891694606187">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.12719340774774346">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.994061283849677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.46801598799897937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.21894653966873578"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7184981071265935"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.0494683400214504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6342438576304756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1571384103996636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8190952967116281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4624704792768761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4679264799307956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1947248207708019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7132198738523465"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4010217049616911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6873626111962412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.482305132855976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9248991274671261"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2517126611457978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.30117581863214804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.24322071073827556"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
