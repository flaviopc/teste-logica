<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $data = [];
        $array_count = array_count_values(self::products);
        foreach ($array_count as $key => $value) {
            $exp = explode("-", $key);
            $color = $exp[0];
            $size = $exp[1];
            $data[$color][$size] = $value;
        }

        return $data;
    }
}
