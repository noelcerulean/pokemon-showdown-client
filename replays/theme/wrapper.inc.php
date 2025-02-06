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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5256364359979115" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.19287028678271656" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6186198189724037" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6984787126093275" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7065493578304769" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8493605699629365" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9134597202493313"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13114775025531555" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0905916539413647">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.36970346049767566">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6085905816168098">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5128242103972227">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.38064974265338747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2637458600776783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.49155168194714616"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36849479378587113"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.036713977762701466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5180750878407754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6914959236803588"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3463591845058287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.173421475007131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8150119355032248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4823417103526111"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7426916463291462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.41895147324920123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3069030772607342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2991600526811897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6544574077969949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.636880788991552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7624702191408674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.007758305305997748"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
