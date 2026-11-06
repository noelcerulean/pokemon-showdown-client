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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9244407951708182" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.13578945072178172" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5345784754926771" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.16229158806275967" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7527705886824514" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.838217764938968" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5440268057386577"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.856690946268035" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6269308256086099">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6686377301911857">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.041881800595772845">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8396399577066483">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47920401715796634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8779161334404295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8603090374662827"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6471406934601256"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9555160463982749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47499277101946447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8423732941156699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.03753765282568011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8706998829139315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0466817452272571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7503928044110431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9724542140471342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.48695400555587687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.46435140935545305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.14990641739676436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.12239293005213947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7345315838451776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17613167236005034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9974628008299383"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
