<?php

namespace Gregwar\Image\Adapter;

use Gregwar\Image\Image;
use Gregwar\Image\Source\Source;

/**
 * all the functions / methods to work on images.
 *
 * if changing anything please also add it to \Gregwar\Image\Image
 *
 * @author wodka <michael.schramm@gmail.com>
 */
interface AdapterInterface
{
    /**
     * set the image source for the adapter.
     *
     * @param Source $source
     *
     * @return $this
     */
    public function setSource(Source $source);

    /**
     * get the raw resource.
     *
     * @return resource
     */
    public function getResource();

    /**
     * Gets the name of the adapter.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Image width.
     *
     * @return int
     */
    public function width(): int;

    /**
     * Image height.
     *
     * @return int
     */
    public function height(): int;

    /**
     * Init the resource.
     *
     * @return $this
     */
    public function init();

    /**
     * Unload the resource.
     */
    public function deinit(): void;

    /**
     * Save the image as a gif.
     *
     * @return $this
     */
    public function saveGif(string $file);

    /**
     * Save the image as a png.
     *
     * @return $this
     */
    public function savePng(string $file);

    /**
     * Save the image as a Webp.
     *
     * @param int $quality quality ranges from 0 (the worst quality, smaller file) to 100 (the best quality, biggest file).
     *
     * @return $this
     */
    public function saveWebp(string $file, int $quality);

    /**
     * Save the image as a jpeg.
     *
     * @param int $quality quality ranges from 0 (the worst quality, smaller file) to 100 (the best quality, biggest file).
     *
     * @return $this
     */
    public function saveJpeg(string $file, int $quality);
    
    /**
     * Works as resize() excepts that the layout will be cropped.
     *
     * @param int|null   $width      the width
     * @param int|null   $height     the height
     * @param int|string $background the background
     *
     * @return $this
     */
    public function cropResize(int $width = null, int $height = null, int|string $background = 0xffffff);
    
    /**
     * Resize the image preserving scale. Can enlarge it.
     *
     * @param int|null   $width      the width
     * @param int|null   $height     the height
     * @param int|string $background the background
     * @param bool       $crop
     *
     * @return $this
     */
    public function scaleResize(int $width = null, int $height = null, int|string $background = 0xffffff, bool $crop = false);
    
    /**
     * Resizes the image. It will never be enlarged.
     *
     * @param int|string|null $width      the width
     * @param int|null        $height     the height
     * @param int|string      $background the background
     * @param bool            $force
     * @param bool            $rescale
     * @param bool            $crop
     *
     * @return $this
     */
    public function resize(int|string $width = null, int $height = null, int|string $background = 0xffffff, bool $force = false, bool $rescale = false, bool $crop = false);

    /**
     * Crops the image.
     *
     * @param int $x      the top-left x position of the crop box
     * @param int $y      the top-left y position of the crop box
     * @param int $width  the width of the crop box
     * @param int $height the height of the crop box
     *
     * @return $this
     */
    public function crop(int $x, int $y, int $width, int $height);

    /**
     * enable progressive image loading.
     *
     * @return $this
     */
    public function enableProgressive();
    
    /**
     * Resizes the image forcing the destination to have exactly the
     * given width and the height.
     *
     * @param int|null   $width      the width
     * @param int|null   $height     the height
     * @param int|string $background the background
     *
     * @return $this
     */
    public function forceResize(int $width = null, int $height = null, int|string $background = 0xffffff);

    /**
     * Perform a zoom crop of the image to desired width and height.
     *
     * @param int        $width  Desired width
     * @param int        $height Desired height
     * @param int|string $background
     *
     * @return $this
     */
    public function zoomCrop(int $width, int $height, int|string $background = 0xffffff);
    
    /**
     * Fills the image background to $bg if the image is transparent.
     *
     * @param int|string $background background color
     *
     * @return $this
     */
    public function fillBackground(int|string $background = 0xffffff);

    /**
     * Negates the image.
     *
     * @return $this
     */
    public function negate();

    /**
     * Changes the brightness of the image.
     *
     * @param int $brightness the brightness
     *
     * @return $this
     */
    public function brightness(int $brightness);

    /**
     * Contrasts the image.
     *
     * @param int $contrast the contrast [-100, 100]
     *
     * @return $this
     */
    public function contrast(int $contrast);

    /**
     * Apply a grayscale level effect on the image.
     *
     * @return $this
     */
    public function grayscale();

    /**
     * Emboss the image.
     *
     * @return $this
     */
    public function emboss();

    /**
     * Smooth the image.
     *
     * @param int $p value between [-10,10]
     *
     * @return $this
     */
    public function smooth(int $p);

    /**
     * Sharps the image.
     *
     * @return $this
     */
    public function sharp();

    /**
     * Edges the image.
     *
     * @return $this
     */
    public function edge();

    /**
     * Colorize the image.
     *
     * @param int $red   value in range [-255, 255]
     * @param int $green value in range [-255, 255]
     * @param int $blue  value in range [-255, 255]
     *
     * @return $this
     */
    public function colorize(int $red, int $green, int $blue);

    /**
     * apply sepia to the image.
     *
     * @return $this
     */
    public function sepia();

    /**
     * Merge with another image.
     *
     * @param Image    $other
     * @param int      $x
     * @param int      $y
     * @param int|null $width
     * @param int|null $height
     *
     * @return $this
     */
    public function merge(Image $other, int $x = 0, int $y = 0, int $width = null, int $height = null);
    
    /**
     * Rotate the image.
     *
     * @param float      $angle
     * @param int|string $background
     *
     * @return $this
     */
    public function rotate(float $angle, int|string $background = 0xffffff);

    /**
     * Fills the image.
     *
     * @param int|string $color
     * @param int $x
     * @param int $y
     *
     * @return $this
     */
    public function fill(int|string $color = 0xffffff, int $x = 0, int $y = 0);
    
    /**
     * write text to the image.
     *
     * @param string     $font
     * @param string     $text
     * @param int        $x
     * @param int        $y
     * @param int        $size
     * @param int        $angle
     * @param int|string $color
     * @param string     $align
     */
    public function write(string $font, string $text, int $x = 0, int $y = 0, int $size = 12, int $angle = 0, int|string $color = 0x000000, string $align = 'left');

    /**
     * Draws a rectangle.
     *
     * @param int  $x1
     * @param int  $y1
     * @param int  $x2
     * @param int  $y2
     * @param int  $color
     * @param bool $filled
     *
     * @return $this
     */
    public function rectangle(int $x1, int $y1, int $x2, int $y2, int $color, bool $filled = false);

    /**
     * Draws a rounded rectangle.
     *
     * @param int  $x1
     * @param int  $y1
     * @param int  $x2
     * @param int  $y2
     * @param int  $radius
     * @param int  $color
     * @param bool $filled
     *
     * @return $this
     */
    public function roundedRectangle(int $x1, int $y1, int $x2, int $y2, int $radius, int $color, bool $filled = false);

    /**
     * Draws a line.
     *
     * @param int        $x1
     * @param int        $y1
     * @param int        $x2
     * @param int        $y2
     * @param int|string $color
     *
     * @return $this
     */
    public function line(int $x1, int $y1, int $x2, int $y2, int|string $color = 0x000000);

    /**
     * Draws an ellipse.
     *
     * @param int        $cx
     * @param int        $cy
     * @param int        $width
     * @param int        $height
     * @param int|string $color
     * @param bool       $filled
     *
     * @return $this
     */
    public function ellipse(int $cx, int $cy, int $width, int $height, int|string $color = 0x000000, bool $filled = false);
    
    /**
     * Draws a circle.
     *
     * @param int        $cx
     * @param int        $cy
     * @param int        $r
     * @param int|string $color
     * @param bool       $filled
     *
     * @return $this
     */
    public function circle(int $cx, int $cy, int $r, int|string $color = 0x000000, bool $filled = false);

    /**
     * Draws a polygon.
     *
     * @param array      $points
     * @param int|string $color
     * @param bool       $filled
     *
     * @return $this
     */
    public function polygon(array $points, int|string $color, bool $filled = false);

    /**
     * Flips the image.
     *
     * @param int $flipVertical
     * @param int $flipHorizontal
     *
     * @return $this
     */
    public function flip(int $flipVertical, int $flipHorizontal);
}
