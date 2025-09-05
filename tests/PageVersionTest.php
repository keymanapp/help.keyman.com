<?php declare(strict_types=1);

namespace Keyman\Site\com\keyman\help\tests;

require __DIR__ . "/../_includes/includes/page-version.php";
require __DIR__ . "/../_includes/includes/page-version-file-mappings.php";

use PageVersion;
use PHPUnit\Framework\TestCase;

final class PageVersionTest extends TestCase
{
  private string $tempDir;

  protected function setUp(): void
  {
    parent::setUp();
    $this->tempDir = sys_get_temp_dir() . '/page_version_tests';
    mkdir($this->tempDir);
  }

  protected function tearDown(): void
  {
    $this->rrmdir($this->tempDir);
    parent::tearDown();
  }

  private function rrmdir($dir): void
  {
    // https://stackoverflow.com/a/3338133
    if (is_dir($dir)) {
      $objects = scandir($dir);
      foreach ($objects as $object) {
        if ($object != "." && $object != "..") {
          if (is_dir("{$dir}/{$object}") &&
              !is_link("{$dir}/{$object}"))
            $this->rrmdir("{$dir}/{$object}");
          else
            unlink("{$dir}/{$object}");
        }
      }
      rmdir($dir);
    }
  }

  public function testGetVersionedFilePath_NonExistingFile(): void
  {
    $dir = "{$this->tempDir}/subdir";
    mkdir("{$dir}/current-version", 0777, true);
    $path = PageVersion::GetVersionedFilePath($dir, 'missing', 'current-version', 'current-version');
    $this->assertNull($path);
  }

  public function testGetVersionedFilePath_Basic(): void
  {
    $dir = "{$this->tempDir}/subdir";
    mkdir("{$dir}/current-version", 0777, true);
    touch("{$dir}/current-version/whatsnew.php");
    $path = PageVersion::GetVersionedFilePath($dir, 'whats-new', 'current-version', 'current-version');
    $this->assertEquals("{$dir}/current-version/whatsnew", $path);

    $path = PageVersion::GetVersionedFilePath($dir, 'whatsnew', 'current-version', 'current-version');
    $this->assertEquals("{$dir}/current-version/whatsnew", $path);
  }

  public function testGetVersionedFilePath_BasicReverse(): void
  {
    $dir = "{$this->tempDir}/subdir";
    mkdir("{$dir}/current-version", 0777, true);
    touch("{$dir}/current-version/whats-new.md");
    $path = PageVersion::GetVersionedFilePath($dir, 'whats-new', 'current-version', 'current-version');
    $this->assertEquals("{$dir}/current-version/whats-new", $path);

    $path = PageVersion::GetVersionedFilePath($dir, 'whatsnew', 'current-version', 'current-version');
    $this->assertEquals("{$dir}/current-version/whats-new", $path);
  }

  public function testGetVersionedFilePath_DifferentVersion(): void
  {
    $dir = "{$this->tempDir}/subdir";
    mkdir("{$dir}/19.0", 0777, true);
    touch("{$dir}/19.0/whatsnew.php");
    $path = PageVersion::GetVersionedFilePath($dir, 'whats-new', '19.0', 'current-version');
    $this->assertEquals("{$dir}/19.0/whatsnew", $path);
  }

}
