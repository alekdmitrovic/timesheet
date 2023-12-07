const watch = require('node-watch');
const { webpack } = require('./javascript.js');
const { runSCSS } = require('./scss.js');

watch('scss', { recursive: true }, runSCSS);
watch('js', { recursive: true }, webpack);
