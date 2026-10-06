---
title: Compiler Messages Reference for @keymanapp/kmc-keyboard-info
---

 Code | Identifier | Message
------|------------|---------
[KM09001](km09001) | `FATAL_UnexpectedException` | This is an internal error; the message will vary
[KM09002](km09002) | `ERROR_FileDoesNotExist` | File &lt;param&gt; does not exist\.
[KM09005](km09005) | `ERROR_InvalidAuthorEmail` | Invalid author email: &lt;param&gt;
[KM09006](km09006) | `ERROR_LicenseFileIsMissing` | License file &lt;param&gt; does not exist\.
[KM09007](km09007) | `ERROR_LicenseFileIsDamaged` | License file &lt;param&gt; could not be loaded or decoded\.
[KM09008](km09008) | `ERROR_LicenseIsNotValid` | An error was encountered parsing license file &lt;param&gt;: &lt;param&gt;\.
[KM09009](km09009) | `ERROR_CannotBuildWithoutKmpFile` | Compiling the \.keyboard\_info file requires a \.kmp file for metadata\.
[KM0900A](km0900a) | `ERROR_NoLicenseFound` | No license for the keyboard was found\. MIT license is required for publication to Keyman keyboards repository\.
[KM0900E](km0900e) | `ERROR_FontFileCannotBeRead` | Font &lt;param&gt; could not be parsed to extract a font family\.
[KM0900F](km0900f) | `ERROR_FontFileMetaDataIsInvalid` | Font &lt;param&gt; meta data invalid: &lt;param&gt;\.
[KM09010](km09010) | `ERROR_DescriptionIsMissing` | The Info\.Description field in the package &lt;param&gt; is required, but is missing or empty\.
[KM09011](km09011) | `HINT_ScriptDoesNotMatch` | The script '&lt;param&gt;' associated with language tag '&lt;param&gt;' does not match the script '&lt;param&gt;' for the first language \('&lt;param&gt;'\) in the package\.
[KM09012](km09012) | `WARN_LanguageTagNotFound` | Neither the listed BCP 47 tag '&lt;param&gt;' nor the language subtag '&lt;param&gt;' were found in langtags\.json
[KM09013](km09013) | `WARN_LanguageTagNotFound2` | The listed BCP 47 tag '&lt;param&gt;' was not found in langtags\.json
