---
title: What's New
---

## Keyman Engine for Android Breaking Changes: ##
* Moved minimum Android SDK to from 19 to 21 (Android 5.0 Lollipop) with corresponding Chromium minimum release M37 (#2993)
* Keyboards now strictly installed from .kmp keyboard packages. 3rd party apps should include their "default" keyboard and 
  lexical model packages at the project's `assets/` level. KMManager will extract them into `assets/packages/` and 
  `assets/models/` respectively. (No longer append version string to .js keyboard file and manually copy to 
  `assets/cloud/` folder)
    * sil_euro_latin keyboard no longer included as a default installed keyboard 

* Replace Fabric/Crashlytics with Sentry for crash reporting
* build.gradle changes for 3rd party keyboard apps:

```groovy
android {
  // Don't compress kmp files so they can be copied via AssetManager
  aaptOptions {
     noCompress "kmp"
  }

  compileOptions {
    sourceCompatibility = JavaVersion.VERSION_1_8
    targetCompatibility = JavaVersion.VERSION_1_8
  }
}

dependencies {
    implementation 'io.sentry:sentry-android:3.1.0'
    implementation 'androidx.preference:preference:1.1.1'
}
```

* Deprecated KMManager APIs
    * `KMManager.showLanguageList()` - Keyman Engine for Android no longer uses cloud keyboard catalog, so showLanguageList() 
      no longer displays. (Embedded browser used to search for keyboards)
    * `KMManager.KMKey_CustomKeyboard` - "Custom" property for keyboards no longer tracked
    * `KMManager.KMKey_CustomModel` - "Custom" property for lexical models no longer tracked
    * `addKeyboard` - Deprecate syntax using `HashMap<string, string>`. Replace with `<Keyboard>`

## See Also
* [Keyman Engine for Android Documentation](index)