
    var forrstProfile = {
    "id": 24606,
    "username": "jimmyliu",
    "name": "Jimmy Liu",
    "url": "http:\/\/forrst.com\/people\/jimmyliu",
    "posts": "4",
    "comments": "18",
    "likes": "11",
    "followers": "10",
    "following": "2",
    "typecast_posts": 4,
    "typecast_comments": 18,
    "typecast_likes": 11,
    "typecast_followers": 10,
    "typecast_following": 2,
    "photos": {
    "xl_url": "https:\/\/secure.gravatar.com\/avatar\/3151a9294608c3143551aa265f00bf71.jpg?s=200&d=https:\/\/forrst.com\/assets\/images\/default_200.jpg",
    "large_url": "https:\/\/secure.gravatar.com\/avatar\/3151a9294608c3143551aa265f00bf71.jpg?s=150&d=https:\/\/forrst.com\/assets\/images\/default_150.jpg",
    "medium_url": "https:\/\/secure.gravatar.com\/avatar\/3151a9294608c3143551aa265f00bf71.jpg?s=75&d=https:\/\/forrst.com\/assets\/images\/default_75.jpg",
    "small_url": "https:\/\/secure.gravatar.com\/avatar\/3151a9294608c3143551aa265f00bf71.jpg?s=45&d=https:\/\/forrst.com\/assets\/images\/default_45.jpg",
    "thumb_url": "https:\/\/secure.gravatar.com\/avatar\/3151a9294608c3143551aa265f00bf71.jpg?s=25&d=https:\/\/forrst.com\/assets\/images\/default_25.jpg"
},
    "bio": "<p>A graphic and web designer based in Cupertino, California. Follow me on Twitter <a href=\"http:\/\/twitter.com\/jimmyliu\"><\/a><a href=\"\/people\/jimmyliu\">@jimmyliu<\/a><\/p>\n",
    "is_a": "developer & designer",
    "homepage_url": "http:\/\/jliu.me",
    "twitter": "jimmyliu",
    "in_directory": false,
    "tag_string": "photoshop,html,css,fullstack,php,javascript,responsive design"
};
    var template = $('#forrst-profile-template').html();
    var compile = Handlebars.compile(template);
    var result = compile(forrstProfile);

    $('#id').html(result);
