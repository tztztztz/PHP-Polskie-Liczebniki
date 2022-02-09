<?php
namespace inopx\text;

/**
 * Do odmiany słów wg. liczb.
 *
 * @author tom
 */
class Liczebnik {
  
  /**
   * Jeden element - np. "czajnik", "atom"
   * @var string
   */
  public $nr1;

  /**
   * Para elementów (od 2 do 4) - np. "czajniki", "atomy"
   * @var string
   */
  public $nr2;

  /**
   * "Liczba" - np. 5 czajników, 9 czajników, 151 czajników, etc.
   * @var <type>
   */
  public $nr5;

  public function __construct($nr1, $nr2, $nr5) {
    $this->nr1 = $nr1;
    $this->nr2 = $nr2;
    $this->nr5 = $nr5;
  }

  /**
   * Zwraca daną formę liczebnika dla danej liczby.
   *
   * @param int $nr       - liczba CAŁKOWITA
   * @return string       - zwraca prawidłową formę liczebnika dla danej liczby
   */
  public function getForNumber($nr, $above100 = false) {
    
    // Liczba bezwzględna - gdyby czasem $nr < 0
    $nr = abs($nr);

    ////////////////////
    // Analiza prosta dla liczb mniejszych niż 21
    if ($nr == 0) { 
      return $this->nr5;
    }

    if ($nr == 1) {

      if ($above100) {
        return $this->nr5;
      }
      
      return $this->nr1;
    }

    if ($nr > 1 && $nr <= 4) { 
      return $this->nr2;
    }
    
    if ($nr > 4 && $nr <= 21) { 
      return $this->nr5;
    }

    ////////////////////
    // Analiza dla większych liczb
    
    ////////////////////
    // od 22 do 99
    if ($nr > 21 && $nr <= 99) {
      
      $ten = floor($nr/10);
      $rest = $nr-$ten*10;

      // 30 czajników, 31 czajników
      if ($rest <= 1) { 
        return $this->nr5;
      }

      return $this->getForNumber($rest);
    }
    
    ////////////////////
    // Liczby powyżej 99
    
    // Dwie ostatnie cyfry z końca ciągu
    $nrTxt = (string) $nr;
    $nr = (int) substr($nrTxt, -2);
    return $this->getForNumber($nr, true);

  }
  
}
