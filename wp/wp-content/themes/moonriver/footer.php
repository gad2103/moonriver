<?php
$magentoUrl = "http://www.moonriverstore.com";
$magentoUrlSecure = "https://www.moonriverstore.com";
?>
                    </div>                   
	                <div class="col-right sidebar">
<!-- TOYIN: this is the right column //-->
                        </div>
                </div>

            </div>
        </div>
        <div class="footer-container">
    <div class="footer">
                <div class="f-right">            
            			<form action="<?php echo $magentoUrlSecure; ?>/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
    <div class="form-subscribe">
        <label for="newsletter">Newsletter Sign-up:</label>
        <div class="input-box">
           <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" />
		   <button type="submit" title="Submit" class="button"><span><span>Submit</span></span></button>
        </div>        
    </div>
</form>
<script type="text/javascript">
//<![CDATA[
    var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
    new Varien.searchForm('newsletter-validate-detail', 'newsletter', 'Enter your email address');
//]]>
</script>
        </div>
        <div class="f-left">
            <ul>
<li><a href="<?php echo $magentoUrl; ?>/about-magento-demo-store">About Us</a></li>
<li class="last"><a href="<?php echo $magentoUrl; ?>/customer-service">Customer Service</a></li>
</ul>            <ul class="links">
                        <li class="first" ><a href="<?php echo $magentoUrl; ?>/catalog/seo_sitemap/category/" title="Site Map" >Site Map</a></li>
                                <li ><a href="<?php echo $magentoUrl; ?>/catalogsearch/term/popular/" title="Search Terms" >Search Terms</a></li>
                                <li ><a href="<?php echo $magentoUrl; ?>/catalogsearch/advanced/" title="Advanced Search" >Advanced Search</a></li>
                                <li class=" last" ><a href="<?php echo $magentoUrl; ?>/contacts/" title="Contact Us" >Contact Us</a></li>
            </ul>
            
            <address>&copy; 2011 Moon River. All Rights Reserved.</address>
        </div>
    </div>
</div>
            </div>
</div>
<!-- BEGIN GOOGLE ANALYTICS CODE -->
<script type="text/javascript">
//<![CDATA[
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
    })();

    var _gaq = _gaq || [];

_gaq.push(['_setAccount', 'UA-25099690-1']);
_gaq.push(['_trackPageview']);


//]]>
</script>
<!-- END GOOGLE ANALYTICS CODE -->
</body>
</html>
