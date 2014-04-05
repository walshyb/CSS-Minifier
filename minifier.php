<!DOCTYPE html>
<html>
    <head>
        <title>CSS Minifier</title>
    </head>
    
    <body>
        <!--Design working, but still under development; style then follows-->
        <h1>CSS Minifier</h1>
            
            <table>
                <tr>
                    <td>
                        <h3 style="float: left">Input CSS</h3>
                        
                        <div id="in">
                            <form name="form" method="POST">
                            <textarea id="input" name="input" rows="15" wrap="off" spellcheck="false" style="margin: 0px; height: 265px; width: 370px;"></textarea><br>
                            <input type="submit" value="Minify!"/>
                            </form>
                        </div></td>
                    
                     <td>
                        <div id="out">
                            <h3 style="float: left">Minified Output</h3>
                            <textarea id="output" style="margin: 0px; height: 265px; width: 370px;"><?php  
                            $code = $_POST['input'];
                            for($i = 0; $i < strlen($code); $i++)
                            {
                                if($code[$i] == " " || $code[$i] == "\n" || $code[$i] == "\t" || $code[$i] == "\r")
                                {                                                   
                                }
                                else
                                {
                                    echo $code[$i];
                                }
                            }
                        ?></textarea> 
                        </div>
                    </td>
                </tr>
            </table> 
    </body>
</head>