<?php
if (isset($args) && is_array($args)) :
?>

	<!-- Title Bar -->
	<div class="pbmit-title-bar-wrapper">
		<div class="container">
			<div class="pbmit-title-bar-content">
				<div class="pbmit-title-bar-content-inner">
					<div class="pbmit-tbar">
						<div class="pbmit-tbar-inner container">
							<h1 class="pbmit-tbar-title"><?= $args['title']?></h1>
						</div>
					</div>
					<div class="pbmit-breadcrumb">
						<div class="pbmit-breadcrumb-inner">
							<span><a href="#" class="home"><span>Trang chủ</span></a></span>
							<span class="sep">-</span>
							<span><span class="post-root post post-post current-item"><?= $args['title']?></span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Title Bar End-->

<?php endif;
