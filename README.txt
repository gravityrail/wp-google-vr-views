=== VR Views ===

Contributors: goldsounds
Donate link: http://goldsounds.com/
Tags: vr, images, video, 360, photosphere, virtual reality, google cardboard
Requires at least: 3.9
Tested up to: 4.7
Stable tag: 1.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed photospheres and 360 degree videos in mono or stereoscopic formats, and view in "VR Mode" using Google Cardboard.

== Description ==

This plugin provides a [vrview] shortcode that embeds 360' mono-and-stereoscopic images and videos into your WordPress website using Google's "[VR Views](https://developers.google.com/cardboard/vrview)" library. On devices supporting VR (such as Google Cardboard devices), a link appears that will display the content in full-screen VR mode.

As per the VR Views spec:

> VR Views allow you to embed 360 degree VR media into websites on desktop and mobile, and native apps on Android and iOS. This technology is designed for developers of traditional apps to enhance them with immersive content. For example, VR Views make it easy for a travel app to provide viewers with an underwater scuba diving tour as they plan vacation or for a home builder to take prospective buyers on virtual walkthrough before the home is built.

> VR Views also address a common developer concern, namely the limited availability of VR hardware amongst the general public. Although VR Views support true stereoscopic VR playback through compatibility with Google Cardboard, they default to a simple “magic window” mode that works on everything from desktop browsers to mobile apps without any special hardware.

This plugin allows you to embed VR Views in the recommended way - by self-hosting the vrview.js file. This enables you to embed any content uploaded to your site without needing to perform CORS hackery.

The shortcode syntax follows exactly the parameter spec of VR Views themselves:

* image or video: {String} URL of image or video to load. (required)
* is_stereo: {Boolean} true if content is in stacked stereo format. (optional, default false)
* preview: {String} URL of still preview to load first. (optional, default none)
* start_yaw: {Number} Initial yaw of viewer, in degrees. (optional, default 0)
* is_yaw_only: {Boolean} true if motion is restricted to yaw only. (optional, default false)

e.g. [vrview image="//photovrse.com/examples/coral.jpg" is_stereo="true"]

The content itself could be captured on any device which supports capturing 360 images or video. My preferred app is the [Google Cardboard Camera](https://play.google.com/store/apps/details?id=com.google.vr.cyclops&hl=en) (Android-only)

You can see the shortcode above in action here: http://goldsounds.com/vrview-test/

For tips on converting Cardboard Camera images, check out these resources:

* http://vectorcult.com/2015/12/extracting-the-audio-stereo-pair-from-cardboard-camera-3d-panoramic-images/
* http://edward.io/blog/extracting-google-cardboard-photos.html

== Installation ==

1. Upload `vr-views.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('vr_views_hook'); ?>` in your templates

== Screenshots ==

1. Sample in Android Chrome
2. Sample in Android Chrome with "VR Mode" enabled (Cardboard-compatible)

== Credits ==

Virtual Reality Goggles icon by Felisberto Piazza from the Noun Project

== Changelog ==

= 1.0 =
* First release