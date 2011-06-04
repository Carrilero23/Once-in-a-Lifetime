<?php 
$ChessBoard = array();
$CurrentPositionRow = 7;
$CurrentPositionCol = 7;
$Count = 0;
$TmpCurrentPositionRow = 0;
$TmpCurrentPositionCol = 0;

for ($row = 0; $row < 8; $row++)
    for($col=0; $col<=7; $col++)
            $ChessBoard[$row.','.$col] = 'O';

$ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
?>
<body>
<?php while(in_array('O', $ChessBoard)):?>
    <?php
    $TmpCurrentPositionCol = $CurrentPositionCol - 1;
    $TmpCurrentPositionRow = $CurrentPositionRow - 2;
    if((0 <= $TmpCurrentPositionCol) && ($TmpCurrentPositionCol < 8) && (0 < $TmpCurrentPositionRow) && ($TmpCurrentPositionRow < 8) && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] == 'O') && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] != 'K'))
    {
        $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'X';
        $CurrentPositionCol = $TmpCurrentPositionCol;
        $CurrentPositionRow = $TmpCurrentPositionRow;
        $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
    }
    else
    {
        $TmpCurrentPositionCol = $CurrentPositionCol + 1;
        $TmpCurrentPositionRow = $CurrentPositionRow - 2;
        if((0 <= $TmpCurrentPositionCol) && ($TmpCurrentPositionCol < 8) && (0 < $TmpCurrentPositionRow) && ($TmpCurrentPositionRow < 8) && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] == 'O') && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] != 'K'))
        {
            $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'X';
            $CurrentPositionCol = $TmpCurrentPositionCol;
            $CurrentPositionRow = $TmpCurrentPositionRow;
            $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
        }
        else
        {
            $TmpCurrentPositionCol = $CurrentPositionCol + 2;
            $TmpCurrentPositionRow = $CurrentPositionRow - 1;
            if((0 <= $TmpCurrentPositionCol) && ($TmpCurrentPositionCol < 8) && (0 < $TmpCurrentPositionRow) && ($TmpCurrentPositionRow < 8) && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] == 'O') && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] != 'K'))
            {
                $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'X';
                $CurrentPositionCol = $TmpCurrentPositionCol;
                $CurrentPositionRow = $TmpCurrentPositionRow;
                $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
            }
            else
            {
                $TmpCurrentPositionCol = $CurrentPositionCol + 2;
                $TmpCurrentPositionRow = $CurrentPositionRow + 1;
                if((0 <= $TmpCurrentPositionCol) && ($TmpCurrentPositionCol < 8) && (0 < $TmpCurrentPositionRow) && ($TmpCurrentPositionRow < 8) && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] == 'O') && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] != 'K'))
                {
                    $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'X';
                    $CurrentPositionCol = $TmpCurrentPositionCol;
                    $CurrentPositionRow = $TmpCurrentPositionRow;
                    $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
                }
                else
                {
                    $TmpCurrentPositionCol = $CurrentPositionCol + 1;
                    $TmpCurrentPositionRow = $CurrentPositionRow + 2;
                    if((0 <= $TmpCurrentPositionCol) && ($TmpCurrentPositionCol < 8) && (0 < $TmpCurrentPositionRow) && ($TmpCurrentPositionRow < 8) && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] == 'O') && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] != 'K'))
                    {
                        $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'X';
                        $CurrentPositionCol = $TmpCurrentPositionCol;
                        $CurrentPositionRow = $TmpCurrentPositionRow;
                        $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
                    }
                    else
                    {
                        $TmpCurrentPositionCol = $CurrentPositionCol - 1;
                        $TmpCurrentPositionRow = $CurrentPositionRow + 2;
                        if((0 <= $TmpCurrentPositionCol) && ($TmpCurrentPositionCol < 8) && (0 < $TmpCurrentPositionRow) && ($TmpCurrentPositionRow < 8) && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] == 'O') && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] != 'K'))
                        {
                            $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'X';
                            $CurrentPositionCol = $TmpCurrentPositionCol;
                            $CurrentPositionRow = $TmpCurrentPositionRow;
                            $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
                        }
                        else
                        {
                            $TmpCurrentPositionCol = $CurrentPositionCol - 2;
                            $TmpCurrentPositionRow = $CurrentPositionRow + 1;
                            if((0 <= $TmpCurrentPositionCol) && ($TmpCurrentPositionCol < 8) && (0 < $TmpCurrentPositionRow) && ($TmpCurrentPositionRow < 8) && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] == 'O') && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] != 'K'))
                            {
                                $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'X';
                                $CurrentPositionCol = $TmpCurrentPositionCol;
                                $CurrentPositionRow = $TmpCurrentPositionRow;
                                $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
                            }
                            else
                            {
                                $TmpCurrentPositionCol = $CurrentPositionCol - 2;
                                $TmpCurrentPositionRow = $CurrentPositionRow - 1;
                                if((0 <= $TmpCurrentPositionCol) && ($TmpCurrentPositionCol < 8) && (0 < $TmpCurrentPositionRow) && ($TmpCurrentPositionRow < 8) && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] == 'O') && ($ChessBoard[$TmpCurrentPositionRow.','.$TmpCurrentPositionCol] != 'K'))
                                {
                                    $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'X';
                                    $CurrentPositionCol = $TmpCurrentPositionCol;
                                    $CurrentPositionRow = $TmpCurrentPositionRow;
                                    $ChessBoard[$CurrentPositionRow.','.$CurrentPositionCol] = 'K';
                                }
                                else
                                {
                                        echo "Can't move without repeating"; break;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    $Count++;
    if($Count > 100)
        break;
    ?>
    <h1><?php echo('Move number '.$Count); ?></h1>
    <table border="1px;">
        <tr>
                <td><?php echo($ChessBoard['7,0']); ?></td>
                <td><?php echo($ChessBoard['7,1']); ?></td>
                <td><?php echo($ChessBoard['7,2']); ?></td>
                <td><?php echo($ChessBoard['7,3']); ?></td>
                <td><?php echo($ChessBoard['7,4']); ?></td>
                <td><?php echo($ChessBoard['7,5']); ?></td>
                <td><?php echo($ChessBoard['7,6']); ?></td>
                <td><?php echo($ChessBoard['7,7']); ?></td>
        </tr>
        <tr>
                <td><?php echo($ChessBoard['6,0']); ?></td>
                <td><?php echo($ChessBoard['6,1']); ?></td>
                <td><?php echo($ChessBoard['6,2']); ?></td>
                <td><?php echo($ChessBoard['6,3']); ?></td>
                <td><?php echo($ChessBoard['6,4']); ?></td>
                <td><?php echo($ChessBoard['6,5']); ?></td>
                <td><?php echo($ChessBoard['6,6']); ?></td>
                <td><?php echo($ChessBoard['6,7']); ?></td>
        </tr>
        <tr>
                <td><?php echo($ChessBoard['5,0']); ?></td>
                <td><?php echo($ChessBoard['5,1']); ?></td>
                <td><?php echo($ChessBoard['5,2']); ?></td>
                <td><?php echo($ChessBoard['5,3']); ?></td>
                <td><?php echo($ChessBoard['5,4']); ?></td>
                <td><?php echo($ChessBoard['5,5']); ?></td>
                <td><?php echo($ChessBoard['5,6']); ?></td>
                <td><?php echo($ChessBoard['5,7']); ?></td>
        </tr>
        <tr>
                <td><?php echo($ChessBoard['4,0']); ?></td>
                <td><?php echo($ChessBoard['4,1']); ?></td>
                <td><?php echo($ChessBoard['4,2']); ?></td>
                <td><?php echo($ChessBoard['4,3']); ?></td>
                <td><?php echo($ChessBoard['4,4']); ?></td>
                <td><?php echo($ChessBoard['4,5']); ?></td>
                <td><?php echo($ChessBoard['4,6']); ?></td>
                <td><?php echo($ChessBoard['4,7']); ?></td>
        </tr>
        <tr>
                <td><?php echo($ChessBoard['3,0']); ?></td>
                <td><?php echo($ChessBoard['3,1']); ?></td>
                <td><?php echo($ChessBoard['3,2']); ?></td>
                <td><?php echo($ChessBoard['3,3']); ?></td>
                <td><?php echo($ChessBoard['3,4']); ?></td>
                <td><?php echo($ChessBoard['3,5']); ?></td>
                <td><?php echo($ChessBoard['3,6']); ?></td>
                <td><?php echo($ChessBoard['3,7']); ?></td>
        </tr>
        <tr>
                <td><?php echo($ChessBoard['2,0']); ?></td>
                <td><?php echo($ChessBoard['2,1']); ?></td>
                <td><?php echo($ChessBoard['2,2']); ?></td>
                <td><?php echo($ChessBoard['2,3']); ?></td>
                <td><?php echo($ChessBoard['2,4']); ?></td>
                <td><?php echo($ChessBoard['2,5']); ?></td>
                <td><?php echo($ChessBoard['2,6']); ?></td>
                <td><?php echo($ChessBoard['2,7']); ?></td>
        </tr>
        <tr>
                <td><?php echo($ChessBoard['1,0']); ?></td>
                <td><?php echo($ChessBoard['1,1']); ?></td>
                <td><?php echo($ChessBoard['1,2']); ?></td>
                <td><?php echo($ChessBoard['1,3']); ?></td>
                <td><?php echo($ChessBoard['1,4']); ?></td>
                <td><?php echo($ChessBoard['1,5']); ?></td>
                <td><?php echo($ChessBoard['1,6']); ?></td>
                <td><?php echo($ChessBoard['1,7']); ?></td>
        </tr>
        <tr>
                <td><?php echo($ChessBoard['0,0']); ?></td>
                <td><?php echo($ChessBoard['0,1']); ?></td>
                <td><?php echo($ChessBoard['0,2']); ?></td>
                <td><?php echo($ChessBoard['0,3']); ?></td>
                <td><?php echo($ChessBoard['0,4']); ?></td>
                <td><?php echo($ChessBoard['0,5']); ?></td>
                <td><?php echo($ChessBoard['0,6']); ?></td>
                <td><?php echo($ChessBoard['0,7']); ?></td>
        </tr>
    </table>
<?php endwhile;?>
</body>