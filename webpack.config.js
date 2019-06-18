const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const WebpackMd5Hash = require('webpack-md5-hash');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const CompressionPlugin = require('compression-webpack-plugin');
const autoprefixer = require('autoprefixer');
const webpack = require('webpack');


module.exports = (env, argv) => ({
    entry: {
        main: './src/main.js'
    },
    devtool: argv.mode === 'production' ? false : 'source-map',
    output: {
        path: path.resolve(__dirname + '/dist'),
        filename: '[name].js'
    },
    watch: argv.mode !== 'production',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            },
            {
                test: /\.scss$/,
                use: [
                    'style-loader',
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'postcss-loader',
                        options: {
                            plugins: [
                                autoprefixer({
                                    browsers:['ie >= 8', 'last 10 version']
                                })
                            ],
                            sourceMap: true
                        }
                    },
                    'sass-loader'
                ]
            },
            {
                test: /\.css$/,
                use: [
                    'style-loader',
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'postcss-loader',
                        options: {
                            plugins: [
                                autoprefixer({
                                    browsers:['ie >= 8', 'last 10 version']
                                })
                            ],
                            sourceMap: true
                        }
                    }
                ]
            }
        ]
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            Swal: 'sweetalert2',
            Pristine: 'pristinejs',
            SimpleBar: 'simplebar'
        }),
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: 'main.css',
        }),
        new WebpackMd5Hash(),
        new CopyWebpackPlugin([
            // {
            //     from: './src/assets',
            //     to: './assets'
            // },
            // {
            //     from: 'manifest.json',
            //     to: 'manifest.json'
            // }
        ]),
        new CompressionPlugin({
            algorithm: 'gzip'
        })
    ],
    devServer: {
        proxy: {
            '/': {
                target: {
                    host: "admin-panel.lc",
                    protocol: "http:",
                    port: 80
                },
                changeOrigin: true,
                secure: false
            }
        },
        contentBase: path.join(__dirname, 'dist'),
        watchContentBase: true,
        compress: true,
        open: true,
        writeToDisk: true
    }
});
