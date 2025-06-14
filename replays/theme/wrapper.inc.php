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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.17278282279876378" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.761712620808624" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.37394162336968595" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5862352900857168" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.26159006886668523" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1027216681678238" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.07966772320162563"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1498997399780695" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16492391750696744">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5043737355027051">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7468961570740809">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6255175611218049">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8950533839948012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.12718396147260136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.971552996479258"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.288825341399471"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.000017606316252249954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7924584761203286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.049760076397196595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6818745624853719"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7504626969680761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7138032727725576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8646721448722114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3598755857675775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.949798994868043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8133992549200129"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3318912349244221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5485862534193902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7153745217443674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.35533814208886505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4954153983967853"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
