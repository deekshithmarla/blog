<?php

// Using hooks is absolutely the smartest, most bulletproof way to implement things like plugins,
// custom design elements, and ads. You can add your hook calls below, and they should take the 
// following form:
// add_action('thesis_hook_name', 'function_name');
// The function you name above will run at the location of the specified hook. The example
// hook below demonstrates how you can insert Thesis' default recent posts widget above
// the content in Sidebar 1:
// add_action('thesis_hook_before_sidebar_1', 'thesis_widget_recent_posts');

// Delete this line, including the dashes to the left, and add your hooks in its place.

/**
 * function custom_bookmark_links() - outputs an HTML list of bookmarking links
 * NOTE: This only works when called from inside the WordPress loop!
 * SECOND NOTE: This is really just a sample function to show you how to use custom functions!
 *
 * @since 1.0
 * @global object $post
*/


function add_additional_stylesheets() {
?>

	<link rel="stylesheet" href="/custom/font-awesome.css" />
	<link href="http://roboto-webfont.googlecode.com/svn/trunk/roboto.all.css" rel="stylesheet" type="text/css">

<?php
}
add_action('wp_head', 'add_additional_stylesheets');


function top_nav () {
?>

	<div class="navbar">
		<div class="navbar-inner">
			<div class="container" style="padding-bottom">
				<a class="brand" href="/"></a>
				<ul class="nav pull-right">
					<li><a href="http://ceciliayang.com/work">Featured Work</a></li>
					<li class="divider-vertical">
					<li><a href="http://cargocollective.com/ceciliayang" target="new">Archives  <i class="icon-external-link"></i></a></li>
					<li class="divider-vertical">
					<li><a href="/" target="new">Blog</a></li>
					<li class="divider-vertical">
					<li><a href="http://ceciliayang.com/info">Info</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php
}

add_action('thesis_hook_before_html', 'top_nav');

?>