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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.810189580044171" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8942913577369449" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6376252810654122" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6926044181555571" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7659059569260496" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.30225994821420454" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.06628365512951184"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.029333156572315167" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23933770237022434">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.026740340572743104">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.17068804064072474">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8270643943981859">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11190472761153192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5853969281365681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.38647912979891563"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18184695841255905"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6629943725494598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9143946678995936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6129298057729589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5848280057730475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8976290135555669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.216315064164736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.16410350457893208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.14840879692351683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.12243378938618088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.00977876417355672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.31974962914702676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6393060614107546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4887883138504878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8241559325019361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4516972137951383"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
