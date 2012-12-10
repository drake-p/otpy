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
        <title>On The Path Yoga in Spring Lake, MI</title>
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        <div class="content">
            <div class="wrapper">
                <div class="section group">
                    <div class="col span_1_of_3 only-d">
                        &nbsp<img src="images/stones.png" alt="balanced stones" id="stones">
                    </div>
                    <div id="hax">
                    </div>
                    <div class="col span_1_of_3 double-t">
                        <a href="studio.php" class="thumb">
                            <div class="box row1 right">
                                <img src="images/Entrance-sm.jpg" alt="yoga studio entrance" width="100%" class="flush"/>
                                <div class="bottom">
                                    <h3>about On The Path Yoga ...</h3>
                                </div>
                            </div>
                        </a>
                        <div class="placer">
                            <a href="classes.php" class="thumb">
                                <div class="box row2">
                                    <h3>Today’s Classes</h3>
                                    <br/>
                                    <em>11/23/2012</em>
                                    <p>
                                    6:30 Sunrise Yoga (45 minutes / $5 drop-in)
                                    </br>
                                    10:00 Level 1 with Sandy
                                    <br/>
                                    2:00 Chair Yoga with Sandy
                                    <br/>
                                    4:00 Level 1 with Sandy
                                    <br/>
                                    5:30 Level 2 with Sandy
                                    <br/>
                                    7:00 Restorative with Jaclyn
                                </p>
                                </div>
                            </a>
                            <a href="classes.php#schedule" class="obvious fixed">all classes...</a>
                        </div>
                    </div>
                    <div class="col span_1_of_3 double-t">
                        <div class="placer">
                            <a href="news.php" class="thumb">
                                <div class="box row1">
                                    <h3>Studio News</h3>
                                    <!--<div id="twitter_div"><ul id="twitter_update_list"><li>&nbsp;</li></ul></div>-->
									<div id="twitter_div"><ul><?php $count = 1; include('includes/twitter.php'); ?></ul></div>
                                </div>
                            </a>
                            <a href="news.php" class="obvious fixed">more...</a>
                        </div>
                        <a href="membership.php" class="thumb">
                            <div class="box row2 centered">
                                	<div class="ribbon"></div>
                                <div class="bottom">
                                    <img src="images/membership.png" alt="yoga pose" width="100%"/><h3>Membership and Registration</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php include('includes/footer.php'); ?>
		<!--<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/OnThePathYoga.json?callback=twitterCallback2&count=1"></script>-->
    </body>
</html>
