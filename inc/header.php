<div class="search-popup">
	<div class="search-wrapper">
		<div class="search-box">
			<form action="">
				<input id="form-search" type="text" class="form-control" placeholder="ค้นหาข้อมูล">
				<button type="submit"></button>
			</form>
		</div>
	</div>
</div>

<div class="contact-popup">
	<div class="topLine"></div>
	<div class="contact-wrapper">
		<div class="title-page">
			<div class="container">
				<h1>CONTACT FORM</h1>
			</div>
		</div>

		<div class="page-inner">
			<div class="register-wrapper">
				<div class="contact-close"></div>
				<div class="container">
					<form class="form-horizontal formCustom">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="col-sm-12 inputCustom impt">
										<input class="form-control input__field" id="inp-01" type="firstname">
										<label class="input_label" for="inp-01">
											<span>First Name</span>
										</label>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<div class="col-sm-12 inputCustom impt">
										<input class="form-control input__field" id="inp-02" type="lastname">
										<label class="input_label" for="inp-02">
											<span>Last Name</span>
										</label>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<div class="col-sm-12 inputCustom impt">
										<input class="form-control input__field" id="inp-03" type="e-mail">
										<label class="input_label" for="inp-03">
											<span>E-Mail</span>
										</label>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<div class="col-sm-12 inputCustom">
										<input class="form-control input__field" id="inp-04" type="telephone">
										<label class="input_label" for="inp-04">
											<span>Telephone</span>
										</label>
									</div>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group">
									<div class="col-sm-12 inputCustom impt">
										<input class="form-control input__field" id="inp-05" type="subject">
										<label class="input_label" for="inp-05">
											<span>Subject</span>
										</label>
									</div>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group">
									<div class="col-sm-12 inputCustom impt">
										<input class="form-control input__field" id="inp-06" type="headline">
										<label class="input_label" for="inp-06">
											<span>Headline</span>
										</label>
									</div>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="form-group">
									<div class="col-sm-12 inputCustom impt">
										<textarea class="form-control input__field" id="inp-07"></textarea>
										<label class="input_label" for="inp-07">
											<span>Message</span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group capcha">
									<div class="col-sm-6">
										<div class="image">
											<img src="images/contact/capcha.jpg" alt="">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="btn-refresh"></div>
										<input type="text" class="form-control input__field" placeholder="กรุณากรากตัวอักษร">
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<div class="button-contact-form"><a href="">SEND</a></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="menu-popup">
	<div class="button-close"></div>
	<div class="select-lang">
		<ul>
			<li class="active"><a href="">EN</a></li>
			<li><a href="">TH</a></li>
		</ul>
	</div>
	<div class="wrapper">
		<ul>
			<li class="has-sub">
				<a href="aboutus.php">About us</a>
				<span>About us</span>
				<div class="sub-menu">
					<ul>
						<li> <a href="aboutus.php">รู้จัก AGC</a></li>
						<li> <a href="#">ประวัติความเป็นมา</a></li>
						<li> <a href="worthiness.php">ความภาคภูมิใจ</a></li>
						<li> <a href="#">World Wide Project</a></li>
						<li> <a href="#">โครงสร้างองค์กร</a></li>
					</ul>
				</div>
			</li>
			<li><a href="principles.php">Business principles</a></li>
			<li><a href="overview.php">Business Overview</a></li>
			<li><a href="site-map.php">Site Map</a></li>
			<li><a href="affiliates.php">Affiliated Companies</a></li>
			<li><a href="contact.php">Contact US</a></li>
		</ul>
	</div>
</div>

<div class="main-header-wrapper">
	<a href="index.php">
		<div class="logo">
			<img src="images/logo/logo.png" alt="">
		</div>
	</a>
	<div class="container">
		<div class="nav-left">
			<a class="button-contact" href="javascript:void(0);"><i class="icon-letter"></i><p>CONTACT</p></a>
		</div>
		<div class="nav-right">
			<div class="select-lang">
				<select class="selectpicker">
					<option>EN</option>
					<option>TH</option>
				</select>
			</div>
			<div class="search-control">
				<a href="javascript:void(0);" class="btn-search">
					<img src="images/icon/ico-search-2.png" alt="">
				</a>
			</div>
			<div class="btn-menu <?php if ( $check_page == 'page_inner') { echo 'hiding'; } ?>">
				<span>MENU</span>
				<div class="button-wrapper">
					<div class="menu-close"></div>
					<div class="menu-hamburger"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$('.search-popup').hide();
	$('.btn-search').click(function(){
		$('.search-popup').delay(200).fadeIn(300);
		setTimeout(function(){
			$('.search-popup').addClass('active');
			$('.search-box').addClass('active');
		},300)
	})

	$('.menu-popup .wrapper ul li.has-sub').click(function(){
		$(this).toggleClass('active');
		$(this).find('.sub-menu').slideToggle(400);
	})

	$('.search-popup').click(function(event){
		var check_pop = $('.search-popup').hasClass('active');
		if (check_pop && !$(event.target).is('#form-search'))
		{
			$('.search-popup').fadeOut(200);
			$('.search-popup').removeClass('active');
			$('.search-box').removeClass('active');
		};
	})

	$('.btn-menu .menu-hamburger').click(function(){
		$('.menu-popup').addClass('show-popup');
	})

	$('.main-header-wrapper .button-contact').click(function(){
		$('.contact-popup').addClass('show-popup');
	})

	$('.contact-close').click(function(){
		$('.contact-popup').removeClass('show-popup');
	})

	$('.menu-popup .button-close').click(function(){
		$('.menu-popup').removeClass('show-popup');
	})

	$(document).ready(function() {
		/* input placeholder style */
		(function() {
			if (!String.prototype.trim) {
				(function() {
					var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
					String.prototype.trim = function() {
						return this.replace(rtrim, '');
					};
				})();
			}

			[].slice.call( document.querySelectorAll( 'input.input__field, textarea.input__field' ) ).forEach( function( inputEl ) {
				if( inputEl.value.trim() !== '' ) {
					classie.add( inputEl.parentNode, 'input--filled' );
				}

				inputEl.addEventListener( 'focus', onInputFocus );
				inputEl.addEventListener( 'blur', onInputBlur );
			} );
			function onInputFocus( ev ) {
				classie.add( ev.target.parentNode, 'input--filled' );
			}
			function onInputBlur( ev ) {
				if( ev.target.value.trim() === '' ) {
					classie.remove( ev.target.parentNode, 'input--filled' );
				}
			}
		})();
	});

</script>