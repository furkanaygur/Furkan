#include <stdio.h>
#include <conio.h>
#include <locale.h>
main()
{
	setlocale(LC_ALL,"Turkish");
	int gun=0;
	printf("Sayý giriniz (1 ile 7 arasý) \n");
	scanf("%d",&gun);
	switch(gun)
	{
		case 1:
			printf("Pazartesi");
		break;
		case 2:
			printf("Sali");
		break;
		case 3:
			printf("Carsamba");
		break;
		case 4:
			printf("Persembe");
		break;
		case 5:
			printf("Cuma");
		break;
		case 6:
			printf("Cumartesi");
		break;
		case 7:
			printf("Pazar");
		break;
		
	}
	
	
}	
