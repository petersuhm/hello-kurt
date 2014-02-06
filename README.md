## Hello Kurt
A plugin for all those nineties' lovers who just don't feel to much identified by [Hello Dolly](http://wordpress.org/plugins/hello-dolly/). When activated you will randomly see a lyric from Smells Like Teen Spirit in the upper right of your admin screen on every page.

Initial credits go to Matt Mullenweg, since the code of this plugin was initially based on his [Hello Dolly](http://wordpress.org/plugins/hello-dolly/).

## Installation
1. Run `git clone git@github.com:andrezrv/hello-kurt.git` into your plugins folder. You can also download the plugin in zip format either from [Github](https://github.com/andrezrv/hello-kurt/archive/master.zip) and the [WordPress Plugin Repository](http://wordpress.org/plugins/hello-kurt/), then open the file and upload the `hello-kurt` folder to your `plugins` directory.
2. Activate the plugin through the **"Plugins"** menu.

## Extending
This plugin offers hooks for filters, so you can modify its functionality or add your own.

* `hello_kurt_css`: Modify the CSS that the plugin outputs.
* `hello_kurt_lyrics`: Modify the lyrics that the plugin uses.
* `hello_kurt_random_line`: Modify the random line to be printed.

## Contributing
If you feel like you want to help this project by adding something you think useful, you can make your pull request against the master branch :)

## Changelog

#### 1.1
* Object oriented code.
* New filter hooks.

#### 1.0
First public release.
