<html>
    <head>
        <meta charset="utf-8">
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <link rel="stylesheet" type="text/css" href="contents.css">
        <script src="ckeditor.js"></script>
        <script src="config.js"></script>
        <script src="styles.js"></script>
    </head>
    <body>
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1');
            </script>
        </form>
    </body>
</html>