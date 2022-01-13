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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5149782580837305" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.11028882005706864" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3881714328617971" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5314208229244661" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6741816139608336" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.47850696690767136" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8615483094004139"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11773690247595825" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8704233302234885">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8415335526784642">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9315464383752867">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6972718888848153">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.16413276967988377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7470945305052081"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7891822304857112"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43118478131569526"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6424186229999593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4133729505211243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.30521768495528456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.032142780624567546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.14727978579366097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.40381971510588777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4463284241904777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5013318757799916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.47579330757471494"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.13422713976995726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6358627049902066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.16023786813873242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.12065334112021997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9559510663954429"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7724974377052254"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
