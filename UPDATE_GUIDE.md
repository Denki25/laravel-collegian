# Content Update Guide

This project is a static content site. Most updates are made by editing the JavaScript data files inside `public/data/`.

If you are working in the Laravel copy of the site, edit the matching files in `collegian-laravel/public/data/` instead. The file shapes are the same.

## Where each type of content lives

- Articles
  - `public/data/articles/news.js`
  - `public/data/articles/features.js`
  - `public/data/articles/editorial.js`
  - `public/data/articles/column.js`
  - `public/data/articles/devcom.js`
  - `public/data/articles/sports.js`
  - `public/data/articles/literary.js`
  - `public/data/articles/komiks.js`
- Issues / archives
  - `public/data/issues.js`
- Multimedia
  - `public/data/multimedia.js`
- Homepage settings
  - `public/data/site-config.js`

## 1. How to update an article

1. Open the correct section file in `public/data/articles/`.
2. Find an existing article object in that file.
3. Copy the whole object and paste it below the original or replace an old one.
4. Change the article fields.
5. Save the file and refresh the browser.

### Important article rules

- `slug` must be unique across all article files.
- `category` must match the section file exactly.
  - `News` goes in `news.js`
  - `Features` goes in `features.js`
  - `Editorial` goes in `editorial.js`
  - `Column` goes in `column.js`
  - `DevCom` goes in `devcom.js`
  - `Sports` goes in `sports.js`
  - `Literary` goes in `literary.js`
  - `Komiks` goes in `komiks.js`
- `displayCategory` is optional.
  - Use it only if you want a different visible badge.
  - Example: `category: "DevCom"` and `displayCategory: "News"`.
- `date` must use `YYYY-MM-DD`.
- `body` is the full article content in HTML.
- `image` should point to a file in `PHOTOS/`.
- `imageAlt` should describe the image.
- `authorLine` should match the byline you want shown on the site.
- `credits` is optional, but use it when you need photo, layout, or illustration credits.

### Basic article fields to update

- `slug`
- `category`
- `displayCategory` if needed
- `title`
- `summary`
- `author`
- `authorLine`
- `date`
- `readTime`
- `image`
- `imageAlt`
- `body`
- `credits`
- `imageCaption` if the article is a News post with a short caption under the image

### Article example flow

1. Open the right file, for example `public/data/articles/news.js`.
2. Copy an existing News object.
3. Replace the title, summary, date, body, image, and credits.
4. Keep `category: "News"`.
5. Save and refresh `http://127.0.0.1:8000/news.html`.

### Article template with placeholders

```js
{
    slug: "your-unique-slug-here", // must be unique
    category: "News", // must match the file you placed it in
    displayCategory: "NEWS", // optional, can be removed
    title: "Your article title here",
    summary: "Short summary that appears on cards",
    author: "AUTHOR NAME",
    authorLine: "By AUTHOR NAME/CLSU Collegian",
    credits: {
        labelPreset: "via", // use "written" for Literary pieces
        by: "AUTHOR NAME/CLSU Collegian",
        photosBy: "PHOTOGRAPHER NAME/CLSU Collegian",
        labels: {
            by: "Isinulat ni:",
            photosBy: "Larawan ni:"
        }
    },
    date: "2026-07-23", // YYYY-MM-DD
    readTime: "4 min read",
    image: "PHOTOS/NEWS/your-image.jpg",
    imageAlt: "Describe the image here",
    imageCaption: "Optional caption for News articles only",
    body: `
        <p>Write the full article here.</p>
        <p>You can use multiple paragraphs, blockquotes, and links.</p>
    `
}
```

### Opinion section note

The Opinion page is fed by:

- `public/data/articles/editorial.js`
- `public/data/articles/column.js`

So if you want a story to appear on the Opinion page, put it in one of those files and use:

- `category: "Editorial"` or
- `category: "Column"`

## 2. How to update issues / archives

1. Open `public/data/issues.js`.
2. Find an existing issue object.
3. Copy it or replace it with the new issue details.
4. Update the fields.
5. Save and refresh `http://127.0.0.1:8000/issues.html`.

### Issue fields to update

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

### Issue rules

- Keep the newest issue near the top of the file.
- Use `date` in `YYYY-MM-DD` format.
- Put the issue cover image in `PHOTOS/ISSUES/` when possible.
- `links` should stay an array of button objects, for example:

```js
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
```

### Simple issue update flow

1. Open `public/data/issues.js`.
2. Copy the most recent issue object.
3. Change the issue title, date, summary, cover image, and links.
4. Save and refresh the site.

### Issue template with placeholders

```js
{
    slug: "your-issue-slug", // unique issue id
    title: "YOUR ISSUE TITLE",
    titleLineTwo: "VOLUME OR ISSUE LINE",
    label: "Issue Release", // or "Latest Release"
    date: "2026-07-23",
    subtitle: "Short subtitle for the issue",
    summary: "Short issue description or teaser text",
    image: "PHOTOS/ISSUES/your-cover.jpg",
    imageAlt: "Describe the issue cover",
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

## 3. How to update multimedia

1. Open `public/data/multimedia.js`.
2. Find an existing multimedia entry.
3. Copy the object and update the details.
4. Save and refresh `http://127.0.0.1:8000/multimedia.html`.

### Multimedia fields to update

- `title`
- `date`
- `platform`
- `presenterLabel`
- `presenter`
- `technicalDirectorLabel`
- `technicalDirector`
- `videographerLabel`
- `videographer`
- `editorLabel`
- `editor`
- `embedUrl`
- `sourceUrl`
- `aspectRatio`
- `featured`

### Multimedia rules

- Set `featured: true` on the two items you want to appear in the Featured Videos row.
- Keep `date` in `YYYY-MM-DD` format.
- Use `aspectRatio: "portrait"` or `aspectRatio: "landscape"` depending on the video shape.
- `embedUrl` is the embedded player URL.
- `sourceUrl` is the original post URL.

### Simple multimedia update flow

1. Open `public/data/multimedia.js`.
2. Copy an existing entry.
3. Update the title, presenter, editor, dates, and video links.
4. Mark the correct items as featured.
5. Save and refresh the page.

### Multimedia template with placeholders

```js
{
    title: "Your multimedia title here",
    date: "2026-07-23",
    platform: "Facebook Reel", // or YouTube, TikTok, etc.
    featured: false, // set true if this should appear in Featured Videos
    presenterLabel: "Host:",
    presenter: "PRESENTER NAME",
    technicalDirectorLabel: "Technical Director:",
    technicalDirector: "TECH DIRECTOR NAME",
    videographerLabel: "Videographer:",
    videographer: "VIDEOGRAPHER NAME",
    editorLabel: "Editor:",
    editor: "EDITOR NAME",
    embedUrl: "https://example.com/embed-url",
    sourceUrl: "https://example.com/original-post",
    aspectRatio: "portrait" // or "landscape"
}
```

## 4. Homepage updates

If the article or issue should appear on the homepage, also check:

- `public/data/site-config.js`

Useful settings:

- `tickerItems` for the breaking ticker
- `featuredSlug` for the main homepage story
- `featuredCount` for how many featured stories the homepage uses
- `trending` for the trending list

## 5. File paths to remember

- Articles: `public/data/articles/*.js`
- Issues: `public/data/issues.js`
- Multimedia: `public/data/multimedia.js`
- Site settings: `public/data/site-config.js`

## 6. Quick checklist before you save

- The `slug` is unique.
- The `category` matches the section.
- The date is `YYYY-MM-DD`.
- The image path is correct.
- The credits are correct.
- The file has valid JavaScript syntax.

## 7. If the site does not update

1. Hard refresh the browser with `Ctrl + F5`.
2. Make sure you edited the correct copy of the file.
3. If you are using Laravel, edit the matching file in `collegian-laravel/public/data/`.
4. If you changed Blade templates or routes, restart the Laravel server.
