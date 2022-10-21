<?php
$tabel_vigenere = 
	array(
		array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"),
		array("B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A"),
		array("C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B"),
		array("D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C"),
		array("E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D"),
		array("F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E"),
		array("G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F"),
		array("H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G"),
		array("I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H"),
		array("J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I"),
		array("K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J"),
		array("L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K"),
		array("M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L"),
		array("N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"),
		array("O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N"),
		array("P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O"),
		array("Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P"),
		array("R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q"),
		array("S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R"),
		array("T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S"),
		array("U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T"),
		array("V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U"),
		array("W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V"),
		array("X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W"),
		array("Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X"),
		array("Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y")
	);
	
function huruf_ke_angka($huruf)
{
    if($huruf=='A'||$huruf=='a')
	{
        return 0;
    }
    else if($huruf=='B'||$huruf=='b')
	{
        return 1;
    }
    else if($huruf=='C'||$huruf=='c')
	{
        return 2;
    }
    else if($huruf=='D'||$huruf=='d')
	{
        return 3;
    }
    else if($huruf=='E'||$huruf=='e')
	{
        return 4;
    }
    else if($huruf=='F'||$huruf=='f')
	{
        return 5;
    }
    else if($huruf=='G'||$huruf=='g')
	{
        return 6;
    }
    else if($huruf=='H'||$huruf=='h')
	{
        return 7;
    }
    else if($huruf=='I'||$huruf=='i')
	{
        return 8;
    }
    else if($huruf=='J'||$huruf=='j')
	{
        return 9;
    }
    else if($huruf=='K'||$huruf=='k')
	{
        return 10;
    }
    else if($huruf=='L'||$huruf=='l')
	{
        return 11;
    }
    else if($huruf=='M'||$huruf=='m')
	{
        return 12;
    }
    else if($huruf=='N'||$huruf=='n')
	{
        return 13;
    }
    else if($huruf=='O'||$huruf=='o')
	{
        return 14;
    }
    else if($huruf=='P'||$huruf=='p')
	{
        return 15;
    }
    else if($huruf=='Q'||$huruf=='q')
	{
        return 16;
    }
    else if($huruf=='R'||$huruf=='r')
	{
        return 17;
    }
    else if($huruf=='S'||$huruf=='s')
	{
        return 18;
    }
    else if($huruf=='T'||$huruf=='t')
	{
        return 19;
    }
    else if($huruf=='U'||$huruf=='u')
	{
        return 20;
    }
    else if($huruf=='V'||$huruf=='v')
	{
        return 21;
    }
    else if($huruf=='W'||$huruf=='w')
	{
        return 22;
    }
    else if($huruf=='X'||$huruf=='x')
	{
        return 23;
    }
    else if($huruf=='Y'||$huruf=='y')
	{
        return 24;
    }
    else if($huruf=='Z'||$huruf=='z')
	{
        return 25;
    }
}

function angka_ke_huruf($angka)
{
    if($angka==0)
	{
        return 'A';
    }
    else if($angka==1)
	{
        return 'B';
    }
    else if($angka==2)
	{
        return 'C';
    }
    else if($angka==3)
	{
        return 'D';
    }
    else if($angka==4)
	{
        return 'E';
    }
    else if($angka==5)
	{
        return 'F';
    }
    else if($angka==6)
	{
        return 'G';
    }
    else if($angka==7)
	{
        return 'H';
    }
    else if($angka==8)
	{
        return 'I';
    }
    else if($angka==9)
	{
        return 'J';
    }
    else if($angka==10)
	{
        return 'K';
    }
    else if($angka==11)
	{
        return 'L';
    }
    else if($angka==12)
	{
        return 'M';
    }
    else if($angka==13)
	{
        return 'N';
    }
    else if($angka==14)
	{
        return 'O';
    }
    else if($angka==15)
	{
        return 'P';
    }
    else if($angka==16)
	{
        return 'Q';
    }
    else if($angka==17)
	{
        return 'R';
    }
    else if($angka==18)
	{
        return 'S';
    }
    else if($angka==19)
	{
        return 'T';
    }
    else if($angka==20)
	{
        return 'U';
    }
    else if($angka==21)
	{
        return 'V';
    }
    else if($angka==22)
	{
        return 'W';
    }
    else if($angka==23)
	{
        return 'X';
    }
    else if($angka==24)
	{
        return 'Y';
    }
    else if($angka==25)
	{
        return 'Z';
    }
}
?>
 
