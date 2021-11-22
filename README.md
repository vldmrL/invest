A Wordpress theme for Invest.com project
---
Requirements: PHP 7.1+
Frameworks: jQuery-3.5.1, Bootstrap-4.6.0
Core plugins: ACF, genesis custom blocks

### Readme links
Document anchors
- [General description](#description)
- [File structure](#file-structure)
- [Theme options](#theme-options)
- [Custom blocks](#custom-blocks)
  - [Block naming](#s)
  - [Block structure](#s)
  - [Block templates](#s)
- [Theme javascript](#theme-javascript)
- [Theme css](#theme-css)

### Description
***Some general project description here***
Project folder contains files for:
  main website
  blog
  various landing pages

### File structure
General project file structure. More details can be found in each folder.
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
    vendor/             - plugins, frameworks and othe tools used in project

```
---
### Theme options
Currently the following option pages are available from admin panel.
**Invest theme** 
- default theme styling 
- general company information 
- often used links
- company social profiles
- global tracking code snipets
**Banner setting** - all global banner settings.
**Widget setting** - data to show in Tradingview widgets .
*All of these options are used globaly across the site, please change them with care.*

**Edit Page** screen
- general settings (breadcrumbs, widget in header, color theme restrictions)
- page jsavascript (additional .js file to load on this page, inline javascript)
- page css (additional .css file to load on this page, inline css)
**Edit Post** screen
- marketing (compaign id, affiliate id and post views). All fields are disabled, they are used to show info passed to CRM

### Custom blocks
The project uses modular devolopment system where possible.
All common website pages should be divided into *user sreens* (sections). For this purpose we use gutengerg custom blocks functionality, with limited user input.

Blocks are registered and managed by genesis-custom-blocks wordpress plugin. A user guide and documentation about the plaguin can be found [here](https://link)

There are several block categories available from Edit Page (or Edit Post) screen:
**Invest** - general theme blocks, that may be used again later
**Invest Banners** - reusable banners, usually configured from theme admin pannel options page
**Invest Widgets** - reusable widgets, usually configured from theme admin pannel options page
**Invest-Blank** - main theme template manager blocks, used for creating pages.
**All blocks should be added to their respectful category.*

##### Block naming
*For non-blank blocks*, please try to keep `${what}-${where}-${name}` structure.
Example: widget-homepage-market-overview

For blocks in *Invest-blank* category the naming is pretty much self explainatary. `${type}--&{inpit-fields-avaliable}`
Examples:
```
blank-row--title-subtitle
blank-row--title-subtitle-text-btn
blank-col--image-title
blank-col--image-title-text-btn
```
**blank-row** - parent blocks that have "inner blocks" field available, where another guttenberg blocks can be placed (images, embed video, text editor, other custom blocks, etc). They should be wrapped with <section></section> tags.
**blank-col** - child blocks that can be put inside blank-row--* blocks.

##### Block structure
Documentation about gutenberg custom blocks can be found [here](url).
**A few common rules:**
- please, follow the [naming](#block-naming)
- all blocks should be added to their respectful category
- block .css and .js files should be located in the same folder as the block.php
- all bock ***scripts should be [registered](#theme-javascript)***
- all user defined fields (content) should be registered in *Editor fields*, while all developers fields (ID's, classes, etc) in *inspector fields*
- try use human-readable slugs for fields
- dont forget to add logical search keywords
- each block should have a preview

##### Block templates
For a faster and more smooth workflow we use predefiend *blank blocks* as a template loaders with some user input fields. Input data is passed to template using `get_template_part( $template_path,, $input_data` function. 
All blank blocks are accessable from *Invest Blank* category and contain available user input fields in their [naming](#block-naming). 
---
**Core features**
- Each blank block has a *template* input field. It is located in inspectors field  section on Edit Page screen (the right pannel).*[screenshot](url)*
- To connect a templte, please copy/paste your template path in the following format: `block-templates/folder/template` (without .php extention) to the *template* input field. 
- Each blank block has a premade `template.php` file in it's folder, which can be copy/pasted to desiered location (inside [block-templates/](block-templates/) folder).
- All blank blocks follow the same naming logic for field *slug*
---
**General rules**
- Block template files should be located in [block-templates](block-templates/) folder.
- All template related files (.php, .css, .js, .scss) should have the same name *template.** and placed at the same folder
- If there is a `template.css` file at the same folder, it will be enqueued automatically.
- All template ***scripts should be [registered](#theme-javascript)***
- Each template should have a wrapper with unique class-name
- For block styling BEM is requiered
---
**Usefull tips**
- By default, you can access filed values using `echo $args['field_slug']`. If you copy/pasted template from block folder, you can also use variables. Example: `echo $title`.
- If your block needs some additional styles or scripts to work, please add them using `wp_enqueue_script(script-id)` and `wp_enqueue_style('style-id')`
