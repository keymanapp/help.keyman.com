
!include ..\..\..\Defines.mak
!include ..\Defines.mak

all:	\
        about.html \
	contact.html \
        contents.html \
	developer.html \
	faq.html \
	glossary.html \
	intro.html \
	kbinstall.html \
	kbremove.html \
	kbusing.html \
	platform.html \
	register.html \
	shadow.html \
	tsf.html \
	uninstall.html \
	using.html \
	website.html \
	whatsnew.html \
        history.html \
        unicode.html

history.php: versionhistory-app
  $(PROGRAM)\bldutil\versionhistory -p $(ROOT)\src\versionhistory.txt history.php kmdist.php

clean:
  -del *.html
  -del history.php

.php.html:
  $(PHP) $< > $@

!include ..\..\..\Target.mak
