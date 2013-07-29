<?php namespace Habari; ?>
<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				
				<!-- Footer -->
					<section id="footer" class="container">
						<div class="row">
							<div class="8u">

								<section>
									<header>
										<h2>More Missives fo' yo head.</h2>
									</header>
									<ul class="dates">
										<?php foreach( $theme->recent($theme->newest()->id) as $recent ) { ?>
										<li>
											<span class="date"><?php echo $recent->pubdate->out('M'); ?> <strong><?php echo $recent->pubdate->out('d'); ?></strong></span>
											<h3><a href="<?php echo $recent->permalink; ?>"><?php echo $recent->title_out; ?></a></h3>
											<p><?php echo $theme->exerptor( $recent->content, 150 ); ?></p>
										</li>
										<?php } ?>
									</ul>
								</section>
							
							</div>
							<div class="4u">
								<section>
									<header>
										<h2>Where you can find me.</h2>
									</header>
									<ul class="social">
										<li class="facebook"><a href="https://www.facebook.com/chrisjdavis" class="icon48 icon48-1">Facebook</a></li>
										<li class="twitter"><a href="http://twitter.com/chrisjdavis" class="icon48 icon48-2">Twitter</a></li>
										<li class="dribbble"><a href="http://dribbble.com/chrisjdavis" class="icon48 icon48-3">Dribbble</a></li>
										<li class="linkedin"><a href="http://www.linkedin.com/in/chrisjdavis/" class="icon48 icon48-4">LinkedIn</a></li>
										<li class="googleplus"><a href="https://plus.google.com/106247474838840124142/" class="icon48 icon48-6">Google+</a></li>
									</ul>
								</section>
								<section>
									<header>
										<h2>What's this all about?</h2>
									</header>
									<p>
										This is <a href="http://html5up.net/dopetrope/">Dopetrope</a> a free, fully responsive HTML5 site template by 
										<a href="http://n33.co">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released for free under
										the <a href="http://html5up.net/license/">Creative Commons</a> license. This version is a theme for the <a href="http://habariproject.org" title="Habari Publishing Platform">Habari Publishing Platform</a>. PHP released under the <a href="http://www.apache.org/licenses/LICENSE-2.0.html" title="Apache Software License version 2.0">Apache Software License version 2.0</a>.
									</p>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">
							
								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; <?php echo date('Y'); ?> <?php echo Options::out('title'); ?></li>
											<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
											<li>Code: <a href="https://leagueofbeards.com">The League of Beards</a></li>
											<li>ISSN: <a href="http://www.worldcat.org/search?q=n2%3A1544-4104&qt=advanced&dblist=638">1544-4104</a></li>
										</ul>
									</div>

							</div>
						</div>
					</section>
			</div>
	<script type="text/javascript">
		var disqus_shortname = 'sillynesswerd';
		(function () {
			var s = document.createElement('script'); s.async = true;
			s.type = 'text/javascript';
			s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
			(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		}());
	</script>
	</body>
</html>