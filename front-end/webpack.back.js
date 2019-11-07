const path = require('path')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

module.exports = {
    plugins: [
      new BrowserSyncPlugin({
        host:'localhost',
        proxy: 'http://localhost/wordpressViaje/',
        port: 3000,
        files: [
          './*.php',
          './template-parts/*.php'
        ]
      },
      {
        reload:false,
        injectChanges: true
      })
    ]
};
