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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40340740651693396" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.15719037617989895" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.06161215935914921" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.808780301806751" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.47033640401513166" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.21725541397898973" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3390480397247848"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2558307797513051" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8857705543999423">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.31200694123985473">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.24063224369491487">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.16622583231994792">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23208715603287744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0155689800659089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.742330256207447"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9468391312136459"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3857388714436194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.876807980555784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4627959675567441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.27024553116862426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3187706930583061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2226447073245441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5275721468115788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.006318657861918986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5470095922219114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.215774980685715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8699779983206228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6321028807923159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.519115207489635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0531006048801681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7045319365002696"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
