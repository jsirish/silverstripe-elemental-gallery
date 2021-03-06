<?php

namespace Dynamic\Elements\Gallery\Tests;

use Dynamic\Elements\Gallery\Elements\ElementPhotoGallery;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

/**
 * Class ElementPhotoGallery.
 */
class ElementPhotoGalleryTest extends SapphireTest
{
    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = Injector::inst()->create(ElementPhotoGallery::class);
        $object->write();
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }

    /**
     *
     */
    public function testGetType()
    {
        $object = Injector::inst()->create(ElementPhotoGallery::class);
        $this->assertEquals($object->getType(), 'Photo Gallery');
    }
}
