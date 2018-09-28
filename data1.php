<?php
require ('cau5.php');
?>
 <?php
            if (empty($_GET['id']))echo "Ban can nhap vao ID nguoi dung :";
            else{
                    $so =$_GET['id'];
                    $temp =0;
                    $x=0;
                    for ($i=0; $i < 5; $i++) 
                        if ($users[$i]['id']==$so)

                   {
                    $temp ++;
                    $x=$i;

                   }
               
          
                   if ($temp==1) 


                    {
                            echo "Ten : ";
                            echo $users[$x]['name'];


                    }
                    else
                    {
                            echo "Khong ton tai Users nay  ";

        
                    }
            
            }
                
        ?>