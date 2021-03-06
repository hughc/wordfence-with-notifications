## Wordfence Security with Notifications

A fork of [Wordfence](https://github.com/wp-plugins/wordfence) with a few simple action hooks added (tied to the sending of emails for now) to allow 3rd party add-ons to, in turn, execute their own notification actions. 

The example integration I have created is a proof-of-concept [Slack channel poster](https://github.com/hughc/wordfence-slack-notifications).

The 'smarts' that could be built into a given integration is only as good as the granularity of data passed in the action hooks; for now, there is not much to go on, only a few text strings. 

It is not recommended for production sites. It is a straight fork of Wordfence with the bare minimum of changes to the codebase to give the plugin a unique slug; it uses the same table names and wp_options keys for storing data, and should work as a drop-in replacement for Wordfence, but this has not been exhaustively tested.

### notification action hooks
#### wf_new_issues

```
add_action('wf_new_issues', 'your_functionName')

function your_functionName($issuesString) {
    // do something else with this information
}
```

#### wf_alert

```
add_action('wf_alert', 'your_functionName')

function your_functionName($issuesString, $ipString) {
    // do something else with this information
}
```
