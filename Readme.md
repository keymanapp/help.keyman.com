# Development

## How to run help.keyman.com.local with Windows IIS

On Windows, you can run in IIS. The live sites currently run on IIS, so this is the best option
for compatibility.

For Windows 10:

0. Make a local copy of the repository by running `git clone https://github.com/keymanapp/help.keyman.com`
   (or, if you want to use a different folder name, use something like
   `git clone https://github.com/keymanapp/help.keyman.com keyman-help`)
1. In Control Panel\Programs\Programs and Features, click Turn Windows features on or off
2. In the Windows Features dialog, select "Internet Information Services".
3. Use the Web Platform Components Installer <https://www.microsoft.com/web/downloads/platform.aspx>
   to install PHP 5.6 or later and URL Rewrite. To do this, first install the Web Platform Installer
   extension, then open "Microsoft Web Platform Installer" and under "Products" select PHP (version
   5.6 or later) and click "Add", then select "URL Rewrite" and click "Add", then "Install". (If the
   Web Platform Installer is unable to install URL Rewrite, try looking for an .msi file at
   <https://www.iis.net/downloads/microsoft/url-rewrite#additionalDownloads>.)
4. In IIS Manager, add a new Website with the Physical path pointing to the folder this `Readme.md`
   file is in.
5. In the binding host name field, enter "help.keyman.com.local".
6. Start an elevated instance of Notepad (that is, use "Run as Administrator" when starting
   Notepad), load "C:\WINDOWS\System32\drivers\etc\hosts" and add the line
   `127.0.0.1  help.keyman.com.local`.
7. You should now be able to navigate to <http://help.keyman.com.local/> on your computer
8. If you get an error, it may be a problem with permissions:

    - With File Explorer navigate to the folder with your local copy of the help repository ("keyman-help.keyman.com", unless you used a shorter name such as "keyman-help" folder in Step 0).
    - Right click on the name of the folder, and select Properties, then select the Security tab. Under the "Group or user names" box, click the edit button.
    - Click "Add"
    - Click inside the "Enter the object names to select" box, then type `\\IUSR; \\IIS_IUSRS`.
    - Click "Check Names" to verify that the entry is valid. (If a name is not valid, a dialog will pop up telling you that. For a valid name, there may not be any feedback.)
    - Make sure the new user has "Read & execute" permission.
    - Should you get a 500.21 error: (Handler "PHP_via_FastCGI" has a bad module "FastCgiModule" in its module list), try using "Turn Windows features on or off" from Control Panel, then going to "Internet Information Services" | "World Wide Web Services" | "Application Development Features" | "CGI" and ticking the empty box for "CGI".

One way to test help files is to create a folder `test` inside the `keyman-help.keyman.com` folder
(or whatever folder name was chosen in step 0 above).
Then the help file (`xyz.php`, for this example) and any supporting files it references are placed in
the `test` folder.
Using a browser to navigate to <http://help.keyman.com.local/test/xyz.php> should display the
help file.

## Using Docker

To run locally with Docker on http://localhost:8055 you can use commands like the following:

### On Windows

In help.keyman.com repo root:

    docker build -t keyman-websites .
    docker run -d -p 8055:80 -v %cd%:/var/www/html/ -e S_KEYMAN_COM=localhost:8054 keyman-websites

In s.keyman.com repo root:

    docker run -d -p 8054:80 -v %cd%:/var/www/html/ keyman-websites

### On Linux

In help.keyman.com repo root:

    docker build -t keyman-websites .
    docker run -d -p 8055:80 -v $(pwd):/var/www/html/ -e S_KEYMAN_COM=localhost:8054 keyman-websites

In s.keyman.com repo root:

    docker run -d -p 8054:80 -v $(pwd):/var/www/html/ keyman-websites
