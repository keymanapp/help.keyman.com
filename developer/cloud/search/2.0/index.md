---
title: Keyboard search API 2.0 Specification
---

Documents the **api.keyman.com/search/2.0** endpoint. Searches are run across keyboard names, identifiers and details, language names, script names and country names, and returns an array of keyboards that match.

Note: unlike the [Search 1.0 endpoint](../1.0), this endpoint always returns an array of keyboards. Version 1.0 would return arrays of matching languages and countries as well, but this has been consolidated into a flat array rather than a conceptual tree of results, which is easier for end users to understand and use.

## Parameters

* `q`: The search query. A string to search for. The following special prefixes can be used to filter the search:
  * `k:`: search only in keyboard names, identifiers and descriptions
  * `id:`: search only in keyboard identifiers
  * `legacy:`: search only for a specific legacy (integer) identifier
  * `l:`: search only for language names (including dialect and alternate names)
  * `l:id:`: search only for language identifiers (BCP 47)
  * `c:`: search only for country names
  * `c:id:` search only for two-letter country identifiers (ISO 3166)
  * `s:`: search only for script names
  * `s:id:`: search only for four-letter script identifiers (ISO 15924)
  * `p:`: a special prefix, which lists keyboards by popularity or alphabetically; the search text is ignored.
     * `p:*` or `p:popularity` will return top 100 most popularly downloaded keyboards (paginated)
     * `p:!` or `p:alphabetically` will return all keyboards, ordered by name (paginated)

* `f`: If present and set to `1`, returns JSON formatted for readability.

* `platform`: Optionally, limit the results for keyboards to those that work on a target platform. Note: this does not limit language or country. Possible values: `windows`, `macos`, `linux`, `web`, `android`, `ios`.

* `obsolete`: If present and set to `1`, then returns results for obsolete keyboards as well.

* `p`: Controls for pagination, starting at `1`. 10 results are returned per page.

## Results

The search returns a JSON blob with the following format:

* `context` object: metadata about the search query and results
  * `range`: A descriptive string that can be used as a header for search results (in English)
  * `text`: The original search text
  * `pageSize`: The number of keyboard results per page
  * `pageNumber`: The current page of results (1-based)
  * `totalRows`: The total number of matchin keyboards
  * `totalPages`: The total number of pages available

* `keyboards` array: each member is a [KeyboardInfo](../../keyboard_info) object, with an additional `match` member object:
  * `name`: The text that is matched
  * `type`: The type of match found, one of: `language`, `country_iso3166_code`, `country`, `script`, `script_iso15924_code`, `keyboard`, `keyboard_id`, `description`, `legacy_keyboard_id`, `language_bcp47_tag`. These can be used to provide additional hints to a user on what was matched.
  * `weight`: The raw weight of the match, according to number of matches found for the query text and closeness of text matches. This is used for sorting results.
  * `downloads`: An approximation for the number of downloads of the keyboard in the last month (statistics are collected periodically).
  * `totalDownloads`: An appromixation of the total number of downloads of the keyboard since October 2019 (when new statistics database was started).
  * `finalWeight`: Weight multiplied by a log of download count, adding popularity as a signal.
  * `tag`: If the match was for a language, this is the BCP 47 tag matched which can be used as a parameter to Keyman for installing the keyboard. Note that this tag matches the language tag registerd within the keyboard package, and so may not be normalised in the same way as BCP 47 tags are on input.

## BCP 47 tags

Searches for BCP 47 tags (`l:id:` prefix) are normalised on input. This means that a search may involve up to three different forms of the same tag:

* The searched tag, e.g. `str-ca-latn`
* The normalised tag, e.g. `str`
* The keyboard's registered tag, e.g. `str-latn`

## Schema

A validating schema for the object is online at [https://api.keyman.com/schemas/search/2.0/search.json](https://api.keyman.com/schemas/search/2.0/search.json).

## Rate limiting and usage

There is currently no rate limiting for searches.

## Examples

These examples were run from the live data and can be re-run at any time.

* [`q=khmer`](https://api.keyman.com/search/2.0?q=khmer&f=1)

```json
{
    "keyboards": [
        {
            "license": "mit",
            "languages": {
                "km": {
                    "font": {
                        "family": "Mondulkiri",
                        "source": [
                            "Mondulkiri-R.ttf"
                        ]
                    },
                    "displayName": "Central Khmer",
                    "languageName": "Central Khmer"
                }
            },
            "description": "<p>Khmer Unicode keyboard layout based on the NiDA keyboard layout. Automatically corrects many common keying errors.</p>",
            "related": {
                "khmer10": {
                    "deprecates": true
                }
            },
            "id": "khmer_angkor",
            "name": "Khmer Angkor",
            "authorName": "Makara Sok",
            "authorEmail": "makara@keyman.com",
            "lastModifiedDate": "2020-06-12T00:39:43.475Z",
            "sourcePath": "release/k/khmer_angkor",
            "version": "1.0.6",
            "packageFilename": "khmer_angkor.kmp",
            "jsFilename": "khmer_angkor.js",
            "encodings": [
                "unicode"
            ],
            "jsFileSize": 63881,
            "packageFileSize": 2639344,
            "packageIncludes": [
                "visualKeyboard",
                "welcome",
                "fonts",
                "documentation"
            ],
            "minKeymanVersion": "10.0",
            "helpLink": "https://help.keyman.com/keyboard/khmer_angkor",
            "platformSupport": {
                "windows": "full",
                "macos": "full",
                "linux": "full",
                "android": "full",
                "ios": "full",
                "desktopWeb": "full",
                "mobileWeb": "full"
            },
            "match": {
                "name": "Khmer",
                "type": "language",
                "weight": 210,
                "downloads": 37,
                "totalDownloads": 4123,
                "finalWeight": 973.893093542541,
                "tag": "km"
            }
        },
        {
            "license": "mit",
            "description": "This keyboard is designed for any languages using the Khmer script. This keyboard is very similar to the Khmer ABS keyboard, but it is a Unicode keyboard.",
            "id": "sil_khmer",
            "languages": {
                "km": {
                    "displayName": "Central Khmer",
                    "languageName": "Central Khmer"
                },
                "brb-khmr": {
                    "displayName": "Lave (Khmer)",
                    "languageName": "Lave",
                    "scriptName": "Khmer"
                },
                "cmo-khmr": {
                    "displayName": "Central Mnong (Khmer)",
                    "languageName": "Central Mnong",
                    "scriptName": "Khmer"
                },
                "jra-khmr": {
                    "displayName": "Jarai (Khmer)",
                    "languageName": "Jarai",
                    "scriptName": "Khmer"
                },
                "kdt-khmr": {
                    "displayName": "Kuy (Khmer)",
                    "languageName": "Kuy",
                    "scriptName": "Khmer"
                },
                "krr-khmr": {
                    "displayName": "Krung (Khmer)",
                    "languageName": "Krung",
                    "scriptName": "Khmer"
                },
                "krv-khmr": {
                    "displayName": "Kavet (Khmer)",
                    "languageName": "Kavet",
                    "scriptName": "Khmer"
                },
                "kxm-khmr": {
                    "displayName": "Northern Khmer (Khmer)",
                    "languageName": "Northern Khmer",
                    "scriptName": "Khmer"
                },
                "tpu-khmr": {
                    "displayName": "Tampuan (Khmer)",
                    "languageName": "Tampuan",
                    "scriptName": "Khmer"
                }
            },
            "name": "Khmer (SIL)",
            "lastModifiedDate": "2020-06-12T00:41:17.251Z",
            "sourcePath": "release/sil/sil_khmer",
            "version": "1.5",
            "packageFilename": "sil_khmer.kmp",
            "jsFilename": "sil_khmer.js",
            "encodings": [
                "unicode"
            ],
            "jsFileSize": 20855,
            "packageFileSize": 98179,
            "packageIncludes": [
                "documentation",
                "visualKeyboard",
                "welcome"
            ],
            "minKeymanVersion": "10.0",
            "helpLink": "https://help.keyman.com/keyboard/sil_khmer",
            "platformSupport": {
                "windows": "full",
                "macos": "full",
                "linux": "full",
                "android": "full",
                "ios": "full",
                "desktopWeb": "full",
                "mobileWeb": "full"
            },
            "match": {
                "name": "Khmer",
                "type": "language",
                "weight": 356,
                "downloads": 3,
                "finalWeight": 849.5207925586811,
                "tag": "km"
            }
        },
        {
            "license": "mit",
            "description": "Khmer (NIDA) Basic generated from template",
            "id": "basic_kbdkni",
            "languages": {
                "km": {
                    "displayName": "Central Khmer",
                    "languageName": "Central Khmer"
                }
            },
            "name": "Khmer (NIDA) Basic",
            "lastModifiedDate": "2020-06-12T00:36:29.888Z",
            "sourcePath": "release/basic/basic_kbdkni",
            "version": "1.0",
            "packageFilename": "basic_kbdkni.kmp",
            "jsFilename": "basic_kbdkni.js",
            "encodings": [
                "unicode"
            ],
            "jsFileSize": 17913,
            "packageFileSize": 401287,
            "packageIncludes": [
                "visualKeyboard",
                "documentation",
                "welcome",
                "fonts"
            ],
            "minKeymanVersion": "10.0",
            "helpLink": "https://help.keyman.com/keyboard/basic_kbdkni",
            "platformSupport": {
                "windows": "full",
                "macos": "full",
                "linux": "full",
                "android": "full",
                "ios": "full",
                "desktopWeb": "full",
                "mobileWeb": "full"
            },
            "match": {
                "name": "Khmer",
                "type": "language",
                "weight": 185,
                "downloads": 21,
                "finalWeight": 756.8428538712885,
                "tag": "km"
            }
        },
        {
            "license": "mit",
            "description": "This keyboard layout is designed for Khmer.  It includes an on screen keyboard which can be viewed by clicking on the Keyman icon and selecting the On Screen Keyboard menu item. The keyboard layout follows the Windows 10 Khmer layout.",
            "related": {
                "kbdkhmr": {
                    "deprecates": true
                }
            },
            "id": "basic_kbdkhmr",
            "languages": {
                "km": {
                    "displayName": "Central Khmer",
                    "languageName": "Central Khmer"
                }
            },
            "name": "Khmer Basic",
            "lastModifiedDate": "2020-06-12T00:36:29.171Z",
            "sourcePath": "release/basic/basic_kbdkhmr",
            "version": "1.1",
            "packageFilename": "basic_kbdkhmr.kmp",
            "jsFilename": "basic_kbdkhmr.js",
            "encodings": [
                "unicode"
            ],
            "jsFileSize": 16286,
            "packageFileSize": 70886,
            "packageIncludes": [
                "visualKeyboard",
                "documentation",
                "welcome"
            ],
            "minKeymanVersion": "10.0",
            "helpLink": "https://help.keyman.com/keyboard/basic_kbdkhmr",
            "platformSupport": {
                "windows": "full",
                "macos": "full",
                "linux": "full",
                "desktopWeb": "full",
                "mobileWeb": "full"
            },
            "match": {
                "name": "Khmer",
                "type": "language",
                "weight": 185,
                "downloads": 1,
                "finalWeight": 313.2322284035899,
                "tag": "km"
            }
        },
        {
            "license": "mit",
            "description": "Krung is a language spoken in the northern part of Cambodia. Khmer script was adopted and used for this language. This Keyman keyboard was developed based on an existing tool (Clever Rabit) which used the Romanized version of Krung. However, a few customizations have been made to make this keyboard perform as expected. See the documentation on the romanization and examples in our welcome page.",
            "id": "krung",
            "languages": {
                "krr-khmr": {
                    "displayName": "Krung (Khmer)",
                    "languageName": "Krung",
                    "scriptName": "Khmer"
                }
            },
            "name": "Krung",
            "lastModifiedDate": "2020-06-12T00:39:45.105Z",
            "sourcePath": "release/k/krung",
            "version": "1.0.1",
            "packageFilename": "krung.kmp",
            "jsFilename": "krung.js",
            "encodings": [
                "unicode"
            ],
            "jsFileSize": 117392,
            "packageFileSize": 1324624,
            "packageIncludes": [
                "visualKeyboard",
                "documentation",
                "welcome",
                "fonts"
            ],
            "minKeymanVersion": "10.0",
            "helpLink": "https://help.keyman.com/keyboard/krung",
            "platformSupport": {
                "windows": "full",
                "macos": "full",
                "linux": "full",
                "android": "full",
                "ios": "full",
                "desktopWeb": "full",
                "mobileWeb": "full"
            },
            "match": {
                "name": null,
                "type": "description",
                "weight": 10,
                "downloads": 1,
                "finalWeight": 16.931471805599454
            }
        }
    ],
    "context": {
        "range": "Keyboards matching 'khmer'",
        "text": "khmer",
        "pageSize": 10,
        "pageNumber": 1,
        "totalRows": 5,
        "totalPages": 1
    }
}
```

* [`q=c:id:et&p=2`](https://api.keyman.com/search/2.0?q=c:id:et&f=1&p=2)

```json
{
    "keyboards": [
        {
            "id": "gff_mym_7",
            "name": "Me'en (Ethi)",
            "description": "Keyboard for the Me'en, Suri, Mursi, and Dizin languages using the Ethiopic script. The languages are now primarily using a Latin orthography.",
            "jsFilename": "gff_mym_7.js",
            "platformSupport": {
                "desktopWeb": "full",
                "ios": "basic",
                "android": "basic"
            },
            "version": "1.0",
            "license": "mit",
            "languages": {
                "mdx-ethi": {
                    "font": {
                        "family": "GeezWeb",
                        "source": [
                            "wookianos.ttf",
                            "ETHIOPI0.eot",
                            "wookianos.mobileconfig"
                        ]
                    },
                    "displayName": "Dizin (Ethiopic)",
                    "languageName": "Dizin",
                    "scriptName": "Ethiopic"
                },
                "mym-ethi": {
                    "font": {
                        "family": "GeezWeb",
                        "source": [
                            "wookianos.ttf",
                            "ETHIOPI0.eot",
                            "wookianos.mobileconfig"
                        ]
                    },
                    "displayName": "Me'en (Ethiopic)",
                    "languageName": "Me'en",
                    "scriptName": "Ethiopic"
                },
                "muz-ethi": {
                    "font": {
                        "family": "GeezWeb",
                        "source": [
                            "wookianos.ttf",
                            "ETHIOPI0.eot",
                            "wookianos.mobileconfig"
                        ]
                    },
                    "displayName": "Mursi (Ethiopic)",
                    "languageName": "Mursi",
                    "scriptName": "Ethiopic"
                },
                "suq-ethi": {
                    "font": {
                        "family": "GeezWeb",
                        "source": [
                            "wookianos.ttf",
                            "ETHIOPI0.eot",
                            "wookianos.mobileconfig"
                        ]
                    },
                    "displayName": "Suri (Ethiopic)",
                    "languageName": "Suri",
                    "scriptName": "Ethiopic"
                }
            },
            "lastModifiedDate": "2014-03-21T16:22:19Z",
            "sourcePath": "legacy/gff/gff_mym_7",
            "encodings": [
                "unicode"
            ],
            "jsFileSize": 22421,
            "minKeymanVersion": "5.0",
            "helpLink": "https://help.keyman.com/keyboard/gff_mym_7",
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 4,
                "downloads": 0,
                "finalWeight": 4,
                "tag": "mdx-ethi"
            }
        },
        {
            "id": "lingfilsemitica",
            "name": "LingfilSemitica",
            "description": "For transcription of Semitic languages and dialects. Also IPA symbols. Adapted primarily for the Swedish national standard (hardware) keyboard",
            "authorName": "Bo Isaksson",
            "license": "freeware",
            "lastModifiedDate": "2009-01-09T11:03:27Z",
            "links": [
                {
                    "name": "Transcribing Semitic Languages",
                    "url": "http://www.lingfil.uu.se/afro/semitiska/forskarutbildning/teknikaliteter.html"
                },
                {
                    "name": "User's manual",
                    "url": "http://www.anst.uu.se/boisak/lingfilsemitica/welcome.htm"
                },
                {
                    "name": "Installation instructions",
                    "url": "http://www.anst.uu.se/boisak/lingfilsemitica/readme.htm"
                }
            ],
            "packageFilename": "lingfilsemitica.kmp",
            "encodings": [
                "unicode"
            ],
            "packageIncludes": [
                "documentation",
                "visualKeyboard",
                "welcome"
            ],
            "version": "3.6.0",
            "minKeymanVersion": "7.0",
            "platformSupport": {
                "windows": "full",
                "macos": "full"
            },
            "legacyId": 404,
            "documentationFilename": "welcome.htm",
            "languages": {
                "adf": {
                    "displayName": "Dhofari Arabic",
                    "languageName": "Dhofari Arabic"
                },
                "arz": {
                    "displayName": "Egyptian Arabic",
                    "languageName": "Egyptian Arabic"
                },
                "ayh": {
                    "displayName": "Hadrami Arabic",
                    "languageName": "Hadrami Arabic"
                },
                "acw": {
                    "displayName": "Hijazi Arabic",
                    "languageName": "Hijazi Arabic"
                },
                "acm": {
                    "displayName": "Mesopotamian Arabic",
                    "languageName": "Mesopotamian Arabic"
                },
                "ars": {
                    "displayName": "Najdi Arabic",
                    "languageName": "Najdi Arabic"
                },
                "acx": {
                    "displayName": "Omani Arabic",
                    "languageName": "Omani Arabic"
                },
                "ayn": {
                    "displayName": "Sanaani Arabic",
                    "languageName": "Sanaani Arabic"
                },
                "arb": {
                    "displayName": "Standard Arabic",
                    "languageName": "Standard Arabic"
                },
                "acq": {
                    "displayName": "Ta'izzi-Adeni Arabic",
                    "languageName": "Ta'izzi-Adeni Arabic"
                },
                "aii": {
                    "displayName": "Assyrian Neo-Aramaic",
                    "languageName": "Assyrian Neo-Aramaic"
                },
                "gez": {
                    "displayName": "Geez",
                    "languageName": "Geez"
                },
                "he": {
                    "displayName": "Hebrew",
                    "languageName": "Hebrew"
                },
                "hbo": {
                    "displayName": "Ancient Hebrew",
                    "languageName": "Ancient Hebrew"
                },
                "jdt": {
                    "displayName": "Judeo-Tat",
                    "languageName": "Judeo-Tat"
                },
                "sqt": {
                    "displayName": "Soqotri",
                    "languageName": "Soqotri"
                },
                "syc": {
                    "displayName": "Classical Syriac",
                    "languageName": "Classical Syriac"
                }
            },
            "authorEmail": "bo.isaksson@lingfil.uu.se",
            "sourcePath": "legacy/l/lingfilsemitica",
            "packageFileSize": 165750,
            "documentationFileSize": 700345,
            "helpLink": "https://help.keyman.com/keyboard/lingfilsemitica",
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 13,
                "finalWeight": 3.6390573296152584,
                "tag": "gez"
            }
        },
        {
            "id": "gff-awn-powerpack-7",
            "name": "GFF Awngi Language Keyboard + Font Power Pack",
            "description": "<p>An intuitive, easy to use, keyboard for entering Awngi with standard English keyboards according to the GFF convention for Ethiopic script languages.</p>    <p><a href='http://ethiopic.keymankeyboards.com/' onclick=\"if(typeof pageTracker == 'undefined') return true; pageTracker._link(this.href); return false;\">Compare different Ethiopic keyboards online</a> now with KeymanWeb (no download required).</p>    ",
            "authorName": "The Ge'ez Frontier Foundation",
            "license": "freeware",
            "lastModifiedDate": "2012-03-20T10:58:49Z",
            "links": [
                {
                    "name": "Principles and Specification for Mnemonic Ethiopic Keyboards",
                    "url": "http://keyboards.ethiopic.org/specification/"
                }
            ],
            "packageFilename": "gff-awn-powerpack-7.kmp",
            "encodings": [
                "unicode"
            ],
            "packageIncludes": [
                "fonts",
                "documentation",
                "visualKeyboard",
                "welcome"
            ],
            "version": "8",
            "minKeymanVersion": "7.0",
            "platformSupport": {
                "windows": "full",
                "macos": "full"
            },
            "legacyId": 456,
            "documentationFilename": "awngityping-english.pdf",
            "languages": {
                "awn": {
                    "displayName": "Awngi",
                    "languageName": "Awngi"
                }
            },
            "authorEmail": "keyboards@ethiopic.org",
            "sourcePath": "legacy/gff/gff-awn-powerpack-7",
            "packageFileSize": 2472717,
            "documentationFileSize": 246332,
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 8,
                "finalWeight": 3.1972245773362196,
                "tag": "awn"
            }
        },
        {
            "name": "Gurage",
            "license": "mit",
            "languages": {
                "sgw-ethi": {
                    "font": {
                        "family": "Zebidar",
                        "source": [
                            "Zebidar-R.ttf"
                        ]
                    },
                    "displayName": "Sebat Bet Gurage (Ethiopic)",
                    "languageName": "Sebat Bet Gurage",
                    "scriptName": "Ethiopic"
                }
            },
            "lastModifiedDate": "2018-12-02T13:14:00Z",
            "description": "This is a  Gurage (\u1309\u122b\u130c, ISO-639-2  sgw) language mnemonic input method supporting the experimental orthography devised by Dr. Fekede Menuta. It requires the corresponding Zebidar font provided with this package.",
            "id": "gff_gurage",
            "authorName": "The Ge\u2019ez Frontier Foundation",
            "authorEmail": "keyboards@ethiopic.org",
            "sourcePath": "release/gff/gff_gurage",
            "version": "0.6.1",
            "packageFilename": "gff_gurage.kmp",
            "encodings": [
                "unicode"
            ],
            "packageFileSize": 1104835,
            "packageIncludes": [
                "welcome",
                "visualKeyboard",
                "documentation",
                "fonts"
            ],
            "minKeymanVersion": "9.0",
            "helpLink": "https://help.keyman.com/keyboard/gff_gurage",
            "platformSupport": {
                "windows": "full",
                "macos": "full",
                "linux": "full"
            },
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 8,
                "finalWeight": 3.1972245773362196,
                "tag": "sgw-ethi"
            }
        },
        {
            "id": "harethi",
            "name": "Harari (Sabai harfi)",
            "description": "This keyboard layout was designed for use with the \r\nrevised Harari Ethiopic orthography. It uses the Unified Harari keyboard layout and is suitable for people who are familiar with the revised Harari Latin orthography.",
            "authorName": "Vicnet, State Library of Victoria",
            "license": "freeware",
            "lastModifiedDate": "2009-10-23T08:22:14Z",
            "links": [
                {
                    "name": "Open Road: Harari resources",
                    "url": "http://www.openroad.net.au/languages/african/harari/"
                }
            ],
            "packageFilename": "harethi.kmp",
            "encodings": [
                "unicode"
            ],
            "packageIncludes": [
                "fonts",
                "documentation",
                "visualKeyboard",
                "welcome"
            ],
            "version": "2.1",
            "minKeymanVersion": "7.0",
            "platformSupport": {
                "windows": "full",
                "macos": "full"
            },
            "legacyId": 615,
            "documentationFilename": "harari-keyman-20-20090422.pdf",
            "languages": {
                "har": {
                    "displayName": "Harari",
                    "languageName": "Harari"
                }
            },
            "authorEmail": "support@openroad.net.au",
            "sourcePath": "legacy/h/harethi",
            "packageFileSize": 241753,
            "documentationFileSize": 1700405,
            "helpLink": "https://help.keyman.com/keyboard/harethi",
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 5,
                "finalWeight": 2.791759469228055,
                "tag": "har"
            }
        },
        {
            "license": "mit",
            "description": "<p><b>Malar Braille Keyboard</b> is designed to type Unicode Braille Patterns using a normal English (QWERTY) keyboard.</p>",
            "id": "malar_braille",
            "languages": {
                "en-brai": {
                    "displayName": "English (Braille)",
                    "languageName": "English",
                    "scriptName": "Braille"
                },
                "af-brai": {
                    "displayName": "Afrikaans (Braille)",
                    "languageName": "Afrikaans",
                    "scriptName": "Braille"
                },
                "aln-brai": {
                    "displayName": "Gheg Albanian (Braille)",
                    "languageName": "Gheg Albanian",
                    "scriptName": "Braille"
                },
                "am-brai": {
                    "displayName": "Amharic (Braille)",
                    "languageName": "Amharic",
                    "scriptName": "Braille"
                },
                "arb-brai": {
                    "displayName": "Standard Arabic (Braille)",
                    "languageName": "Standard Arabic",
                    "scriptName": "Braille"
                },
                "ar-brai": {
                    "displayName": "Arabic (Braille)",
                    "languageName": "Arabic",
                    "scriptName": "Braille"
                },
                "arz-brai": {
                    "displayName": "Egyptian Arabic (Braille)",
                    "languageName": "Egyptian Arabic",
                    "scriptName": "Braille"
                },
                "az-brai": {
                    "displayName": "Azerbaijani (Braille)",
                    "languageName": "Azerbaijani",
                    "scriptName": "Braille"
                },
                "azj-brai": {
                    "displayName": "North Azerbaijani (Braille)",
                    "languageName": "North Azerbaijani",
                    "scriptName": "Braille"
                },
                "bcl-brai": {
                    "displayName": "Central Bikol (Braille)",
                    "languageName": "Central Bikol",
                    "scriptName": "Braille"
                },
                "be-brai": {
                    "displayName": "Belarusian (Braille)",
                    "languageName": "Belarusian",
                    "scriptName": "Braille"
                },
                "bem-brai": {
                    "displayName": "Bemba (Zambia) (Braille)",
                    "languageName": "Bemba (Zambia)",
                    "scriptName": "Braille"
                },
                "bg-brai": {
                    "displayName": "Bulgarian (Braille)",
                    "languageName": "Bulgarian",
                    "scriptName": "Braille"
                },
                "bik-brai": {
                    "displayName": "Bikol (Braille)",
                    "languageName": "Bikol",
                    "scriptName": "Braille"
                },
                "bn-brai": {
                    "displayName": "Bengali (Braille)",
                    "languageName": "Bengali",
                    "scriptName": "Braille"
                },
                "bud-brai": {
                    "displayName": "Ntcham (Braille)",
                    "languageName": "Ntcham",
                    "scriptName": "Braille"
                },
                "cbk-brai": {
                    "displayName": "Chavacano (Braille)",
                    "languageName": "Chavacano",
                    "scriptName": "Braille"
                },
                "ceb-brai": {
                    "displayName": "Cebuano (Braille)",
                    "languageName": "Cebuano",
                    "scriptName": "Braille"
                },
                "cmn-brai": {
                    "displayName": "Mandarin Chinese (Braille)",
                    "languageName": "Mandarin Chinese",
                    "scriptName": "Braille"
                },
                "cs-brai": {
                    "displayName": "Czech (Braille)",
                    "languageName": "Czech",
                    "scriptName": "Braille"
                },
                "cy-brai": {
                    "displayName": "Welsh (Braille)",
                    "languageName": "Welsh",
                    "scriptName": "Braille"
                },
                "da-brai": {
                    "displayName": "Danish (Braille)",
                    "languageName": "Danish",
                    "scriptName": "Braille"
                },
                "de-brai": {
                    "displayName": "German (Braille)",
                    "languageName": "German",
                    "scriptName": "Braille"
                },
                "dje-brai": {
                    "displayName": "Zarma (Braille)",
                    "languageName": "Zarma",
                    "scriptName": "Braille"
                },
                "ee-brai": {
                    "displayName": "Ewe (Braille)",
                    "languageName": "Ewe",
                    "scriptName": "Braille"
                },
                "el-brai": {
                    "displayName": "Modern Greek (1453-) (Braille)",
                    "languageName": "Modern Greek (1453-)",
                    "scriptName": "Braille"
                },
                "es-brai": {
                    "displayName": "Spanish (Braille)",
                    "languageName": "Spanish",
                    "scriptName": "Braille"
                },
                "et-brai": {
                    "displayName": "Estonian (Braille)",
                    "languageName": "Estonian",
                    "scriptName": "Braille"
                },
                "fi-brai": {
                    "displayName": "Finnish (Braille)",
                    "languageName": "Finnish",
                    "scriptName": "Braille"
                },
                "fr-brai": {
                    "displayName": "French (Braille)",
                    "languageName": "French",
                    "scriptName": "Braille"
                },
                "grt-brai": {
                    "displayName": "Garo (Braille)",
                    "languageName": "Garo",
                    "scriptName": "Braille"
                },
                "gu-brai": {
                    "displayName": "Gujarati (Braille)",
                    "languageName": "Gujarati",
                    "scriptName": "Braille"
                },
                "ha-brai": {
                    "displayName": "Hausa (Braille)",
                    "languageName": "Hausa",
                    "scriptName": "Braille"
                },
                "he-brai": {
                    "displayName": "Hebrew (Braille)",
                    "languageName": "Hebrew",
                    "scriptName": "Braille"
                },
                "hi-brai": {
                    "displayName": "Hindi (Braille)",
                    "languageName": "Hindi",
                    "scriptName": "Braille"
                },
                "hil-brai": {
                    "displayName": "Hiligaynon (Braille)",
                    "languageName": "Hiligaynon",
                    "scriptName": "Braille"
                },
                "ho-brai": {
                    "displayName": "Hiri Motu (Braille)",
                    "languageName": "Hiri Motu",
                    "scriptName": "Braille"
                },
                "hr-brai": {
                    "displayName": "Croatian (Braille)",
                    "languageName": "Croatian",
                    "scriptName": "Braille"
                },
                "hu-brai": {
                    "displayName": "Hungarian (Braille)",
                    "languageName": "Hungarian",
                    "scriptName": "Braille"
                },
                "hy-brai": {
                    "displayName": "Armenian (Braille)",
                    "languageName": "Armenian",
                    "scriptName": "Braille"
                },
                "id-brai": {
                    "displayName": "Indonesian (Braille)",
                    "languageName": "Indonesian",
                    "scriptName": "Braille"
                },
                "ilo-brai": {
                    "displayName": "Iloko (Braille)",
                    "languageName": "Iloko",
                    "scriptName": "Braille"
                },
                "it-brai": {
                    "displayName": "Italian (Braille)",
                    "languageName": "Italian",
                    "scriptName": "Braille"
                },
                "ja-brai": {
                    "displayName": "Japanese (Braille)",
                    "languageName": "Japanese",
                    "scriptName": "Braille"
                },
                "ka-brai": {
                    "displayName": "Georgian (Braille)",
                    "languageName": "Georgian",
                    "scriptName": "Braille"
                },
                "kbp-brai": {
                    "displayName": "Kabiy\u00e8 (Braille)",
                    "languageName": "Kabiy\u00e8",
                    "scriptName": "Braille"
                },
                "khk-brai": {
                    "displayName": "Halh Mongolian (Braille)",
                    "languageName": "Halh Mongolian",
                    "scriptName": "Braille"
                },
                "kj-brai": {
                    "displayName": "Kuanyama (Braille)",
                    "languageName": "Kuanyama",
                    "scriptName": "Braille"
                },
                "kk-brai": {
                    "displayName": "Kazakh (Braille)",
                    "languageName": "Kazakh",
                    "scriptName": "Braille"
                },
                "kn-brai": {
                    "displayName": "Kannada (Braille)",
                    "languageName": "Kannada",
                    "scriptName": "Braille"
                },
                "ko-brai": {
                    "displayName": "Korean (Braille)",
                    "languageName": "Korean",
                    "scriptName": "Braille"
                },
                "lus-brai": {
                    "displayName": "Lushai (Braille)",
                    "languageName": "Lushai",
                    "scriptName": "Braille"
                },
                "lv-brai": {
                    "displayName": "Latvian (Braille)",
                    "languageName": "Latvian",
                    "scriptName": "Braille"
                },
                "mg-brai": {
                    "displayName": "Malagasy (Braille)",
                    "languageName": "Malagasy",
                    "scriptName": "Braille"
                },
                "mk-brai": {
                    "displayName": "Macedonian (Braille)",
                    "languageName": "Macedonian",
                    "scriptName": "Braille"
                },
                "ml-brai": {
                    "displayName": "Malayalam (Braille)",
                    "languageName": "Malayalam",
                    "scriptName": "Braille"
                },
                "mn-brai": {
                    "displayName": "Mongolian (Braille)",
                    "languageName": "Mongolian",
                    "scriptName": "Braille"
                },
                "mni-brai": {
                    "displayName": "Manipuri (Braille)",
                    "languageName": "Manipuri",
                    "scriptName": "Braille"
                },
                "mos-brai": {
                    "displayName": "Mossi (Braille)",
                    "languageName": "Mossi",
                    "scriptName": "Braille"
                },
                "mr-brai": {
                    "displayName": "Marathi (Braille)",
                    "languageName": "Marathi",
                    "scriptName": "Braille"
                },
                "ms-brai": {
                    "displayName": "Malay (macrolanguage) (Braille)",
                    "languageName": "Malay (macrolanguage)",
                    "scriptName": "Braille"
                },
                "mt-brai": {
                    "displayName": "Maltese (Braille)",
                    "languageName": "Maltese",
                    "scriptName": "Braille"
                },
                "my-brai": {
                    "displayName": "Burmese (Braille)",
                    "languageName": "Burmese",
                    "scriptName": "Braille"
                },
                "ne-brai": {
                    "displayName": "Nepali (macrolanguage) (Braille)",
                    "languageName": "Nepali (macrolanguage)",
                    "scriptName": "Braille"
                },
                "nl-brai": {
                    "displayName": "Dutch (Braille)",
                    "languageName": "Dutch",
                    "scriptName": "Braille"
                },
                "npi-brai": {
                    "displayName": "Nepali (individual language) (Braille)",
                    "languageName": "Nepali (individual language)",
                    "scriptName": "Braille"
                },
                "nr-brai": {
                    "displayName": "South Ndebele (Braille)",
                    "languageName": "South Ndebele",
                    "scriptName": "Braille"
                },
                "nso-brai": {
                    "displayName": "Pedi (Braille)",
                    "languageName": "Pedi",
                    "scriptName": "Braille"
                },
                "ny-brai": {
                    "displayName": "Nyanja (Braille)",
                    "languageName": "Nyanja",
                    "scriptName": "Braille"
                },
                "or-brai": {
                    "displayName": "Oriya (macrolanguage) (Braille)",
                    "languageName": "Oriya (macrolanguage)",
                    "scriptName": "Braille"
                },
                "ory-brai": {
                    "displayName": "Odia (individual language) (Braille)",
                    "languageName": "Odia (individual language)",
                    "scriptName": "Braille"
                },
                "pag-brai": {
                    "displayName": "Pangasinan (Braille)",
                    "languageName": "Pangasinan",
                    "scriptName": "Braille"
                },
                "pam-brai": {
                    "displayName": "Pampanga (Braille)",
                    "languageName": "Pampanga",
                    "scriptName": "Braille"
                },
                "pl-brai": {
                    "displayName": "Polish (Braille)",
                    "languageName": "Polish",
                    "scriptName": "Braille"
                },
                "plt-brai": {
                    "displayName": "Plateau Malagasy (Braille)",
                    "languageName": "Plateau Malagasy",
                    "scriptName": "Braille"
                },
                "pt-brai": {
                    "displayName": "Portuguese (Braille)",
                    "languageName": "Portuguese",
                    "scriptName": "Braille"
                },
                "rn-brai": {
                    "displayName": "Rundi (Braille)",
                    "languageName": "Rundi",
                    "scriptName": "Braille"
                },
                "ro-brai": {
                    "displayName": "Romanian (Braille)",
                    "languageName": "Romanian",
                    "scriptName": "Braille"
                },
                "ru-brai": {
                    "displayName": "Russian (Braille)",
                    "languageName": "Russian",
                    "scriptName": "Braille"
                },
                "rw-brai": {
                    "displayName": "Kinyarwanda (Braille)",
                    "languageName": "Kinyarwanda",
                    "scriptName": "Braille"
                },
                "si-brai": {
                    "displayName": "Sinhala (Braille)",
                    "languageName": "Sinhala",
                    "scriptName": "Braille"
                },
                "sk-brai": {
                    "displayName": "Slovak (Braille)",
                    "languageName": "Slovak",
                    "scriptName": "Braille"
                },
                "sl-brai": {
                    "displayName": "Slovenian (Braille)",
                    "languageName": "Slovenian",
                    "scriptName": "Braille"
                },
                "sn-brai": {
                    "displayName": "Shona (Braille)",
                    "languageName": "Shona",
                    "scriptName": "Braille"
                },
                "sng-brai": {
                    "displayName": "Sanga (Democratic Republic of Congo) (Braille)",
                    "languageName": "Sanga (Democratic Republic of Congo)",
                    "scriptName": "Braille"
                },
                "sq-brai": {
                    "displayName": "Albanian (Braille)",
                    "languageName": "Albanian",
                    "scriptName": "Braille"
                },
                "sr-brai": {
                    "displayName": "Serbian (Braille)",
                    "languageName": "Serbian",
                    "scriptName": "Braille"
                },
                "sv-brai": {
                    "displayName": "Swedish (Braille)",
                    "languageName": "Swedish",
                    "scriptName": "Braille"
                },
                "swh-brai": {
                    "displayName": "Swahili (individual language) (Braille)",
                    "languageName": "Swahili (individual language)",
                    "scriptName": "Braille"
                },
                "ta-brai": {
                    "displayName": "Tamil (Braille)",
                    "languageName": "Tamil",
                    "scriptName": "Braille"
                },
                "te-brai": {
                    "displayName": "Telugu (Braille)",
                    "languageName": "Telugu",
                    "scriptName": "Braille"
                },
                "th-brai": {
                    "displayName": "Thai (Braille)",
                    "languageName": "Thai",
                    "scriptName": "Braille"
                },
                "tl-brai": {
                    "displayName": "Tagalog (Braille)",
                    "languageName": "Tagalog",
                    "scriptName": "Braille"
                },
                "tr-brai": {
                    "displayName": "Turkish (Braille)",
                    "languageName": "Turkish",
                    "scriptName": "Braille"
                },
                "ts-brai": {
                    "displayName": "Tsonga (Braille)",
                    "languageName": "Tsonga",
                    "scriptName": "Braille"
                },
                "ur-brai": {
                    "displayName": "Urdu (Braille)",
                    "languageName": "Urdu",
                    "scriptName": "Braille"
                },
                "uz-brai": {
                    "displayName": "Uzbek (Braille)",
                    "languageName": "Uzbek",
                    "scriptName": "Braille"
                },
                "uzn-brai": {
                    "displayName": "Northern Uzbek (Braille)",
                    "languageName": "Northern Uzbek",
                    "scriptName": "Braille"
                },
                "ve-brai": {
                    "displayName": "Venda (Braille)",
                    "languageName": "Venda",
                    "scriptName": "Braille"
                },
                "vi-brai": {
                    "displayName": "Vietnamese (Braille)",
                    "languageName": "Vietnamese",
                    "scriptName": "Braille"
                },
                "war-brai": {
                    "displayName": "Waray (Philippines) (Braille)",
                    "languageName": "Waray (Philippines)",
                    "scriptName": "Braille"
                },
                "xh-brai": {
                    "displayName": "Xhosa (Braille)",
                    "languageName": "Xhosa",
                    "scriptName": "Braille"
                },
                "xon-brai": {
                    "displayName": "Konkomba (Braille)",
                    "languageName": "Konkomba",
                    "scriptName": "Braille"
                },
                "yo-brai": {
                    "displayName": "Yoruba (Braille)",
                    "languageName": "Yoruba",
                    "scriptName": "Braille"
                },
                "yue-brai": {
                    "displayName": "Yue Chinese (Braille)",
                    "languageName": "Yue Chinese",
                    "scriptName": "Braille"
                },
                "zh-brai": {
                    "displayName": "Chinese (Braille)",
                    "languageName": "Chinese",
                    "scriptName": "Braille"
                },
                "zsm-brai": {
                    "displayName": "Standard Malay (Braille)",
                    "languageName": "Standard Malay",
                    "scriptName": "Braille"
                },
                "zu-brai": {
                    "displayName": "Zulu (Braille)",
                    "languageName": "Zulu",
                    "scriptName": "Braille"
                }
            },
            "name": "Malar Braille",
            "authorName": "Ramesh Kunnappully",
            "authorEmail": "ramesh1@protonmail.com",
            "lastModifiedDate": "2020-06-12T00:39:51.925Z",
            "sourcePath": "release/m/malar_braille",
            "version": "1.0",
            "packageFilename": "malar_braille.kmp",
            "jsFilename": "malar_braille.js",
            "encodings": [
                "unicode"
            ],
            "jsFileSize": 305407,
            "packageFileSize": 104484,
            "packageIncludes": [
                "visualKeyboard",
                "documentation",
                "welcome"
            ],
            "minKeymanVersion": "10.0",
            "helpLink": "https://help.keyman.com/keyboard/malar_braille",
            "platformSupport": {
                "windows": "full",
                "macos": "full",
                "linux": "full",
                "android": "full",
                "ios": "full",
                "desktopWeb": "full",
                "mobileWeb": "full"
            },
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 5,
                "finalWeight": 2.791759469228055,
                "tag": "am-brai"
            }
        },
        {
            "id": "gff-sgw-powerpack-7",
            "name": "GFF Sebatbeit Language Keyboard + Font Power Pack",
            "description": "<p>An intuitive, easy to use, keyboard for entering Sebat Bet Gurage (Sebatbeit) with standard English keyboards according to the GFF convention for Ethiopic script languages.</p>    <p><a href='http://ethiopic.keymankeyboards.com/' onclick=\"if(typeof pageTracker == 'undefined') return true; pageTracker._link(this.href); return false;\">Compare different Ethiopic keyboards online</a> now with KeymanWeb (no download required).</p>  ",
            "authorName": "The Ge'ez Frontier Foundation",
            "license": "freeware",
            "lastModifiedDate": "2012-03-20T10:59:05Z",
            "links": [
                {
                    "name": "Principles and Specification for Mnemonic Ethiopic Keyboards",
                    "url": "http://keyboards.ethiopic.org/specification/"
                }
            ],
            "packageFilename": "gff-sgw-powerpack-7.kmp",
            "encodings": [
                "unicode"
            ],
            "packageIncludes": [
                "fonts",
                "documentation",
                "visualKeyboard",
                "welcome"
            ],
            "version": "8",
            "minKeymanVersion": "7.0",
            "platformSupport": {
                "windows": "full",
                "macos": "full"
            },
            "legacyId": 463,
            "documentationFilename": "sebatbeittyping-english.pdf",
            "languages": {
                "sgw": {
                    "displayName": "Sebat Bet Gurage",
                    "languageName": "Sebat Bet Gurage"
                }
            },
            "authorEmail": "keyboards@ethiopic.org",
            "sourcePath": "legacy/gff/gff-sgw-powerpack-7",
            "packageFileSize": 2462241,
            "documentationFileSize": 234960,
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 3,
                "finalWeight": 2.386294361119891,
                "tag": "sgw"
            }
        },
        {
            "id": "hararab",
            "name": "Harari (Arabi harfi)",
            "description": "This keyboard layout was designed for use with the revised Harari Arabic orthography. It uses the Unified Harari keyboard layout and is suitable for people who are familiar with the revised Harari Latin orthography.",
            "authorName": "Vicnet, State Library of Victoria",
            "license": "freeware",
            "lastModifiedDate": "2009-10-23T08:21:23Z",
            "links": [
                {
                    "name": "Open Road Harari resources",
                    "url": "http://www.openroad.net.au/languages/african/harari/"
                }
            ],
            "packageFilename": "hararab.kmp",
            "encodings": [
                "unicode"
            ],
            "packageIncludes": [
                "fonts",
                "documentation",
                "visualKeyboard",
                "welcome"
            ],
            "version": "2.1",
            "minKeymanVersion": "7.0",
            "platformSupport": {
                "windows": "full",
                "macos": "full"
            },
            "legacyId": 616,
            "documentationFilename": "harari-keyman-20-20090422.pdf",
            "languages": {
                "har": {
                    "displayName": "Harari",
                    "languageName": "Harari"
                }
            },
            "authorEmail": "support@openroad.net.au",
            "sourcePath": "legacy/h/hararab",
            "packageFileSize": 251283,
            "documentationFileSize": 1700405,
            "helpLink": "https://help.keyman.com/keyboard/hararab",
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 3,
                "finalWeight": 2.386294361119891,
                "tag": "har"
            }
        },
        {
            "license": "mit",
            "languages": {
                "har-latn": {
                    "displayName": "Harari (Latin)",
                    "languageName": "Harari",
                    "scriptName": "Latin"
                }
            },
            "description": "<p>Harari Latin keyboard layout.</p>",
            "related": {
                "har10": {
                    "deprecates": true
                }
            },
            "id": "el_harari_latin",
            "name": "Harari (Latin)",
            "authorName": "Andrew Cunningham",
            "authorEmail": "lang.support@gmail.com",
            "lastModifiedDate": "2020-06-12T00:37:44.059Z",
            "sourcePath": "release/el/el_harari_latin",
            "version": "1.1.1",
            "packageFilename": "el_harari_latin.kmp",
            "encodings": [
                "unicode"
            ],
            "packageFileSize": 60848,
            "packageIncludes": [
                "welcome",
                "visualKeyboard"
            ],
            "minKeymanVersion": "10.0",
            "helpLink": "https://help.keyman.com/keyboard/el_harari_latin",
            "platformSupport": {
                "windows": "full"
            },
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 2,
                "finalWeight": 2.09861228866811,
                "tag": "har-latn"
            }
        },
        {
            "id": "gff_awn_7",
            "name": "Awngi",
            "jsFilename": "gff_awn_7.js",
            "platformSupport": {
                "desktopWeb": "full",
                "ios": "basic",
                "android": "basic"
            },
            "version": "1.0",
            "license": "mit",
            "languages": {
                "awn": {
                    "font": {
                        "family": "GeezWeb",
                        "source": [
                            "wookianos.ttf",
                            "ETHIOPI0.eot",
                            "wookianos.mobileconfig"
                        ]
                    },
                    "displayName": "Awngi",
                    "languageName": "Awngi"
                }
            },
            "lastModifiedDate": "2014-03-21T16:22:19Z",
            "sourcePath": "legacy/gff/gff_awn_7",
            "encodings": [
                "unicode"
            ],
            "jsFileSize": 39374,
            "minKeymanVersion": "5.0",
            "helpLink": "https://help.keyman.com/keyboard/gff_awn_7",
            "match": {
                "name": "ET",
                "type": "country_iso3166_code",
                "weight": 1,
                "downloads": 0,
                "finalWeight": 1,
                "tag": "awn"
            }
        }
    ],
    "context": {
        "range": "Keyboards for country with ISO 3166 code 'et'",
        "text": "et",
        "pageSize": 10,
        "pageNumber": 2,
        "totalRows": 29,
        "totalPages": 3
    }
}
```

## Version History

* 2.0: Released to staging in July 2020
