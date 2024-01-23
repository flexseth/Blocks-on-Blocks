# Messaging Intermediaries - Middleware
These are block plugins that take data that is already existing in a block and adds to it. 
Add some JavaScript to trigger JavaScript when someone starts a word off with the "@" symbol.

They can work natively with blocks such as form inputs and Rich Text elements.

## WordPress.org
User Profile Hovercards: @ Tag a WordPress.org user show their hovercard

## Slack
- @ Tag a slack account to show their hovercard
Use case: Send a message, see local time or active status

### PSEUDOCODE

??? enter API key
if someone is typing in a Rich Text element, watch input
if input is the @ symbol after a space, they may be trying to use the plugin
wait for more input, and check against a username
allow to select a profile to tag
after a certain point when typing has ended, allow for dialog box to be closed