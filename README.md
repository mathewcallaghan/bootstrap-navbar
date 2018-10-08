# Wordpress Bootstrap Navbar
Make a Wordpress menu compatible with Bootstrap Navbar

This plugin will add the CSS classes required to display a Wordpress menu as Bootstrap Navbars. A complete navbar requires Bootstrap 4 and the navbar structure in your theme.

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

###### Dividers
A divider can be added to drop down menus by adding a Custom Link with a class of **dropdown-divider**
The URL and Link Text will not be shown in the menu.

###### Disabled Links
Add the class **disabled** to the menu link to disable it.
