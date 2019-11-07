const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const {CleanWebpackPlugin} = require('clean-webpack-plugin')

module.exports = {
    mode: 'production',
    entry: path.resolve(__dirname,'academiaProd.js'),
    output: {
      path: path.resolve(__dirname, 'assetsProduction'),
      filename: 'js/[name].js'
    },
    module: {
      rules: [
        {
          test: /\.scss$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
            },
            'css-loader', 'postcss-loader', 'sass-loader'
          ]
        }
      ]
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: 'css/[name].css'
      }),
      new CleanWebpackPlugin()
    ]
};
