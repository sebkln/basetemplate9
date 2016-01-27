# Template Foundation TYPO3 6.2

It is good practice to save your TypoScripts, HTML templates etc. in a separate extension. That way you can
- use a distributed version control system to manage your configurations and templates
- keep the fileadmin clean and use it solely for the website's content

This TYPO3 extension can be a base for your website configuration. Add your Stylesheets, JavaScripts and templates and adapt the supplied configurations to your needs. 

It does not contain any Frontend Framework, so you're free to use your favourite Framework or custom templates.

If you intend using **Bootstrap**, you definitely should check [bootstrap_package](https://github.com/benjaminkott/bootstrap_package) out. This extension provides you with a complete integration of Bootstrap in TYPO3.

## Features

- meaningful folder structure to manage your files
- essential **TypoScript** Setup, which you can integrate as a Static Template
- basic **TSconfig**, e.g. useful RTE configurations.
- both TypoScript and TSconfig are divided into smaller partials for more clarity
- all configurations can be easily adjusted

## Installation

1. Copy this extension into the folder **typo3conf/ext/**
2. You may want to rename the extension.
    1. Rename the folder from `basetemplate7` to your desired name, e.g. `clienttemplates`. **Have the naming conventions for extensions in mind!**<sup>[1](#namingconvention)</sup>
    2. Search and replace all occurences of `basetemplate7` with the new chosen name. Replacing is fast and easy if you use a professional text editor and don't use underscores.<sup>[2](#underscores)</sup>
3. Open TYPO3 extension Manager and install the extension. From that moment the TSconfig is used.
4. Include it as a Static Template in your Root Template.
5. Begin to add your Templates and adapt the configuration. Make it yours!

<a name="namingconvention">[1]</a> TYPO3 extensions have some naming conventions.
See: https://typo3.org/extensions/extension-keys/

<a name="underscores">[2]</a> Also **be very careful when using underscores** in your extension name! It is highly encouraged to avoid them.
If you e.g. choose the name `client_templates_2016`, you'll have to use **two notations!**
In links like *EXT:client_templates_2016/link/to/file.css*, use the actual folder name.
When using constants however, you'll have to remove all underscores and prefix `tx_`: *$plugin.tx_clienttemplates2016*!