<section class="section parallax-section  section-page-top-title">
    <!--<div class="parallax1"></div>-->
    <ul class="rslides" id="slider1">
      <li><img src="<?=config_item('base_url');?>/assets/images/banner/banner_1.jpg" alt=""></li>
      <li><img src="<?=config_item('base_url');?>/assets/images/banner/banner_2.jpg" alt=""></li>
      <li><img src="<?=config_item('base_url');?>/assets/images/banner/banner_3.jpg" alt=""></li>
      <li><img src="<?=config_item('base_url');?>/assets/images/banner/banner_4.jpg" alt=""></li>
      <li><img src="<?=config_item('base_url');?>/assets/images/banner/banner_5.jpg" alt=""></li>
      <li><img src="<?=config_item('base_url');?>/assets/images/banner/banner_6.jpg" alt=""></li>
      <li><img src="<?=config_item('base_url');?>/assets/images/banner/banner_7.jpg" alt=""></li>
      <li><img src="<?=config_item('base_url');?>/assets/images/banner/banner_8.jpg" alt=""></li>
    </ul>
</section>	
<div class="container">
    <div class="sixteen columns">
        <div class="section-title left">
            <div class="subtitle left big"><?php echo strtoupper($this->session->userdata('session_tab'));?> Gallery</div>
        </div>
    </div>
</div>
<section class="section white-section section-padding-bottom">
    <div class="container">
        <div class="sixteen columns">
            <div id="portfolio-filter">
                <ul class="social" id="filter">
                	<?php if($this->session->userdata('session_tab')=='twitter' || $this->session->userdata('session_tab')==''):?>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=twitter&callback=<?php echo site_url();?>gallery/" class="current" title="">&#xf099;</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=youtube&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf167;</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=instagram&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf16d</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=facebook&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf09a;</a></li>
                    <?php elseif($this->session->userdata('session_tab')=='youtube'):?>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=twitter&callback=<?php echo site_url();?>gallery/" class="icon-soc" title="">&#xf099;</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=youtube&callback=<?php echo site_url();?>gallery/" class="current" title="">&#xf167;</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=instagram&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf16d</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=facebook&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf09a;</a></li>
                    <?php elseif($this->session->userdata('session_tab')=='instagram'):?>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=twitter&callback=<?php echo site_url();?>gallery/" class="icon-soc" title="">&#xf099;</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=youtube&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf167;</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=instagram&callback=<?php echo site_url();?>gallery/" class="current" title="">&#xf16d</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=facebook&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf09a;</a></li>
                    <?php elseif($this->session->userdata('session_tab')=='facebook'):?>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=twitter&callback=<?php echo site_url();?>gallery/" class="icon-soc" title="">&#xf099;</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=youtube&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf167;</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=instagram&callback=<?php echo site_url();?>gallery/" class="" title="">&#xf16d</a></li>
                        <li class="icon-soc"><a href="<?php echo site_url();?>gallery/tab/?tb=facebook&callback=<?php echo site_url();?>gallery/" class="current" title="">&#xf09a;</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
    	<?php if($this->session->userdata('session_tab')=='youtube' || $this->session->userdata('session_tab')=='instagram' || $this->session->userdata('session_tab')=='facebook'):?>
			<?php if(count($gallery)>0):?>
                <?php foreach($gallery as $gallery):?>
                    <div class="two-gallery column">
                        <?php if($gallery['tipe']=='Image'):?>
                            <?php if($gallery['jenis']=='instagram'):?>
                                <a class="group1" href="<?php echo $gallery['thumbnail'];?>">
                                    <div class="lightbox-box ">
                                        <img src="<?php echo $gallery['thumbnail'];?>" alt="">
                                    </div>
                                </a>
                            <?php elseif($gallery['jenis']=='facebook'):?>
                                <a class="group1" href="<?php echo $gallery['url'];?>">
                                    <div class="lightbox-box ">
                                        <img src="<?php echo $gallery['url'];?>" alt="">
                                    </div>
                                </a>
                            <?php endif;?>
                        <?php else:?>
                        	<?php if($gallery['tipe']=='Video' && $gallery['jenis']=='youtube'):?>
                            <a class="group youtube expander" href="https://www.youtube.com/embed/<?php echo $gallery['url'];?>?rel=0&amp;autoplay=1">
                                <div class="lightbox-box">
                                    <img src="<?php echo $gallery['thumbnail'];?>" alt="">
                                </div>
                            </a>
                            <?php elseif($gallery['tipe']=='Video' && $gallery['jenis']=='instagram'):?>
                            <a class="group" href="<?php echo $gallery['url'];?>" target="_blank">
                                    <div class="lightbox-box">
                                        <img src="<?php echo $gallery['thumbnail'];?>" alt="">
                                    </div>
                                </a>
                            <?php endif;?>
                        <?php endif;?>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
		<?php else:?>
        	<style>
				.twitter-timeline
				{
					width:1200px!important;
				}
			</style>
        	 <a class="twitter-timeline" href="https://twitter.com/PriskilaID" data-screen-name="PriskilaID"  data-screen-name="PriskilaID" data-widget-id="567292922580586496" data-chrome="nofooter noborders transparent" data-aria-polite="assertive">Tweets by @PriskilaID</a>
        <?php endif;?>
    </div>
    <div class="container">
        <div id="container">
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>
</section>	