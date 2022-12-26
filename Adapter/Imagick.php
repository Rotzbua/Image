<?php

namespace Gregwar\Image\Adapter;

use Gregwar\Image\Image;
use RuntimeException;

class Imagick extends Common
{
    public function __construct()
    {
        throw new RuntimeException('Imagick is not supported right now');
    }
    
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'ImageMagick';
    }
    
    /**
     * {@inheritdoc}
     */
    public function width(): int
    {
        // TODO: Implement width() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function height(): int
    {
        // TODO: Implement height() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function saveGif($file)
    {
        // TODO: Implement saveGif() method.
    }

    /**
     * Save the image as a png.
     *
     * @return $this
     */
    public function savePng($file)
    {
        // TODO: Implement savePng() method.
    }

    /**
     * Save the image as a jpeg.
     *
     * @return $this
     */
    public function saveJpeg($file, $quality)
    {
        // TODO: Implement saveJpeg() method.
    }

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
    public function crop(int $x, int $y, int $width, int $height)
    {
        // TODO: Implement crop() method.
    }
    
    /**
     * {@inheritdoc}
     */
    public function fillBackground(int|string $background = 0xffffff)
    {
        // TODO: Implement fillBackground() method.
    }

    /**
     * Negates the image.
     *
     * @return $this
     */
    public function negate()
    {
        // TODO: Implement negate() method.
    }

    /**
     * Changes the brightness of the image.
     *
     * @param int $brightness the brightness
     *
     * @return $this
     */
    public function brightness(int $brightness)
    {
        // TODO: Implement brightness() method.
    }

    /**
     * Contrasts the image.
     *
     * @param int $contrast the contrast [-100, 100]
     *
     * @return $this
     */
    public function contrast(int $contrast)
    {
        // TODO: Implement contrast() method.
    }

    /**
     * Apply a grayscale level effect on the image.
     *
     * @return $this
     */
    public function grayscale()
    {
        // TODO: Implement grayscale() method.
    }

    /**
     * Emboss the image.
     *
     * @return $this
     */
    public function emboss()
    {
        // TODO: Implement emboss() method.
    }

    /**
     * Smooth the image.
     *
     * @param int $p value between [-10,10]
     *
     * @return $this
     */
    public function smooth(int $p)
    {
        // TODO: Implement smooth() method.
    }

    /**
     * Sharps the image.
     *
     * @return $this
     */
    public function sharp()
    {
        // TODO: Implement sharp() method.
    }

    /**
     * Edges the image.
     *
     * @return $this
     */
    public function edge()
    {
        // TODO: Implement edge() method.
    }

    /**
     * Colorize the image.
     *
     * @param int $red   value in range [-255, 255]
     * @param int $green value in range [-255, 255]
     * @param int $blue  value in range [-255, 255]
     *
     * @return $this
     */
    public function colorize(int $red, int $green, int $blue)
    {
        // TODO: Implement colorize() method.
    }

    /**
     * apply sepia to the image.
     *
     * @return $this
     */
    public function sepia()
    {
        // TODO: Implement sepia() method.
    }

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
    public function merge(Image $other, int $x = 0, int $y = 0, int $width = null, int $height = null)
    {
        // TODO: Implement merge() method.
    }

    /**
     * Rotate the image.
     *
     * @param float $angle
     * @param int   $background
     *
     * @return $this
     */
    public function rotate(float $angle, int $background = 0xffffff)
    {
        // TODO: Implement rotate() method.
    }

    /**
     * Fills the image.
     *
     * @param int $color
     * @param int $x
     * @param int $y
     *
     * @return $this
     */
    public function fill(int $color = 0xffffff, int $x = 0, int $y = 0)
    {
        // TODO: Implement fill() method.
    }

    /**
     * write text to the image.
     *
     * @param string $font
     * @param string $text
     * @param int    $x
     * @param int    $y
     * @param int    $size
     * @param int    $angle
     * @param int    $color
     * @param string $align
     */
    public function write(string $font, string $text, int $x = 0, int $y = 0, int $size = 12, int $angle = 0, int $color = 0x000000, string $align = 'left')
    {
        // TODO: Implement write() method.
    }

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
    public function rectangle(int $x1, int $y1, int $x2, int $y2, int $color, bool $filled = false)
    {
        // TODO: Implement rectangle() method.
    }

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
    public function roundedRectangle(int $x1, int $y1, int $x2, int $y2, int $radius, int $color, bool $filled = false)
    {
        // TODO: Implement roundedRectangle() method.
    }

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
    public function line(int $x1, int $y1, int $x2, int $y2, int|string $color = 0x000000)
    {
        // TODO: Implement line() method.
    }

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
    public function ellipse(int $cx, int $cy, int $width, int $height, int|string $color = 0x000000, bool $filled = false)
    {
        // TODO: Implement ellipse() method.
    }

    /**
     * Draws a circle.
     *
     * @param int  $cx
     * @param int  $cy
     * @param int  $r
     * @param int  $color
     * @param bool $filled
     *
     * @return $this
     */
    public function circle(int $cx, int $cy, int $r, int|string $color = 0x000000, bool $filled = false)
    {
        // TODO: Implement circle() method.
    }

    /**
     * Draws a polygon.
     *
     * @param array      $points
     * @param int|string $color
     * @param bool       $filled
     *
     * @return $this
     */
    public function polygon(array $points, int|string $color, bool $filled = false)
    {
        // TODO: Implement polygon() method.
    }

    /**
     *  {@inheritdoc}
     */
    public function flip(int $flipVertical, int $flipHorizontal)
    {
        // TODO: Implement flip method
    }

    /**
     * Opens the image.
     */
    protected function openGif($file)
    {
        // TODO: Implement openGif() method.
    }

    protected function openJpeg($file)
    {
        // TODO: Implement openJpeg() method.
    }

    protected function openPng($file)
    {
        // TODO: Implement openPng() method.
    }

    protected function openWebp($file)
    {
        // TODO: Implement openWebp() method.
    }

    /**
     * Creates an image.
     */
    protected function createImage($width, $height)
    {
        // TODO: Implement createImage() method.
    }

    /**
     * Creating an image using $data.
     */
    protected function createImageFromData($data)
    {
        // TODO: Implement createImageFromData() method.
    }

    /**
     * Resizes the image to an image having size of $target_width, $target_height, using
     * $new_width and $new_height and padding with $bg color.
     */
    protected function doResize($bg, int $target_width, int $target_height, int $new_width, int $new_height)
    {
        // TODO: Implement doResize() method.
    }

    /**
     * Gets the color of the $x, $y pixel.
     */
    protected function getColor($x, $y)
    {
        // TODO: Implement getColor() method.
    }
    /**
     * @inheritDoc
     */
    public function saveWebp(string $file, int $quality){
        // TODO: Implement saveWebp() method.
    }
}
