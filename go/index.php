<?php
  /*
   * Keyman is copyright (C) SIL Global. MIT License.
   *
   * Redirect to a the relevant keyboard documentation
   *
   * Parameters
   *   keyboard - the id of the keyboard with a Keyboard_ prefix (required)
   *   language - the selected associated language of the keyboard (name, not id; currently unused)
   */
  //$lang = $_GET['language']; - unused but passed in
  $kbd = $_GET['keyboard'];
  $kbd = str_replace('Keyboard_','',$kbd);
  $kbd = str_replace('keyboard_','',$kbd);
  $link = '/keyboard/'.$kbd;
  header('location: '.$link);
?>