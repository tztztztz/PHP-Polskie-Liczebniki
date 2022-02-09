# PHP-Polskie-Liczebniki

Klasa do zwracania poprawnego liczebnika w zależności od numeru.

Np. dla liczby 1, będzie "czajnik" (1 czajnik), dla liczby 3 "czajniki" (3 czajniki), dla 28 "czajników" (28 czajników), dla 102 "czajniki" (102 czajniki), dla 1001 "czajników" (1001 czajników), etc.

# Używanie
```
$liczebnik = new \inopx\text\Liczebnik('czajnik', 'czajniki', 'czajników');
echo '1 '.$liczebnik->getForNumber(1).'<br />';
echo '2 '.$liczebnik->getForNumber(2).'<br />';
echo '18 '.$liczebnik->getForNumber(18).'<br />';
echo '25 '.$liczebnik->getForNumber(25).'<br />';
echo '102 '.$liczebnik->getForNumber(102).'<br />';
echo '105 '.$liczebnik->getForNumber(105).'<br />';
echo '1012 '.$liczebnik->getForNumber(1012).'<br />';
```
