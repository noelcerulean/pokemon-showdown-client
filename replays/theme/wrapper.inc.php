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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7838095951509969" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7106717874677402" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8787612457516136" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.09912220224362756" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6195593360123555" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.531232595454622" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.27404312754891347"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17293595411419171" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4381407621767466">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08516207785846541">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.12765255816558496">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9770391953641082">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7391027694235441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8939899969669771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6644957009505008"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36958528327141793"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7807276488110371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3705367779399704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.12524684941827524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8724787987624212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4011739017328364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.21349973199204086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.17450362291278632"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6703475348481869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.0023728048770630394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5704630878934693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.22160561855926098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5507856792299053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8885013269316977"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0062684341944618804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.07841419753935175"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
