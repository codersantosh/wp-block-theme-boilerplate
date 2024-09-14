/* For internal use only */
const fs = require('fs');
const path = require('path');

// Define the folder where the files are located
const source = path.join(process.cwd(), 'patterns');

// Function to remove 'og-' prefix from file names
fs.readdir(source, (err, files) => {
    if (err) {
        return console.error('Unable to scan directory:', err);
    }

    files.forEach((file) => {
        if (file.startsWith('og-')) {
            const oldPath = path.join(source, file);
            const newPath = path.join(source, file.replace(/^og-/, ''));

            fs.rename(oldPath, newPath, (err) => {
                if (err) {
                    console.error(`Error renaming file ${file}:`, err);
                } else {
                    console.log(`Renamed: ${file} -> ${path.basename(newPath)}`);
                }
            });
        }
    });
});
