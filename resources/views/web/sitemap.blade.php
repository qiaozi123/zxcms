<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($data as $item)
    <sitemap>
        <loc>{{url('page/'.$item->id)}}.html</loc>
        <lastmod>{{ $item->created_at}}</lastmod>
    </sitemap>
        @endforeach
</sitemapindex>
