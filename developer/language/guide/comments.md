<div id="phone-menu" markdown="1">

<div id="phone-menu-inner" markdown="1">

<div class="phone-menu-item" markdown="1">

### Product Support {#product-support}

-   [Keyman for Windows](/products/windows/)
-   [Keyman for macOS](/products/mac/)
-   [Keyman for Linux](/products/linux/)
-   [Keymanweb.com](/products/web/)
-   [Keyman for iPhone and iPad](/products/iphone-and-ipad/)
-   [Keyman for Android](/products/android/)
-   [Keyman Bookmarklet](/products/bookmarklet/)
-   [Knowledge Base](/knowledge-base/)

</div>

<div class="phone-menu-item" markdown="1">

### Keyboard Support {#keyboard-support}

-   [Keyboard Home](/keyboard)

</div>

<div class="phone-menu-item" markdown="1">

### Developer Support {#developer-support}

-   [Developer Home](/developer)
-   [Keyman Developer](/developer/current-version/)
-   [Keyman Engine for Web](/developer/engine/web/)
-   [Keyman Engine for iPhone and
    iPad](/developer/engine/iphone-and-ipad/)
-   [Keyman Engine for Android](/developer/engine/android/)
-   [Keyman Engine for Desktop](/developer/engine/desktop/)
-   [Keyman Cloud](/developer/cloud/)

</div>

<div class="phone-menu-item" markdown="1">

### Contact and Search {#contact-and-search}

-   [Contact Us](http://keyman.com/contact)
-   [Search Help](/search/)

</div>

<div class="phone-menu-item" markdown="1">

### Keyman.com Homepage {#keyman.com-homepage}

-   [Keyman.com](http://keyman.com)

</div>

</div>

</div>

<div id="container" markdown="1">

<div class="header" markdown="1">

![](/cdn/dev/img/phonehide.png){#show-phone-menu} [![Keyman
Logo](/cdn/dev/img/logo2dev.png){#logo}](/){#home-link} ![Header
bottom](/cdn/dev/img/headerbar.png){#header-bottom}
[](http://keyman.com){#help}

Keyman.com

![](/cdn/dev/img/helpIcon.png)

</div>

<div id="top-menu-bg" markdown="1">

</div>

<div id="top-menu1" markdown="1">

[![](/cdn/dev/img/icon1.png){#top-menu-icon}](/)

<div class="menu-wrapper" markdown="1">

<div id="keyboards" class="menu-item" markdown="1">

### [Product Support](/products/)<span class="header-triangle">![](/cdn/dev/img/img_trans.png)</span> {#product-support-1}

<div class="menu-item-dropdown" markdown="1">

<div class="menu-dropdown-inner" markdown="1">

-   [Keyman for Windows](/products/windows/)
-   [Keyman for macOS](/products/mac/)
-   [Keyman for Linux](/products/linux/)
-   [Keymanweb.com](/products/web/)
-   [Keyman for iPhone and iPad](/products/iphone-and-ipad/)
-   [Keyman for Android](/products/android/)
-   [Keyman Bookmarklet](/products/bookmarklet/)
-   [Knowledge Base](/knowledge-base/)

</div>

</div>

</div>

<div id="products" class="menu-item" markdown="1">

[](/keyboard/)

### Keyboard Documentation {#keyboard-documentation}

</div>

<div id="developers" class="menu-item" markdown="1">

### [Developer Home](/developer/)<span class="header-triangle">![](/cdn/dev/img/img_trans.png)</span> {#developer-home}

<div class="menu-item-dropdown" markdown="1">

<div class="menu-dropdown-inner" markdown="1">

-   [Keyman Developer](/developer/current-version/)
-   [Keyman Keyboard Language](/developer/language/)
-   [Keyman Engine for Web](/developer/engine/web/)
-   [Keyman Engine for iOS](/developer/engine/iphone-and-ipad/)
-   [Keyman Engine for Android](/developer/engine/android/)
-   [Keyman Engine for Desktop](/developer/engine/desktop/)
-   [Keyman Cloud](/developer/cloud/)

</div>

</div>

</div>

<div id="tavultesoft" class="menu-item" markdown="1">

[](http://keyman.com/contact/)

### Contact Us {#contact-us}

</div>

<div id="menu-search" class="menu-pseudo-item" markdown="1">

<div class="search-wrap" markdown="1">

Search

Search

</div>

</div>

</div>

![](/cdn/dev/img/headerbar.png){#top-menu-bottom}

</div>

<div id="phone-header-spacer" markdown="1">

</div>

<div id="breadcrumbTrail" markdown="1">

[help.keyman.com](/) &gt; [Developer](../../../developer/) &gt;
[Language](../../language/) &gt; [Guide](../guide/) &gt; Comments

</div>

<div class="main" markdown="1">

<div id="section2" markdown="1">

<div class="column-left show-index" markdown="1">

<div id="index" markdown="1">

### Index {#index}

<div id="index-content" markdown="1">

-   [Keyman Developer Help Index](../.././)
    -   [Keyman Keyboard Language](.././)
        -   [Language Structure](./)
            -   [Casing support](casing-support "Casing support")
            -   [Compile Targets](compile-targets "Compile Targets")
            -   [Designing keyboards for use across multiple
                platforms](multi-platform "Designing keyboards for use across multiple platforms")
            -   [Header keywords](headers "Header keywords")
            -   [Keyman language
                history](history "Keyman language history")
            -   [Keyman language
                overview](overview "Keyman language overview")
            -   [Keys, Virtual Keys and Virtual Character
                Keys](virtual-keys "Keys, Virtual Keys and Virtual Character Keys")
            -   [Long lines and
                continuations](long-lines "Long lines and continuations")
            -   [Named Constants](constants "Named Constants")
            -   [Range expansions](expansions "Range expansions")
            -   [Strings](strings "Strings")
            -   [Unicode support](unicode "Unicode support")
            -   [Untitled page.md](comments "Untitled page.md")
            -   [US English keyboard
                layout](us-english "US English keyboard layout")
            -   [Using constraint
                rules](constraints "Using constraint rules")
            -   [Using Groups](groups "Using Groups")
            -   [Using Rules](rules "Using Rules")
            -   [Using Stores](stores "Using Stores")
            -   [Variable stores](variable-stores "Variable stores")

</div>

</div>

</div>

<div class="column-right" markdown="1">

<div id="toc" markdown="1">

### On this page {#on-this-page}

<div id="toc-content" markdown="1">

</div>

</div>

</div>

<div class="wrapper" markdown="1">

# Untitled {#untitled}

<div class="markdown" markdown="1">

# Comments {#reference__struct_comments .title}

Comments must be started with a ` c` character (case-insensitive), and
followed by a space character. The comment continues to the end of the
line and cannot be
[line-extended](long-lines.php "Long lines and continuations"). Comments
can only be included in the last line of a
[line-extended](long-lines.php "Long lines and continuations") line.

## Example {#example}

~~~ language-keyman
c This is a comment line
+ 'a' > 'b'    c This line changes "a" to "b"
+ 'c' > \
        'd'    c A comment here is okay too
~~~

## Version history {#version-history}

Comments were introduced in Keyman 3.0.

</div>

</div>

</div>

</div>

<div class="footer" markdown="1">

<div class="wrapper" markdown="1">

<div class="footer-third" markdown="1">

## Keep me updated {#keep-me-updated .footer-third-title}

<div id="mc_embed_signup" markdown="1">

<div class="mc-field-group" markdown="1">

</div>

<div id="mce-responses" class="clear" markdown="1">

<div id="mce-error-response" class="response" markdown="1"
style="display:none">

</div>

<div id="mce-success-response" class="response" markdown="1"
style="display:none">

</div>

</div>

<div class="button subscribe" markdown="1">

## Subscribe {#subscribe}

</div>

</div>

  

<div id="privacy-policy" markdown="1">

[Privacy
policy](https://software.sil.org/language-software-privacy-policy)

</div>

</div>

<div id="footer-social" class="footer-third" markdown="1">

## Keep in touch {#keep-in-touch .footer-third-title}

<div markdown="1">

[Facebook](https://facebook.com/KeymanApp){target="_blank" icon=""}
[Twitter](https://twitter.com/keyman){target="_blank" icon=""} [Keyman
blog](https://blog.keyman.com/){target="_blank" icon=""}
[GitHub](https://github.com/keymanapp){target="_blank" icon=""} [Keyman
Community](https://community.software.sil.org/c/keyman){#footer-community
target="_blank"}

</div>

</div>

<div class="footer-third sil-logo" markdown="1">

  
[![SIL](/cdn/dev/img/sil-logo-blue-2017_1.png){#sil-logo}](https://www.keyman.com/about/)

Created by [SIL International](https://www.keyman.com/about/)

</div>

</div>

</div>

<div id="footer-tab-support" class="footer-tab-holder" markdown="1">

<div class="footer-tab" markdown="1">

#### [Support](https://community.software.sil.org/c/keyman) {#support}

</div>

</div>

<div id="footer-tab-edit" class="footer-tab-holder" markdown="1">

<div class="footer-tab" markdown="1">

#### [Edit page](https://github.com/keymanapp/help.keyman.com/edit/master/developer/language/guide/comments.md){target="_blank"} {#edit-page}

</div>

</div>

<div id="KeymanWebControl" markdown="1">

</div>

</div>
