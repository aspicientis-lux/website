#! /bin/bash
SCRIPT_PATH="$(dirname $(readlink -f "${BASH_SOURCE}"))"
SRC_PATH = "$SCRIPT_PATH/src"
BUILD_PATH = "$SCRIPT_PATH/build"

# clean the current build
rm -rf build
mkdir build
mkdir build/pages

# copy all the images and assets
cp -R "$SRC_PATH/images" "$BUILD_PATH/images"
cp -R "$SRC_PATH/assets" "$BUILD_PATH/assets"

# generate all pages
cd "$SRC_PATH"
php index.php > "$BUILD_PATH/index.html"
php 404.php > "$BUILD_PATH/404.html"

cd "$SRC_PATH/pages"
php birds.php > "$BUILD_PATH/pages/birds.html"
