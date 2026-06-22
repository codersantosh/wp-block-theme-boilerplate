const fs = require("fs");
const path = require("path");
const { ZipArchive } = require("archiver");

const ROOT = path.resolve(__dirname, "..");
const PKG = JSON.parse(
	fs.readFileSync(path.join(ROOT, "package.json"), "utf8")
);
const NAME = PKG.name;
const VERSION = PKG.version;
const DEPLOY_DIR = path.join(ROOT, "deploy");
const FOLDER = path.join(DEPLOY_DIR, NAME);
const ZIP_NAME = `${NAME}-${VERSION}.zip`;
const ZIP_PATH = path.join(DEPLOY_DIR, ZIP_NAME);

const PRODUCTION_FILES = [
	"style.css",
	"theme.json",
	"functions.php",
	"index.php",
	"screenshot.png",
	"readme.txt",
	"includes",
	"admin",
	"public",
	"assets",
	"patterns",
	"parts",
	"templates",
	"styles",
	"build",
	"languages",
];

function copyRecursive(src, dest) {
	const stat = fs.statSync(src);
	if (stat.isDirectory()) {
		fs.mkdirSync(dest, { recursive: true });
		for (const entry of fs.readdirSync(src)) {
			copyRecursive(path.join(src, entry), path.join(dest, entry));
		}
	} else {
		fs.mkdirSync(path.dirname(dest), { recursive: true });
		fs.copyFileSync(src, dest);
	}
}

console.log(`\nPreparing production release: ${NAME} v${VERSION}\n`);

if (fs.existsSync(DEPLOY_DIR)) {
	fs.rmSync(DEPLOY_DIR, { recursive: true, force: true });
}
fs.mkdirSync(FOLDER, { recursive: true });

let copied = 0;
let skipped = 0;
for (const file of PRODUCTION_FILES) {
	const srcPath = path.join(ROOT, file);
	const destPath = path.join(FOLDER, file);
	if (fs.existsSync(srcPath)) {
		copyRecursive(srcPath, destPath);
		console.log(`  ✓ ${file}`);
		copied++;
	} else {
		console.warn(`  ⚠ ${file} not found — skipping`);
		skipped++;
	}
}

console.log(
	`\nFiles assembled in deploy/${NAME}/ (${copied} copied, ${skipped} skipped)`
);

console.log(`\nCreating ZIP: ${ZIP_NAME}`);
const output = fs.createWriteStream(ZIP_PATH);
const archive = new ZipArchive({ zlib: { level: 9 } });

output.on("close", () => {
	const sizeKb = (archive.pointer() / 1024).toFixed(1);
	console.log(`\n✓ ZIP created: deploy/${ZIP_NAME} (${sizeKb} KB)`);
	console.log(`\nDeploy complete.\n  - Folder: deploy/${NAME}/`);
	console.log(`  - ZIP:    deploy/${ZIP_NAME}\n`);
});

archive.on("warning", (err) => {
	if (err.code === "ENOENT") {
		console.warn("Archive warning:", err);
	} else {
		throw err;
	}
});
archive.on("error", (err) => {
	throw err;
});

archive.pipe(output);
archive.directory(FOLDER, NAME);
archive.finalize();
