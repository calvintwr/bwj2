<!-- sidebar -->
<?php $uri = get_template_directory_uri(); ?>
<aside class="sidebar col-sm-4" role="complementary">

    <style>
    .sidebar_cont_first {
        padding-top: 0px;
    }
    .sidebar_cont {
        padding-top: 40px;
    }
    .sidebar_followme .widget-inner a img {
        width: 25px;
    }
        .sidebar_followme .follow-icons-cont {
            padding-bottom: 20px;
        }

    .footer_instagram {
        text-align: center;
    }
        .simple_slider, .loading_cont {
            width: 100%;
            max-width: 320px;
            margin: auto;
        }
        .loading_cont {
            position: relative;
        }
        .insta-placeholder img {
            width: 100%;
        }
        .loading_inner {
            position: absolute;
            top: 0px;
            height: 100%;
            width: 100%;
            text-align: center;

        }
        #insta_loading img {
            width: 32px;
        }
    </style>

    <div class="sidebar_cont_first sidebar_cont sidebar_followme">
        <h3>STAY CONNECTED</h3>
        <div class='widget-inner follow-icons-cont'>
            <a href="https://facebook.com/christabel.chua" target="_blank">
                <img src="<?php echo $uri; ?>/img/icons/56x56px/facebook.png">
            </a>
            <a href="https://instagram.com/bellywellyjelly" target="_blank">
                <img src="<?php echo $uri; ?>/img/icons/56x56px/instagram.png">
            </a>
            <a href="https://twitter.com/bellywellyjelly" target="_blank">
                <img src="<?php echo $uri; ?>/img/icons/56x56px/twitter.png">
            </a>
            <a href="https://www.youtube.com/user/christabelchuahy" target="_blank">
                <img src="<?php echo $uri; ?>/img/icons/56x56px/youtube.png">
            </a>
        </div>
    </div>

    <div class="sidebar_cont footer_instagram">
        <h3>LIVE UPDATES</h3>
        <div class='loading_cont'>
            <div class='insta-placeholder'>
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
            </div>
            <div class="loading_inner">
                <div class='vAlign' style="height:100%; vertical-align:middle; display: inline-block"></div>
                <span id="insta_loading"></span>
            </div>
        </div>
        <div class='simple_slider' style="display:none;"></div>
    </div>

	<?php //get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>


</aside>
<!-- Sidebar pastel color-->
<script>
var sidebarColor = {
    colors: ['#F599CF', '#F3EE8B', '#BCE2B7', '#8BBFDD', '#AAA9EF'],
    colorize: function() {
        var $ = jQuery;
        var $headers = $('.sidebar_cont>h3');
        console.log($headers);
        var counter = 0;
        var self = this;
        $headers.each(function(i, el) {

            //reset counter if it is larger than my colors array.
            if (counter > self.colors.length - 1) {
                counter = 0;
            }

            //set color
            var color = self.colors[counter];
            $(el).css('color', color);

            console.log(color);
            counter += 1;
        });
    }
};
//sidebarColor.colorize();
</script>
<!-- /sidebar -->
