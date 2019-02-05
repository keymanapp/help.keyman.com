<p>
    The script is intended to be run from the <strong>bash</strong>
    shell. On Windows, <strong>Git Bash</strong> is installed along with <strong>Git</strong> and is the recommended
    build environment (Windows Subsystem for Linux is not currently supported). On macOS and Linux, the compiler requires
    WINE. Here are some of the additional build script parameters:
</p>

<pre class="language-none">
      -c          clean the folder (deletes all intermediate and
                  output files, do this before committing with git)
      -d          build with debug information
      -s          build silently
      -t target   build a specific file, target, which can be
                  a .kmn or .kps file.
      -w          treat build warnings as errors
      -h          get help on build.sh
</pre>
