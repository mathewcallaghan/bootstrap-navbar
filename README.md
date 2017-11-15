# Bootstrap Navbar
Make a Wordpress menu compatible with Bootstrap Navbar

This plugin will add the classes required by the Bootstrap 4 Navbar component to the Wordpress menu. A complete navbar requires Bootstrap 4 and the navbar structure in your Wordpress theme.

###### Example

```
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<?php
	wp_nav_menu( array(
    'theme_location' => 'your-menu',
    'menu_class' => 'navbar-nav',
    'container' => ''
) );
?>
</nav>
```

