#Surfagility

Wordpress theme inspired by Medium.

This theme is "Mobile First" and uses Bootstrap 3.0.0.

###Features
* HTML5/CSS3
* Responsive design
* Custom post images
* Custom category images
* Custom tag images
* Custom logo
* Social links

This theme is being used at http://brentmcconnell.com if you'd like to see it in action. 

![Homepage](https://github.com/emcconne/surfagility/blob/master/screenshot.png?raw=true)

This is a basic Wordpress theme that focuses on blog posts and not on pages.  Pages are
accessible from a dropdown  menu but since I really didn't intend to use pages I didn't
put a lot of effort into them.

There are several plugins that can be used to give you full functionality, however the
theme should work fine without them.

Plugins for full functionality:

* The Subtitle = Can be used to add subtitle's to your post.
* WP User Avatar = This is used for the author's page.  This theme uses gravtar for small
author image but on the author's page if this plugin is available it will post it as the
main author image with the gravatar on top.

This theme also modifies a user's profile to include additional social sites.  These are
used on the author's page.

Featured Image is also enabled by this theme.  Any post that includes a featured image will
have it displayed on the post's page across the top similar to Medium.

Use the images/category directory if you'd like to have specific images for each category. 
Images must be .jpg and follow the convetion cat_id_#.jpg (ie. 2.jpg, 6.jpg) and must exist
in the category directory.

Use the images/tag directory for the same effect.  Images must be .jpg and follow the convention
tag_id_#.jpg (ie. 1.jpg) and mst exist in the tag directory.

There is some custom functionality linked to the category slug "featured" that puts the latest
"featured" post on the homepage.  It is similar to the Sticky functionality but better because
it links to a real category.  So if you have a set of popular posts you can place them in this 
"fetaured" section.

This theme uses Font Awesome by Dave Gandy at http://fortawesome.github.io.  Thanks!

The distributed default image was provided by Danny Fowler via Flickr.  Thanks!  To replace
this image simply replace the surfagiliy.jpg image with your customized version.  Careful
to maintain the same name.
