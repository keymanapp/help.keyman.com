
!include ..\..\..\Defines.mak
!include ..\Defines.mak

all: 	traymenu.html \
	config_addins.html \
	config_options.html \
	config_keyboards.html \
	config_languages.html \
	appinst.html \
	appinst_readme.html \
	appinst_licence.html \
	appinst_installdir.html \
	appinst_options.html \
	appinst_complete.html \
	associate_ext.html \
	about.html \
	keyman_usage.html \
	keyman_licence.html \
	register.html \
	uninstall.html \
	view_package.html \
	view_keyboard.html \
	view_fonts.html \
	view_files.html

clean:
  -del *.html

.php.html:
  $(PHP) $< > $@

