# AI Widget Shortcode

A lightweight WordPress plugin that lets you embed a microphone-enabled AI voice assistant anywhere in WordPress using the `[ai_widget]` shortcode.

Originally developed for a live production website to make an externally hosted AI assistant reusable across pages, posts, and page-builder layouts.

## Production Example

AI Widget Shortcode running on the Food Forest Design Minnesota production website.

![AI Widget Shortcode Production Demo](screenshots/ai-widget-shortcode-production-demo.png)

## Features

- Custom WordPress shortcode
- AI voice assistant integration
- Microphone-enabled iframe
- Responsive output
- Configurable widget URL
- Configurable widget height
- Browser microphone permission detection
- Works in pages, posts, widgets, and page builders
- Lightweight and reusable
- No WordPress core modifications

## Technology

- PHP
- WordPress
- WordPress Shortcode API
- HTML5
- JavaScript
- Browser Permissions API
- Third-party AI integration

## Usage

Basic usage:

```text
[ai_widget url="https://example.com/your-ai-widget"]
```

Custom height:

```text
[ai_widget url="https://example.com/your-ai-widget" height="250px"]
```

## How It Works

The plugin registers the `[ai_widget]` shortcode.

When WordPress encounters the shortcode, the plugin:

1. Reads the supplied AI widget URL.
2. Generates a responsive iframe.
3. Enables microphone access.
4. Loads the external AI voice assistant.
5. Checks the browser's microphone permission state.
6. Displays the assistant wherever the shortcode is placed.

## Installation

1. Download or clone this repository.
2. Upload the plugin folder to:

```text
/wp-content/plugins/ai-widget-shortcode/
```

3. Activate **AI Widget Shortcode** in WordPress.
4. Add the shortcode to a page, post, widget, or supported page-builder element.

Example:

```text
[ai_widget url="https://example.com/your-ai-widget"]
```

## Why I Built It

This plugin was originally created to solve a real production requirement: placing the same AI voice assistant in multiple areas of a WordPress website without repeatedly inserting and maintaining the same iframe and JavaScript code.

Using a shortcode creates a cleaner, reusable integration that is easier to maintain and deploy.

## Security & Code Quality

The public version includes:

- WordPress `ABSPATH` protection
- Escaped URL output
- Escaped HTML attributes
- Sanitized shortcode parameters
- Unique iframe IDs
- Graceful browser compatibility handling
- No hard-coded production AI assistant URL

## What This Project Demonstrates

- WordPress plugin development
- PHP
- WordPress Shortcode API
- JavaScript integration
- Responsive front-end implementation
- Third-party AI integration
- Browser microphone permissions
- Reusable component design
- Production-focused problem solving

## Background

Most of my development work historically has lived in client production environments rather than public repositories.

This project is part of a curated GitHub portfolio showing representative examples of my WordPress, PHP, front-end, integration, and automation work.

## Author

**Travis Holzem**  
Web Developer & Founder, Devil Dog Digital AI

https://devildogdigital.ai
