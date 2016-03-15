<?php
function test($req, $opt = null, ...$params) {
    // $params ist ein Array welches die übrigen Parameter enthält.
    printf('$req: %d; $opt: %d; Anzahl Parameter: %d'."\n",
        $req, $opt, count($params));
}

test(1);
test(1, 2);
test(1, 2, 3);
test(1, 2, 3, 4);
test(1, 2, 3, 4, 5);
?>