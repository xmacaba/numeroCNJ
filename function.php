function numeroCNJ($numero = '') # formato -> 0000000-00.0000.0.00.0000
    {
        $num_array = str_split($numero);
        $numero = array_slice($num_array, 0, 7);
        $digito = array_slice($num_array, 8, 2);
        $ano = array_slice($num_array, 11, 4);
        $orgao = array_slice($num_array, 16, 1);
        $tribunal = array_slice($num_array, 18, 2);
        $forum = array_slice($num_array, 21, 4);
        $duplozero = array(0,0);
        $pre97 = array_merge($numero, $ano, $orgao, $tribunal, $forum, $duplozero);
        $num = implode('', $pre97);
        $dv_in = implode('', $digito);
        $dv_calc = 98 - bcmod($num, 97);
        if ($dv_in == $dv_calc)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
