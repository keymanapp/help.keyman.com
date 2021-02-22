# Common Files

These files are common to keyman.com sites. They must be kept identical to each other.

## Namespace

The root namespace for all PHP modules is `Keyman\Site\Common`.

## Validation

`composer test` on api.keyman.com will compare the contents of the `_common` folder across
keyman.com, api.keyman.com and help.keyman.com (and in future, other sites), if the
corresponding folders can be found. Currently, this test assumes that each site is in
a sibling folder with corresponding name (e.g. `~/keyman/sites/keyman.com`,
`~/keyman/sites/api.keyman.com`, etc), so the test will be skipped in CI at this time
(especially as the development cycle may be out of sync for the sites).
