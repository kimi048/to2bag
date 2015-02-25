<div id="third">
		<h2>third start</h2>

		<div class="third-main">
			<div class="f-left left-colom">
				<a href="#"><div id="left3-1">What's To2Bag?</div></a>
				<a href="#"><div id="left3-2"><span id="v-bottom">Made in<span><br>Bangladesh</div></a>
			</div>
			<div class="right right-colom">
			<!--
				<?php query_posts('cat=3&posts_per_page=10&paged='.$paged); ?>
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
 
				//ループする内容
					 
				<?php endwhile; ?>
				<?php else : ?>
					 
				//記事がない場合に表示する内容
					 
				<?php endif; ?>
					 
				//WP-PageNavi
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
					 
				<?php wp_reset_postdata(); wp_reset_query(); ?>
			-->
				<!-- ここから移植 -->
	<!--
				<dl class="list">
				<?php while (have_posts()):the_post();?>
				<dt><?php the_time('Y/m/d');?></dt>
				<?php
					$cats = get_the_category();
					$cats = $cats[0];
					?>
					<dd class="<?php echo $cats -> category_nicename; ?>">
						<a href="<?php the_permalink();?>"><?php the_title();?></a><?php the_excerpt();?>
					</dd>
				<?php endwhile; ?>
				</dl>
   -->
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