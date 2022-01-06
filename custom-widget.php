<?php  



// Creating the widget 
class wpb_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'wpb_widget', 
  
// Widget name will appear in UI
__('Halim  Widget', 'wpb_widget_halim'), 
  
// Widget description
array( 'description' => __( 'Sample widget ', 'wpb_widget_halim' ), ) 
);
}
  
// Creating widget front-end
  
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
  
// before and after widget arguments are defined by themes

echo $args['before_widget'];
if ( !empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
  
// This is where you run the code and display the output

?>
 <div class="categories">

 	<?php $categories = get_categories();

	foreach ($categories as $cate) {
		?>
		<li><a href="#"><?php echo $cate->name ;?> <span class="fa fa-chevron-right"></span></a></li>

		<?php } ?>

 </div>
<?php 
echo $args['after_widget'];
}
          
// Widget Backend 

public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'service Halim ', 'wpb_widget_halim' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 


// post widget 


// Creating the widget 
class post_wpb_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'wpb_widget', 
  
// Widget name will appear in UI
__('Posts Halim  Widget', 'post_wpb_widget_halim'), 
  
// Widget description
array( 'description' => __( 'Post Sample widget ', 'post_wpb_widget_halim' ), ) 
);
}
  
// Creating widget front-end
  
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
  
// before and after widget arguments are defined by themes

echo $args['before_widget'];
if ( !empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
  
// This is where you run the code and display the output

$posts=array(
	'post_type'=>'post',

    'posts_per_page'=> 3
);
$query= new Wp_Query($posts);

while($query->have_posts()){
	$query->the_post();?>
	<div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>"></a>
    <div class="text">
      <h3 class="heading"><a href="#"><?php the_title();?></a></h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span><?php the_date();?></a></div>
        <div><a href="#"><span class="icon-person"></span> <?php the_author();?></a></div>
        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
      </div>
    </div>
  </div>

<?php }
?>
 
<?php 
echo $args['after_widget'];
}
          
// Widget Backend 

public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'Post Halim Title', 'post_wpb_widget_halim' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
 
// Register and load the widget
function post_wpb_widget_halim() {
    register_widget( 'post_wpb_widget' );
}
add_action( 'widgets_init', 'post_wpb_widget_halim' );
 
 
// Register and load the widget
function wpb_widget_halim() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_widget_halim' );





// Creating the widget tags 

class tags_wpb_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'tags_widget', 
  
// Widget name will appear in UI
__('tags Halim  Widget', 'post_wpb_widget_halim'), 
  
// Widget description
array( 'description' => __( 'Post Sample widget ', 'post_wpb_widget_halim' ), ) 
);
}
  
// Creating widget front-end
  
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
  
// before and after widget arguments are defined by themes

echo $args['before_widget'];
if ( !empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
  
// This is where you run the code and display the output

?>
<div class="tagcloud">
<?php $tags= get_tags();
	foreach ($tags as $tag) { ?>

		<a href="<?php echo get_tag_link($tag->term_id);?>" class="tag-cloud-link"><?php echo $tag->name;?></a>
		
<?php	}

 ?>
</div>
 
<?php 
echo $args['after_widget'];
}
          
// Widget Backend 

public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'Tags Cluid', 'post_wpb_widget_halim' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_widget ends here
} 
 
// Register and load the widget
function tags_wpb_widget_halim() {
    register_widget( 'tags_wpb_widget' );
}
add_action( 'widgets_init', 'tags_wpb_widget_halim' );


