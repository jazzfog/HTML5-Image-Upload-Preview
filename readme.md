# HTML5 image upload with preview and progress bar

I needed simple image uploader with preview and progress bar.
Eventually I came up with this simple example so maybe it will be useful for somebody else.

I added maximum comments and didn't add any extra functionality trying to keep the code easy to read and understand.

**This example features**

- File multiselect
- Drag & drop files right on the page (dropzone)
- Images preview thumbnails (resized on client size with JavaScript/canvas)
- Upload as you select (you can change it though)
- Async upload in background
- Progress bar for every file
- Preview generator spinner on CSS (animated lags when large images are being resized)

Just to make it clear: It does not use Flash.

For demo purposes it allows to upload only images but you can easily remove this limitation.

Please, note: This is just case study, it does not feature fallback for older browsers or comprehensive error handling.
