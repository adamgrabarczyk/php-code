<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>predefinition $_FIlES    </title>
    </head>
    <body>
        
        
        <form action="FILES.php" method="post" enctype="multipart/form-data">
            
            <div>
                <input type="hidden" name="MAX_FILE_SIZE" value="30720">
                
                <input type="file" name="plik">
                
                <input type="submit" value="dodaj plik">
                
                
                
            </div>
            
            
        </form>
        
        
        
        <?php
        
        if(isset($_FILES['plik']))
        {
            
            print_r($_FILES['plik']);
            
            move_uploaded_file($_FILES['plik']['tmp_name'],"images/".$_FILES['plik']['name']);
            
            switch ($_FILES['plik']['error'])
            {
                case 0;                      // gdy jest 0 to jest okey,to nie error
                    
                    
                    break;
                
                case 1;
                    echo 'za duzy plik';
                    break;
                
                case 2;
                    echo 'za duzy plik';
                    break;
                
                case 3;
                    echo 'plik niepelny';
                    break;
                
                case 4;
                    echo 'nie wybrales pliku';
                    break;
                
                default:
                    echo 'pozostale bledy';
                
            }
        }
        
        ?>
    </body>
</html>
