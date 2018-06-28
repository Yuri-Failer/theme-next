const path = require('path'),
UglifyJsPlugin = require('uglifyjs-webpack-plugin'),
settings = require('./settings');

module.exports = {
  entry: {
    App: settings.themeLocation + "assets/js/scripts.js"
  },
  output: {
    path: path.resolve(__dirname, settings.themeLocation + "assets/js"),
    filename: "scripts-bundled.js"
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use:  {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  },
  plugins: [
    new UglifyJsPlugin()
  ]
}
