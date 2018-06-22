<?php
    $products = array(
                    array('Title'=>'Shoes', 'Description'=>'leather with rubber soles', 'Price'=>'$75.00', 'Qnty'=>'2', 'Image'=>'img1'),
                    array('Title'=>'socks', 'Description'=>'wool blend', 'Price'=>'$10.00', 'Qnty'=>'3', 'Image'=>'img2'),
                    array('Title'=>'backpack', 'Description'=>'for laptops', 'Price'=>'$50.00', 'Qnty'=>'4', 'Image'=>'img3'),
                    array('Title'=>'hat', 'Description'=>'strait up ball cap', 'Price'=>'$18.00', 'Qnty'=>'5', 'Image'=>'img4'),
                    array('Title'=>'jacket', 'Description'=>'leather sleek', 'Price'=>'$40.00', 'Qnty'=>'8', 'Image'=>'img5')                
                );
$products = array(
                    array('Title'=>$_POST["title"], 'Description'=>$_POST["desc"], 'Price'=>$_POST["price"], 'Qnty'=>$_POST['qnty'], 'Image'=>$_POST['img'])
                );
// foreach($products as $row){
//        foreach($row as $key=>$value){
//            ${$key}[] = $value;
//        }
//    }

//  array_multisort($Title, SORT_ASC, $Description, SORT_ASC, $Price, SORT_ASC, $Qnty, SORT_ASC, $Image, SORT_ASC, $products);

    function my_table($products){
        $myTable = '<table>';
        $myTable .='<tr>';
        //create header row
        foreach($products[0] as $key=>$value){
            $myTable.= '<th>' . htmlspecialchars($key) . '</th>';
        }
        $myTable .='</tr>';
        
        //insert the data rows
        foreach($products as $key=>$value){
            $myTable.= '<tr>';
            foreach($value as $key2=>$value2){
                $myTable.= '<td>' . htmlspecialchars($value2). '</td>';
            }
            $myTable.= '</tr>';
        }
        
        //close table
        $myTable .= '</table>';
        
        return $myTable;
    }

?>

<html>
<head>
    <title>Products</title>
    <h3>Dynamic PHP Grid Layout FROM an Array result set</h3>
   
    
    <?php
        
        echo my_table($products);
    ?>

    <br>
    To add items to the prodcuts table, fillout the the fields below and click sumbit.
    <br>
    <br>
    <form action="addRecord.php">
    <button>Click to Add record</button>
    </form>
    
    </head>
</html>