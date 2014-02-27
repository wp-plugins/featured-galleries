=== Featured Galleries ===
Contributors: 
Donate link: http://www.andymercer.net
Tags: admin,backend,galleries,featured,images
Requires at least: 3.5.0
Tested up to: 3.8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress includes the ability to give posts a "Featured Image". Galleries require shortcodes, though. This plugin adds "Featured Galleries", which behave exactly like Featured Images, except having multiple images.

== Description ==

Have you ever added a Featured Image to a post and thought to yourself, 'I wish I could add more than one image this way'? Well, now you can. "Featured Galleries" mirrors the Featured Images functionality of WordPress. The only difference is that posts get an entire gallery rather than just a single image. These galleries behave almost exactly like Featured Images, and make use of  WordPress's built in Media Manager. Users can select images, define the order, and save the gallery, all through a simple drag-n-drop interface. Anyone who has ever added a Featured Image will know exactly what to do.

= Developers =

Just like with Featured Images, of course, themes will need to enable a post's Featured Gallery. The plugin adds a simple function to accomplish thish though, which mirrors WP's built-in **"get_post_thumbnail_id()"**:

**"get_post_gallery_ids()"**, when sent the post's ID, will return a PHP array (not object) with the ID's of all images in the post's featured gallery.

== Installation ==

There are two ways to install this plugin.

Manual:

1. Upload the `featured-galleries` folder to the `/wp-content/plugins/` directory
2. Go to the 'Plugins' menu in WordPress, find 'Featured Galleries' in the list, and select 'Activate'.

Through the WP Repository:

1. Go to the 'Plugins' menu in WordPress, click on the 'Add New' button.
2. Search for 'Featured Galleries'. Click 'Install Now'.
3. Return to the 'Plugins' menu in WordPress, find 'Featured Galleries' in the list, and select 'Activate'.

== Frequently Asked Questions ==

= What is the point of this? =

I was tasked to update a Featured Projects page for a client website. Projects were a custom post type, and the page displaying them used a special WP_Query. Each Project had a featured image. The client wanted each to have several images that could be clicked through with arrows. I couldn't find an easy way to accomplish this, so I built it from scratch. A friend suggested I abstract it into a plugin to share.

= Will it be improved? =

Probably. I'm not sure what else there is to change. What I'd really like to see is the functionality adopted into the core. We have featured images, why not featured galleries?

== Screenshots ==

1. Initial metabox, no images in the gallery.
2. Metabox with images selected and added.

== Changelog ==

= 0.5 =
* First public version..

= 0.1 =
* First version of this plugin. Entirely in house, pre-repository. Record kept only for organizational purposes.