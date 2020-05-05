<?php
  namespace com\keyman\help\kb;

  //
  // Knowledge Base Helper Functions
  //

  function filename_from_id($id) {
    $id = intval($id, 10);
    return sprintf("kb%04.4d.md", $id);
  }

  function link_from_id($id) {
    $id = intval($id, 10);
    return "/kb/$id";
  }
