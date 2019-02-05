
!include ..\..\..\Defines.mak
!include ..\Defines.mak

all:  imxintro.html \
      imxdll.html \
      imxlib.html

clean:
  -del *.html

.php.html:
  $(PHP) $< > $@
