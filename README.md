# THEME INSTALLATION INSTRUCTIONS

Thanks for downloading the Impressive Theme. It’s a theme I think you’ll enjoy but in order to get it to look just right, there are a few things you’ll want to do first.

#1 - Import the content.xml file.

This file includes posts and pages that are used in the demo and they have template styles attached to them. If you have not imported into WordPress before you will need to install the WordPress importer. Once it’s installed, click 'activate and import' and then you’ll be able to upload the content.xml file.

You’ll be asked to assign authors. You can allow the user (me) to be added to your system or you can assign posts to a current user in your system.  You will have the option to download and import media files, sometimes this works and sometimes this does not.  It depends on your server's configuration.  The content.xml file links to publicly accessible images but they don't always transfer.  These images are the featured images for the demo blog posts.  You can manually add the images to the posts (they are in the theme's assets folder) or leave it for when you add your own blog posts and images in.

## A note about images

We've done a couple of tests with the templates built for Impressive.  One of the things we noticed is that depending on your server setup, sometimes a few of the images don't connect the way they are supposed to.  You might find that a few images for the header areas are missing or some images on pages aren't displaying properly.  Despite our best efforts to resolve this, we cannot account for every possible server configuration.  So, this is where a little manual setup is required.  If you notice an image missing, take a look at the image url.  Typically the end of the text string will include the name of the image (like 'header_07.jpg').  All these images are included in the theme's assets folder.  To get it working properly, click upload image, find the Impressive theme folder on your hard drive, open up the assets folder and find the image with the same name.  Once you've confirmed, the image will upload and on refresh you'll see it working as expected.  Again, we apologize for the fact that this step is potentially even necessary but due to some technical issues we cannot control, it is sometimes required.  It will not affect the overall functionality of the theme nor will it render the theme broken.  Typically, you'll want to add in your own images anyway.  

#2 - Go to Settings > Reading

Once you’re there, you’re going to want to switch your front page display to a static page. If you’ve loaded in the demo content, set the home page to 'Home'. Set the blog page to 'Blog'. It works as a link to the page where your feed of posts will be displayed. Save your settings and return to your site’s home page. It should look a little different. 

#3 - Go to Global Options > Import/Export

Click the button called Load Child Theme Config. It will ask you to confirm and then reload the page.
This file includes all the information related to your theme. Once activated your site should look exactly like the demo.

## Important Notes About Impressive Theme

Impressive comes with a number of customizations built right into the design. These are added throughout the design in various ways.  Sometimes, within textboxes or media boxes you'll see a <span class='some-class-name'>content</span> and sometimes you'll see it entered in the custom classes input area in a given section's options.  What that means is that there are options for you as the user to add specific styles to different elements of the site.  To see a full list of custom classes available for the theme, please check out the style.less file.  

Thanks again for downloading Impressive Theme and enjoy your new site!