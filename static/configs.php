<?php

return (object) array(
	// First some settings for the site
	'siteUrl' => 'https://christopheducamp.com/',			// the URL for your site - note trailing slash
	'timezone' => 'Europe/London',					// http://php.net/manual/en/timezones.php
	'mediaPoint' => 'https://media.org/endpoint',	// Micropub Media Endpoint
	
	// Config Block for Twitter
	'twitterName' => 'xtof_party',					// your twitter account name, don't use the @
	'twAPIkey' => ' SYqubeN6v2vNBEzxD5BHiWG0R',		// Create an app on dev.twitter.com for your account.
	'twAPIsecret' => 'E5lMDi16bjWJKSmRPWViQOdi7S61w8R0ropJY3t7Dkfuu12HgO',	// APIkey & APIsecret are the APP's key & Secret
	'twUserKey' => '415643-ghhSxaYHlwahFkFUyCmHVtlQDVVbWe3Urp8AFHzovrO',					// UserKey & User Secret are under 'Your access token'
	'twUserSecret' => 'hP9vjVJXWI8D6Df2QySYthvVi4CTGynjcYrrlQJVZiouh',					// Generate those on dev.twitter.com

	// Config Block for Mastodon
	'mastodonInstance' => 'soc.ialis.me',			// your Mastodon Instance
	'mastodonToken' => '74af61c763846c8cd2a317d155ad3e4a95e6c76e40c6c0c013d50e030bf8968e',				// get an auth code using Mastodon docs

	// Config for micro.blog
	'pingMicro' => True, 							// Set to False (boolean) if you don't use micro.blog
	'siteFeed' => 'https://xtof.micro.blog/feed.xml',	// Set to your site's RSS/Atom Feed to notify micro.blog

	// Config for Weather. If you do want weather feature, set to true 
    'weatherToggle' => false,
	'compass' => 'https://private.tracker.com/api',
	'compassKey' => 'PrivateAPIkey',
	'forecastKey' => 'DarkSkyApiKey',
	'defaultLat' => '51.5074',
	'defaultLong' => '0.1278',
	'defaultLoc' => 'London',

	// Set Frontmatter Format -- json or yaml
	'frontFormat' => 'json'
);

?>