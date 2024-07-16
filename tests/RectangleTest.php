<?php

it('can calculate wide', function () {
    $rectangle = \Rizkyanfasafm\SimpleFormula\Type\Rectangle::side(5)->wide();

    expect($rectangle)->toBe(25);
});

it('can calculate around', function () {
    $rectangle = \Rizkyanfasafm\SimpleFormula\Type\Rectangle::side(5)->around();

    expect($rectangle)->toBe(20);
});
