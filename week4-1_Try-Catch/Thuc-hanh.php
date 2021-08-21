<?php
class DivideByZeroException extends Exception {
    public function __toString() {
        return "Can't divide by zero"; 
    }
}
    function divide ($numBeRaTor, $DenoMinator) {
    if ( $DenoMinator == 0 ) {
        throw new DivideByZeroException();
    }
    return $numBeRaTor / $DenoMinator;
    }



try {
    $result = divide(100 , 5);
    echo $result . "<br/>";
    $result = divide(100 , 0 );
    echo $result;
} catch (DivideByZeroException $e){
    echo "Error" . $e->getMessage;
}
