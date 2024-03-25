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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.21761656907775362" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5768401746207366" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5385991549110571" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.18092932743275725" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7746278503883639" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.14699754758968475" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4993578923062614"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7306780672985287" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.009797069408145287">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6212066591406451">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.05371005098793091">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7081217952066259">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.28868138097425944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9484623737779283"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.24629706337217772"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03756758773917879"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.357948592488889"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.811347677155605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7966284006713762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8438950610910618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5177700032560175"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.29296399209588375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3956027828198605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8371396036661258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8409137000830487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.22334816686181092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.857418204230185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9641437625992577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.08266654262177187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9734794026262645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7904330670243398"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
