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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5863454648962596" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9580004986846657" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.475910795358248" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9433417905025998" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3951373014358628" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5898498312331175" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6554029388059082"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1891919377501443" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.882688577434618">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2944682366127094">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8013345485991457">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.19299193803760417">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9843037164401061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7075896857864088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9736455341903738"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28240072922018244"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.363739600444988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3150346604879095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5712002066470534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.09187183766466545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.13467879955130257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7382889431869231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9031881654188341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.13202732614343082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.05067572463789016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6304063258426629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.26594852356038046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.38489586487326766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.29603784407035016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2786187446075823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9705882020696044"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
