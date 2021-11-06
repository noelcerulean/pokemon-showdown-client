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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1700799666157804" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.898335386794717" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4024107053248174" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.21375986387576185" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8042042983523303" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5173924561441594" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.14644186800902004"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7918571735382647" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5493385062638161">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4412244813909276">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.27255698739339995">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7583634811860269">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8012625328221488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7475485431000499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.08431105680492257"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4049411776365113"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.08126668955546701"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5871009701729346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7829753509441342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7727498542225053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.814500077221801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8161443200645209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5494400918357567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6614452549594707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4755317402305266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.54516558135148"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7573981526496376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8571297605665147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5570362303731364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4789681655396729"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2686695683582345"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
