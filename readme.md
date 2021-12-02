# HTML5 image multiselect-upload with preview with progress bar and paste from clipboard

I needed a simple image uploader with preview and a progress bar.
Eventually I came up with this simple example so maybe it will be useful for someone else.

I've added maximum comments and didn't add any extra functionality trying to keep the code easy to read and understand.

**This example features**

- File multiselect
- Drag & drop files right on the page (dropzone)
- Images preview thumbnails (resized on the client side with JavaScript/canvas)
- Paste images from clipboard
- Upload as you select (you can change it though)
- Async upload in background
- Progress bar for each file
- Preview generator spinner on CSS (animation lags when large images are being resized)

**Please, note**

- This is just a *case study*, it does not feature fallback for older browsers or comprehensive error handling.
- For demo purposes it allows to upload only images but you can easily remove this limitation.
- Example uses PHP on the backend but, obviously, you can use anything: it works as regular post-form with a file field.
- Just to make it clear: It does not use Flash.

Demo video:

[![Html5 upload image with preview and progress bar](resources/video.jpg?raw=true "Html5 upload image with preview and progress bar")](https://www.youtube.com/watch?v=ny5FEKyy50E)
