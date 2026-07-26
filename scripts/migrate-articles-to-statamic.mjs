import fs from 'node:fs';
import path from 'node:path';
import vm from 'node:vm';

const rootDir = process.cwd();
const sourceDir = path.join(rootDir, 'public', 'data', 'articles');
const outputDir = path.join(rootDir, 'content', 'collections', 'articles');

function ensureDir(dir) {
    fs.mkdirSync(dir, { recursive: true });
}

function normalizeSlug(value) {
    return String(value || '')
        .trim()
        .toLowerCase()
        .replace(/['"]/g, '')
        .replace(/[^a-z0-9]+/g, '-')
        .replace(/^-+|-+$/g, '');
}

function normalizeCategory(value) {
    const raw = String(value || '').trim();
    if (!raw) {
        return 'Article';
    }

    const map = {
        devcom: 'DevCom',
        multimedia: 'Multimedia',
        literary: 'Literary',
        opinion: 'Opinion',
        features: 'Features',
        news: 'News',
        sports: 'Sports',
        komiks: 'Komiks',
        issues: 'Issues',
        editorial: 'Editorial',
        column: 'Column',
        infographics: 'Infographics'
    };

    return map[raw.toLowerCase()] || raw;
}

function yamlScalar(value) {
    if (value === null || value === undefined) {
        return 'null';
    }

    if (typeof value === 'boolean') {
        return value ? 'true' : 'false';
    }

    if (typeof value === 'number' && Number.isFinite(value)) {
        return String(value);
    }

    const stringValue = String(value);

    if (stringValue === '') {
        return "''";
    }

    if (stringValue.includes('\n')) {
        const lines = stringValue.replace(/\r\n/g, '\n').replace(/\r/g, '\n').split('\n');
        return '|\n' + lines.map((line) => `  ${line}`).join('\n');
    }

    return `'${stringValue.replace(/'/g, "''")}'`;
}

function yamlValue(value, indent = 0) {
    const pad = ' '.repeat(indent);

    if (Array.isArray(value)) {
        if (value.length === 0) {
            return '[]';
        }

        return value
            .map((item) => {
                if (item !== null && typeof item === 'object' && !Array.isArray(item)) {
                    const objectLines = yamlObject(item, indent + 2);
                    return `\n${pad}- ${objectLines[0].trimStart()}` + (objectLines.length > 1 ? `\n${objectLines.slice(1).join('\n')}` : '');
                }

                return `\n${pad}- ${yamlValue(item, indent + 2).trimStart()}`;
            })
            .join('');
    }

    if (value !== null && typeof value === 'object') {
        return yamlObject(value, indent).join('\n');
    }

    return yamlScalar(value);
}

function yamlObject(value, indent = 0) {
    const pad = ' '.repeat(indent);
    const lines = [];

    for (const [key, rawValue] of Object.entries(value)) {
        if (rawValue === undefined) {
            continue;
        }

        if (rawValue !== null && typeof rawValue === 'object' && !Array.isArray(rawValue)) {
            const nested = yamlObject(rawValue, indent + 2);
            lines.push(`${pad}${key}:`);
            lines.push(...nested);
            continue;
        }

        if (Array.isArray(rawValue)) {
            if (rawValue.length === 0) {
                lines.push(`${pad}${key}: []`);
                continue;
            }

            const listLines = rawValue.map((item) => {
                if (item !== null && typeof item === 'object' && !Array.isArray(item)) {
                    const nested = yamlObject(item, indent + 4);
                    return [`${pad}${key}:`, `${pad}  - ${nested[0].trimStart()}`, ...nested.slice(1).map((line) => `${line}`)];
                }

                const scalar = yamlScalar(item);
                if (scalar.includes('\n')) {
                    return [`${pad}${key}:`, `${pad}  - ${scalar.split('\n').join(`\n${pad}    `)}`];
                }

                return null;
            });

            if (listLines.some((item) => Array.isArray(item))) {
                const flattened = [];
                for (const item of listLines) {
                    if (Array.isArray(item)) {
                        flattened.push(...item);
                    } else if (item === null) {
                        flattened.push(`${pad}${key}: []`);
                    }
                }
                lines.push(...flattened);
                continue;
            }

            lines.push(`${pad}${key}:`);
            for (const item of rawValue) {
                if (item !== null && typeof item === 'object' && !Array.isArray(item)) {
                    const nested = yamlObject(item, indent + 4);
                    lines.push(`${pad}  - ${nested[0].trimStart()}`);
                    lines.push(...nested.slice(1));
                } else {
                    const scalar = yamlValue(item, indent + 2);
                    if (scalar.includes('\n')) {
                        lines.push(`${pad}  - ${scalar.replace(/\n/g, `\n${pad}    `)}`);
                    } else {
                        lines.push(`${pad}  - ${scalar}`);
                    }
                }
            }
            continue;
        }

        const scalar = yamlValue(rawValue, indent + 2);
        if (scalar.includes('\n')) {
            lines.push(`${pad}${key}: ${scalar.split('\n')[0]}`);
            const extra = scalar.split('\n').slice(1).map((line) => `${pad}  ${line}`);
            lines.push(...extra);
        } else {
            lines.push(`${pad}${key}: ${scalar}`);
        }
    }

    return lines;
}

function serializeFrontMatter(data) {
    const lines = [];
    for (const [key, value] of Object.entries(data)) {
        if (value === undefined) {
            continue;
        }

        if (value !== null && typeof value === 'object' && !Array.isArray(value)) {
            lines.push(`${key}:`);
            lines.push(...yamlObject(value, 2));
            continue;
        }

        if (Array.isArray(value)) {
            if (value.length === 0) {
                lines.push(`${key}: []`);
                continue;
            }

            lines.push(`${key}:`);
            for (const item of value) {
                if (item !== null && typeof item === 'object' && !Array.isArray(item)) {
                    const nested = yamlObject(item, 4);
                    lines.push(`  - ${nested[0].trimStart()}`);
                    lines.push(...nested.slice(1));
                } else {
                    const scalar = yamlValue(item, 2);
                    if (scalar.includes('\n')) {
                        lines.push(`  - ${scalar.split('\n')[0]}`);
                        lines.push(...scalar.split('\n').slice(1).map((line) => `    ${line}`));
                    } else {
                        lines.push(`  - ${scalar}`);
                    }
                }
            }
            continue;
        }

        const scalar = yamlScalar(value);
        if (scalar.includes('\n')) {
            lines.push(`${key}: ${scalar.split('\n')[0]}`);
            lines.push(...scalar.split('\n').slice(1).map((line) => `  ${line}`));
        } else {
            lines.push(`${key}: ${scalar}`);
        }
    }

    return lines.join('\n');
}

function articleToEntry(article) {
    const title = String(article.title || '').trim();
    const rawSlug = String(article.slug || title);
    const slug = normalizeSlug(rawSlug || title);
    const date = String(article.date || '').trim() || '2026-01-01';
    const category = normalizeCategory(article.category);
    const displayCategory = String(article.displayCategory || '').trim() || category.toUpperCase();

    const frontMatter = {
        id: article.id || undefined,
        slug,
        source_slug: rawSlug,
        title,
        category,
        displayCategory,
        summary: article.summary || '',
        author: article.author || '',
        authorLine: article.authorLine || '',
        credits: article.credits || undefined,
        date,
        readTime: article.readTime || '',
        image: article.image || '',
        imageAlt: article.imageAlt || '',
        imageCaption: article.imageCaption || '',
        images: article.images || undefined,
        literaryMedia: article.literaryMedia || undefined,
        featured: Boolean(article.featured),
        published: true
    };

    const content = String(article.body || '').replace(/\r\n/g, '\n').trim();
    const markdown = `---\n${serializeFrontMatter(frontMatter)}\n---\n\n${content}\n`;
    const fileName = `${date}.${slug}.md`;

    return { fileName, markdown, slug, title };
}

function main() {
    ensureDir(outputDir);

    for (const fileName of fs.readdirSync(outputDir)) {
        if (fileName.endsWith('.md')) {
            fs.unlinkSync(path.join(outputDir, fileName));
        }
    }

    const jsFiles = fs
        .readdirSync(sourceDir)
        .filter((fileName) => fileName.endsWith('.js'))
        .sort((left, right) => left.localeCompare(right));

    const sandboxWindow = { CLSU_ARTICLES: [] };
    const context = vm.createContext({
        window: sandboxWindow,
        console,
        globalThis: { window: sandboxWindow }
    });

    for (const fileName of jsFiles) {
        const filePath = path.join(sourceDir, fileName);
        const code = fs.readFileSync(filePath, 'utf8');
        vm.runInContext(code, context, { filename: filePath });
    }

    const unique = new Map();
    for (const article of sandboxWindow.CLSU_ARTICLES || []) {
        const entry = articleToEntry(article);
        if (unique.has(entry.fileName)) {
            console.warn(`Duplicate article slug detected for ${entry.fileName}; keeping the latest one.`);
        }
        unique.set(entry.fileName, entry);
    }

    for (const entry of unique.values()) {
        fs.writeFileSync(path.join(outputDir, entry.fileName), entry.markdown, 'utf8');
    }

    console.log(`Wrote ${unique.size} Statamic entries to ${outputDir}`);
}

main();
