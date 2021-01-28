<?php
/**
 * This file is part of the Cloudinary PHP package.
 *
 * (c) Cloudinary
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cloudinary\Test\Unit\Transformation\Image;

use Cloudinary\Transformation\RoundCorners;
use PHPUnit\Framework\TestCase;

/**
 * Class ImageRoundCornersTest
 */
final class ImageRoundCornersTest extends TestCase
{
    public function testImageRoundCorners()
    {
        $this->assertEquals(
            'r_max',
            (string)RoundCorners::max()
        );

        $this->assertEquals(
            'r_17',
            (string)RoundCorners::radius(17)
        );
    }
}
