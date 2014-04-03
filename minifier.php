<!DOCTYPE html>
<html>
    <head>
        <title>CSS Minifier</title>
    </head>
    
    <body>
        <!--Design working, but still under development; style then follows-->
        <form name="form" method="POST">
            <textarea id="input" name="input" rows="15" wrap="off" spellcheck="false" style="margin: 0px; height: 310px; width: 555px;">
            </textarea>

            <input type="submit" value="Minify!"/>
            
        </form>
        
        <code>
            <?php  
                $code = $_POST['input'];
                for($i = 0; $i < strlen($code); $i++)
                {
                    if($code[$i] == " " || $code[$i] == "\n" || $code[$i] == "\t" || $code[$i] == "\r")
                    {
                        $code[$i] = "";
                        
                    }
                    elseif($code[$i] == "\0"){}
    
                    
                    echo "$code[$i]";
                }
            ?>
        </code>  
    </body>
</head>