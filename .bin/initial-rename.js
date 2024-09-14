const replace = require('replace-in-file');
const glob = require('glob');
const path = require('path');
const fs = require('fs');
const { promisify } = require('util');
const renameAsync = promisify(fs.rename);

const filePath = path.join(process.cwd(), '**/*.{js,php,json,scss,css,html}');

const files = glob.sync(filePath, {
	ignore: ['**/node_modules/**'],
});

const options = {
	files: files,
	from: [
		/wp-block-theme-boilerplate/g,
		/wp_block_theme_boilerplate/g,
		/WP_BLOCK_THEME_BOILERPLATE/g,
		/WP-BLOCK-THEME-BOILERPLATE/g,
		/Wp-Block-Theme-Boilerplate/g,
		/Wp_Block_Theme_Boilerplate/g,
		/WpBlockThemeBoilerplate/g,
		/WP Bock Theme Boilerplate/g,
		/companydomain-wbtb/g,
	],
	to: [
		'your-renamed-theme' /******************** replace with your theme details */,
		'your_renamed_theme',
		'YOUR_RENAMED_THEME',
		'YOUR-RENAMED-THEME',
		'Your-Renamed-Theme',
		'Your_Renamed_Theme',
		'YourRenamedTheme',
		'Your Renamed Theme',
		'companyname-your-renamed-theme', //can use brandname as prefix
	],
	verbose: true,
	dry: false,
};

const renamedResults = [];
async function renamePHPFiles() {
	const renamePromises = files
		.filter((file) => file.endsWith('.php') || file.endsWith('.pot'))
		.filter((file) => /wp-block-theme-boilerplate/.test(file))
		.map(async (file) => {
			const dir = path.dirname(file);
			const baseName = path.basename(file);
			const newBaseName = baseName.replace(
				/wp-block-theme-boilerplate/gi,
				'your-renamed-theme' /******************** replace with your theme details */
			);
			const newFileName = path.join(dir, newBaseName);

			try {
				const baseNameOriginalFile = path.basename(file);
				const baseNameNewFile = path.basename(newFileName);
				if (baseNameOriginalFile !== baseNameNewFile) {
					await renameAsync(file, newFileName);
					renamedResults.push({
						from: file,
						to: newFileName,
					});
				}
			} catch (error) {
				console.error(`Error renaming ${file}:`, error);
			}
		});

	await Promise.all(renamePromises);
}

async function main() {
	try {
		const results = await replace(options);
		console.log('Replacement results:', results);
		await renamePHPFiles();
		console.log('');
		console.log('File renamed results:', renamedResults);
	} catch (error) {
		console.error('Error occurred:', error);
	}
}

main();
