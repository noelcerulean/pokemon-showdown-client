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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1535521479349935" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.25154147647795244" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5661845169296404" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6393503487205179" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.682207657941388" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7853010613473896" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2646069694623001"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9042921577561196" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.04855354534205669">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24205682748046553">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.14835096354933386">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.12318933360144158">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1679830632418715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14911580954100323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6932342929563893"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4647710181903413"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7039058747463507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8404955965867078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.062310746365694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2806002642249128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6433006434409536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4092577154503827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.40659959823241576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9202456377802546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8055634860556322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43848792739472486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.676706203850864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.18275069617983752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.052202052745067506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4534006526366994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7155217893366523"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
