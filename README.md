# do_action Demo

These plugins are for demonstrating purposes *only*. You will use these plugins for testing and reverse engineering WordPress core for firing events with the functions: `do_action` and `do_action_ref_array` docx.

* [do_action](https://knowthecode.io/docx/wordpress/do_action)
* [do_action_ref_array](https://knowthecode.io/docx/wordpress/do_action_ref_array)

## Installation

1. Download it.
2. Put into your `wp-content/plugins/` folder
3. Extract it
4. Go into the `ktc-starter` folder first
5. Run `composer install` in terminal to bring in the dependencies and install Composer locally.
6. Then go into `title-enhancer` folder and repeat step 5.

Installation from GitHub is as simple as cloning the repo onto your local machine.  To clone the repo, do the following:

1. Using PhpStorm, open your project and navigate to `wp-content/plugins/`. (Or open terminal and navigate there).
2. Then type: `git clone https://github.com/KnowTheCode/do_action-Demo`.
3. Go into the `ktc-starter` folder first
4. Run `composer install` in terminal to bring in the dependencies and install Composer locally.
5. Then go into `title-enhancer` folder and repeat step 4.

The font icons used are from ionicons.  You will need to make sure they are enqueued in your theme by doing:

`wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), CHILD_THEME_VERSION );`