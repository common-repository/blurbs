=== blurbs ===
Contributors: Jeremy Massel
Tags: blurb, text, shortcode, snippet, excerpt
Requires at least: 2.8
Tested up to: 2.8.1
Stable tag: 0.17

Allows you to insert short, handcrafted peices of content into a post, page, or template. Uses the shortcode API

== Description ==

The blurbs plugin allows you to add user made 'blurbs' of text to a post, page, or template. This is particularly useful if your WordPress theme is easily broken, and has many small pieces of text in it, or if you want to have a piece of text on the site repeated many times. This plugin uses the shortcode API to embed blurbs in posts and pages.


== Installation ==


1. Upload the folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to tools->blurbs and add a blurb
4. To use a blurb in a template use: $blurb = new blurb($blurbID); to display it use: echo $blurb->getText();
5. To use a blurb in a post use: [blurb id=$id]

== Frequently Asked Questions ==

= Where do I go if I have questions? =

You enter the contents of the entire HTML file. You can include inline styles, or links to external style sheets and external images.


== Changelog ==
= 0.16 =
* Works with both PHP4 and PHP5

= 0.15 =
* First version

== Screenshots == 
