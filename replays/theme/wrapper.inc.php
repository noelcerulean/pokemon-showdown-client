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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3882066559968951" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.304926084973534" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3483182733276948" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.37031677826939235" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8412930745263212" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5213025868429058" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.06721630837968484"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17331942549188128" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9615874044852066">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9804370554807038">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.893545735816732">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.04499710620146846">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8092959076565487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3751999906518453"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9518382980184315"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06411713539095198"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6187924731839916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6996619985977661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.09367790564910461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6425400975196742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6191617460135586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.11191870567979323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.28898570494016385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6048397792231908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.27638442345318426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48191936653274947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3583107470266105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.757553563006284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3372502084876994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5932676793767055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9559967764839075"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
