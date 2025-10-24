---
title: .model_info 1.0 Specification
---

This file will be created by the PR submitter of the lexical model, for new pull requests. It is a JSON file, with the following members. The **.model_info** file will be used when building lexical models for deployment; the master version of the file lives in the lexical-models repository. During CI deployment, it will be read from the source repository, extended with the required generated fields and this new version pushed with the compiled resources to the download store.

The **.model_info** file is also provided as a component of results by various Keyman Cloud APIs.

## ModelInfo Object

> [!Note]
> The **Generated** column indicates if the field will be generated if it is not present in the source repository during the CI deployment process. Fields that are **Required** and not **Generated** must be completed by the lexical model author.

| Member | Required in source? | Required in distribution | Generated? | Notes |
|--------|---------------------|--------------------------|------------|-------|
| id |  | yes | yes | **string**, a unique identifier for the model, in a format `author.bcp47.uniq`. The components must be the same as the path of the model in the repository, e.g. a model in `release/example/en.wordlist` would have the identifer `example.en.wordlist`. The identifier must be lowercase and each component must be a valid Javascript identifier, thus the BCP 47 component should be delineated with underscores (_), not hyphens (-).<br><br>**Example:** `"id": "example.en_us.wordlist"`<br><br>**Generation:** from parent folder names. |
| name |  | yes | yes | **string**, the human readable name of the model. This will usually differ from the id.<br><br>**Generation:** from .kps info, package name. |
| authorName |  |  | yes | **string**, the name of the author<br><br>**Generation:** from .kps info, package author |
| authorEmail |  |  | yes | **string**, the email address of the author<br><br>**Generation:** from .kmp info |
| description |  |  |  | **string**, a textual description of the model suitable for displaying in a catalog online. This should be written to help a user choose between models. This must not contain any HTML tags.<br><br>**No Automatic Generation:** this information is not available elsewhere. |
| license | yes | yes |  | **string**, the possible values for **license** vary by location in the repository:<br>- **release/** and **experimental/** models must be `"mit"`.<br><br>This must always be specified, because this must be an explicit decision by the model author for legal reasons. |
| languages |  | yes | yes | **array of strings**; an array with each member being a BCP 47 code.<br><br>**Generation:** Will be generated from the .kps file. |
| lastModifiedDate |  | yes | yes | **string**, the last time the model was modified, in RFC3339, UTC `YYYY-MM-DDThh:mm:ss[.nnn]Z`. Do not include this in the source .model_info; it will always be overwritten when compiling the destination .model_info.<br><br>**Generation:** the time that the .model_info file is generated |
| links |  |  |  | **array**, of **ModelLinkInfo** objects |
| packageFilename |  | yes | yes | **string**. In the source repository, filename of the .kmp file that will be distributed, relative to the model base folder, including extension **.model.kmp**. On Cloud APIs, a URL which points to the file for download.<br><br>**Generation:** the filename of the model. |
| packageFileSize |  |  | yes | **number**, integer size of the .kmp file that will be distributed.<br><br>**Generation:** This will normally be generated automatically. |
| jsFilename |  | yes | yes | **string**, filename of the .js file that will be distributed, e.g. "example.en.model.js", relative to the model base folder, including extension **.js**. On Cloud APIs, a URL which points to the file for download.<br><br>**Generation:** This will normally be generated automatically. |
| jsFileSize |  |  | yes | **number**, byte size of the .js file that will be distributed.<br><br>**Generation:** This will normally be generated automatically. |
| isRTL |  |  |  | **boolean**, true if the script associated with the model is right-to-left.<br><br>**No Automatic Generation:** This is not currently generated automatically (it could probably be ascertained from language metadata but we don't currently support that). |
| packageIncludes |  | yes | yes | **array**, of **strings**. This flags whether a package includes:<br>- `"fonts"` - one or more fonts<br><br>This field corresponds to the .keyboard_info **packageIncludes** field, but is mostly unused.<br><br>**Generation:** 'fonts' will be added if .kmp contents includes .ttf or .otf files. |
| version |  | yes | yes | **string**, the file version of the model.<br><br>**Generation:** from package and source metadata. |
| minKeymanVersion |  | yes | yes | **string**. The minimum version of Keyman that can read this lexical model. If present, must be one of `"12.0"` or a later version.<br><br>**Generation:** from source metadata. |
| helpLink |  |  | yes | **string**. If present, the link to this model's help page on help.keyman.com.<br><br>**Generation:** if **id/source/help/id.php** exists. |
| sourcePath |  |  | yes | **string**, the relative path of the model in the /keymanapp/lexical-models GitHub repository, starting with `release/` or `experimental/`.<br><br>**Generation:** This will normally be generated automatically. |
| related |  |  |  | **object**, with each property an id of a lexical model and corresponding value is a **ModelRelatedInfo**. |

## ModelLinkInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| name | yes | **string**, the text to be shown in the link |
| url | yes | **string**, the fully qualified url of the link. |

## ModelRelatedInfo Object

| Member | Required? | Notes |
|--------|-----------|-------|
| deprecates |  | **boolean**, if **true**, then this model is intended to deprecate another model with the parent member name, and Keyman will upgrade it to this model if found, ignoring version numbers. |
| deprecatedBy |  | **boolean**, if **true**, then this model has been deprecated by the model referred to. This member should not be set in the source .model_info but will be returned from queries to api.keyman.com. |
| note |  | **string**, a textual description of the relationship between the models. |

## Schema

A validating schema for the object is online at [https://api.keyman.com/schemas/model_info.source.json](https://api.keyman.com/schemas/model_info.source.json) and [https://api.keyman.com/schemas/model_info.distribution.json](https://api.keyman.com/schemas/model_info.distribution.json). .model_info files in the repository must validate against the source json; after build, the resulting .model_info will validate against the distribution json.

## Validation

The model repository build process validates the JSON schema, then copies the .model_info into the build/ folder and populates missing generated fields. If a field is already present, it will be validated for correctness against the source files, but will not be overridden.

Any errors in a .model_info file will cause the build to fail.

## Examples

This is a sample minimal source .model_info file. Note that as you can see, only two fields are required for the source file. The build process will generate any missing fields that it can. Generally speaking, it is better to keep the file minimal to avoid duplication.

```javascript
{
  "license": "mit",
  "languages": ["crl", "crj"]
}
```

The following is a more comprehensive example .model_info file for an example lexical model.

```javascript
{
    "id": "example.en.wordlist",
    "name": "Example (English) Template Wordlist Model",
    "license": "mit",
    "version": "1.0.0",
    "languages": [
        "en"
    ],
    "authorName": "Marc Durdin",
    "authorEmail": "support@example.com",
    "description": "Example wordlist model template for English language."
}
```