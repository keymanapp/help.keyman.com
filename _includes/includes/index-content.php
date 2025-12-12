<?php

/**
 * Sort the list of file titles according to the predefined order in
 * __index.txt. If a filename in __index.txt is prefixed with a hyphen (-), then
 * exclude it from the list. If a filename is missing from __index.txt, it will
 * be appended to the bottom of the list.
 */
function get_file_titles_by_index($base, $unsorted_items) {
  $order = str_replace("\r\n", "\n", @file_get_contents($base.'__index.txt'));
  $order = explode("\n", $order);
  foreach($order as $item) {
    if(substr($item, 0, 1) == '-') {
      // remove the item from the list
      $item = substr($item, 1);
      if(array_key_exists($item, $unsorted_items)) {
        $unsorted_items[$item] = '';
      }
    }
    else if(array_key_exists($item, $unsorted_items)) {
      $items[$item] = $unsorted_items[$item];
      $unsorted_items[$item] = '';
    }
  }

  asort($unsorted_items, SORT_FLAG_CASE|SORT_STRING);
  foreach($unsorted_items as $item => $title) {
    if($title != '') {
      $items[$item] = $title;
    }
  }
  return $items;
}

function get_file_titles($base) {
  $hasIndex = false;
  $files = glob($base.'*');
  $items = array(); $dirs = array();
  foreach($files as $file) {
    $basefile = basename($file);
    if($basefile == '.' || $basefile == '..') {
      continue;
    }
    if($basefile == '__index.txt') {
      $hasIndex = true;
      continue;
    }
    if($basefile == '_nav.php' || $basefile == 'index.php' || $basefile == 'index.md') {
      continue;
    }
    if(preg_match('/^__/', $basefile)) {
      // These files should not be indexed as they are includes
      continue;
    }

    if(preg_match('/developer\/(current-version|latest-version|\d+\.\d+)\/reference\/api/', $file)) {
      // Performance cost -- there are many files in this folder. This is a
      // temporary fix until we move to better API documentation hosting in the
      // future
      continue;
    }

    if(is_dir($file)) {
      if(file_exists($file.'/index.md')) {
        $dirs[$basefile] = get_file_title_md($file.'/index.md');
      }
      else if(file_exists($file.'/index.php')) {
        $dirs[$basefile] = get_file_title($file.'/index.php');
      }
    } else if(preg_match('/\.md$/', $file)) {
      $items[$basefile] = get_file_title_md($file);
    } else if(preg_match('/\.php$/', $file) && !file_exists(str_replace('.php', '.md', $file))) {
      $items[$basefile] = get_file_title($file);
    }
  }

  if($hasIndex) {
    return get_file_titles_by_index($base, $items + $dirs);
  }

  asort($items, SORT_FLAG_CASE|SORT_STRING);
  asort($dirs, SORT_FLAG_CASE|SORT_STRING);

  return $items + $dirs;
}

function get_file_title($filename) {
  $s = @file_get_contents($filename);
  if(preg_match('/<h[12][^>]*>(.+?)<\/h[12]>/i', $s, $sub) && !preg_match('/<\?php/', $sub[1])) {
    $title = $sub[1];
  } else {
    if($filename == './index.php') $title = 'Current page';
    else {
      $title = basename($filename, '.php');
      if($title == 'index.php') {
        $title = basename(dirname($filename));
      }
      if($title == '' || $title == '.') $title = 'Untitled page';
      $title[0] = strtoupper($title[0]);
    }
  }
  return $title;
}

function get_file_title_md($filename) {
  $s = @file_get_contents($filename);

  if(preg_match('/^title: (.+)$/mi', $s, $sub)) {
    $title = $sub[1];
  } else if(preg_match('/^(#)+ (.+)$/m', $s, $sub)) {
    $title = $sub[2];
  } else {
    $title = 'Untitled page.md';
  }
  return $title;
}

function build_index_content() {
  global $index_content;

  $this_file = basename($_SERVER['PHP_SELF']);
  if($this_file == 'mdhost.php') {
    $this_file = $_REQUEST['file'];
    $base = dirname(realpath(__DIR__ . '/../../') . DIRECTORY_SEPARATOR . $this_file) . '/';
    $path = './';
  } else {
    $path = './';
    $base = './';
  }

  $items = get_file_titles($base);

  $index_content = "<ul>";
  foreach($items as $file => $title) {
    $hetitle = htmlentities($title);
    $hesttitle = htmlentities(strip_tags($title));
    $cleanfile = str_replace('.md', '', str_replace('.php', '', $file));
    if($file == $this_file) {
      $index_content .= "<li class='current'>$hetitle</li>";
    } else {
      $index_content .= "<li><a href='$cleanfile' title='$hesttitle'>$hetitle</a></li>";
    }
  }
  $index_content .= "</ul>";

  $depth = 0;
  while(file_exists($base . 'index.php') || file_exists($base . 'index.md')) {
    if(file_exists($base . 'index.md'))
      $title = get_file_title_md($base . 'index.md');
    else
      $title = get_file_title($base . 'index.php');
    $hetitle = htmlentities($title);
    $hesttitle = htmlentities(strip_tags($title));

    if(($this_file == 'index.php' || $this_file == 'index.md') && $depth == 0) {
      $index_content = "<ul><li><div class='current'>$hetitle</div>$index_content</li></ul>";
    } else {
      $index_content = "<ul><li><a href='$path'>$hetitle</a>$index_content</li></ul>";
    }
    $path = '../' . $path;
    $base = $base . '../';
    if(++$depth > 2) break;
  }
}

?>