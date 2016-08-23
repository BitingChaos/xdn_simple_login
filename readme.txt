=== XdN Simple Login ===
Contributors: BitingChaos
Author: Nicholas Caito
Donate link: http://xenomorph.net/
Tags: login, logout, logon, logoff, simple
Requires at least: 4.0
Tested up to: 4.6
Stable tag: 0.5.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This adds a login/logout shortcode link (with optional redirect) and enables the use of shortcode in text widgets. No formatting. Add "[login_logout]" anywhere you want the link.

== Description ==

This plugin will allow you to add a simple login / logout link to your site.

If you're not logged in then the link will say "Log in". If you are logged in, the link will say "Log out". 

This is using the built-in "wp_loginout()" WordPress function.

I've simply packaged it in this plugin to make it easy to add the shortcode to your site. 

There is no formatting, no widgets, no settings added to your database. Just enable the plugin and add the shortcode anywhere that you want a login/logout link.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the **xdn-simple-login** folder to your **/wp-content/plugins/** directory or install it through the WordPress "Add New" function under the Plugins menu.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add the **[login_logout]** shortcode to any one of your pages, posts, or widgets on your site.

> **Example Usage**
>
> You can use just the shortcode, or optionally tell it where WordPress should redirect you after login/logout.
> By default (when a redirect is not specified) it will redirect right back to your current page.
>
> `[login_logout]`
>
> `[login_logout redirect="/"]`
> 
> `[login_logout redirect="/files"]`
> 
> `[login_logout redirect="/?p=100"]`


== Frequently Asked Questions ==

* None!

== Screenshots ==

* None!

== Changelog ==

= 0.5.5 =
* add redirect option

= 0.5.0 =
* initial release

== Upgrade Notice ==

* None!
