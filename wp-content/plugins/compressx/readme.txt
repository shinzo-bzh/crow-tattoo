=== AVIF, WebP Converter===
Contributors: compressxio
Tags: convert WebP, convert AVIF, WebP, AVIF
Requires at least: 5.8
Tested up to: 6.8.1
Requires PHP: 7.0
Stable tag: 0.9.28
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

Localhost AVIF, WebP Converter.

== Description ==
CompressX is a free, lightweight and simple Webp & AVIF conversion and compression plugin for WordPress websites. It helps you to easily convert JPG and PNG images to WebP and AVIF formats, and compress WebP and AVIF images. The AVIF and WebP conversion is performed locally on the web server.

== Core Features ==

= 1. Convert AVIF & Compress AVIF =
Convert jpg, png, and WebP images on your WordPress website to AVIF format, and compress AVIF images according to the compression level you set.
If the original image is already in AVIF format which is supported since WordPress 6.5, the original AVIF image will only be compressed.
= 2. Convert WebP & Compress WebP =
Convert jpg, png images on your WordPress website to WebP format, and compress WebP images according to the compression level you set.
If the original image is already in WebP format which is supported since WordPress 5.8, the original WebP image will only be compressed.
= 3. Exclude Folders =
Select specific folders in your media library and prevent images inside them from being processed.
= 4. Custom Folders =
Select folders that are in the wp-content folder but outside the Uploads (media library) and process images inside them.
= 5. Auto-Process New Images =
Automatically convert new images uploaded to a WordPress website to WebP/AVIF format and compress WebP/AVIF images upon upload.
= 6. Auto-Remove Large Images =
Automatically remove converted AVIF/WebP images when they are larger than original images.
= 7. Restore Original Images =
Your images will be reverted to their original state and all AVIF/WebP images and data in the database generated by CompressX will be removed when CompressX is uninstalled.

== Minimum Requirements to use CompressX ==
* Character Encoding UTF-8
* PHP version 7.0
* MySQL version 4.1
* WordPress 5.8

== Screenshots ==
1. Converting PNG/JPG images to WebP
2. Converting PNG/JPG images to AVIF
3. Compressing WebP images
4. Compressing AVIF images

== Installation ==

= Install CompressX =
1.Go to your sites admin dashboard.
2.Navigate to Plugins Menu and search for CompressX.
3.Find CompressX and click Install Now.
4. Click Activate.

== Frequently Asked Questions ==
= What does CompressX do? =
CompressX converts JPG/PNG images on your WordPress website to WebP and AVIF formats, and compress WebP and AVIF images locally, for free!
= Does CompressX convert AVIF? Is it a free feature? =
Yes, CompressX supports AVIF conversion and compression, the AVIF conversion and compression feature is completely free.
= Does CompressX convert WebP? Is it a free feature? =
Yes, CompressX supports WebP conversion and compression, the WebP conversion and compression feature is completely free.
= Do you provide support for CompressX? Where? =
Yes, absolutely. Whenever you need help, start a thread on the support forum or [contact us](https://compressx.io/contact-us/).
= Do you have any get-started guides/docs? =
Yes, we do. Here is a [tutorial](https://compressx.io/docs/compressx-overview/) for you to quickly get started with CompressX.

== Changelog ==
= 0.9.28 =
- Fixed: Incorrect image statistics calculation.
- Added support for image rotation during WebP/AVIF conversion.
- Fixed: Image resizing data could not be updated in the database.
= 0.9.27 =
- Refactored the plugin code and optimized the code structure.
- Optimized and reduced CompressX entries in postmeta table.
- Fixed some UI bugs.
= 0.9.26 =
- Expanded compatibility to support a wider range of server configurations.
- Added a clear warning about potential AVIF conversion timeouts when using ImageMagick 6.x.
- Enhanced compatibility of .htaccess rewrite rules to accommodate diverse server settings.
- Optimized bulk image processing to skip stuck images.
- Optimized the plugin code.
= 0.9.25 =
- Fixed a UI bug.
- Optimized the plugin code.
= 0.9.24 =
- Fixed: CDN integration settings could not be saved correctly.
- Optimized the plugin code and UI.
= 0.9.23 =
- Added support for conversion of Elementor custom thumbnails size.
- Added support for conversion in media library grid view and image edit page.
= 0.9.22 =
- Fixed: Picture tag did not take all sizes in srcset.
- Fixed: Conversion would fail if image's MIME type did not match the MIME type saved in posts.
- Optimized the plugin UI.
= 0.9.21 =
- Added an option of 'Do not convert PNG to WebP'.
- Added an option to automatically purge cache after manual conversion from media library.
- Optimized the plugin UI.
- Canceled support for grid view of media library. Only list view is supported.
= 0.9.20 =
- Optimized process of scanning a large number of images.
- Successfully tested with WordPress 6.7.
= 0.9.19 =
- Optimized image scanning method in the bulk processing workflow.
= 0.9.18 =
- Fixed: Default compression level for bulk processing was wrongly set to lossless.
= 0.9.17 =
- Added an option of 'picture tag' to load WebP and AVIF images.
- Optimized the plugin UI.
- Optimized the plugin code.
= 0.9.16 =
- Fixed a UI bug that would appear when folders that do not exist were added to exclusion rules.
- Optimized the plugin code.
= 0.9.15 =
- Fixed some bugs in the plugin code.
- Optimized the plugin code.
= 0.9.14 =
- Added support for multilanguage translation.
- Added an option to exclude PNG images from conversion.
- Added an option to delete cache control settings from .htaccess file.
- Fixed: WebP images could not be displayed as AVIF after conversion.
- Optimized the plugin UI.
- Optimized the plugin code.
= 0.9.13 =
- Added support for Cloudflare CDN.
- Fixed: Settings of 'auto-resizing large images' could not take effect.
- Optimized the plugin code.
= 0.9.12 =
- Fixed a UI bug where WebP option could not be selected in some cases.
- Fixed: Images would be repeatedly processed when EXIF removal option was enabled.
- Optimized the plugin code.
= 0.9.11 =
- Added an option to delete converted images.
- Optimized the plugin UI.
- Fixed some bugs in the plugin code.
- Optimized the plugin code.
= 0.9.10 =
- Fixed: Image quality would not be changed after AVIF conversion with Imagick.
- Fixed: Incorrect compression quality with Imagick and Lossless compression level.
- Fixed: Custom compression level would not take effect.
- Optimized the plugin code.
= 0.9.9 =
- Added an option to set how many images to process per ajax request.
- Fixed some bugs in the plugin code.
- Optimized the plugin code.
= 0.9.8 =
- Added a Debug section.
- Fixed some bugs in the plugin code.
- Optimized the plugin code.
= 0.9.7 =
- Fixed the path error of rewrite rules that appeared in some environments.
- Fixed: Some settings could not take effect.
- Fixed some bugs in the plugin code.
- Optimized the plugin code.
= 0.9.6 =
- Fixed a bug where AVIF output format could not be enabled.
- Fixed some bugs in the plugin code.
- Optimized the plugin code.
= 0.9.5 =
- Fixed a bug in the plugin code.
- Optimized the plugin code.
= 0.9.4 =
- Fixed a critical bug in the plugin code.
- Optimized the plugin code.
= 0.9.3 =
- Fixed a critical bug in the plugin code.
- Optimized the plugin code.
= 0.9.2 =
- Added a check for the case where multiple image optimization plugins are activated.
- Fixed some bugs in the plugin code.
- Optimized the plugin code.
- Successfully tested with WordPress 6.6.
= 0.9.1 =
- Initial release. Hello world!

== Upgrade Notice ==
Latest version 0.9.28:
= 0.9.28 =
- Fixed: Incorrect image statistics calculation.
- Added support for image rotation during WebP/AVIF conversion.
- Fixed: Image resizing data could not be updated in the database.