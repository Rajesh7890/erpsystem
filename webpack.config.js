const path = require('path');
const webpack = require('webpack');

module.exports = {
  mode: 'development',

  entry: {
    erp:                './src/index.jsx',
    quick_action_items: './src/partials/quick_action_items.jsx',
    sidebar:            './src/partials/sidebar.jsx',
    erp_css:            './css/erp.scss',
  },

  output: {
    path:     path.resolve(__dirname, 'dist', 'js'),
    filename: '[name].js',
  },

  resolve: {
    // extensions that require will resolve.
    extensions: ['.js', '.jsx', 'ts', 'tsx'],
    // directories to search in for files to resolve.
    modules:    ['node_modules'],
    alias:      {}
  },

  plugins: [
    new webpack.DefinePlugin({
      __DEV__: true,
      __dirname
    })
  ],

  module: {
    rules: [
      {
        test:    /\.m?[j|t]sx?$/,
        exclude: /node_modules/,
        use:     {
          loader:  'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
      {
        test: /\.css$/,
        use:  [
          // Creates `style` nodes from JS strings
          'style-loader',
          // Translates CSS into CommonJS
          'css-loader',
        ],
      },

      {
        test: /\.s[ac]ss$/i,
        use:  [
          {
            loader:  'file-loader',
            options: {
              name: '../css/[name].css'
            }
          },
          'extract-loader',
          {
            loader:  'css-loader',
            options: {
              sourceMap: true
            }
          },
          {
            loader:  'postcss-loader',
            options: {
              postcssOptions: {
                plugins: ['autoprefixer'],
              }
            },
          },
          // Compiles Sass to CSS
          'sass-loader',
        ],
      },
    ],
  },
};
