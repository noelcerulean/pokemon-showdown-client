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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2529662171593181" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3811500079633987" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4276925680100798" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.765570736989001" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5225365363395449" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4253528317700175" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.37311037938938707"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8408270944631604" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9335827111414845">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07032467972004275">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5124536155778692">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8046049311710324">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9431520401138898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.806427591936713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.04324986975202627"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9517973916535518"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.627662818916042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8402908463523919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.35968758708537507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5552496934209099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.36099118662450613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7716772666935727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.0012619019102029227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0737315226549835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7222107249843259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.27104806126213554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5943474050854047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.02637026995236713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1978064385551428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6253464913278177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.26221642716894156"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
