<p>
    The script is intended to be run from the <strong>bash</strong>
    shell. On Windows, <strong>Git Bash</strong> is installed along with <strong>Git</strong> and is the recommended
    build environment (Windows Subsystem for Linux is not currently supported). On macOS and Linux, the compiler requires
    WINE. Here are some of the additional build script parameters:
</p>

<pre class="language-none">
      -t          runs tests on models
      -b          creates compiled models
      -c          clean the folder (deletes all intermediate and
                  output files, do this before committing with git)
      -no-npm     skip all npm steps
      -s          build silently
      -h          get help on build.sh
       [target]   The specific model(s) to build. e.g. release or release/nrc/nrc.en.mtnt
                  If omitted, builds all models
</pre>
