
<?php

$users = array(
        0 => array(
                'id' => 10, 
                'name' => 'Lion Messi',
                'email' => array(
                        'gmail' => '10@gmail.com',
                        'yahoo' => '10@yahoo.com',
                ),
        ),                
        1=> array(
                'id' => 7,
                'name' => ' cristiano Ronaldo ',
                'email' => array(
                        'gmail' => '7@gmail.com',
                        'yahoo' => '7@yahoo.com',
                ),
        ),
        2=> array(
                'id' => 4, 
                'name' => 'Ramos',
                'email' => array(
                        'gmail' => '4@gmail.com',
                        'yahoo' => '4@yahoo.com',
                ),
        ),
        3=> array(
                'id' => 13, 
                'name' => 'Muller',
                'email' => array(
                        'gmail' => '13@gmail.com',
                        'yahoo' => '13@yahoo.com',
                ),
        ),
        4=> array(
                'id' => 11, 
                'name' => 'Neymar',
                'email' => array(
                        'gmail' => '11@gmail.com',
                        'yahoo' => '11@yahoo.com',
                ),
        ),
        

); 
$h=1;  
$k=1; 
?> 

<!DOCTYPE html>

<html>
<head>
        <title>
                
        </title>
</head>
<body>
    <form>
        <i><b>NHAP VAO ID MA BAN CAN TIM:</b></i> <br>

        <input type="txt" name="id">
        <input type="submit" value="Search">
    </form>
    <br>

        <table  width='600' border="10"  >

                <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th> Gmail</th>
                        <th>Yahoo</th>


                </tr>
                  <?php
                 for ($i=0; $i <5; $i++) { 
                     
                 
                                ?>
                                <tr>
                                        <td>
                                              <?php
                                              echo $h++;

                                              ?>
                                        </td>
                                        <td>
                                                <?php
                                                echo $users[$i]['name'];

                                                ?>
                                        </td>
                                           <td>
                                                <?php
                                                echo $users[$i]['id'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['gmail'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['yahoo'];
                                                
                                                ?>
                                        </td>
                                </tr>
        <?php
        }
        ?>


        </table>
        <?php
        $temp =0;
        $a=0;
        for ($i=0; $i < 5; $i++) {
                if ($users[$i]['id']==15)

               {
                $temp ++;
                $a=$i;

               }
           }
      
               if ($temp==1) 


                {
                        echo " CO TON TAI ID: ";
                        echo $users[$a]['name'];

                }
                else
                {
                        echo "KHONG TON TAI ID 15 : ";
                }
                ?>


         
        <?php
      
            $none =0;
            for ($i=0; $i <5 ; $i++) {
              for ($j=$i+1; $j <5 ; $j++) {

                       if ($users[$i]['id'] > $users[$j]['id']) {
                        $none=$users[$i];
                        $users[$i]=$users[$j];
                        $users[$j]=$none;
                            
                        }
                  }

            } 
        ?>

                <table  width='600' border="10" >

                <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th> Gmail</th>
                        <th>Yahoo</th>


                </tr>
                  <?php
                 for ($i=0; $i <5 ; $i++) { 
                                       
                                ?>
                                <tr>
                                        <td>
                                              <?php
                                              echo $k++;

                                              ?>
                                        </td>
                                        <td>
                                                <?php
   
                                             echo $users[$i]['name'];

                                                ?>
                                        </td>
                                           <td>
                                                <?php
                                                echo $users[$i]['id'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['gmail'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['yahoo'];
                                                
                                                ?>
                                        </td>
                                </tr>
                        <?php
                        }
                        ?>


        </table>
                        
</body>
</html>