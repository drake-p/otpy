<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/html5reset.css" media="all">
        <link rel="stylesheet" href="css/style.css" media="all">
        <link rel="stylesheet" href="css/responsive.css" media="all">
        <title>On The Path Yoga | News</title>
    </head>
    <body>
        <?php include('includes/header.php'); ?>
		<?php include('includes/nav.php'); ?>
        <div class="content">
            <div class="wrapper">
                    
				<div class="section group">
					<div class="box">
					<div class="col span_1_of_3 single-t right">
						<p><img src="https://twimg0-a.akamaihd.net/profile_images/1393260299/image_reasonably_small.jpg" /></p>
					</div>
					<div class="col span_2_of_3 single-t">
						<h5>Latest Tweets by <a href="https://twitter.com/OnThePathYoga">@OnThePathYoga</a></h5>
						<div id="twitter_div"><ul><?php $count = 5; include('includes/twitter.php') ?></ul></div>
						<!--<div id="twitter_div"><ul id="twitter_update_list"><li>&nbsp;</li></ul></div>-->
						<h3>Stay updated</h3>
						<p>Announcements about workshops and events, membership specials, Member of the Month, and other studio news are made via the following channels:</p>
						<ul>
							<li>Facebook page</li>
							<li>Twitter feed</li>
							<li>Newsletter mailings</li>
						</ul>
						<p><a href="http://us2.campaign-archive2.com/?u=467bd0a593f71e1dbdf70bf88&id=27347312ed" class="obvious">View latest newsletter</a></p>
						<p>Blog: Sandy occasionally writes articles about what's going on in her yoga philosophy.  You can read them on her blog, <a href="http://onthepathyoga.wordpress.com/" target="_blank">Path Findings.</a></p>
					</div>
					<div class="clear"></div>
				</div>
            	</div>
        	</div>
		</div>
        <?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/OnThePathYoga.json?callback=twitterCallback2&count=5"></script>
    </body>
</html>
