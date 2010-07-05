=== Twitter Tracker ===
Contributors: simonwheatley
Donate link: http://www.simonwheatley.co.uk/wordpress/
Tags: twitter, tweet, twitter search, hashtag, summize
Requires at least: 2.8.5
Tested up to: 2.8.5
Stable tag: 2.12

Tracks Twitter search results or a Twitter hashtag in a sidebar widget.

== Description ==

**This plugin requires PHP5 (see Other Notes > PHP4 for more).**

A widget which allows you to specify and display a [Twitter search](http://search.twitter.com/) (or a Twitter hashtag) in your sidebar. Twitter searches are [very flexible](http://search.twitter.com/operators), and you can display anything from Hashtags to individual, or aggregated Twitter streams.

== Other notes ==

The plugin puts "Twitter Tracker" fields in the post and page screens, you can enter a specific query into this metabox and this will override the query entered on the widget editor... this means you can have individual Twitter search queries in the widget for each of your posts and pages. If you enter nothing in those fields then the widget will use the Twitter search query on the widget editor screen. (Developers, you can add this metabox to custom post types although you will need to use the tt_allowed_post_types filter to get the metabox fields to save... check out the code.)

The HTML output is fairly well classed, but if you need to adapt it you can. Create a directory in your *theme* called "view", and a directory within that one called "category-images-ii". Then copy the template files `view/twitter-tracker/widget-content.php` and `view/twitter-tracker/widget-error.php` from the plugin directory into your theme directory and amend as you need. If these files exist in these directories in your theme they will override the ones in the plugin directory. This is good because it means that when you update the plugin you can simply overwrite the old plugin directory as you haven't changed any files in it. All hail [John Godley](http://urbangiraffe.com/) for the code which allows this magic to happen.

Plugin initially produced on behalf of [WordCamp UK, 2009](http://wordcamp.org.uk). Initial version 2 development funded by SamFry Ltd.

Is this plugin lacking a feature you want? I'm happy to accept offers of feature sponsorship: [contact me](http://www.simonwheatley.co.uk/contact-me/) and we can discuss your ideas.

Any issues: [contact me](http://www.simonwheatley.co.uk/contact-me/).

== Installation ==

The plugin is simple to install:

1. Download `twitter-tracker.zip`
1. Unzip
1. Upload `twitter-tracker` directory to your `/wp-content/plugins` directory
1. Go to the plugin management page and enable the plugin
1. Give yourself a pat on the back

== PHP4 ==

Many of my plugin now require at least PHP5. I know that WordPress officially supports PHP4, but I don't. PHP4 is a mess and makes coding a lot less efficient, and when you're releasing stuff for free these things matter. PHP5 has been out for several years now and is fully production ready, as well as being naturally more secure and performant.

If you're still running PHP4, I strongly suggest you talk to your hosting company about upgrading your servers. All reputable hosting companies should offer PHP5 as well as PHP4.

Right, that's it. Grump over. ;)

== Change Log ==

= v2.12 2009/10/27 =

* ENHANCEMENT: Adds the ability to enter a local query for each individual page and post, this local query overrides the query entered on the widgets screen
* ENHANCEMENT: Use the new (to me) Twitter profile pic API to get the images
* BUGFIX: Use the new (to me) Twitter profile pic API to get the images
* BUGFIX: May have stomped the -1 year ago problem, where tweets were showing as tweeted -1 years ago.

= v2.11 2009/10/27 =

* ARGH: Version numbers getting confused, so I'm trying this renumbering to hopefully cut through that confusion.

= v2.1 2009/10/13 =

* BUGFIX: Default template now doesn't throw a PHP error. Oops!
* ENHANCEMENT: Default template now uses Twit name, rather than the "twitter username (actual name)" format
* BUGFIX: URL encoded the query, so now works with spaces in the query

= v2.01 2009/07/12 =

* Now allows the assignment of an individual class to each instance of the widget, good for styling your different Tweet streams to differentiate between them.

= v2.00 2009/05/11 =

* Now using the all new WordPress 2.8 widget capabilities, soooo much easier.
* Various internal massaging.
* ENHANCEMENT: You can now hide @ replies.
* ENHANCEMENT: You can now add text after the results (e.g. for a link to the Twitter search you are using)

= v1.41 2009/04/20 =

* ENHANCEMENT: Added a class "preamble" to the P element containing the preamble.
* BUGFIX: Slashes no longer breed and multiply in the title, preamble and search.

= v1.4 2009/04/20 =

* ENHANCEMENT: Added class "twitter-tracker" to the widget.
* ENHANCEMENT: Added a description to show in the widget admin page.

= v1.3 2009/04/10 =

* ENHANCEMENT: Now you can specify the number of Tweets in the widget config.

= v1.2 2009/04/10 =

* FIX: Bug with time since information, now replaced with an i18n local date.

= v0.90b 2009/03/03 =

* RELEASE: Version 0.90b

== Screenshots ==

1. Showing the widget settings
2. Showing the unstyled output (use your own CSS to make this look as you wish)
