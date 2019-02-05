<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 6/15/2017
 * Time: 3:07 PM
 *
 * Contains documentation formatting functions to help simplify frequent formatting patterns.
 */

// One can get really tired of typing this every single time.

require_once('includes/servervars.php');

// In reference to https://stackoverflow.com/questions/10272282/how-to-secure-serverphp-self,
// as PHP_SELF is not entirely secure but is necessary to get the URL of the including page.
$phpSelf = filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL);

// Matches the web section URL string /developer/engine/web/__._/, taking the major version number component.
preg_match('/developer\/engine\/web\/([0-9]+)\.[0-9]+\//i', $phpSelf, $matches);

if(count($matches) > 1) {  // $maj_version specified by the including page's URL.
  $maj_version = $matches[1];
  if($maj_version >= 10) {
    $kmw = "keyman";
  } else {
    $kmw = "tavultesoft.keymanweb";
  }
} else {
  $kmw = "tavultesoft.keymanweb";
}

/**
 * @param $str The syntax for referencing this symbol from a standard public setting/inclusion.
 */
function syntax($str) {
  $numArgs = func_num_args();
  echo "<h2 id='Syntax' name='Syntax'>Syntax</h2>\n";
  echo codebox($str);
  if($numArgs > 1) {
    $i = 0;
    while(++$i < $numArgs) {
      echo "<p>or</p>";
      echo codebox(func_get_arg($i));
    }
  }
  echo "\n";
}

/**
 * Formats the parameter section of a method's documentation, requiring three components per parameter.
 * All should be specified in a single function call.
 * Additionally, a single additional parameter may be set (in the first slot) that adds description text
 * to the parameter section.
 *
 * @param $name - Name of the parameter
 * @param $type - Type of the parameter.  May also contain, as a plain and distinct token, the word 'optional'
 *                in order to place a tag signifying it is optional.  E.g:  "optional string".
 * @param $desc - Description of the parameter
 *
 * @throws Exception if the number of arguments is incorrect.
 */
function params() {
  $COMPONENTS_PER_PARAMETER = 3;
  $numArgs = func_num_args();
  // index into parameter section
  $index = 0;

  $descriptionGiven = ($numArgs % $COMPONENTS_PER_PARAMETER == 1);
  if ($numArgs % $COMPONENTS_PER_PARAMETER != 0 && !$descriptionGiven) {
    throw new Exception('Number of arguments indivisible by 3!');
  }

  echo "<h3 id='Parameters' name='Parameters'>Parameters</h3>\n";

  // Handle optional parameter block description.
  if($descriptionGiven) {
    $descText = func_get_arg($index++);
    echo "<p>$descText</p>";
  }

  if($numArgs < $COMPONENTS_PER_PARAMETER) {
    echo "<p>None.</p>";
  } else {
    echo "<dl>\n";
    while($index < $numArgs) {
      $param = func_get_arg($index);
      $type = func_get_arg($index+1);
      $paramDesc = func_get_arg($index+2);

      echo "  <dt><code>$param</code></dt>\n";
      if (isset($type)) {
        // Does our string contain the word 'optional'?
        $i = strpos($type, "optional");

        if ($i !== false) {
          // If so, extract it and place its special tag later.
          $head = substr($type, 0, $i);
          $tail = substr($type, $i + strlen("optional"));

          $type = trim(rtrim($head) . $tail);
          $opt = (" <span class='optional'>optional</span>");
        } else {
          $opt = '';
        }

        if($type != '') {
          echo "  <dd>Type: <code>$type</code>$opt</dd>\n";
        } else {
          echo "  <dd>$opt</dd>\n";
        }
      }
      if (isset($paramDesc)) {
        echo "  <dd>$paramDesc</dd>\n";
      }

      $index+=$COMPONENTS_PER_PARAMETER;
    }
    echo "</dl>\n";
  }
}

/**
 * Displays return-type specification details.  Takes one or two parameters.
 * @param $retType - The method's return type
 * @param $retDesc - What the returned value means / the expected behavior.
 */
function returns() {
  $numArgs = func_num_args();

  if($numArgs > 0) {
    $type = func_get_arg(0);
  } else {
    $type = "undefined";
  }

  if($numArgs > 1) {
    $desc = func_get_arg(1);
  }

  echo "<h3 id='ReturnValue' name='ReturnValue'>Return Value</h3>\n";
  echo "<dl>\n";

  echo "  <dt><code>$type</code></dt>\n";
  if(isset($desc)) {
    echo "  <dd>$desc</dd>\n";
  }
  echo "</dl>\n";
}

/**
 * Used to display documentation about an object parameter's specifications.
 *
 * @throws Exception - if the number of arguments is incorrect.
 */

function obj_spec() {
  $numArgs = func_num_args();
  if($numArgs % 3 != 1) throw new Exception('Number of object members indivisible by 3!');

  $obj_name = func_get_arg(0);
  $numParams = ($numArgs-1) / 3;

  if($obj_name != false) {
    echo "<p>The <code>$obj_name</code> object contains the following members:</p>\n";
  }
  echo "<div class='itemizedlist'><dl type='disc'>\n";

  for($i = 0; $i < $numParams; $i++) {
    $member =    func_get_arg($i * 3 + 1);  // Member name
    $type =      func_get_arg($i * 3 + 2);  // Type info + "required or not"?
    $mbr_desc =  func_get_arg($i * 3 + 3);  // Description of member.

    echo   "  <dt><code>$member</code></dt>\n";

    if (isset($type)) {
      // Does our string contain the word 'optional'?
      $index = strpos($type, "optional");

      if ($index !== false) {
        // If so, extract it and place its special tag later.
        $head = substr($type, 0, $index);
        $tail = substr($type, $index + strlen("optional"));

        $type = trim(rtrim($head) . $tail);
        $opt = (" <span class='optional'>optional</span>");
      } else {
        $opt = '';
      }

      $index = strpos($type, "required");
      if ($index !== false) {
        // If so, extract it and place its special tag later.
        $head = substr($type, 0, $index);
        $tail = substr($type, $index + strlen("required"));

        $type = trim(rtrim($head) . $tail);
      }

      if($type != '') {
        echo "  <dd><code>$type</code>$opt</dd>\n";
      } else {
        echo "  <dd>$opt</dd>";
      }
    }
    if(isset($mbr_desc)) {
      echo "  <dd>$mbr_desc</dd>\n";
    }
  }
  echo "</dl>\n";
  echo "</div>";
}