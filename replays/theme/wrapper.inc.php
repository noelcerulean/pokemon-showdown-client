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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3586824826269741" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6585254809975063" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9257527737534512" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.02622631325701641" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7153348165606781" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8722281972239472" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9560932650506782"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3016578437267925" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5447843310200076">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6693032295890577">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5515725226473751">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6860156701768965">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5896100645729543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.41651133625139125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.47993034429256154"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6898133311976322"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4088655276575537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15517878510097183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8707661116350358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.00955438387080454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0659786222881209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0482483053562468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7366777212284796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9788270342848593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3313533155327433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.02547593822642691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8370820899093538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3118674303850013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.05359215482522295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5690779479947032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.09250814268662344"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
