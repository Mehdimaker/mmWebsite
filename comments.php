<div id="FormComments">
 <div ng-app="comapp">
        <div ng-controller="comappCtrl">
	<?php comment_form_modify(); ?>
	
     </div></div>

</div><div id="listsComments">
	<?php if ( have_comments() ) : ?>

		<ul class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'lists_comment', 'style' => 'ol' ) ); ?>
		</ul><!-- .commentlist -->


	
<?php endif; // have_comments() ?>
</div>





  