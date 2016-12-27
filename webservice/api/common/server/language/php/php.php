<?

class phpClass
{

    private $_className;
    private $_classFileName;

    const _openTag = "<?";
    const _closeTag = "?>";
    const _openBlock = "{";
    const _closeBlock = "}";
    const _class = "class";
    const _function  = "function";
    const _const = "const";
    const _commentLine = "//";
    const _openComment = "/*";
    const _closeComment = "*/";
    const _public = "public";
    const _private = "private";
    const _protected = "protected";
    const _return = "return";
    const _this = "this";

    function __construct($class,$file)
    {
        $_className = $class;
        $_classFileName = $file;
    }

    public function SetContent()
    {
        echo $this::_openTag;
    }
}


?>