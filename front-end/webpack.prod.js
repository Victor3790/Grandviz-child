const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const {CleanWebpackPlugin} = require('clean-webpack-plugin')

module.exports = {
    mode: 'production',
    entry: { home: path.resolve(__dirname, './front-end/assetSrc/homeProd.js')},
    output: {
      path: path.resolve(__dirname, 'assets'),
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
        },
        {
          test: /\.(svg|png|jpg|gif)$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                outputPath: 'imgs',
                name: '[name].[ext]'
              }
            }
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
