#include <stdio.h>
#include <conio.h>
#include <locale.h>
main()
{
	setlocale(LC_ALL,"Turkish");
	char harf;
	printf("Bir harf giriniz (a & b & c) \n");
	scanf("%c",&harf);
	switch(harf)
	{
		case 'a':
			printf("a harfine bastýnýz.");
		break;
		case 'b':
			printf("b harfine bastýnýz.");
		break;
		case 'c':
			printf("c harfine bastýnýz.");
		break;
	}
	
	
}	
