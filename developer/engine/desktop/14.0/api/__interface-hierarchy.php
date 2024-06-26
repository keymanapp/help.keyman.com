<?php

  // Interface hierarchy

  $interfaces = array(
    "IKeymanObject" => array(
      "IKeyman",
      "IKeymanCollection" => array(
        "IKeymanErrors",
        "IKeymanHotkeys",
        "IKeymanKeyboardLanguages" => array(
          "IKeymanKeyboardLanguagesFile",
          "IKeymanKeyboardLanguagesInstalled" => array(
            "IKeymanKeyboardLanguagesInstalled2"
          )
        ),
        "IKeymanKeyboardOptions",
        "IKeymanKeyboards" => array(
          "IKeymanKeyboardsInstalled" => array(
            "IKeymanKeyboardsInstalled2"
          ),
          "IKeymanPackageContentKeyboards"
        ),
        "IKeymanLanguages",
        "IKeymanOptions",
        "IKeymanPackageContentFiles",
        "IKeymanPackageContentFonts",
        "IKeymanPackagesInstalled" => array(
          "IKeymanPackagesInstalled2"
        )
      ),
      "IKeymanControl",
      "IKeymanError",
      "IKeymanHotkey",
      "IKeymanKeyboard" => array(
        "IKeymanKeyboardFile" => array(
          "IKeymanKeyboardFile2"
        ),
        "IKeymanKeyboardInstalled"
      ),
      "IKeymanKeyboardLanguage" => array(
        "IKeymanKeyboardLanguageInstalled" => array(
          "IKeymanKeyboardLanguageInstalled2"
        )
      ),
      "IKeymanKeyboardOption",
      "IKeymanLanguage",
      "IKeymanOption",
      "IKeymanPackage" => array(
        "IKeymanPackageFile" => array(
          "IKeymanPackageFile2"
        ),
        "IKeymanPackageInstalled"
      ),
      "IKeymanPackageContentFile",
      "IKeymanPackageContentFont",
      "IKeymanSystemInfo",
      "IKeymanVisualKeyboard",
      "IKeymanBCP47Canonicalization"
    )
  );

  function print_interface_hierarchy($name, $path) {
    $h = get_interface_hierarchy($name, $path, null, "    ");
    echo <<<END
<div class="interface-hierarchy">
  <code>IDispatch</code><br/>
  <blockquote>
$h</blockquote>
</div>
END;
  }

  function get_interface_hierarchy($name, $path, $parent = null, $tab = "  ") {
    global $interfaces;
    $result = '';
    if($parent === null) $parent = $interfaces;
    foreach($parent as $item => $children) {
      if(is_numeric($item)) {
        $item = $children;
        $children = null;
      }
      if($item === $name) {
        // ourselves so now we print kids and get parents to print too
        $result .= "$tab<code><strong>$name</strong></code><br/>\n";
        if($children !== null) {
          $result .=
            "$tab<blockquote>\n".
            get_interface_hierarchy(null, $path, $children, "$tab  ").
            "$tab</blockquote>\n";
        }
        return $result;
      } else if($name === null) {
        // listing all children
        $result .= "$tab<code><a href='$path$item'>$item</a></code><br/>\n";
        if($children !== null) {
          $result .=
            "$tab<blockquote>\n".
            get_interface_hierarchy($name, $path, $children, "$tab  ").
            "$tab</blockquote>\n";
        }
      } else if($children !== null) {
        // searching our children
        $v = get_interface_hierarchy($name, $path, $children, "$tab  ");
        if($v !== '') {
          // we found the interface somewhere so we include ourselves and return the value
          return
            "$tab<code><a href='$path$item'>$item</a></code><br/>\n".
            "$tab<blockquote>\n".
            $v.
            "$tab</blockquote>\n";
        }
      }
    }
    return $result;
  }

?>