
!include ..\..\..\Defines.mak
!include ..\Defines.mak

all:    advanced.html \
        groups.html \
        rules.html \
        stores.html \
        vkeys.html 

clean:
  -del *.html

.php.html:
  $(PHP) $< > $@
