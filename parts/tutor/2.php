<h3 class="mt-5 mb-3">Variable Declaration</h3>
<p>Variable declaration in go is pretty much differant than other languages.<br>
    <!-- <a href="https://anshumanprofile.herokuapp.com/" target="_blank">https://highlightjs.org/</a>.  -->
    We have to declare variable with it's type as well the syntax is very simplified and readable than other langusges.
    <br><strong>Examples</strong><br>
    
    <hr>
    <div>This is declaring variable simply by not assigning any value.
        <pre>
            <code>var a int      /* Common integer */
var b int8     /* 8 bit integer - value can be from -128 to 127 */
var c int16    /* 16 bit integer - value can be from -32768 to 32767 */
var d int32    /* 32 bit integer - value can be from -two billion to two billion */
var e int64    /* 64 bit integer - value can be from -one trillion to one trillion */

var f uint8     /* 8 bit unsigned integer - value can be from 0 to 255 */
var g uint16    /* 16 bit unsigned integer - value can be from 0 to 65535 */
var h uint32    /* 32 bit unsigned integer - value can be from  0 to four billion */
var i uint64    /* 64 bit unsigned integer - value can be from 0 to two trillion */</code>
        </pre>
    </div>
    <blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
        <p class="mb-2">
            <code>important</code> signed integers can start from negetive value
            <code>important</code> unsigned integers can't be less than 0
        </p>
    </blockquote>

    <div>This is declaring variable <code>a</code> as integer and assigning value to it both in one line.
        <pre>
            <code>var a int = 10
var a, b int = 10, 20 /* You can declare multiple variables at once */
var e int /* value of `e` would be 0 if not assigned */</code>
        </pre>
    </div>
    <blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
        <p class="mb-2">
            Go will infer values on it's own if we use <code>:=</code> syntax
        </p>
    </blockquote>
    <br>
    <pre>
            <code>/* Go automatically declares TYPE when used with `:=` syntax.  */
var a  := 10 /* `a` would be automatically declared type as int here  */</code>
        </pre>
