const fs = require("fs");
const path = require("path");

const ROOT = path.resolve(__dirname, "..");
const SHARE_DIR = path.join(ROOT, "share");
const OUTPUT_DIR = path.join(ROOT, "resources", "views", "articles");

function slugify(value) {
    return String(value)
        .normalize("NFKD")
        .replace(/[\u0300-\u036f]/g, "")
        .replace(/['\u2019]/g, "")
        .toLowerCase()
        .replace(/[^a-z0-9]+/g, "-")
        .replace(/^-+|-+$/g, "")
        .replace(/-+/g, "-");
}

function escapeBladeString(value) {
    return String(value)
        .replace(/\\/g, "\\\\")
        .replace(/'/g, "\\'")
        .replace(/\r?\n/g, " ");
}

function readMeta(html, name) {
    const pattern = new RegExp(`<meta[^>]+${name}[^>]+content="([^"]*)"`, "i");
    const match = html.match(pattern);
    return match ? match[1] : "";
}

function readTitle(html) {
    const match = html.match(/<title>([^<]*)<\/title>/i);
    return match ? match[1].trim() : "CLSU Collegian";
}

function buildBladeString(value) {
    return `'${escapeBladeString(value)}'`;
}

function buildPreviewBlade({ title, description, image, alt, articleSlug }) {
    const cleanedTitle = title.replace(/\s+\|\s+CLSU Collegian$/, "");
    const imagePath = image.includes("/PHOTOS/")
        ? image.slice(image.indexOf("/PHOTOS/") + 1)
        : "";
    const bladeImageExpr = imagePath
        ? `asset('${imagePath}')`
        : buildBladeString(image || "PHOTOS/NEWS/news3.jpg");
    const bladeAlt = alt || cleanedTitle;
    const bladeCanonical = `url('/share/${articleSlug}.html?v=2')`;
    const bladeArticleUrl = `url('/article.html?slug=${articleSlug}')`;
    const bladeImageTag = imagePath
        ? `{{ asset('${imagePath}') }}`
        : escapeBladeString(image || "PHOTOS/NEWS/news3.jpg");

    return `@extends('layouts.share')

@section('page_title', ${buildBladeString(title)})
@section('page_description', ${buildBladeString(description)})
@section('canonical_url', ${bladeCanonical})
@section('og_title', ${buildBladeString(title)})
@section('og_description', ${buildBladeString(description)})
@section('og_image', ${bladeImageExpr})
@section('og_image_alt', ${buildBladeString(bladeAlt)})
@section('twitter_title', ${buildBladeString(title)})
@section('twitter_description', ${buildBladeString(description)})
@section('twitter_image', ${bladeImageExpr})
@section('twitter_image_alt', ${buildBladeString(bladeAlt)})

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">${escapeBladeString(cleanedTitle)}</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">${escapeBladeString(description)}</p>
        <img src="${bladeImageTag}" alt="${escapeBladeString(bladeAlt)}" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ ${bladeArticleUrl} }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
`;
}

function main() {
    fs.mkdirSync(OUTPUT_DIR, { recursive: true });

    const files = fs.readdirSync(SHARE_DIR).filter((file) => file.toLowerCase().endsWith(".html"));

    files.forEach((file) => {
        const fullPath = path.join(SHARE_DIR, file);
        const html = fs.readFileSync(fullPath, "utf8");

        const title = readTitle(html);
        const description = readMeta(html, 'name="description"');
        const image = readMeta(html, 'property="og:image"');
        const alt = readMeta(html, 'property="og:image:alt"');
        const viewName = slugify(path.basename(file, ".html"));

        const blade = buildPreviewBlade({ title, description, image, alt, articleSlug: viewName });
        fs.writeFileSync(path.join(OUTPUT_DIR, `${viewName}.blade.php`), blade, "utf8");
    });

    console.log(`Generated ${files.length} article preview Blade files.`);
}

main();
