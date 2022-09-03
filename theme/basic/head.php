<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<!-- Header : S -->
<header class="wrapper header-bgcolor" id="header-1">

	<div class="container" id="header">

		<div class="toggle-header">
			<div class="toggle-nav"></div>
		</div>


	</div>

	<div class="container-fluid gnb-border_top">
		<div class="container">

			<div class="header-logo" >
				<a href="index.html" title="PAGE10" target="">
					<img src="images/logo.png" class="logo-black" />
					<img src="images/logo.png" class="logo-white" />
					<span>DH Music</span>
				</a>

			</div>
			<nav class="gnb">
				<ul>
					<li><a href="profile.html" target="">Profile</a></li>
					<li><a href="work.html" target="">Work</a></li>
					<li><a href="contact.html" target="">SNS</a></li>
					<!-- <li class="has_children movie"><a href="board.html" target="">후원</a>
						<ul class="has-sub">
							<li><a href="board.html" target="">게시판-1
							</a></li>
							<li><a href="board.html" target="">게시판-2
							</a></li>
						</ul>
					</li> -->
					<li><a href="sponsor.html" target="">Contract / Sponsor</a></li>
				</ul>
			</nav>
		</div>
		<div class="clearBoth"></div>

	</div>

</header>
<!-- Header : E -->



<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php } ?>

