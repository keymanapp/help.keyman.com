<?php
  /*
   * Keyman is copyright (C) SIL Global. MIT License.
   *
   * Redirect to a GitHub editor page to edit content on the site directly
   *
   * Parameters
   *   page - the url to the page (required)
   *   file - the actual markdown file to edit (optional, for _mdhost.php)
   *   id - the actual knowledge base article id (optional, for /knowledge-base)
   */

  require_once __DIR__ . '/../_includes/autoload.php';
  use Keyman\Site\com\keyman\help\EditPage;

  if(!isset($_GET['page'])) {
    die("page parameter is required");
  }

  $page = $_GET['page'];
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  $file = isset($_GET['file']) ? $_GET['file'] : '';

  $link = EditPage::getPageUrlForEditLink($page, $id, $file);

  if($link === null) {
    require_once('includes/template.php');
    head([
      'title' => "Edit Page - Keyman Help",
      'index' => false
    ]);

    echo "<h1>Edit Page - Keyman Help</h1>";

    if(!empty($file)) {
      $hpage = htmlentities($file);
    } else {
      $hpage = htmlentities($page);
    }
    echo "<p>The page <a href='$hpage'>$hpage</a> is not setup for direct editing; it may be an old version of content.</p>";
  } else {
    // echo $link;
    header("Location: $link");
  }
