---
title: Comments 
---

Comments must be started with a ` c ` character (case-insensitive), and
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
