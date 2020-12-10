# PHP [WunderPreview](https://wunderpreview.com) example

## How to use this example with WunderPreview
- Fork this repository
- Add the newly forked repo in your [WunderPreview Dashboard](https://app.wunderpreview.com)
- Update port (see below)
- Click the "preview" button in your repository list
- 🥳

## Configuring Port
The `php:7.4-apache` docker image has Apache included which serves the app on port `80`. Please configure WunderPreview in the repository settings to use port `80` isntead of `8000`.