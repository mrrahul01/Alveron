<div class="row">
                <div class="col-md-12">
                    <div class="light">
                       <!--- <i class="rounded-x icon-bell"></i>--->
                        <div class="overflow-h">
                           <!--- <h3>Our mission</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt sit amet dui auctor pellentesque. Nulla ut posuere purus.</p>---->
                        </div>
                    </div>
                    <div class="light">
                        <!---<i class="rounded-x fa fa-magic"></i>---->
                        <div class="overflow-h">
                          <!--  <h3>Our vision</h3>
                            <p>Phasellus vitae rhoncus ipsum. Aliquam ultricies, velit sit amet scelerisque tincidunt, dolor neque consequat est, a dictum felis metus eget nulla.</p>--->
                        </div>
                    </div>
                    <div class="light">
                        <!--<i class="rounded-x fa fa-thumbs-o-up"></i>--->
                        <div class="overflow-h">
            
            <div id="news-ticker" class="jq-news-ticker" style="height:40px;width:100%">
                <ul class="jq-news-ticker-items">
                    <li class="jq-news-ticker-item"><a class="rate" href="rate.html">
					<?php 
						$xml=simplexml_load_file("rate.xml");
						foreach($xml->r as $value) {
					?>
					<?php echo $value->country; ?> Rate <?php echo $value->rate; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php } ?>
					
					</a></li>
                    <!----<li class="jq-news-ticker-item"><a href="#"></a></li>
                    <li class="jq-news-ticker-item"><a href="#"></a></li>
                    <li class="jq-news-ticker-item"><a href="#"></a></li>
                    <li class="jq-news-ticker-item"><a href="#"></a></li>--->
                </ul>
            </div>
        </div>
		<script>
        
            $().ready(function() {
                $ticker = $('#news-ticker').newsTicker({
                      debug: true, 
					  interval: 500,
            scrollStep      : 7,
            scrollSecond    : 0.10,
                      animationType: 'scroll'
                });
            });
        
        </script>
                            <!---<p>PRICE is the prime factor of today’s business sustainability. And who doesn’t know that the world is converging toward ASIA to find for its offshore plants. Yes we can provide technology at a very affordable price along with world class quality.</p>--->
                        </div>
                    </div>
                    <div class=""></div>
                </div>