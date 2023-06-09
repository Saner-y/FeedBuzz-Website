<?php include 'tema/header.php'; ?>
<?php $sonuclar=$_GET['kategori']; ?>


<section class="blog-section">
	<div class="container">
		<div class="blog-items main">
			<?php	
			$query = $db->query("SELECT * FROM yazilar WHERE kategori_adi_seo = '$sonuclar' order By yazi_id DESC LIMIT 0,1");
			if ( $query->rowCount() ){
				foreach( $query as $row ){
					$baslik = $row["baslik"];
					$baslik_seo = $row["baslik_seo"];
					$aciklama = $row["aciklama"];
					$resim = $row["resim"];
					$tarih = $row["tarih"];
					$yazar = $row["yazar"];
					$resim = $row["resim"];
					$hit = $row["hit"];
					$yazi_id = $row["yazi_id"];
					$kategori_adi = $row["kategori_adi"];
					$kategori_adi_seo = $row["kategori_adi_seo"];
					$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=505&w=820";
					$sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar where yazi_id = '$yazi_id' ");
								$sorgu->execute();
								$say = $sorgu->fetchColumn();
					echo'<div class="blog-item main-style">
					<div class="blog-img">
					<img src="'.$resim.'" alt="'.$baslik.'">
					<a href="kategori/'.$kategori_adi_seo.'" title="'.$kategori_adi.'" class="post-category">'.$kategori_adi.'</a>
					</div><!--blog-img end-->
					<div class="blog-info">
					<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
					<div class="met-soc">
					<ul class="meta">
					<li>'.strftime('%d %B %Y, %A', strtotime($tarih)).'</li>
					<li><i class="la la-eye"></i>'.$hit.'</li>
					<li><i class="la la-comment-o"></i>'.$say.'</li>
					</ul>
					</div><!--met-soc end-->
					</div><!--blog-info end-->
					</div>';
				}
			}
			?>
			<!--blog-items end-->
			<div class="blog-list">
				<div class="row pd-row">
					<?php	
					$query = $db->query("SELECT * FROM yazilar WHERE kategori_adi_seo = '$sonuclar' order By yazi_id DESC LIMIT 1,3");
					if ( $query->rowCount() ){
						foreach( $query as $row ){
							$baslik = $row["baslik"];
							$baslik_seo = $row["baslik_seo"];
							$aciklama = $row["aciklama"];
							$resim = $row["resim"];
							$tarih = $row["tarih"];
							$yazar = $row["yazar"];
							$resim = $row["resim"];
							$hit = $row["hit"];
							$kategori_adi = $row["kategori_adi"];
							$kategori_adi_seo = $row["kategori_adi_seo"];
							$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=248&w=340";
							echo'<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="blog-item">
							<div class="blog-img">
							<img src="'.$resim.'" alt="'.$baslik.'">
							</div><!--blog-img end-->
							<div class="blog-info">
							<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
							</div><!--blog-info end-->
							</div><!--blog-items end-->
							</div>';
						}
					}
					?>


				</div>
			</div><!--blog-list end-->
		</div><!--blog-items end-->
	</div>
</section><!--blog-section end-->

<section class="main-content p-70 pb-30">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mgr-50">
				<div class="blog-section tp-pst pt-0 p-70">
					<div class="sec-title">
						<h3>Son Yazılar</h3>
					</div><!--sec-title end-->
					<div class="blog-items">
						<div class="row">
							<?php	
							$query = $db->query("SELECT * FROM yazilar WHERE kategori_adi_seo = '$sonuclar' order By yazi_id DESC LIMIT 0,10");
							if ( $query->rowCount() ){
								foreach( $query as $row ){
									$baslik = $row["baslik"];
									$baslik_seo = $row["baslik_seo"];
									$aciklama = $row["aciklama"];
									$resim = $row["resim"];
									$tarih = $row["tarih"];
									$yazar = $row["yazar"];
									$resim = $row["resim"];
									$hit = $row["hit"];
									$kategori_adi = $row["kategori_adi"];
									$kategori_adi_seo = $row["kategori_adi_seo"];
									$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=248&w=340";
									$sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar where yazi_id = '$yazi_id' ");
								$sorgu->execute();
								$say = $sorgu->fetchColumn();
									echo'<div class="col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="blog-item">
									<div class="blog-img">
									<img src="'.$resim.'" alt="'.$baslik.'">
									</div><!--blog-img end-->
									<div class="blog-info">
									<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
									<ul class="meta">
									<li>'.strftime('%d %B %Y, %A', strtotime($tarih)).'</li>
									<li><i class="la la-eye"></i>'.$hit.'</li>
									<li><i class="la la-comment-o"></i>'.$say.'</li>
									</ul>
									</div><!--blog-info end-->
									</div><!--blog-item end-->
									</div>';
								}
							}
							?>
						</div>
					</div><!--blog-items end-->
				</div><!--blog-section end-->

				<div class="most-viewed-posts p-70">
					

				</div><!--most-viewed-posts end-->
				<div class="featured-stories p-70">
					<div class="container">
						<div class="sec-title">
							<h3>Tüm Yazılar</h3>
						</div><!--sec-title end-->
						<div class="blog-items">
							<div class="row">
								<?php	
								$query = $db->query("SELECT * FROM yazilar WHERE kategori_adi_seo = '$sonuclar' order By yazi_id DESC ");
								if ( $query->rowCount() ){
									foreach( $query as $row ){
										$baslik = $row["baslik"];
										$baslik_seo = $row["baslik_seo"];
										$aciklama = $row["aciklama"];
										$resim = $row["resim"];
										$tarih = $row["tarih"];
										$yazar = $row["yazar"];
										$resim = $row["resim"];
										$hit = $row["hit"];
										$yazi_id = $row["yazi_id"];
										$kategori_adi = $row["kategori_adi"];
										$kategori_adi_seo = $row["kategori_adi_seo"];
										$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=180&w=246";
										$sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar where yazi_id = '$yazi_id' ");
								$sorgu->execute();
								$say = $sorgu->fetchColumn();
										echo'<div class="col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="blog-item">
										<div class="blog-img">
										<img src="'.$resim.'" alt="'.$baslik.'">
										</div><!--blog-img end-->
										<div class="blog-info">
										<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
										<ul class="meta">
										<li>'.strftime('%d %B %Y, %A', strtotime($tarih)).'</li>
										<li><i class="la la-eye"></i>'.$hit.'</li>
										<li><i class="la la-comment-o"></i>'.$say.'</li>
										</ul>
										</div><!--blog-info end-->
										</div><!--blog-item end-->
										</div>';
									}
								}
								?>	
							</div>
						</div><!--blog-items end-->
					</div>
				</div><!--recommend-posts end-->
			</div>
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="widget widget-trending-posts">
						<h3 class="widget-title">Popüler Yazılar</h3>
						<div class="wd-posts">
							<?php	
							$query = $db->query("SELECT * FROM yazilar order By yazi_id DESC LIMIT 6");
							if ( $query->rowCount() ){
								foreach( $query as $row ){
									$baslik = $row["baslik"];
									$baslik_seo = $row["baslik_seo"];
									$aciklama = $row["aciklama"];
									$resim = $row["resim"];
									$tarih = $row["tarih"];
									$yazar = $row["yazar"];
									$resim = $row["resim"];
									$hit = $row["hit"];
									$yazi_id = $row["yazi_id"];
									$kategori_adi = $row["kategori_adi"];
									$kategori_adi_seo = $row["kategori_adi_seo"];
									$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=67&w=83";
									$sorgu = $db->prepare("SELECT COUNT(*) FROM yorumlar where yazi_id = '$yazi_id' ");
								$sorgu->execute();
								$say = $sorgu->fetchColumn();
									echo'<div class="wd-post">
									<img src="'.$resim.'" alt="'.$baslik.'">
									<div class="wd-post-info">
									<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
									<span class="post-date">'.strftime('%d %B %Y, %A', strtotime($tarih)).'</span>
									</div>
									</div>';
								}
							}
							?>
						</div><!--wd-posts end-->
					</div><!--widget-trending-posts end-->
					

					<div class="widget widget-recent-post">
						<h3 class="widget-title">Daha Fazla</h3>
						<div class="recent-post-carousel">

							<?php	
							$query = $db->query("SELECT * FROM yazilar order By yazi_id DESC LIMIT 0,4");
							if ( $query->rowCount() ){
								foreach( $query as $row ){
									$baslik = $row["baslik"];
									$baslik_seo = $row["baslik_seo"];
									$resim = $row["resim"];
									$resim = $row["resim"];
									$hit = $row["hit"];
									$kategori_adi = $row["kategori_adi"];
									$kategori_adi_seo = $row["kategori_adi_seo"];
									$resim="crop.php?src=".$parseurl['3']."/images/yazilar/".$resim."&h=130&w=170";
									echo'<div class="post-slide">
									<div class="wd-post">
									<img src="'.$resim.'" alt="'.$baslik.'">
									<div class="wd-post-info">
									<h3 class="post-title"><a href="icerik/'.$baslik_seo.'" title="'.$baslik.'">'.$baslik.'</a></h3>
									</div>
									</div>
									</div>';
								}
							}
							?>
						</div><!--post-slide end-->
					</div><!--carousel end-->
				</div><!--widget-recent-post end-->
				<div class="widget widget-adver">
					<a href="#" title=""><img src="images/resources/ad-img.jpg" alt=""></a>
				</div><!--widget-adver end-->
				<div class="widget widget-catgs">
					<h3 class="widget-title">Kategoriler</h3>
					<ul class="catgs-links">
						<?php 		
						$query = $db->query("SELECT * FROM kategoriler");
						if ( $query->rowCount() ){
							foreach( $query as $row ){
								$kategori_adi = $row["kategori_adi"];
								$kategori_adi_seo = $row["kategori_adi_seo"];
								$kategori_aciklama = $row["kategori_aciklama"];

								$sorgu = $db->prepare("SELECT COUNT(*) FROM yazilar where kategori_adi_seo = '$kategori_adi_seo' ");
								$sorgu->execute();
								$say = $sorgu->fetchColumn();
								echo'<li><a href="kategori/'.$kategori_adi_seo.'" title="'.$kategori_adi.'">'.$kategori_adi.'  - <span>'.$say.'</span></a></li>';
							}
						}
						?>
					</ul><!--catgs-links end-->
				</div><!--widget-catgs end-->
				
			</div><!--sidebar end-->
		</div>
	</div>
</div>
</section><!--main-content end-->


<?php include 'tema/footer.php'; ?>