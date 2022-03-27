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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.37577059845946437" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9549518238867218" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6211692147217138" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.31265154270398177" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.29764050396500563" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8438845594411855" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.46524106111742025"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.25151228133759673" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.39409891683796916">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5113817036204467">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.38646453846996387">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6977137711866204">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3355533506632091"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1377415378683049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.32518686615115344"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.609195580488519"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7724641622246349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4912218022883694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.07531483996542265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.03731732398401699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3414277200021614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8953089396685971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.29372799088856305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.11455794578213085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5474695983661353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.787542622961048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7556076668355507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.836554392640297"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.27694503294010175"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.11897940129088935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.592176533785252"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
