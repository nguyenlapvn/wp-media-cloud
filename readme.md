=== WP Media Cloud ===
Contributors: lapn, nguyenlapvn
Tags: media, s3, digitalocean, cloudflare, idrive e2
Requires at least: 5.0
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Speed up your WordPress by Automatically Offload media files to Idrive E2, Cloudflare R2, DigitalOcean Spaces, etc.

== Description ==

WP Media Cloud automatically uploads media attachments from your WordPress site to an S3-compatible cloud storage, replacing the URLs appropriately to serve the media from the cloud. This can help reduce server load, increase page speed, and optimize media delivery.

== Features ==

- Automatic upload of new media attachments to S3-compatible cloud storage.
- Rewrites URLs for media files to serve them directly from cloud storage.
- Provides hooks for further extension.

== Installation ==

1. Upload the `wp-media-cloud` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Configure the plugin by going to the settings page and adding your S3-compatible cloud storage credentials into the wp-config.php file.

- For [Idrive E2](https://www.idrive.com/s3-storage-e2/guides/default), add the following to wp-config.php:
```
	define( 'WPMC_IDRIVEE2_KEY', 'your-access-key' );
	define( 'WPMC_IDRIVEE2_SECRET', 'your-secret-key' );
	define( 'WPMC_IDRIVEE2_ENDPOINT', 'your-endpoint-url' );
	define( 'WPMC_IDRIVEE2_BUCKET', ''your-bucket-name' );
	define( 'WPMC_IDRIVEE2_DOMAIN', 'your-domain-url' );
```

- For [Cloudflare R2](https://developers.cloudflare.com/r2/), add the following to wp-config.php:
```
	define('WPMC_CLOUDFLARE_R2_KEY', 'your-access-key');
	define('WPMC_CLOUDFLARE_R2_SECRET', 'your-secret-key');
	define('WPMC_CLOUDFLARE_R2_BUCKET', 'your-bucket-name');
    define('WPMC_CLOUDFLARE_R2_DOMAIN', 'your-domain-url');
    define('WPMC_CLOUDFLARE_R2_ENDPOINT', 'your-endpoint-url');
```

- For [DigitalOcean Spaces](https://www.digitalocean.com/products/spaces), add the following to wp-config.php:
```
	define('WPMC_DOS_KEY', 'your-access-key');
	define('WPMC_DOS_SECRET', 'your-secret-key');
	define('WPMC_DOS_BUCKET', 'your-bucket-name');
    define('WPMC_DOS_DOMAIN', 'your-domain-url');
    define('WPMC_DOS_ENDPOINT', 'your-endpoint-url');
```

== Frequently Asked Questions ==

= Does this plugin support other cloud storage platforms? =

Currently, the plugin supports only Idrive E2, Cloudflare R2 and DigitalOcean Spaces, but we are working on adding support for other cloud storage platforms such as Amazon S3, Min.io, and more.

= What happens to the media files already uploaded on my server? =

They will remain on your server, and they will be served from your server.

= How does the plugin handle media files that are already uploaded to my cloud storage? =

The plugin will automatically detect and rewrite URLs for these files, so they can be served from the cloud storage.

= What happens to media files uploading to my cloud storage? =

We won't delete media files after offloading them to the cloud storage. But we are working to add a feature so you can choose whether to delete or keep the media files on your server after offloading.

== Changelog ==

= 1.0.0 =
- Initial release.

== Using the S3 PHP SDK ==

The WP Media Cloud utilizes the AWS SDK for PHP to interact with S3-compatible cloud storage. This powerful SDK provides an easy-to-use API for managing your cloud storage operations, including file uploads, downloads, and more. The SDK is maintained by Amazon Web Services, ensuring high compatibility and performance with S3 services.

For more information about the AWS SDK for PHP, visit:
[https://aws.amazon.com/sdk-for-php/](https://aws.amazon.com/sdk-for-php/)
