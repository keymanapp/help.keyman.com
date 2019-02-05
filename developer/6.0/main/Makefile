
!include ..\..\..\Defines.mak
!include ..\Defines.mak

all:  contents.html \
      intro.html \
      website.html \
      contact.html \
      whatsnew.html \
      creating_keyboards.html \
      creating_packages.html \
      registering.html \
      guide.html \
      licencing.html \
      history.html

history.php: versionhistory-app
  $(PROGRAM)\bldutil\versionhistory -p $(ROOT)\src\versionhistory.txt history.php kmdev.php

clean:
  -del *.html
  -del history.php

.php.html:
  $(PHP) $< > $@

!include ..\..\..\Target.mak
