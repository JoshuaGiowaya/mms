<footer class="content-info ">
<div class="footer_box">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?> 
	 
   <div class="footer_content">
      <figure class="footer_content--figure"><img src="<?php bloginfo('template_url'); ?>/assets/images/mms.png"></figure>
    <div class="row">
      <div class="col-md-4">
          <div class="footer_content--address">
		  <?php dynamic_sidebar('address-1'); ?> 
          

          </div>
    </div>
    <div class="col-md-4">
          <div class="footer_content--address">
           <?php dynamic_sidebar('address-2'); ?> 

          </div>
    </div>
    <div class="col-md-4">
          <div class="footer_content--address">
           <?php dynamic_sidebar('address-3'); ?> 

          </div>
    </div>  
  </div>
    </div> 
</div>
</div>
<div class="footer__nav">
  <div class="container">
  <ul class="footer__nav--main">
    <li class="footer__nav--main--list"><a href="http://gutoplis.com/2018/dev/mms/" class="footer__nav--main--list--link">MMS</a></li>
    <li class="footer__nav--main--list">
		<a href="#" class="footer__nav--main--list--link">MMS-U</a></li>
    <li class="footer__nav--main--list">
		<a href="http://gutoplis.com/2018/dev/mms/expert/" class="footer__nav--main--list--link">EXPERTS</a></li>
    <li class="footer__nav--main--list">
		<a href="http://gutoplis.com/2018/dev/mms/process/" class="footer__nav--main--list--link">PROCESS</a></li>
    <li class="footer__nav--main--list">
		<a href="http://gutoplis.com/2018/dev/mms/system/" class="footer__nav--main--list--link">SYSTEMS</a></li>
    <li class="footer__nav--main--list">
		<a href="http://gutoplis.com/2018/dev/mms/product/" class="footer__nav--main--list--link">PRODUCTS</a></li>
    <li class="footer__nav--main--list">
		<a href="http://gutoplis.com/2018/dev/mms/contact/" class="footer__nav--main--list--link">CONTACT</a></li>
  </ul>

<ul class="footer__nav--bottom">
<li class="footer__nav--bottom-list"><a href="#" class="footer__nav--bottom-list--link">EMPLOYMENT</a></li>
<li class="footer__nav--bottom-list"><a href="#" class="footer__nav--bottom-list--link">EVENTS</a></li>
<li class="footer__nav--bottom-list"><a href="#" class="footer__nav--bottom-list--link">NEWS</a></li>
</ul>
<p>&copy <?php echo get_field('privacy_policy','option'); ?> </p>
</div>
</div>

</footer>
