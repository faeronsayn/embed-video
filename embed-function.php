<?php

function embeddingVideos($videoID, $videoProvider) {

$width = "100%";
$height = "100%";
					
		if ($videoProvider == "DailyMotion") { ?>
                	<iframe id="video" frameborder="0" width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="http://www.dailymotion.com/embed/video/<?php echo $videoID; ?>"></iframe>
                           
                <?php } else if($videoProvider == "Facebook")  { ?>
                       <object width="<?php echo $width; ?>" height="<?php echo $height; ?>"><param name="allowfullscreen" value="true"></param><param name="movie" value="http://www.facebook.com/v/<?php echo $videoID; ?>"></param><embed src="http://www.facebook.com/v/<?php echo $videoID; ?>" type="application/x-shockwave-flash" allowfullscreen="1" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></embed></object>         
                                
                <?php } else if($videoProvider == "Mp4Upload")  { ?>                
                       <iframe id="video" title="MP4Upload" type="text/html" frameborder="0" scrolling="no" width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="http://mp4upload.com/embed-<?php echo $videoID; ?>.html"></iframe>
                                
                <?php } else if($videoProvider == "Novamov")  { ?>
                		<iframe id="video" style='overflow: hidden; border: 0; width: <?php echo $width; ?>px; height: <?php echo $height; ?>px' src='http://embed.novamov.com/embed.php?width=<?php echo $width; ?>&height=<?php echo $height; ?>&v=<?php echo $videoID; ?>' scrolling='no'></iframe>
                <?php } else if($videoProvider == "PutLocker")  { ?> 
                		<iframe id="video" src="http://www.putlocker.com/embed/<?php echo $videoID; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" frameborder="0" scrolling="no"></iframe>
                 
                <?php } else if($videoProvider == "RuTube")  { ?> 
                		<iframe id="video" width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="http://rutube.ru/video/embed/<?php echo $videoID; ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen scrolling="no">
</iframe>
		<?php } else if($videoProvider == "Sapo")  { ?> 
                		<embed id="video" src="http://rd3.videos.sapo.pt/play?file=http://rd3.videos.sapo.pt/<?php echo $videoID; ?>/mov/1" type="application/x-shockwave-flash" allowFullScreen="true" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></embed>
                
                <?php } else if($videoProvider == "Upload2")  { ?> 
                		<iframe id="video" width="<?php echo $width; ?>" scrolling="no" height="<?php echo $height; ?>" frameborder="0" src="http://upload2.com/embed/<?php echo $videoID; ?>"></iframe>
                        
               	<?php } else if($videoProvider == "Veevr")  { ?> 
                		<iframe id="video" src='http://veevr.com/embed/<?php echo $videoID; ?>' width='<?php echo $width; ?>' height='<?php echo $height; ?>' scrolling='no' frameborder='0'></iframe>
                
                <?php } else if($videoProvider == "Videoweed")  { ?>
				<iframe id="video" width="<?php echo $width; ?>" height="<?php echo $height; ?>" frameborder="0" src="http://embed.videoweed.es/embed.php?v=<?php echo $videoID; ?>&width=<?php echo $width; ?>&height=<?php echo $height; ?>" scrolling="no"></iframe></iframe> 
                		
                        
                <?php } else if($videoProvider == "YourUpload")  { ?>
                		<iframe id="video" title="YourUpload" type="text/html" frameborder="0" scrolling="no" width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="http://yourupload.com/embed/<?php echo $videoID; ?>&width=<?php echo $width; ?>&height=<?php echo $height; ?>"></iframe>
			

		<?php } else if($videoProvider == "AUEngine")  { ?>
				<iframe id="video" src="http://auengine.com/embed.php?file=<?php echo $videoID; ?>&w=<?php echo $width; ?>&h=<?php echo $height; ?>" frameborder="0" height="<?php echo $height; ?>" scrolling="no" width="<?php echo $width; ?>"></iframe>
                 
                <?php } else if($videoProvider == "Youtube")  { ?> 
                		<iframe id="video" width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="http://www.youtube.com/embed/<?php echo $videoID; ?>" frameborder="0" allowfullscreen></iframe>
                
                <?php } else if($videoProvider == "VideoBam")  { ?> 
                        <iframe id="video" title="VideoBam video player" type="text/html" frameborder="0" scrolling="no" width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="http://videobam.com/widget/<?php echo $videoID; ?>/custom/<?php echo $width; ?>" allowFullScreen></iframe>   
                
		<?php } else if($videoProvider == "Zunux")  { ?>
			<script type="text/javascript">z_media = "<?php echo $videoID; ?>"; z_autoplay=false; z_width=<?php echo $width; ?>; z_height=<?php echo $height; ?>;</script><script type="text/javascript" src="http://www.zunux.com/static/js/embed.js"></script>
     
		<?php } else if($videoProvider == "VideoNest")  { ?>
			<IFRAME id="video" SRC="http://www.videonest.net/embed-<?php echo $videoID; ?>.html" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=<?php echo $width; ?> HEIGHT=<?php echo $height; ?>></IFRAME>

               <?php } else if($videoProvider == "UploadAnime")  { ?>
			<iframe allowfullscreen=true src='http://uploadani.me/?attachment_id=<?php echo $videoID; ?>&kgvid_video_embed[enable]=true' frameborder='0' scrolling='no' width='<?php echo $width; ?>' height='<?php echo $height; ?>'></iframe>
		<?php }
                           
}

?>
