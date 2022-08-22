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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6186009506173367" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7701791946651224" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.25467623503309356" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.24951728990731614" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.596912729607211" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2055005522941269" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.37123584159044154"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.46400333817695927" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3191133106317907">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23997141145687317">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7075714887996374">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5954936818445848">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2352812371288111"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5963843152382275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5637786634113009"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5644348377857218"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7124632253816969"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13802516706480672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5609992866731073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6684335506690249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5496301242224959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.055637617400286166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6613836492669667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.14749306564860798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6394031267805167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.16990121317770313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5274095609008602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.06944963230819301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.18167945382063122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6465252166513733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8385947186875975"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
