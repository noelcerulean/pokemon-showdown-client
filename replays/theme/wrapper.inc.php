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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5848989705174605" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8440181347196296" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9006945692120736" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7888542373843797" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.49792007360899215" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6545854886487077" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9225359208910979"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.333860411684324" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7222052820700278">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3557051078434603">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.0979455686166053">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7199631902952346">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.28997944825314415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6941712218228668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.696453009622702"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18949260725115114"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2615910471645868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2717492840680693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.054506068385097306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.707294820553455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7912294205362351"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.21482697566101505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3545808376317512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.37475731400450973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9499767972237712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5695627020018013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5321073433286692"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8477778141114594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.10459271630934386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5941887329640867"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.25935289298448727"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
