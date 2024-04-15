#! /bin/bash
SCRIPT_PATH="$(dirname $(readlink -f "${BASH_SOURCE}"))"
SRC_PATH="$SCRIPT_PATH/src"
BUILD_PATH="$SCRIPT_PATH/build"

# clean the current build
rm -rf build
mkdir build
mkdir build/pages
mkdir build/pages/birds

# copy all the images and assets
cp -R "$SRC_PATH/images" "$BUILD_PATH/images"
cp -R "$SRC_PATH/assets" "$BUILD_PATH/assets"

# generate all pages
cd "$SRC_PATH"
php index.php > "$BUILD_PATH/index.html"
php 404.php > "$BUILD_PATH/404.html"

cd "$SRC_PATH/pages"
php birds.php > "$BUILD_PATH/pages/birds.html"

cd "$SRC_PATH/pages/birds"
php anas-platyrhynchos.php > "$BUILD_PATH/pages/birds/anas-platyrhynchos.html"
php cygnus-olor.php > "$BUILD_PATH/pages/birds/cygnus-olor.html"
php anser-anser.php > "$BUILD_PATH/pages/birds/anser-anser.html"
php garrulus-glandarius.php > "$BUILD_PATH/pages/birds/garrulus-glandarius.html"
php erithacus-rubecula.php > "$BUILD_PATH/pages/birds/erithacus-rubecula.html"
php platalea-leucorodia.php > "$BUILD_PATH/pages/birds/platalea-leucorodia.html"
php columba-livia-domestica.php > "$BUILD_PATH/pages/birds/columba-livia-domestica..html"
php podiceps-cristatus.php > "$BUILD_PATH/pages/birds/podiceps-cristatus.html"
php fulica-atra.php > "$BUILD_PATH/pages/birds/fulica-atra.html"
php cyanistes-caeruleus.php > "$BUILD_PATH/pages/birds/cyanistes-caeruleus.html"
php gallinago-gallinago.php > "$BUILD_PATH/pages/birds/gallinago-gallinago.html"
php turdus-philomelos.php > "$BUILD_PATH/pages/birds/turdus-philomelos.html"