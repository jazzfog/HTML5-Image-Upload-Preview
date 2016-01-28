# HTML5 image upload with preview, progress bar and paste from clipboard

I needed simple image uploader with preview and progress bar.
Eventually I came up with this simple example so maybe it will be useful for somebody else.

I added maximum comments and didn't add any extra functionality trying to keep the code easy to read and understand.

**This example features**

- File multiselect
- Drag & drop files right on the page (dropzone)
- Images preview thumbnails (resized on client size with JavaScript/canvas)
- Paste images from clipboard
- Upload as you select (you can change it though)
- Async upload in background
- Progress bar for every file
- Preview generator spinner on CSS (animated lags when large images are being resized)

**Please, note**

- This is just a *case study*, it does not feature fallback for older browsers or comprehensive error handling.
- For demo purposes it allows to upload only images but you can easily remove this limitation.
- Example uses PHP on backend but, obviously, you can use anything: it works as regular post-form with file field
- Just to make it clear: It does not use Flash.

Demo video:

[![Html5 upload image with preview and progress bar](resources/video.jpg?raw=true "Html5 upload image with preview and progress bar")](https://www.youtube.com/watch?v=ny5FEKyy50E)
