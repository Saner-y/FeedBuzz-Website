	<footer>
		<div class="container">
			
			<!--blog-items end-->
			<div class="footer-content">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="ft-logo">
							<h1><a href="anasayfa" title=""><?php echo $site_adi ?></a></h1>
						</div>
						<!--ft-logo end-->
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
					</div>
					<div class="col-lg-4 col-md-12">
						<ul class="ft-links">
							<li><a href="anasayfa" title="Ana Sayfa">Ana Sayfa</a></li>
							<?php 		
        $query = $db->query("SELECT * FROM sayfalar");
        if ( $query->rowCount() ){
        foreach( $query as $row ){
        	$baslik = $row["baslik"];
        	$baslik_seo = $row["baslik_seo"];
				echo'<li><a href="sayfa/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></li>';
			}
		}
		?>
							<li><a href="iletisim" title="İletişim">İletişim</a></li>
						</ul>
						<!--ft-links end-->
					</div>
				</div>
			</div>
			<!--footer-content end-->
		</div>
	</footer>
	<!--footer end-->


	<section class="bottom-strip">
		<div class="container">
			<p><?php echo $footer_yazi ?></p>
		</div>
	</section>
	<!--bottom-strip end-->

	<div class="search-page">
		<form action="ara" method="GET">
			<div class="container">
				<div class="form-field">
					<input type="text" name="ara" placeholder="Arama Yapmak İstediğiniz Kelimeyi Girin">
				</div>
			</div>
		</form>
		<a href="#" title="Kapat" class="close-search"><i class="la la-close"></i></a>
	</div>
	<!--SEARCH PAGE END-->



	</div>
	<!--wrapper end-->



	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lib/slick/slick.js"></script>
	<script src="js/script.js"></script>



	</body>

	</html>