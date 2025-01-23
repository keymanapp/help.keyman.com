---
title: Compiler Messages Reference for @keymanapp/kmc-copy
---

 Code | Identifier | Message
------|------------|---------
[KM0B001](km0b001) | `FATAL_UnexpectedException` | 
[KM0B002](km0b002) | `INFO_CopyingProject` | Copying project of type &lt;param&gt; with id &lt;param&gt;
[KM0B003](km0b003) | `ERROR_CannotCreateFolder` | This is an internal error; the message will vary
[KM0B004](km0b004) | `ERROR_OutputPathAlreadyExists` | Output path &lt;param&gt; already exists, not overwriting
[KM0B005](km0b005) | `ERROR_CannotWriteOutputFile` | This is an internal error; the message will vary
[KM0B006](km0b006) | `WARN_ModelIdDoesNotFollowLexicalModelConventions` | The id &lt;param&gt; does not follow the recommended model id conventions\. The id should be all lower case, include only alphanumeric characters and underscore \(\_\), not start with a digit, and should have the structure &lt;author&gt;\.&lt;bcp47&gt;\.&lt;uniq&gt;
[KM0B007](km0b007) | `INFO_DryRunCreatingFolder` | Would create folder &lt;param&gt;
[KM0B008](km0b008) | `INFO_DryRunWritingFile` | Would write file &lt;param&gt;
[KM0B009](km0b009) | `ERROR_CannotFindInputProject` | Could not find project file '&lt;param&gt;'
[KM0B00A](km0b00a) | `WARN_FileNotFound` | The file '&lt;param&gt;' could not be found, skipping file copy\. Any references have been updated to '&lt;param&gt;'
[KM0B00B](km0b00b) | `WARN_NoWordlistsFound` | No wordlists could be found in the lexical model source file '&lt;param&gt;'\. The file may be too complex for kmc\-copy to parse
[KM0B00C](km0b00c) | `ERROR_PackageFileCouldNotBeRead` | The package source file '&lt;param&gt;' could not be loaded\. The file may have an invalid format
[KM0B00D](km0b00d) | `ERROR_UnsupportedProjectVersion` | Project version &lt;param&gt; for '&lt;param&gt;' is not supported by this version of Keyman Developer
[KM0B00E](km0b00e) | `ERROR_InvalidProjectFile` | Project file '&lt;param&gt;' is not valid: &lt;param&gt;
[KM0B00F](km0b00f) | `ERROR_ProjectFileCouldNotBeRead` | Project file '&lt;param&gt;' could not be read
[KM0B010](km0b010) | `INFO_DryRun` | Dry run requested\. No changes have been saved
[KM0B012](km0b012) | `ERROR_CannotDownloadFolderFromGitHub` | The folder '&lt;param&gt;' could not be downloaded: &lt;param&gt; &lt;param&gt;
[KM0B013](km0b013) | `ERROR_FolderDownloadedFromGitHubIsNotAValidFolder` | The path '&lt;param&gt;' does not appear to be a folder on GitHub
[KM0B014](km0b014) | `WARN_CannotDownloadFileFromGitHub` | The file '&lt;param&gt;' could not be downloaded: &lt;param&gt; &lt;param&gt;
[KM0B015](km0b015) | `ERROR_InvalidCloudKeyboardId` | The keyboard identifier '&lt;param&gt;' is not a valid keyboard identifier
[KM0B016](km0b016) | `ERROR_CouldNotRetrieveFromCloud` | Details for keyboard or model identified by '&lt;param&gt;' could not be downloaded: &lt;param&gt; &lt;param&gt;
[KM0B017](km0b017) | `ERROR_KeymanCloudReturnedInvalidData` | Keyman Cloud API returned invalid data for keyboard or model identified by '&lt;param&gt;'
[KM0B018](km0b018) | `ERROR_CloudDoesNotHaveSource` | The keyboard or model identified by '&lt;param&gt;' does not have source available
[KM0B019](km0b019) | `ERROR_CannotDownloadRepoFromGitHub` | The repository at '&lt;param&gt;' could not be accessed: &lt;param&gt; &lt;param&gt;
[KM0B01A](km0b01a) | `ERROR_CouldNotFindDefaultBranchOnGitHub` | The default branch could not be found for the GitHub repository '&lt;param&gt;'
[KM0B01B](km0b01b) | `INFO_CannotDownloadBinaryFileFromGitHub` | The Keyman binary file '&lt;param&gt;' could not be downloaded: &lt;param&gt; &lt;param&gt;\. This is not normally a problem
[KM0B01C](km0b01c) | `VERBOSE_DownloadingFile` | Downloading '&lt;param&gt;' from '&lt;param&gt;'
[KM0B01D](km0b01d) | `VERBOSE_DownloadingFolder` | Downloading folder '&lt;param&gt;' from '&lt;param&gt;'
[KM0B01E](km0b01e) | `ERROR_InvalidKeyboardId` | The specified keyboard id '&lt;param&gt;' contains characters that are not permitted for a keyboard id or filename\.
[KM0B01F](km0b01f) | `ERROR_InvalidLexicalModelId` | The specified lexical model id '&lt;param&gt;' contains characters that are not permitted or does not match the required pattern of 'author\.bcp47\.uniq'\.
[KM0B020](km0b020) | `WARN_FilenameCollides` | The output file '&lt;param&gt;' has two different possible source files\.
