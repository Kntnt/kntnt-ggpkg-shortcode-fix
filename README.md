# Kntnt Fix for Garden Gnome Package

WordPress mu-plugin that removes empty lines from the JavaScript outputted by the shortcode of Garden Gnome Package viewer to prevent wpautop to mess with it.

## Background

The WordPress [plugin](https://wordpress.org/plugins/garden-gnome-package/) for publish Garden Gnome Packages provides the shortcode `ggpkg` to present Pano2VR and Object2VR packages on pages and posts.

The plugin outputs JavaScript code which migh conatin empty lines. These lines will be converted into <p></p> by WordPress (its done by the infamous `wpautop()` function). That results in syntax error in yje JavaScript.

Awaiting a bug fix from Garden Gnome Software, you can use this plugin as a fix. It simply removes the empty lines before outputting te JavaScript.

## How to install

I suggest you install this plugin as a "must use plugin":

1. In your `wp-content` directory, create a `mu-plugins` directory (if it not already exists).
2. Download [`kntnt-ggpkg-shortcode-fix.php`](https://raw.githubusercontent.com/Kntnt/kntnt-ggpkg-shortcode-fix/master/kntnt-ggpkg-shortcode-fix.php) and save it within the `mu-plugins` directory.

That's it!
