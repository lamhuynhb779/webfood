	<div class="logo">
			<h1><a href="index.php"><span>UIT</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">Food</a></h1>
		</div>	
		<div class="nav-icon">		
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a class="active" href="index.php">Trang chủ</a></li>
						<li><a  href="menu.php">Thực đơn</a></li>
						<li><a  href="blog.php">Cảm nhận</a></li>
						<li><a  href="events.php">Khuyến mãi</a></li>
						<li><a  href="contact.php">Liên hệ</a></li>
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>