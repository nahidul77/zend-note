<?php

function number_line_jumps(int $x1, int $v1, int $x2, int $v2): string
{

    if ($v1 <= $v2)
        return "NO";

    if (($x2 - $x1) % ($v1 - $v2) === 0)
        return "YES";
}


echo number_line_jumps(0, 2, 5, 3);
