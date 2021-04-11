
<?php

$file = fopen("handling_file/Produit.csv","r");//**open file  */

while(($cvs = fgetcsv($file, ","))!== False){//**get data  */

    $data = $cvs['1'];
    
    print_r(" ".$data);

} 

//*********** */

function createFileCvs(){
  
           $dataarry = [
                ["name"=>"ali","age"=>59,"tel"=>11554452],
                ["name"=>"ahemed","age"=>68,"tel"=>669558854],
            ];  
        
        
       
        $myfile = fopen("handling_file/file.csv", "w"); //**create file cvs  with mode w "Open a file for write only" */
        
        
        foreach ($dataarry as $line)
        {
            fputcsv($myfile, $line); //**add arry in file csv */
        }
        
        


}

createFileCvs();

?>