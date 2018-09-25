# Mos FAQ #
**Plugin Author:** Md. Mostak Shahid

**Author URI:** http://mostak.belocal.today/

**Tags:** frequently asked questions, FAQ, FAQs, easy FAQ, knowledge base, simple FAQ, FAQ categories, FAQs, knowledgebase, answer, answers, faq page, FAQ Plugin, help, help desk, helpdesk, questions, wordpress faq, FAQ list, FAQ accordion, custom post type with accordion, faq list, faq with accordion, jquery ui accordion, jquery-ui, shortcodes, wordpress, WordPress Plugin, Categories, social media, facebook, widget, widgets, statistics, AJAX, analytics, responsive

**Requires at least:** 4.0

**Tested up to:** 4.9.8

**Stable tag:** 1.0.0

**License:** GPLv2 or later

**License URI:** http://www.gnu.org/licenses/gpl-2.0.html


## Description ##
A simple FAQ plugin that lets you create or your users FAQs, order FAQs, publicize FAQs, etc. It uses custom post types and taxonomies to manage an FAQ section for your site. Includes shortcode options for different display configurations.

## Installation ##

This section describes how to install the plugin and get it working.

1. Upload the 'mos-faq' folder to the `/wp-content/plugins/` directory or install via the WP admin panel
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it.

## Frequently Asked Questions ##

### What does this do? ###

It uses the custom post type feature to create a dedicated FAQ section in your WordPress site, including categories and tags exclusive to them.

### How Do I Use It? ###

Each FAQ acts like a "post". You can assign your own categories or tags and organize as you see fit. You can also use shortcodes to place them on any page as follows:

* For the complete list:
	place `[mos_faq]` on a post / page

	[mos_faq limit="-1/any_number" offset="0/any_number" category="blank/category ids seperate by ," tag="blank/category ids seperate by ," orderby="blank/DESC,ASC" order="blank/ID,author,title,name,type,date,modified,parent,rand,comment_count" author="1/any_number" container="1/0" container_class="blank/any_string" class="blank/any_string" singular="0/1" pagination="0/1" view="accordion/collapsible/block"]

* For a single FAQ:
	place `[mos_faq faq_id="ID"]` on a post / page

* List all from a single FAQ topic category:
	place `[mos_faq faq_topic="topic-slug"]` on a post / page

* List all from a single FAQ tag:
	place `[mos_faq faq_tag="tag-slug"]` on a post / page

* List all from multiple FAQ tags:
	place [mos_faq faq_tag="tag-slug-1, tag-slug-2"] on a post / page

* List all from both FAQ topcis and FAQ tags:
	place [mos_faq faq_topic="topic-slug-1" faq_tag="tag-slug-2"] on a post / page

The list will show 10 FAQs based on your sorting (if none has been done, it will be in date order).
* To display only 5:
	place `[mos_faq limit="5"]` on a post / page

* To display ALL:
	place `[mos_faq limit="-1"]` on a post / page

* For a list with a title and link to full FAQ:
	place `[mos_faq]` on a post / page

* For a list with a group of titles that link to complete content later in page:
	place `[mos_faq]` on a post / page

* For a list of taxonomies (topics or tags) with a link to their respective archive page:
	place `[mos_faq]` or `[faqtaxlist type="tags"]` on a post / page

* For a list of taxonomies (topics or tags) with their description:
	place `[mos_faq]` on a post / page

## Screenshots ##

## Changelog ##

### 1.0.0 ###
* No fundamental changes

## Potential Enhancements ##
* Got a bug? Something look off? Hit me up.

