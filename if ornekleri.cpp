#include <stdio.h>
#include <conio.h>
#include <locale.h>
main()
{
	int sayi1,sayi2;
	setlocale (LC_ALL, "Turkish");
	printf("birinci sayýyý giriniz: ");
	scanf("%d",&sayi1);
	printf("Ýkinci sayýyý giriniz: ");
	scanf("%d",&sayi2);
	if(sayi1>sayi2)
	{
		printf("\nBirinci girilen sayý ikinci girilen sayýdan büyüktür.");
	}
	else
	{
		printf("\nÝkinci girilen sayý birinci girilen sayýdan büyüktür.");
	}
	getch();
}
