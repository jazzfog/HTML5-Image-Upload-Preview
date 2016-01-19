# HTML5 image upload with preview and progress bar

I needed to create simple images upload form with preview and progress bar.

Eventually I come up with this simple example so maybe it will be usefull for somebody else.

I added maximum comments and didn't add any extra functionalyty trying to keep the code easy to read and understand.

This example features

- File multiselect
- Drag and frop files right on page (dropzone)
- Images preview thumbnails (resized on client size with JavaScript/canvas)
- Upload as you select (you can change it though)
- Async upload in background
- Progress bar for every file
- Preview generator spinner on CSS (animated lags when large images are being resized)

Please, note: This is just case study, it does not feature fallback for older browsers or comprehensive error handling.
