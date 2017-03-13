<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="node_modules/codemirror/addon/fold/foldgutter.css">


</head>
<body>

<textarea class='CodeMirror'  name="" id="" cols="30" rows="10"></textarea>



<script src="node_modules/codemirror/lib/codemirror.js"></script>
<script src="node_modules/codemirror/addon/fold/foldcode.js"></script>
<script src="node_modules/codemirror/addon/fold/foldgutter.js"></script>
<script src="node_modules/codemirror/addon/fold/brace-fold.js"></script>
<script src="node_modules/codemirror/addon/fold/xml-fold.js"></script>
<script src="node_modules/codemirror/addon/fold/indent-fold.js"></script>
<script src="node_modules/codemirror/addon/fold/markdown-fold.js"></script>
<script src="node_modules/codemirror/addon/fold/comment-fold.js"></script>
<script src="node_modules/codemirror/addon/edit/matchbrackets.js"></script>
<script src="node_modules/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="node_modules/codemirror/mode/xml/xml.js"></script>
<script src="node_modules/codemirror/mode/javascript/javascript.js"></script>
<script src="node_modules/codemirror/mode/css/css.js"></script>
<script src="node_modules/codemirror/mode/clike/clike.js"></script>
<script src="node_modules/codemirror/mode/php/php.js"></script>

<script>
    var textArea = document.querySelector('.CodeMirror');

    var myCustomCodeMirror = CodeMirror.fromTextArea(textArea,{
        mode:'php',
        lineNumbers: true,
        lineWrapping: true,
        extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
        foldGutter: true,
        gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"]
    })
</script>

</body>
</html>