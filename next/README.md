Theme Next
=========

It's provided with dev server with watchers,
Webpack and browserSync

npm install
gulp watch

Configuration files in 'dev' folder.
- gulpfile.js
- settings.js
- package.json
- webpack.config.js


Grid, Form and Modal (Popup) based on Bootsrap 4
phone icon in mobile - FontAwesome.

Installation:
------------

Clone or Download project to "wp-content/theme" folder.
Select and active "next" theme. 

Optimization:
-------------
css preprocessed with postcss and minificated with gulp.
js minificated (uglified) and bundled with webpack

Images for retina display.

Images:
I would have added imagemin to gulp or TinyPNG plugin for  Wordpress. (not include in this configuration)
and use cdn (like S3 Amazon) for speed up loading images

I would have added 

- csslint 
- jslint 
- phplint
 
 linters to watchers with configurations to saving WordPress coding standards,
 during whole development process.

Integration to MailChimp.
-----------------------

install "MailChimp for WordPress" plugin.
provide API key.
choose list.

Disable "Double opt-in" in "Custom integration".
Ckeck list.

Notice: Confimation for email has been added to list comes only to console.


Thank you.




