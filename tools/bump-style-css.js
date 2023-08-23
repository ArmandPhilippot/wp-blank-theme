/**
 * bump-style-css.js
 *
 * Copy package.json version into style.css file.
 */
const fs = require( 'fs' );

// Load package.json data.
const packageJson = JSON.parse( fs.readFileSync( './package.json' ) );
const packageVersion = packageJson.version;

module.exports = {
	files: 'style.css',
	from: new RegExp(
		'Version: (0|[1-9]\\d*)\\.(0|[1-9]\\d*)\\.(0|[1-9]\\d*)(?:-((?:0|[1-9]\\d*|\\d*[a-zA-Z-][0-9a-zA-Z-]*)(?:\\.(?:0|[1-9]\\d*|\\d*[a-zA-Z-][0-9a-zA-Z-]*))*))?(?:\\+([0-9a-zA-Z-]+(?:\\.[0-9a-zA-Z-]+)*))?',
		'g'
	),
	to: 'Version: ' + packageVersion,
};
