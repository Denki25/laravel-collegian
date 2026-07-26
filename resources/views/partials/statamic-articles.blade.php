@php
    use Statamic\Facades\Entry;

    $articles = Entry::query()
        ->where('collection', 'articles')
        ->whereStatus('published')
        ->get()
        ->sortByDesc(function ($entry) {
            $date = data_get($entry, 'date');

            return $date instanceof \Carbon\CarbonInterface ? $date->timestamp : strtotime((string) $date);
        })
        ->map(function ($entry) {
            $category = (string) data_get($entry, 'category', 'Article');
            $displayCategory = (string) data_get($entry, 'displayCategory', strtoupper($category));
            $featuredImage = data_get($entry, 'image') ?: data_get($entry, 'featured_image');

            return [
                'slug' => (string) data_get($entry, 'slug'),
                'source_slug' => (string) data_get($entry, 'source_slug'),
                'category' => $category,
                'displayCategory' => $displayCategory,
                'title' => (string) data_get($entry, 'title'),
                'summary' => (string) data_get($entry, 'summary'),
                'author' => (string) data_get($entry, 'author'),
                'authorLine' => (string) data_get($entry, 'authorLine', data_get($entry, 'byline', '')),
                'credits' => data_get($entry, 'credits', new stdClass()),
                'date' => data_get($entry, 'date') instanceof \Carbon\CarbonInterface
                    ? data_get($entry, 'date')->format('Y-m-d')
                    : (string) data_get($entry, 'date'),
                'readTime' => (string) data_get($entry, 'readTime', data_get($entry, 'read_time', '')),
                'image' => is_string($featuredImage) ? $featuredImage : '',
                'imageAlt' => (string) data_get($entry, 'imageAlt', data_get($entry, 'image_alt', data_get($entry, 'title', ''))),
                'imageCaption' => (string) data_get($entry, 'imageCaption', data_get($entry, 'caption', '')),
                'images' => data_get($entry, 'images', []),
                'literaryMedia' => data_get($entry, 'literaryMedia'),
                'body' => (string) data_get($entry, 'content'),
            ];
        })
        ->values()
        ->all();

    $issues = Entry::query()
        ->where('collection', 'issues')
        ->whereStatus('published')
        ->get()
        ->sortByDesc(function ($entry) {
            $date = data_get($entry, 'date');

            return $date instanceof \Carbon\CarbonInterface ? $date->timestamp : strtotime((string) $date);
        })
        ->map(function ($entry) {
            return [
                'slug' => (string) data_get($entry, 'slug'),
                'title' => (string) data_get($entry, 'title'),
                'titleLineTwo' => (string) data_get($entry, 'titleLineTwo', ''),
                'label' => (string) data_get($entry, 'label', ''),
                'date' => data_get($entry, 'date') instanceof \Carbon\CarbonInterface
                    ? data_get($entry, 'date')->format('Y-m-d')
                    : (string) data_get($entry, 'date'),
                'subtitle' => (string) data_get($entry, 'subtitle', ''),
                'summary' => (string) data_get($entry, 'summary', ''),
                'image' => (string) data_get($entry, 'image', ''),
                'imageAlt' => (string) data_get($entry, 'imageAlt', ''),
                'links' => array_values(array_filter(array_map(function ($item) {
                    if (!is_string($item)) {
                        return null;
                    }

                    $segments = preg_split('/\s*:\s*/', $item, 2);
                    if (count($segments) !== 2) {
                        return null;
                    }

                    return [
                        'label' => trim($segments[0]),
                        'url' => trim($segments[1]),
                    ];
                }, preg_split('/\r\n|\n|\r/', (string) data_get($entry, 'links', ''))))),
            ];
        })
        ->values()
        ->all();

    $multimedia = Entry::query()
        ->where('collection', 'multimedia')
        ->whereStatus('published')
        ->get()
        ->sortByDesc(function ($entry) {
            $date = data_get($entry, 'date');

            return $date instanceof \Carbon\CarbonInterface ? $date->timestamp : strtotime((string) $date);
        })
        ->map(function ($entry) {
            return [
                'title' => (string) data_get($entry, 'title'),
                'date' => data_get($entry, 'date') instanceof \Carbon\CarbonInterface
                    ? $entry->date->format('Y-m-d')
                    : (string) data_get($entry, 'date'),
                'platform' => (string) data_get($entry, 'platform', 'Multimedia'),
                'featured' => (bool) data_get($entry, 'featured', false),
                'presenterLabel' => (string) data_get($entry, 'presenterLabel', 'Host:'),
                'presenter' => (string) data_get($entry, 'presenter', ''),
                'editorLabel' => (string) data_get($entry, 'editorLabel', 'Editor:'),
                'editor' => (string) data_get($entry, 'editor', ''),
                'technicalDirectorLabel' => (string) data_get($entry, 'technicalDirectorLabel', 'Technical Director/s:'),
                'technicalDirector' => (string) data_get($entry, 'technicalDirector', ''),
                'videographerLabel' => (string) data_get($entry, 'videographerLabel', 'Videographer/s:'),
                'videographer' => (string) data_get($entry, 'videographer', ''),
                'embedUrl' => (string) data_get($entry, 'embedUrl', ''),
                'sourceUrl' => (string) data_get($entry, 'sourceUrl', ''),
                'aspectRatio' => (string) data_get($entry, 'aspectRatio', 'portrait'),
                'caption' => (string) data_get($entry, 'summary', ''),
                'slug' => (string) data_get($entry, 'slug'),
            ];
        })
        ->values()
        ->all();
@endphp
<script>
    window.CLSU_ARTICLES = @json($articles, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    window.CLSU_ISSUES = @json($issues, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    window.CLSU_MULTIMEDIA = @json($multimedia, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
</script>
