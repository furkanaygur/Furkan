#include <stdio.h>
#include <conio.h>
#include <locale.h>
main()
{
	int sayi1,sayi2;
	setlocale (LC_ALL, "Turkish");
	printf("birinci say�y� giriniz: ");
	scanf("%d",&sayi1);
	printf("�kinci say�y� giriniz: ");
	scanf("%d",&sayi2);
	if(sayi1>sayi2)
	{
		printf("\nBirinci girilen say� ikinci girilen say�dan b�y�kt�r.");
	}
	else
	{
		printf("\n�kinci girilen say� birinci girilen say�dan b�y�kt�r.");
	}
	getch();
}
