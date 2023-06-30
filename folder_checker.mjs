// console.log("Hello world");


import child_process from 'child_process';
child_process.execSync('copy Readme.md CopiedReadme.md');

import process from 'process';
// process.exit();

let buffer = fs.readFileSync('Readme.md');
let text = buffer.toString();

console.log(text);

let myDir = process.cwd();  // Current Working Directory

console.log("Working from " + myDir);

let folderContents = fs.readdirSync('./');

for(let i=1; i <= folderContents.length; i++) {
  let file = folderContents[i-1];
  let isDir = fs.lstatSync(path.join(myDir, file)).isDirectory();

  console.log(`${isDir ? "Directory" : "File"} ${i}: ${file} - total path ${path.join(myDir, file)}`);
  if(path.extname(path.join(myDir, file)) == '.mjs') {
    console.log("Is this script!");
  }
}
