<?php

it('can calculate zakat', function () {
    $zakat = \Rizkyanfasafm\SimpleFormula\Type\Zakat::count(1000000)->calculate();

    expect($zakat)->toBe(25000);
});
