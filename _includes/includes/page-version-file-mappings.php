<?php
  // Mappings for files that got renamed at some point. These mappings are applied
  // for the version switching mechanism on pages such as /developer/x.y/.... They
  // are applied to _all_ versioned folders, so be careful when adding new mappings.
  global $PageVersionFileMappings;
  $PageVersionFileMappings = [
    ['whats-new', 'whatsnew'],
  ];

