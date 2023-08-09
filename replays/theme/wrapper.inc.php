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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5381827351391539" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.17206650060388218" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.36399602559025523" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.37132384543195895" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6320669222311743" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5874737988431669" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5269296994943815"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6506381882650396" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7854231490737915">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1817477052217653">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9187192975791343">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.05601332144708171">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1566999915428129"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5803262828190885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.18671972456239216"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6881152444776855"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17382987746689715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.004009558671470348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.16201639408091184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5273346521432696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1346531575517933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9891417444449695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9579221208019275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.33889774919954885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.19251973307253056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7738500393784524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7807748544498139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7380696223298497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.07233863025254839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8015822634383789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.010534389415115086"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
