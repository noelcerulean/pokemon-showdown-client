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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.20897190905493268" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.44429400119575746" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8290978153191724" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6876167159161182" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9851355068558549" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5439313384872739" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5375536673598509"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4856956596277511" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0596450541907958">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8351883473164305">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7110362558379895">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0048040612354653955">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5299015271508969"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6748446423437968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6400325935028854"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13355662541915136"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9482981502842684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8200567965909114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.49834112671634023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2377526250811195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7855550694877218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.49456531338518017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8105453816211476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9580461106505258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5823038440078392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9446744404363085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6315141643520523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7770074115053061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.28397645798669235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.613449105672973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.29369886153675195"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
