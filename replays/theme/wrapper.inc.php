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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8306944988045484" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4864523229632649" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.20739073921798146" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.37939204671487015" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6341261818859365" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8534290907918205" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2789284285602598"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9201373414032206" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25275980511889173">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6572676913204185">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.21997866809873412">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.25228486234802006">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8158447333229839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.035471749190803425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.839376099026883"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8465428386163076"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5373467839560391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.912811007622315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.13262370313512983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6091393622022099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4556956061478885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.288415390323463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2628754965084035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.875674714658851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.03133185738072042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7100953300865751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9769702292241338"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.551816673282775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7674063086413261"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2570710223956947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2746789175631379"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
