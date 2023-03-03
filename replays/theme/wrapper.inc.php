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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9027418107921061" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3654622508441361" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8805033396857784" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5273638050553839" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7031910207253591" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3389796492452084" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.04183672762647306"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6093822421731163" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5758826759864712">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15072454976427907">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7798692520540718">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08025371550242211">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8994766722506777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2602495776088014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.15995699733513224"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7467064658509692"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.11763185718065738"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5092594788506828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9496682208827105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.39857066762330473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7328734614568206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8810408395341434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.19735126596752472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3027200244562074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09702866113447883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.30773950898218816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.503750185910038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8396146412948906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7554593791153046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.800712568420304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.12807252134357028"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
