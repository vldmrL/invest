A WordPress theme for the Invest.com project
---
Requirements: PHP 7.1+
<br>Frameworks: jQuery-3.5.1, Bootstrap-4.6.0
<br>Core plugins: Advanced Custom Fields Pro, genesis custom blocks.

## Readme links
Document anchors
<!-- - [General description](#description) -->
- [File structure](#file-structure)
- [Theme options](#theme-options)
- [Custom blocks](#custom-blocks)
  - [Block naming](#block-naming)
  - [Block structure](#block-structure)
  - [Block template files](#block-template-files)
- [Theme javascript](#theme-javascript)
  - [Load order](#load-order)
  - [Registering scripts](#registering-javascript-files)
- [Theme css](#theme-css)

## File structure
The project folder will contain files for the main website, blog, and various landing pages.<br>
**General project file structure.** <!-- More details can be found in each folder. -->
```
theme folder/
    block-templates/    - stand-alone block template files (.php, css, scss, js)
    blocks/             - registered gutengerg block files (.php, css, scss, js)
    configure/          - files to include in functions.php
    css/                - theme .css files
    img/                - theme images
    js/                 - theme .js files
    scss/               - theme sourse scss files
    template-parts/     - reusable .php templates
    vendor/             - plugins, frameworks and other tools used in project

```
---
## Theme options
Currently, the following option pages are available from the admin panel.

**Invest theme** 
- default theme styling 
- general company information 
- often used links
- company social profiles
- global tracking code snippets

**Banner setting** 
- all global banner settings.

**Widget setting** 
- data to show in Tradingview widgets.<br>
*All of these options are used globally across the site, please change them with care.*

**Edit Page** screen
- general settings (breadcrumbs, widget in header, color theme restrictions)
- page jsavascript (additional .js file to load on this page, inline javascript)
- page css (additional .css file to load on this page, inline css)

**Edit Post** screen
- marketing (campaign id, affiliate id, and post views). All fields are disabled, they are used to show info passed to CRM


## Custom blocks
The project uses a modular development system where possible.
All website pages should be divided into *"user sreens"* (sections). For this purpose, we use Gutenberg custom blocks functionality, with limited user input.

Blocks are registered and managed by the genesis-custom-blocks WordPress plugin. A user guide and documentation about the plugin can be found [here](https://developer.wpengine.com/genesis-custom-blocks/)

Gutenberg block editor [handbook](https://developer.wordpress.org/block-editor/).

**Block categories** available from Edit Page (or Edit Post) screen:
- *Invest* - general theme blocks, that may be used again later
- *Invest Banners* - reusable banners, usually configured from theme admin panel options page
- *Invest Widgets* - reusable widgets, usually configured from theme admin panel options page
- *Invest-Blank* - template loaders, used for creating pages.

**All blocks should be added to their respectful category!*

---
### Block naming
For *non-blank* blocks, please try to keep `${what}-${where}-${name}` naming structure.<br>
Example: `widget-homepage-market-overview`

For blocks in *Invest-blank* category, the naming is pretty much self-explanatory. <br>
`${type}--&{inpit-fields-avaliable}`<br>
Examples:

```
blank-row--title-subtitle
blank-row--title-subtitle-text-btn
blank-col--image-title
blank-col--image-title-text-btn
```
**blank-row** - parent blocks that have "inner blocks" field available, where another Guttenberg blocks can be placed (images, embed video, text editor, other custom blocks, etc). They should be wrapped with `<section></section>` tags.

**blank-col** - child blocks that can be put inside blank-row--* blocks.

---
### Block structure

**A few common rules:**
- please, follow the [naming](#block-naming)
- all blocks should be added to their respectful category
- block .css and .js files should be located in the same folder as the block.php
- all bock *scripts should be [registered](#registering-javascript-files)!* 
- all user defined fields (content) should be located in *Editor fields*, while all developers fields (ID's, classes, etc) in *inspector fields*
- use human-readable slugs for fields
- dont forget to add logical search keywords
- each block should have a preview
- for [block styling](#block-styling) BEM is requiered

---
### Block template files
For a faster and more smooth workflow we use predefiend *blank blocks* as a template loaders with some user input fields. Input data is passed to templates using `get_template_part($template_path, $template_name , $input_data);` wordpress function. [Refference](https://developer.wordpress.org/reference/functions/get_template_part/).

All blank blocks are accessible from *Invest Blank* category and contain available user input fields in their [naming](#block-naming). 

---

**Core features**
- Each blank block has a *template* input field. It is located in the inspector's field  section on the Edit Page screen (the right pannel).*[screenshot](url)*
- To connect a template, please enter your template path in the following format: `block-templates/folder/template` (without .php extension) into the *template* input field. 
- Each blank block folder has a premade `template.php` file in it. It can be copy/pasted to the desired location for a more comfortable development process. [Example](blocks/blank-row--title-subtitle/template.php).
- All blank blocks follow the same naming logic for field *slugs*. 
---
**General rules**
- Block template files should be located in [block-templates/](block-templates/) folder.
- All template related files (.php, .css, .js, .scss) should have the same name *template.** and placed at the same folder
- If there is a `template.css` file in the folder, it will be enqueued automatically.
- All template ***scripts should be [registered](#registering-javascript-files)!***
- Each template should have a wrapper with unique class-name
- For [block styling](#block-styling) BEM is requiered
---
**Usefull tips**
- By default, you can access input values inside template by using `echo $args['field_slug']`. If you copy/pasted template from a block folder, you can also use variables. Example: `echo $title`.
- If your block or templates need some additional styles or scripts to work, please add them using `wp_enqueue_script(script-id)` and `wp_enqueue_style('style-id')` functions.
- Template path can be can be copy/pasted to *template* input fieild. It has some str_replace() functionality to make windows paths work as well. For VS Code, for example, right click -> Copy Relative Path (or `ctr + shift + C`) should work.


## Theme Javascript
The theme uses [jQuery-3.5.1](https://releases.jquery.com/jquery/) and [Bootstrap-4.6.0](https://getbootstrap.com/docs/4.6/getting-started/introduction/).
They should be available on any page of the project.

---
### Load order
- jQuery.js
- Bootstrap.js
- theme-functions.js
- *...other scripts...*
- theme.js

*[theme-functions.js](js/theme-functions.js)* - reusable utility functions should be placed here<br>
*[theme.js](js/theme.js)* - main theme javascript file.

---
### Registering javascript files
📌 ***Impportant note:*** all srcipts used in project should be registered with `wp_register_script()` function in [configure/js-css.php](configure/js-css.php) first!<br>

**Common rules:**
- Register scripts with `wp_register_script()` [Function reference](https://developer.wordpress.org/reference/functions/wp_register_script/).
- Define script dependencies if any
- Call scripts with `wp_enqueue_script('id')`function when you need them
- Prevent using inline scripts if possible
- Don't forget to register custom block scripts

**Usefull links**
- included [bootstrap.js](url) modules *comming soon*
- included [swiper.js](url) modules *comming soon*

The list of all registered scripts can be found [here](configure/js-css.php)

## Theme css
Css info will be here

<!--
- for block styling BEM is requiered
- use a unique class name for block wrappers
- add "block" class to section blocks. `<section class="unique-class-name block">`
-->