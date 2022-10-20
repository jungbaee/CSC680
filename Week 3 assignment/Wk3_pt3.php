<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
    <title>Wk3_pt3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>    

    <div class="container">

        <table style="width:100%">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
            </tr>
            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
            </tr>
        </table>

        <?php
           $str_input = '<table style="width:100%">
           <tr>
             <th>Firstname</th>
             <th>Lastname</th>
             <th>Age</th>
           </tr>
           <tr>
             <td>Jill</td>
             <td>Smith</td>
             <td>50</td>
           </tr>
           <tr>
             <td>Eve</td>
             <td>Jackson</td>
             <td>94</td>
           </tr>
         </table>';

        function htmlToArray($s){
            $arr =[];
            $DOM = new DOMDocument();
            $DOM->loadHTML($s);
            $items = $DOM->getElementsByTagName('td');

            foreach($items as $item) {
                //echo $item->nodeValue, PHP_EOL;
                array_push($arr, $item->nodeValue);
            }
            //print_r($arr);
            echo "{".implode(', ', $arr)."}";
        };
        echo "</br>";
        htmlToArray($str_input);



        ?>
    </div>
</body>
</html>


