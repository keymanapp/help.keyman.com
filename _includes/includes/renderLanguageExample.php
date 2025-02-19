<?php /*
  Name:             renderLanguageExample
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:
  Description:
  Create Date:      21 Dec 2009

  Modified Date:    21 Dec 2009
  Authors:          mcdurdin
  Related Files:
  Dependencies:

  Bugs:
  Todo:
  Notes:
  History:          21 Dec 2009 - mcdurdin - Fixup rendering of special keys
*/
  require_once('servervars.php');
  use Keyman\Site\Common\KeymanHosts;

  function renderLanguageExample($keyboard, $language, $morehelp = '', $toBrowser = true)
  {

    $keyboard = str_replace('Keyboard_','',$keyboard);
    $string = KeymanHosts::Instance()->SERVER_api_keyman_com . "/cloud/3.0/keyboards/".$keyboard;
    if(($json = @file_get_contents($string)) === FALSE) {
      return '';
    }

    if(($obj = @json_decode($json,true)) === NULL) {
      return '';
    }

    $result = '';
    $found = false;

    if($language == '') {
      // Show all examples
      $kbd = $obj['keyboard'];

      foreach ($kbd['languages'] as $ExampleLanguage) {
        if(!isset($ExampleLanguage['example'])) {
          continue;
        }
        if(!$found) {
          $result .= "<table><tr><th>Language</th><th>Phrase</th><th>Meaning</th><th>Type the following keys</th></tr>";
        }
        $result .= "<tr><td>";
  	    $result .= "<span class='highlightLanguage'>{$ExampleLanguage['name']}</span>";
      	$result .= "</td>";
      	$result .= DisplayExample($ExampleLanguage['example'], true, $ExampleLanguage['id']);
      	$result .= "</tr>";
      	$found = true;
      }

      if($found) $result .= "</table>";
    }
    else if(isset($obj['keyboard']) && !empty($obj['keyboard']['languages'][0]['example'])) {
      $result .= "Example: ";
      $result .= DisplayExample($obj['keyboard']['languages'][0]['example'], false, $language);
    } else {
      $result .= '<br/>No example is available, please refer to keyboard help'.$morehelp;
    }

    if($toBrowser) echo $result;
    return $result;
  }

  function DisplayExample($x, $table = false, $language = '')
  {
    global $morehelp;
    $result = '';

    if(is_array($x))
    {
      $keys = KeyRenderer::renderInternal($x['keys'], $table);
      $out = $x['text'];
      if(isset($x['note'])) $note = " ({$x['note']})"; else $note = '';

      if($table)
        $result .= "<td class='highlightExample lang2' lang='$language'>$out</td><td>{$x['note']}</td><td class='highlightKeys'>$keys</td>";
      else
      $result .=
        "To enter ".
        "<span class='highlightExample lang2' lang='$language'>$out</span>$note, ".
        "<br/>type ".
        "<span class='highlightKeys'>$keys</span>$morehelp";
       //" to get ";
      //if(isset($x['note'])) echo " ({$x['note']})";
      //echo "  $morehelp";
    }
    else if(!$table)
      $result .= "$x  $morehelp";
    return $result;
  }

  class KeyRenderer
  {
    public static function render($s)
    {
      return "<span class='highlightKeys'>".KeyRenderer::renderInternal($s, true)."</span>";
    }

    public static function renderInternal($s, $table = false)
    {
      $spkey = array("pgup","pgdn","left","right","up","down","ins","del","home","end","enter","tab","esc","caps","bksp","shift","ctrl","alt");
      $spkey2 = array("shift","ctrl","alt");

      $i = 0;
      $r = '';
      while($i < strlen($s))
      {
        $endspan = false;
        $ch = $s[$i];
        if($ch == '[' && $i < strlen($s)-1)
        {
          $i++; $ch = $s[$i];
          if($ch == '[')
          {
            $t = $ch;
          }
          else if($ch != '[')
          {
            /* Ctrl+Shift+Alt+key */
            $t = $ch; $i++;
            while($i < strlen($s) && $s[$i] != ']')
            {
              $t .= $s[$i];
              $i++;
            }
            $ch = $t[strlen($t)-1]; $t1 = $t;
            $t = substr($t, 0, strlen($t)-1);
            $r .= "<span class='key-grp'>";

            /* Special keys */
            $x = strpos($t1,'!'); $u = "";
            if($x !== FALSE)
            {
              $ks = strtolower(substr($t1,$x+1,strlen($t1)-$x-1));
              if(array_search($ks,$spkey) !== FALSE)
              {
                $u = $ks;
                $kn = $ks;
                if(array_search($ks,$spkey2) !== FALSE) $kn .= "2";
                $u = "<img src='".cdn("img/keys/tr.gif")."' title='" . $ks ."' alt='" . $ks . "' class='key-" . $kn . "' />";
                $t = substr($t,0,$x); $ch = '';
              }
            }

            if(strpos($t, 'C') !== FALSE) $r .= "<img src='".cdn("img/keys/tr.gif")."' title='Ctrl' alt='Ctrl' class='key-ctrl' />";
            if(strpos($t, 'S') !== FALSE) $r .= "<img src='".cdn("img/keys/tr.gif")."' title='Shift' alt='Shift' class='key-shift' />";
            if(strpos($t, 'A') !== FALSE) $r .= "<img src='".cdn("img/keys/tr.gif")."' title='Alt' alt='Alt' class='key-alt' />";
            $r .= $u;
            $endspan = true;
          }
        }
        if($ch <> '')
        {
          $chv = ord($ch);
          $r .= "<img src='".cdn("img/keys/tr.gif")."' class='key-$chv' title='".htmlentities($ch, ENT_QUOTES)."' alt='".htmlentities($ch, ENT_QUOTES)."' />";
        }
        if($endspan) $r .= "</span>";
        $i++;
      }

      if($table)
      {
        $r .= "<span class='key-print'>";
        $i = 0;
        while($i < strlen($s))
        {
          $endspan = false;
          $ch = $s[$i];
          if($ch == '[' && $i < strlen($s)-1)
          {
            $i++; $ch = $s[$i];
            $t = $ch;
            if($ch != '[')
            {
              /* Ctrl+Shift+Alt+key */
              $i++;
              while($i < strlen($s) && $s[$i] != ']')
              {
                $t .= $s[$i];
                $i++;
              }
              $ch = $t[strlen($t)-1]; $t1 = $t;
              $t = substr($t, 0, strlen($t)-1);
              $r .= "<span class='key-grp'>";

              /* Special keys */
              $x = strpos($t1,'!'); $u = "";
              if($x !== FALSE)
              {
                $kn = substr($t1,$x+1,strlen($t1)-$x-1);
                $ks = strtolower($kn);
                if(array_search($ks,$spkey) !== FALSE)
                {
                  $u = $kn;
                  $t = substr($t,0,$x); $ch = '';
                }
              }
              if(strpos($t, 'C') !== FALSE) $r .= "Ctrl+";
              if(strpos($t, 'S') !== FALSE) $r .= "Shift+";
              if(strpos($t, 'A') !== FALSE) $r .= "Alt+";
              $r .= $u;
              $endspan = true;
            }
          }

          if($ch == ' ') $r .= "<span class='key-grp'>Space</span>"; else if($ch <> '') $r .= htmlentities($ch, ENT_QUOTES);
          if($endspan) $r .= " </span>";
          $i++;
        }
        $r .= "</span>";
      }

      return $r;
    }
  }

  $keyRenderer = new KeyRenderer(); // Can also be used statically
?>
