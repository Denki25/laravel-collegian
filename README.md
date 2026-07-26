# CLSU Collegian Laravel + Statamic Guide

This project is now a Laravel site with Statamic for flat-file content.

What is already in Statamic:
- Articles

What is still in the legacy static files for now:
- Multimedia
- Issues / Archives
- Site config

If you want, we can migrate multimedia and issues into Statamic later too. For now, this README explains how to update everything that is currently in the repo.

## Where the control panel is

Statamic has a browser-based admin area called the Control Panel.

Local:
- `http://127.0.0.1:8000/cp`

If the site is already deployed:
- `https://your-domain/cp`

What it is for:
- Create and edit Statamic entries
- Manage content without opening Markdown files directly
- Publish or unpublish content

If you do not have a login yet, create a Statamic user from the terminal:

```powershell
php please make:user
```

Choose:
- your name
- your email
- a password
- `yes` when asked if the user should be a super user

## Recommended workflow

You have two ways to update the site:

1. Use the Statamic Control Panel for articles
2. Use VS Code to edit the flat files directly

For multimedia and issues, you will still edit the JS files in VS Code until those sections are migrated too.

## Articles

Articles now live in:

```text
content/collections/articles/
```

Each article is one Markdown file.

Example file:

```text
content/collections/articles/2026-07-15.clsu-posts-38-new-master-plumbers-in-july-2026-mple.md
```

### Step-by-step: add a new article in VS Code

1. Open `content/collections/articles/`
2. Duplicate an existing `.md` file
3. Rename it using a date and slug, for example:
   `2026-07-26.my-new-article.md`
4. Open the file and edit the front matter at the top
5. Update the article body below the `---`
6. Save the file
7. Refresh the page in the browser

### Important article fields

Use these fields in the front matter:

- `title`
- `category`
- `displayCategory`
- `summary`
- `author`
- `authorLine`
- `readTime`
- `image`
- `imageAlt`
- `imageCaption`
- `featured`

Example:

```yaml
---
title: 'My New Article'
category: 'News'
displayCategory: 'NEWS'
summary: 'Short summary shown in cards and previews.'
author: 'YOUR NAME'
authorLine: 'By YOUR NAME/CLSU Collegian'
readTime: '3 min read'
image: 'PHOTOS/NEWS/my-image.jpg'
imageAlt: 'Description of the image'
imageCaption: 'Optional caption'
featured: true
published: true
---
```

### Step-by-step: add a new article in the Control Panel

1. Open `http://127.0.0.1:8000/cp`
2. Log in
3. Go to `Collections`
4. Open `Articles`
5. Click `Create Entry`
6. Fill in the fields
7. Add your body text
8. Save and publish

### What happens after you save

- The article appears in the correct section page
- The homepage can pick it up for cards and featured areas
- The article has its own URL
- Social previews use the article title, summary, and image

## Multimedia

Multimedia entries are still stored in:

```text
public/data/multimedia.js
```

### Step-by-step: add a video

1. Open `public/data/multimedia.js`
2. Find the `window.CLSU_MULTIMEDIA = [...]` list
3. Copy one existing object
4. Paste it below the others
5. Update the fields
6. Save the file
7. Refresh the browser

### Multimedia fields

- `title`
- `date`
- `platform`
- `featured`
- `presenterLabel`
- `presenter`
- `editorLabel`
- `editor`
- `technicalDirectorLabel`
- `technicalDirector`
- `videographerLabel`
- `videographer`
- `embedUrl`
- `sourceUrl`
- `aspectRatio`

Example:

```js
{
    title: "New Video Title",
    date: "2026-07-26",
    platform: "Facebook Reel",
    featured: false,
    presenterLabel: "Host:",
    presenter: "YOUR NAME",
    editorLabel: "Editor:",
    editor: "YOUR NAME",
    embedUrl: "https://www.facebook.com/plugins/video.php?...",
    sourceUrl: "https://www.facebook.com/reel/...",
    aspectRatio: "portrait"
}
```

### Notes for multimedia

- Set `featured: true` only for the videos you want shown in the featured video row
- Use a valid embed URL and source URL
- Save the file in VS Code, then refresh the site

## Issues / Archives

Issues are still stored in:

```text
public/data/issues.js
```

### Step-by-step: add a new issue

1. Open `public/data/issues.js`
2. Find the `window.CLSU_ISSUES = [...]` list
3. Copy one issue object
4. Paste it below the others
5. Update the fields
6. Save the file
7. Refresh the browser

### Issue fields

- `slug`
- `title`
- `titleLineTwo`
- `label`
- `date`
- `subtitle`
- `summary`
- `image`
- `imageAlt`
- `links`

Example:

```js
{
    slug: "my-new-issue",
    title: "MY NEW ISSUE",
    titleLineTwo: "VOL. 67 SPECIAL ISSUE",
    label: "Issue Release",
    date: "2026-07-26",
    subtitle: "A short subtitle for the issue",
    summary: "A longer description of the issue.",
    image: "PHOTOS/ISSUES/my-issue.jpg",
    imageAlt: "My new issue cover",
    links: [
        {
            label: "Google Drive",
            url: "https://example.com"
        },
        {
            label: "Flipbook",
            url: "https://example.com"
        }
    ]
}
```

## Site config

General homepage settings are still in:

```text
public/data/site-config.js
```

That file usually controls:
- breaking ticker text
- featured article settings
- trending list data

## Assets

Put images and files in the `public/` folder.

Common paths:
- `public/PHOTOS/`
- `public/assets/`
- `public/css/`
- `public/js/`
- `public/data/`

When you reference an image in an article or issue, use the path from `public/`.

Example:

```text
PHOTOS/NEWS/news16.jpg
```

## How updates reach the live site

1. Edit the file in VS Code or in the Control Panel
2. Save your changes
3. Test locally
4. Commit and push to GitHub
5. Render or your host deploys the new version

## Quick summary

- Articles: use Statamic entries in `content/collections/articles/` or the Control Panel
- Multimedia: edit `public/data/multimedia.js`
- Issues: edit `public/data/issues.js`
- Control Panel: `http://127.0.0.1:8000/cp`

