# blocks-on-blocks
Lotsa blocks to dev. Made to demonstrate how to do WordPress development with Git.
This README file is made to link to the various projects and to provide direction on how to compile and work on the projects. This is meant to be a collaborative effort and expertise into distributed work, using Git, and doing cutting-edge stuff with WordPress.


### Configuration for Github (Collaboration)
- Install Git suggestions
- Helpful VS Code extensions
- GUIs for Git
- Git cheat sheet


### Blocks on Blocks

## Amazon Price Check widget or Gutenberg Block

Input field that uses Debounce to wait for a user to stop typing, then uses the most modern API search for Amazon to find a product that most likely matches this product name. Returns a price.

## Brand board
Block that has a pattern where users can change media to represent the brand identity and sample marketing material within a WordPress Dashboard.
### TODO: brand-board.png

## Hero with WordPress Form
Popular amongst signup websites.
### TODO: Imageof lumberjack

## Markdown block
Display the info in this block as Markdown. Allow use of RichText editor.

## Google Charts block
Google Charts block (demo/POC)
https://blog.logrocket.com/use-google-charts-react/

Starting use case: Import a CSV file and it generates a chart based on certain header fields (must label which are headers)

## Story block
Story Block (from WordPress.com)
https://wordpress.com/support/wordpress-editor/blocks/story-block/
￼

<image>
Could make it a Snapchat style story, with a custom editable (or pulls from page title) heading. Make the heading draggable and the photo refocus able as a background.. swipe to make it go away or drag from top down to close it. 

Is this available in WordPress 4.9?

Looks like AMP

## Quick gigs block
Include basic contact info, amount, close date, status. Allow status change to add to CRM (invoice paid)

## Page into / paywall
Article Teaser (read more)
{include notes}
When my page has more than 2 paragraphs on it, fade bottom out.
Selector info from Wes Bos's podcast: 21:14 - Quantity Queries for CSS
https://syntax.fm/714?t=0:21:14


## Account Creation block - multi step
Add extra fields when a user signs up.
Possibly using WordPress Core forms.

## Timer and time logger
Log time. Click to start, stop, record or reset (secondary/small ink only)
Text field for project description.
Some way to link it to a project (Freelancer theme)

## Generate a PDF from this page - block
Generate PDF
export PDF wordpress block for gutenberg

jsPDF library
https://github.com/parallax/jsPDF
- Q: How is this different from a printable stylesheet?
- A: It can handle dynamic data better..??


## Console log block
Log all activity that comes into the console to this page, in an easy to read format.
Use details block to collapse messages
Helpful for debugging without needing to use the console.

## PageSpeed insights for this page
Insert the block and it displays PageSpeed Insights for this page


## Google Lens identify block
WordPress block that allows you to use your camera to take a picture of something and get a result back of what it might be, from Google Lens.


## 3.0 Plugin ideas
Visual Slot Fill - Visual Hooks to display Slot Fills
Uses hooks or HTML Tag processor
This is a plugin.


## Twitter Sharer
Because Jetpack won't let you share to Twitter...
https://www.icloud.com/notes/08bFoVDbx3KzyjGmUZYjXQESg


## Block Hooks?
for Twitter Sharer - end of post...?
Remove text from "X" (Twitter) share button using Block Hooks

## Multiple Blocks Plugin Boilerplate
A starting point for creating 3 blocks with the standard scripts, and instructions.
- Good first commit for Seth
Multiple Blocks 
https://youtu.be/qbMUU6eNkd4?si=IHCLtXannsJzRmTr&t=1438
12 minutes in


## Slotfill Sample - An actual use case
Slotfill in notes
<image>

## Error block
Shows JavaScript errors on the page. Inspired by the convo on Twitch.

Uses the console logger block to function (innerblocks?)

https://www.twitch.tv/videos/2010095349?t=1h14m59s

Sentry.io - record React errors
https://docs.sentry.io/platforms/javascript/guides/react/
https://www.youtube.com/watch?v=Kz-SudCTdu4&themeRefresh=1




## Why to use a static or dynamic block
Include this block on a page to make sure all blocks are correctly created dynamically or statically.

- Improves page loads with best rendering
- Included in Gutenberg Block Checker Plugin

## Explaining Github block
Show how to get part of WordPress Core, change 

## Custom Content Block
Save a post with custom post types

## Music Quote block
Quote, Band Name, Link to song/video etc
Affiliate links

# Plugins
## Gutenberg Block Checker Plugin
Run this to check your block for all best practices for block dev, plugin and theme guidelines
