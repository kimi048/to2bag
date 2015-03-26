<div id="third">
		<h2>third start</h2>

		<div class="third-main">
			<div class="f-left left-colom">
				<a href="#"><div id="left3-1">What's To2Bag?</div></a>
				<a href="#"><div id="left3-2"><span id="v-bottom">Made in<span><br>Bangladesh</div></a>
			</div>
			<div class="right right-colom">
			
				<!-- ここから移植 -->
	
			<dl class="list">
            <?php query_posts("posts_per_page=12"); ?>
				 <?php while (have_posts()):the_post();?>
				<dt><?php the_time('Y-m-d');?></dt>
				<?php
					$cats = get_the_category();
					$cats = $cats[0];
					?>
					<dd class="<?php echo $cats -> category_nicename; ?>">
						<a href="<?php the_permalink();?>"><?php the_title();?></a><?//php the_excerpt();?>
					</dd>
				<?php endwhile; ?>
				</dl>
    
				<!-- ここまで -->
	
				<!--
             <dl class="list">
               <dt><span>2008-05-14</span></dt>
               <dd id="first_dd">
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>

               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせそたちつてとなに
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>
               <dt><span>2008-05-14</span></dt>
               <dd>
                  <div>
                  あいうえおかきくけこさしすせ
                  </div>
               </dd>

            </dl>
		 -->
		</div>
		<br>aa
			<div class="f-clear">hdaeouwhduewad</div>
		</div>
	</div>
   </div>
