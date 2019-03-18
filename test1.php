<?php
class La{
    function toInt($numeral){
        $integers = 0;
        $letters = str_split($numeral);
        foreach ($letters as $key => $char) {
            $num = $this->numeralToInteger($char);
            if ($num) {
                $integers += $num;
            } else {
                die("Numeral is not valid.");
            }
        }
        return $integers;

    }
    public function toNumeral($number = null)
    {
        if (is_int($number) && $number > 0) {
            $current_value = 0;
            $long_numeral = [];
            while ($current_value < $number) {
                foreach (str_split($number) as $key => $value) {
                    $current_value += $value if ($value < $number)
                    $long_numeral[$key] = if ($current_value <= $number);
                }
            }
        }else{
            die("Not valid interger");
        }
        calculate_remaining_numeral($long_numeral, $number);
    }
    private function calculate_remaining_numeral($long_numeral, $number){
        $ln = implode('', $long_numeral);
    }
//     unless numeral_to_integer(ln) == number
//       sample_set_for(number).each do |key, value|
//         long_numeral << key if (numeral_to_integer(ln) + value == number)
//       end
//     end
//     long_numeral.sort!
//     long_numeral.join
//   end
    private numeralToInteger($letter){
        switch ($letter) {
            case 'a':
                return 1;
                break;
            case 'b':
                return 2;
                break;
            case 'c':
                return 4;
                break;
            case 'd':
                return 8;
                break;
            case 'e':
                return 16;
                break;
            case 'f':
                return 32;
                break;
            
            default:
                return 0;
                break;
        }
    }
    private function sort($string){
        $stringParts = str_split($string);
        sort($stringParts);
        return implode('', $stringParts); 
    }
}
