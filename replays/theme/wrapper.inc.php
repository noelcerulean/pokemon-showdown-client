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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9115006962245533" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9747503716878936" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5901945269576228" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8221807167385049" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.44616010382603544" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3208988841722571" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8696782582897697"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.773528610590638" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.053029070240193654">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44984897633457877">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.43105042767172264">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7367167034706674">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.33993143112083946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3794552733875669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4371424139513893"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.922203169609795"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9150571123400253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5897957760179731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5297658420812501"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8492341972978594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.09577432577014822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7785202295903693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3947987234429897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9088715663947571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.45557677424701337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.029594851469783245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.364600918440253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9861313880952403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.40109023802675514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.978366539189135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7354387196794174"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
