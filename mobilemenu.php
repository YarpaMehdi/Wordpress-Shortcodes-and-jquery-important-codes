<div class="mobileheader">
	<div class="container-fluid">
		<div class="branding-logo">
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></a>
		</div>
		<div class="menu-btn">				
			<a href="#" class="responsive-menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="mobilemenu">	
		<a href="#" class="m-close-btn">
			<i class="fa fa-times" aria-hidden="true"></i>							
		</a>		
		<div class="main-menu">
			<?php
			 $defaults = array(
				'theme_location'  => '',
				'menu'            => 'main_menu_left',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul>%3$s</ul>',
				'depth'           => 5,
				'walker'          => ''
			);
			wp_nav_menu($defaults); 
			?>
			<?php
			 $defaults = array(
				'theme_location'  => '',
				'menu'            => 'main_menu_right',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul>%3$s</ul>',
				'depth'           => 5,
				'walker'          => ''
			);
			wp_nav_menu($defaults); 
			?>
		</div>			
	</div>	
</div>



/*javascript*/
$(".m-close-btn").click(function(){
		$(".mobilemenu").hide();
	  });
	  $(".responsive-menu-btn").click(function(){
		$(".mobilemenu").show();
	  });
	
	$('body').delegate('.mobilemenu .main-menu ul li.menu-item-has-children','click', function(){
	var $ths = $(this);
	if(!$ths.hasClass('active')){
		$('.mobileheader .menu-item-has-children').removeClass('active');
		$('.mobileheader .menu-item-has-children .sub-menu').slideUp();
		$ths.closest('.mobileheader .menu-item-has-children').find('ul.sub-menu').slideDown();
		$ths.addClass('active');
	}else{
		$ths.closest('.mobileheader .menu-item-has-children').find('ul.sub-menu').slideUp();
		$ths.removeClass('active');
	}
	
})

/*CSS*/
.header {display: none;}
.mobileheader{padding: 15px 0; display:block;}	.mobileheader .branding-logo{width: 70%; display: inline-block;}	.mobileheader .branding-logo img{}	.mobileheader .menu-btn{width: 28%;display: inline-block; text-align: right;}	.mobileheader .menu-btn a{color: #000;font-size: 24px; padding: 0px 0 0 0;display: inline-block;}	.mobilemenu{background: rgb(0 0 0 / 88%); width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 999; padding: 40px 0 0 0;display: none;}	.mobilemenu ul{text-align: left; margin: 20px 0 0 0;}	.mobilemenu ul li{display: block !important; border-bottom: solid 1px rgb(255 255 255 / 15%);}	.mobilemenu ul li a{color: #fff !important; font-size: 14px !important; display: block; padding: 10px 20px !important;}	.m-close-btn{display: block; position: absolute; top: 0; right: 0; color: #fff; font-size: 32px; padding: 20px 20px;}	.mobileheader button.sub-menu-toggle{display:none;}	.mobileheader ul li.menu-item-has-children{position:relative;}	.mobileheader ul li.menu-item-has-children a{display:inline-block;}	.mobileheader ul li.menu-item-has-children:after{content:"\f067";font-family:'FontAwesome';position:absolute;display:block;width:15px;height:15px;right:20px;top:13px;bottom:0;color:#fff;line-height:100%;font-size:15px;font-weight:100;text-align:center;}	.mobileheader ul li.menu-item-has-children.active:after{content:"\f068"}	.mobileheader ul li.menu-item-has-children ul.sub-menu{margin:0; display:none;}	.mobileheader ul li.menu-item-has-children ul.sub-menu li{position:relative;padding:0 0 0 6px;margin:0 0 0 25px;}	.mobileheader ul li.menu-item-has-children ul.sub-menu li:before{content:"";position:absolute;display:block;width:10px;height:1px;background:#fff;top:0;left:0;bottom:0;margin:auto 0;}	.mobileheader ul li.menu-item-has-children ul.sub-menu li a{font-size:70%;display:block;}
