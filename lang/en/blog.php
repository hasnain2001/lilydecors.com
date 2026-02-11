<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Latest Coupon & Shopping Tips Blog :year | :app_name',
        'description' => 'Explore our amazing blogs and offers. Find the best products and services in one place.',
        'keywords' => 'blogs, offers, products, services',
        'author' => 'John Doe',
    ],
    
    // Header section
    'header' => [
        'title' => 'Our Blog',
        'subtitle' => 'Discover the latest insights, tips, and news on :app_name',
    ],
    
    // Statistics section
    'stats' => [
        'articles_published' => 'Articles Published',
        'expert_writers' => 'Expert Writers',
        'latest_updates' => 'Latest Updates',
    ],
    
    // Default values
    'defaults' => [
        'author_initials' => 'A',
        'author_name' => 'Admin',
    ],
    
    // Empty state
    'empty' => [
        'title' => 'No Blogs Found',
        'message' => 'Check back soon for new blog posts and updates.',
    ],
    
    // Categories filter (if you add category filtering)
    'categories' => [
        'all' => 'All Categories',
        'filter_by' => 'Filter by Category',
        'popular' => 'Popular Categories',
    ],
    
    // Sorting options (if you add sorting)
    'sort' => [
        'latest' => 'Latest',
        'popular' => 'Most Popular',
        'trending' => 'Trending',
        'oldest' => 'Oldest',
        'title_az' => 'Title (A-Z)',
        'title_za' => 'Title (Z-A)',
    ],
    
    // Search functionality (if you add search)
    'search' => [
        'placeholder' => 'Search blog posts...',
        'no_results' => 'No posts found for ":query"',
        'suggestions' => 'Try different keywords or browse categories',
    ],
    
    // Featured posts section (if you add it)
    'featured' => [
        'title' => 'Featured Posts',
        'view_all' => 'View All Featured',
    ],
    
    // Newsletter signup (if you add it to blog page)
    'newsletter' => [
        'title' => 'Subscribe to Our Blog',
        'description' => 'Get the latest posts delivered directly to your inbox',
        'subscribe' => 'Subscribe',
        'success' => 'Successfully subscribed! Check your email.',
    ],
    
    // Social sharing (if you add share buttons)
    'share' => [
        'title' => 'Share this post',
        'facebook' => 'Share on Facebook',
        'twitter' => 'Share on Twitter',
        'linkedin' => 'Share on LinkedIn',
        'pinterest' => 'Pin on Pinterest',
    ],
    
    // Reading time (if you add it)
    'reading_time' => [
        'min_read' => 'min read',
        'less_than_minute' => 'Less than a minute',
    ],
    
    // Tags (if you add tagging system)
    'tags' => [
        'title' => 'Popular Tags',
        'view_all_tags' => 'View All Tags',
        'no_tags' => 'No tags available',
    ],
    
    // Comments (if you add comment system)
    'comments' => [
        'title' => 'Comments',
        'no_comments' => 'No comments yet. Be the first to comment!',
        'leave_comment' => 'Leave a Comment',
        'post_comment' => 'Post Comment',
        'reply' => 'Reply',
    ],
    
    // Related posts (if you add related posts section)
    'related' => [
        'title' => 'You Might Also Like',
        'read_more' => 'Read More',
    ],
    
    // Pagination
    'pagination' => [
        'showing' => 'Showing :from to :to of :total posts',
        'previous' => 'Previous',
        'next' => 'Next',
        'page' => 'Page :current of :last',
    ],
    
    // Archive (if you add archive functionality)
    'archive' => [
        'title' => 'Blog Archive',
        'by_month' => 'Posts by Month',
        'by_year' => 'Posts by Year',
        'by_category' => 'Posts by Category',
    ],
    
    // Authors (if you add author pages)
    'authors' => [
        'title' => 'Our Authors',
        'view_profile' => 'View Profile',
        'posts_by' => 'Posts by :author',
        'bio' => 'About the Author',
    ],
];