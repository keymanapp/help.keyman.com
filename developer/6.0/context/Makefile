
!include ..\..\..\Defines.mak
!include ..\Defines.mak

all:    context.html \
        child_debug.html \
        child_editor.html \
        child_kbdwiz.html \
        child_package.html \
        child_test.html \
        child_viskbd.html \
        tb_message.html \
        tb_charmap.html \
        dlg_file_new.html \
        dlg_tools_vki.html \
        dlg_tools_options.html \
        dlg_help_about.html \
        dlg_help_register.html \
        dlg_welcome.html \
        kmcomp_options.html

clean:
  -del *.html

.php.html:
  $(PHP) $< > $@
