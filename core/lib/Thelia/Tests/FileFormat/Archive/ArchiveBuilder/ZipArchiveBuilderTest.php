<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Thelia\Tests\FileFormat\Archive\ArchiveBuilder;
use Symfony\Component\DependencyInjection\Container;
use Thelia\Core\FileFormat\Archive\ArchiveBuilder\ZipArchiveBuilder;
use Thelia\Core\Translation\Translator;
use Thelia\Log\Tlog;
use Thelia\Tests\Tools\FakeFileDownloader;

/**
 * Class ZipArchiveBuilderTest
 * @package Thelia\Tests\FileFormat\Archive\ArchiveBuilder
 * @author Benjamin Perche <bperche@openstudio.fr>
 */
class ZipArchiveBuilderTest extends \PHPUnit_Framework_TestCase
{
    /** @var  ZipArchiveBuilder */
    protected $zip;

    /** @var  ZipArchiveBuilder */
    protected $loadedZip;

    public function setUp()
    {
        new Translator(
            new Container()
        );

        Tlog::getNewInstance();

        $this->zip = new ZipArchiveBuilder();

<<<<<<< HEAD
        $this->zip->setEnvironment("dev");

        $this->loadedZip = $this->zip->loadArchive(
            __DIR__ . DS . "TestResources/well_formatted.zip"
=======
        $this->loadedZip = $this->zip->loadArchive(
            __DIR__ . DS . "TestResources/well_formatted.zip",
            "dev"
>>>>>>> Define archive builders and formatters
        );
    }

    /**
     * This method formats a path to be compatible with \ZipArchive
<<<<<<< HEAD
     */
    public function testFormatFilePath()
    {
        $this->assertEquals(
            "foo",
            $this->zip->formatFilePath("foo")
=======
     *
     *
     */
    public function testGetFilePath()
    {
        $this->assertEquals(
            "foo",
            $this->zip->getFilePath("foo")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "foo",
<<<<<<< HEAD
            $this->zip->formatFilePath("/foo")
=======
            $this->zip->getFilePath("/foo")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "foo",
<<<<<<< HEAD
            $this->zip->formatFilePath("foo/")
=======
            $this->zip->getFilePath("foo/")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "foo",
<<<<<<< HEAD
            $this->zip->formatFilePath("/foo/")
=======
            $this->zip->getFilePath("/foo/")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar",
<<<<<<< HEAD
            $this->zip->formatFilePath("foo/bar")
=======
            $this->zip->getFilePath("foo/bar")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar",
<<<<<<< HEAD
            $this->zip->formatFilePath("/foo/bar")
=======
            $this->zip->getFilePath("/foo/bar")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar",
<<<<<<< HEAD
            $this->zip->formatFilePath("/foo//bar/")
=======
            $this->zip->getFilePath("/foo//bar/")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar",
<<<<<<< HEAD
            $this->zip->formatFilePath("/foo/bar/")
=======
            $this->zip->getFilePath("/foo/bar/")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar/baz",
<<<<<<< HEAD
            $this->zip->formatFilePath("foo/bar/baz")
=======
            $this->zip->getFilePath("foo/bar/baz")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar/baz",
<<<<<<< HEAD
            $this->zip->formatFilePath("//foo/bar///baz/")
        );
    }

    public function testFormatDirectoryPath()
    {
        $this->assertEquals(
            "/foo/",
            $this->zip->formatDirectoryPath("foo")
=======
            $this->zip->getFilePath("//foo/bar///baz/")
        );
    }

    public function testGetDirectoryPath()
    {
        $this->assertEquals(
            "/foo/",
            $this->zip->getDirectoryPath("foo")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("/foo")
=======
            $this->zip->getDirectoryPath("/foo")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("foo/")
=======
            $this->zip->getDirectoryPath("foo/")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("/foo/")
=======
            $this->zip->getDirectoryPath("/foo/")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("foo/bar")
=======
            $this->zip->getDirectoryPath("foo/bar")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("/foo/bar")
=======
            $this->zip->getDirectoryPath("/foo/bar")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("/foo//bar/")
=======
            $this->zip->getDirectoryPath("/foo//bar/")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("/foo/bar/")
=======
            $this->zip->getDirectoryPath("/foo/bar/")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar/baz/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("foo/bar/baz")
=======
            $this->zip->getDirectoryPath("foo/bar/baz")
>>>>>>> Define archive builders and formatters
        );

        $this->assertEquals(
            "/foo/bar/baz/",
<<<<<<< HEAD
            $this->zip->formatDirectoryPath("//foo/bar///baz/")
=======
            $this->zip->getDirectoryPath("//foo/bar///baz/")
>>>>>>> Define archive builders and formatters
        );
    }

    public function testLoadValidZip()
    {
        $loadedZip = $this->zip->loadArchive(
<<<<<<< HEAD
            __DIR__ . DS . "TestResources/well_formatted.zip"
=======
            __DIR__ . DS . "TestResources/well_formatted.zip",
            "dev"
>>>>>>> Define archive builders and formatters
        );

        $this->assertInstanceOf(
            get_class($this->loadedZip),
            $loadedZip
        );
    }

    /**
<<<<<<< HEAD
     * @expectedException \Thelia\Core\FileFormat\Archive\ArchiveBuilder\Exception\ZipArchiveException
=======
     * @expectedException \Thelia\Core\FileFormat\Archive\ArchiveBuilder\ZipArchiveException
>>>>>>> Define archive builders and formatters
     * @expectedExceptionMessage [Zip Error] The file is not a zip archive
     */
    public function testLoadNotValidZip()
    {
        $this->zip->loadArchive(
<<<<<<< HEAD
            __DIR__ . DS . "TestResources/bad_formatted.zip"
=======
            __DIR__ . DS . "TestResources/bad_formatted.zip",
            "dev"
>>>>>>> Define archive builders and formatters
        );
    }

    /**
     * @expectedException \Thelia\Exception\FileNotFoundException
     */
    public function testLoadNotExistingFile()
    {
        $this->zip->loadArchive(
<<<<<<< HEAD
            __DIR__ . DS . "TestResources/this_file_doesn_t_exist.zip"
=======
            __DIR__ . DS . "TestResources/this_file_doesn_t_exist.zip",
            "dev"
>>>>>>> Define archive builders and formatters
        );
    }

    public function testLoadOnlineAvailableAndValidFile()
    {
<<<<<<< HEAD
        $this->zip->setFileDownloader(FakeFileDownloader::getInstance());

        $this->zip->loadArchive(
            __DIR__ . DS . "TestResources/well_formatted.zip",
            true
=======
        $this->zip->loadArchive(
            __DIR__ . DS . "TestResources/well_formatted.zip",
            "dev",
            true,
            FakeFileDownloader::getInstance()
>>>>>>> Define archive builders and formatters
        );
    }

    /**
<<<<<<< HEAD
     * @expectedException \Thelia\Core\FileFormat\Archive\ArchiveBuilder\Exception\ZipArchiveException
=======
     * @expectedException \Thelia\Core\FileFormat\Archive\ArchiveBuilder\ZipArchiveException
>>>>>>> Define archive builders and formatters
     * @expectedExceptionMessage [Zip Error] The file is not a zip archive
     */
    public function testLoadOnlineAvailableAndNotValidFile()
    {
<<<<<<< HEAD
        $this->zip->setFileDownloader(FakeFileDownloader::getInstance());

        $this->zip->loadArchive(
            __DIR__ . DS . "TestResources/bad_formatted.zip",
            true
=======
        $this->zip->loadArchive(
            __DIR__ . DS . "TestResources/bad_formatted.zip",
            "dev",
            true,
            FakeFileDownloader::getInstance()
>>>>>>> Define archive builders and formatters
        );
    }

    /**
     * @expectedException \Thelia\Exception\FileNotFoundException
     */
    public function testLoadOnlineNotExistingFile()
    {
<<<<<<< HEAD
        $this->zip->setFileDownloader(FakeFileDownloader::getInstance());

        $this->zip->loadArchive(
            __DIR__ . DS . "TestResources/this_file_doesn_t_exist.zip",
            true
=======
        $this->zip->loadArchive(
            __DIR__ . DS . "TestResources/this_file_doesn_t_exist.zip",
            "dev",
            true,
            FakeFileDownloader::getInstance()
>>>>>>> Define archive builders and formatters
        );
    }

    public function testHasFile()
    {
        $this->assertTrue(
            $this->loadedZip->hasFile("LICENSE.txt")
        );

        $this->assertFalse(
            $this->loadedZip->hasFile("foo")
        );

        $this->assertFalse(
            $this->loadedZip->hasFile("LICENSE.TXT")
        );
    }

    public function testDeleteFile()
    {
        $this->assertInstanceOf(
            get_class($this->loadedZip),
            $this->loadedZip->deleteFile("LICENSE.txt")
        );
    }

    /**
     * @expectedException \Thelia\Exception\FileNotFoundException
     */
    public function testDeleteNotExistingFile()
    {
        $this->loadedZip->deleteFile("foo");
    }

    public function testAddExistingFile()
    {
        $this->assertInstanceOf(
            get_class($this->loadedZip),
            $this->loadedZip->addFile(
                __DIR__ . DS . "TestResources/test_file",
                "/f/f/"
            )
        );

        /**
         * Show that even weird paths are correctly interpreted
         */
        $this->assertTrue(
            $this->loadedZip->hasFile("///f//f/test_file/")
        );
    }

    public function testAddExistingFileInNewDirectory()
    {
        $this->assertInstanceOf(
            get_class($this->loadedZip),
            $this->loadedZip->addFile(
                __DIR__ . DS . "TestResources/test_file",
                "testDir"
            )
        );

        /**
         * You can create and check the directory and files
         * without giving the initial and final slashes
         */
        $this->assertTrue(
            $this->loadedZip->hasDirectory("testDir")
        );

        $this->assertTrue(
            $this->loadedZip->hasDirectory("/testDir")
        );

        $this->assertTrue(
            $this->loadedZip->hasDirectory("testDir/")
        );

        $this->assertTrue(
            $this->loadedZip->hasDirectory("/testDir/")
        );

        $this->assertTrue(
            $this->loadedZip->hasFile("testDir/test_file")
        );

        $this->assertTrue(
            $this->loadedZip->hasFile("/testDir/test_file")
        );

        $this->assertTrue(
            $this->loadedZip->hasFile("testDir/test_file/")
        );

        $this->assertTrue(
            $this->loadedZip->hasFile("/testDir/test_file/")
        );
    }

    public function testBuildArchiveResponse()
    {
        $loadedArchiveResponse = $this->loadedZip
<<<<<<< HEAD
            ->buildArchiveResponse("test")
=======
            ->buildArchiveResponse()
>>>>>>> Define archive builders and formatters
        ;

        $loadedArchiveResponseContent = $loadedArchiveResponse->getContent();

        $content = file_get_contents(__DIR__ . DS . "TestResources/well_formatted.zip");

        $this->assertEquals(
            $content,
            $loadedArchiveResponseContent
        );
    }
<<<<<<< HEAD

    public function testAddValidFileFromString()
    {
        $this->loadedZip->addFileFromString(
            "foo", "bar"
        );

        $this->assertTrue(
            $this->loadedZip->hasFile("bar")
        );

        $this->assertEquals(
            "foo",
            $this->loadedZip->getFileContent("bar")
        );

        $this->loadedZip->addFileFromString(
            "foo", "bar", "baz"
        );

        $this->assertTrue(
            $this->loadedZip->hasFile("baz/bar")
        );

        $this->assertEquals(
            "foo",
            $this->loadedZip->getFileContent("baz/bar")
        );
    }

    /**
     * @expectedException \Thelia\Exception\FileNotFoundException
     */
    public function testGetFileContentFileNotFound()
    {
        $this->loadedZip->getFileContent("bar");
    }

    /**
     * @expectedException \ErrorException
     */
    public function testAddNotValidFileFromString()
    {
        $this->loadedZip->addFileFromString(
            "foo", $this
        );
    }

    /**
     * @expectedException \ErrorException
     */
    public function testAddNotValidFileValueFromString()
    {
        $this->loadedZip->addFileFromString(
            $this, "bar"
        );
    }

}
=======
} 
>>>>>>> Define archive builders and formatters
