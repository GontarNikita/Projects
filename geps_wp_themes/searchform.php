<?php $sq = get_search_query() ? get_search_query() : __( 'Поиск по блогу&hellip;', 'base' ); ?>
<form method="get" class="search-form" action="<?php echo home_url(); ?>" >
	<fieldset>
		<div class="input_holder"><input type="search" name="s" placeholder="<?php echo $sq; ?>" value="<?php echo get_search_query(); ?>" /></div>
		<div class="input_holder"><input type="submit" value="" /></div>
	</fieldset>
</form>