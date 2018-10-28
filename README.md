![Rocket ship symbol](Resources/Public/Icons/Extension.svg)

# Templating Starter Kit for TYPO3 v9 LTS

## Introduction 

It is considered good practice to save anything related to your website theme
in a separate extension (a so-called *Site package*):

- HTML (or rather [Fluid](https://docs.typo3.org/typo3cms/ExtbaseGuide/Fluid/Index.html)) templates
- Stylesheets
- JavaScripts
- theme images (like logos and icons)
- any configurations (TypoScript, TSconfig, YAML, ...)
- overrides of third-party extensions (e.g. configuration and templates)
- overrides of the TYPO3 core, e.g. new database fields

This TYPO3 extension can be a base for your website configuration.
Add your Stylesheets, JavaScripts and templates, adapt the supplied configurations to your needs. 

It will not impose any Frontend Framework on you. You're free to use your favourite Framework or custom templates.

You want to use **Bootstrap** for your new website? In that case I recommend the
[bootstrap_package](https://github.com/benjaminkott/bootstrap_package) extension.
This will provide you with a complete integration of Bootstrap in TYPO3.



## Features

- meaningful directory structure to manage your files
- essential **TypoScript** Setup, which you can integrate as a Static Template
- basic **TSconfig**, e.g. useful RTE configurations.
- both TypoScript and TSconfig are divided into smaller partials for more clarity
- all configurations can be easily adjusted



## How to use this extension

### Installation

1. Copy this extension into the folder `typo3conf/ext/` of your TYPO3 installation.
2. You may want to rename the extension.
    1. Rename the folder from `basetemplate9` to your desired name, e.g. `clientname`.
    **Keep the naming conventions for extensions in mind!**<sup>[1](#namingconvention)</sup>
    2. Search and replace all occurences of `basetemplate9` with the new chosen name.
    Replacing is fast and easy if you use a professional text editor and don't use underscores.<sup>[2](#underscores)</sup>
3. Open the **Extension Manager** in the TYPO3 backend and install the extension.
4. Include the *Static Template* of this extension in your TypoScript root template (`sys_template`).
   Make sure that it is loaded last in the list.
   This will allow you to override configurations and templates from other extensions.
5. Include the desired *Page TSconfig* resources in the **page properties** of your root page.
6. Begin to add your HTML/Fluid templates and adapt the configuration.



### Customizing

#### Using BackendLayouts and Fluid templates

For every column you create in a single BackendLayout, you have to set an **individual** `colPos` number.
You should however **reuse** these values across your other BackendLayouts.
It allows the editors to change the layout of a page while keeping the content in place.

Set the `colPos` values wisely. The content of e.g. the top column shouldn't suddenly move to the bottom
when changing layouts.

![BackendLayout, columns 66-33](Resources/Public/Images/BackendLayouts/BELayout_2_columns_66_33.svg)
![BackendLayout, columns 50-50](Resources/Public/Images/BackendLayouts/BELayout_2_columns_50_50.svg)

Linking a BackendLayout to a Fluid template:

````
page.10 {
    file.stdWrap.cObject {
        key.data = pagelayout
        // Important! If you set BackendLayouts through TSconfig, you MUST use the prefix 'pagets__':
        pagets__2_columns_66_33 = TEXT
        pagets__2_columns_66_33.value = EXT:basetemplate9/Resources/Private/Templates/2Columns-66-33.html
        default = TEXT
        default.value = EXT:basetemplate9/Resources/Private/Templates/1Column.html
    }
}
````

The TypoScript `lib.dynamicContent` will take care of rendering the desired column's content
in your Fluid templates.

All you have to do is inserting the following `f:cObject` viewhelper into your Fluid template
and adapt the `colPos` value:

````
<f:cObject typoscriptObjectPath="lib.dynamicContent" data="{colPos: '0'}"/>
````

More details: [TYPO3 Site Package tutorial, Chapter 'Content Mapping'](https://docs.typo3.org/typo3cms/SitePackageTutorial/ContentMapping/Index.html)


#### Overriding third-party extensions

At some point, you'll need to customize templates from extensions like [news](https://extensions.typo3.org/extension/news/).
You should save all these modifications in your Site Package, too.

I recommend to store them inside the subdirectory `Resources/Private/EXT/` to separate them from your website templates.

In case of EXT:news, this will result in the following directory structure:

````
Resources/Private/EXT/news/Templates/
Resources/Private/EXT/news/Partials/
Resources/Private/EXT/news/Layouts/
````

You'll have to set these paths in TypoScript. All TypoScript configurations for third party extensions
should be stored in `Configuration/TypoScript/plugin/plugin.[extensionKey].typoscript`.



## Further hints

### Syntax highlighting
With TYPO3 version 8.7.2, the file extensions *.typoscript* and *.tsconfig* have become the new defaults.
Add these to your editor to benefit from TypoScript syntax highlighting again.
In PhpStorm, open **Settings/Preferences** and add the patterns `*.typoscript` and `*.tsconfig` to TypoScript in **Editor | Code Style**. 


### Footnotes

<a name="namingconvention">[1]</a> TYPO3 extensions have some naming conventions.
See: https://extensions.typo3.org/about-extension-repository/extension-keys/

<a name="underscores">[2]</a> Also **be very careful when using underscores** in your extension name! It is highly encouraged to avoid them.
If you e.g. choose the name `client_templates_2016`, you'll have to use **two notations!**
In links like *EXT:client_templates_2016/link/to/file.css*, use the actual folder name.
When using constants however, you'll have to remove all underscores and prefix `tx_`: *$plugin.tx_clienttemplates2016*!
