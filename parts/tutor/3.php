<container id="pack">
<h3 class="mt-5 mb-3">Go Packages</h3>
<p>Variable declaration in go is pretty much differant than other languages.<br>
    Go provides mechanism `Package` for code reuse. Or in other words this is similar to import/export classes in NodeJS.Packages only really make sense in the context of a separate program which uses them. Without this separate program we have no way of using the package.
    </p><br><strong>Examples</strong><br>
    
    <hr>
    <div>This is declaring variable simply by not assigning any value.
        <pre>
            <code>package printer

import "fmt"

var A := "This is a string" /* The variable `A` declared in package scope */

func PrintFunction() {
        var b := "This is also string" /* The variable `b` declared in function scope */
        internalfunction(b)
}

func internalfunction(b string) {
        fmt.Println(b)
}</code>
        </pre>

        <blockquote class="blockquote m-lg-5 py-3 pl-4 px-lg-5">
            <p class="mb-2">
                <code>important</code> <br><strong>If</strong> The variable name declared in <br>`package scope`
                starts with <strong>Uppercase</strong> it would be exported(Public) automatically.<br><br>
            </p>
        </blockquote>

        <p>Variable `A` & function `PrintFunction` in above example are exposed publically.<br>
            Where as variable `b` is only available in "parent function" which is called as function scope.<br>
            function `internalfunction` is only available for members of parent package.
        </p>
        
    </div>

        <!-- Last Notes -->
        <br><strong>Notes to remember</strong><br>
        <ul>
            <li>You can not use <strong style="color: gray;">:=</strong> at package level declaration.</li>
        </ul>
<container>