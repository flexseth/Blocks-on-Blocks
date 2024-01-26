# Background on Block Plugins
Block Plugins... 
- consist of custom code that alters the behavior or look of a block. 
- can alter business logic or the presentation of block(s).
- fall under two categories: "feature" or "design"  
- settings can be set globally or on a block-by-block basis.


## Feature Block Plugin - Examples
Feature block plugins modify the business logic of a block.

- @ tag a Twitter or Slack profile inline (extends RichText)
- Tweet block
- Create a PDF from block(s)
- Gravity Forms focus on singular input
- [Create a Custom Block Editor](https://developer.wordpress.org/block-editor/how-to-guides/platform/custom-block-editor/)


## Design Block Plugin - Examples
Feature block plugins modify the look or presentation of a block.

- Skins: Easily change the look of the WP comment form
- [Display image metadata](./feature/extraction/metadata-from-image/README.md) (EXIF) on attachment page
- Insert External link button for RichText editor - [Storybook](https://wordpress.github.io/gutenberg/?path=/docs/components-externallink--docs) 
- [Add icons to button blocks](https://github.com/ndiego/enable-button-icons) (by Nick Diego) 

## Limitations
See the Block Specific Guidelines below, but one major limitation: 
> Only Block Plugins that register a new block are currently supported.

This means that in order to be listed in the Block Directory, your block must create it's own block and not provide software as a "glue" for another block.

Developers can create Block Plugins that do not create their own block, they just aren't permitted _currently_ to be submitted to the [Block Directory](https://wordpress.org/documentation/article/block-directory/)


# Resources
## Create Block Plugin
package - similar to `@wordpress/create-block` - [working draft](https://docs.google.com/document/d/1rdfHGykCX1Xa77DLj7tTHKy_fGx9OT4zYE-8os_0j5w/edit)

## Submission to WordPress Plugin Repository

Start here: [Detailed Plugin Guidelines](https://developer.wordpress.org/plugins/wordpress-org/detailed-plugin-guidelines)

For submitting to the Block Directory, include these constraints: [Block Specific Plugin Guidelines](https://developer.wordpress.org/plugins/wordpress-org/block-specific-plugin-guidelines/) from WordPress.org