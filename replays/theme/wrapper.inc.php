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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7106592059819614" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5949188324815415" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.005947014384122484" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.41308604927583725" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.824004379429375" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.02721485391909262" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8298451902640525"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.536487979727317" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6878173263742144">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7770224808070914">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3006054433253318">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.02045435418166286">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8320812717054671"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6160343054420747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6997327784022229"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7830276372290808"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8808365586072324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1531550950599463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8853721790584237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.06445453552186842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8205760867402367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9771621491354159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.36015170254717765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5846328976321749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6904494135401973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7106439548208183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3735367481377938"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8696754225231926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6356408762404311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6692989875105271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.05155682790178573"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
